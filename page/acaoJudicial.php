<script>
    function total($x){
        var x='Total de processos encontrados ('+$x+')';
        document.getElementById('total').innerHTML=x;
    }
    function excluir($id){
       var y=confirm('Confirma a excusão?');
       var id=$id;
       if(y){
         location.href='index.php?page=delete2&id='+id;
       }
    }
</script>
<style>
    .formulario{
        margin: 50px auto;
        width: 90%;
    }
    .botao{
        margin: 10px;
        float: right;
    }
    body{
        background-color: silver;
    }
    table{
         width: 100%;
    }
    table th{
        background-color: green;
        color: white;
    }
    table td{
        background-color: white;
    }
.add:hover {
    background: blanchedalmond;
}
.voltar button{
    background: transparent; 
}
.voltar button:hover{
    background-color: white;
}
.edicao:hover{
    background-color: silver;
}
.moedas{   
    padding: 5px 10px;
}
a:link,a:visited{
    text-decoration: none;
    color: white;
}
.topo{
    position: absolute;
    right: 10px;
}
</style>
<head><a id="topo"></a></head>
<body>
<?php
header('Content-type: text/html; charset=UTF-8');
function titulos(){
    $titulos=array(
            "Número CNJ / Antigo",
            'Natureza',
            'UF',
            'Parte contrária',
            'Segurado',
            'Faixa de Probabilidade',
            'Valor Deferido',
            'Valor da causa',
            'Valor condenação',
            'Valor Pedido',
            'Honorários',
            //'Valor certidão de crédito',
            'OBS',
            'SINISTRO',
            'TITULAR',
            //'id',
       );
    return $titulos;
}
function conteudo($judi){
       $campos=array(
            $judi->getNumero_CNJ_Antigo(),
            $judi->getNatureza(),
            $judi->getUF(),
            $judi->getParte_contraria(),
            $judi->getSegurado(),
            $judi->getFaixa_de_Probabilidade(),
            $judi->getVlr_deferido(),
            $judi->getVlr_da_causa(),
            $judi->getVlr_condenacao(),
            $judi->getValor_Pedido(),
            $judi->getHonorarios(),
            //$judi->getVlr_certidao_de_credito(),
            $judi->getOBS(),
            //$judi->getId(),
            $judi->getSINISTRO(),
            $judi->getTITULAR_h(),
       );
       return $campos;
}
@$act=$_GET['act'];
$errors = array();
$judi = null;
$edit = array_key_exists('id', $_GET);
@$ordem = $_GET['ordem'];
    
   if ($edit) {
     $judi = Utils::getJudiByGetId();
     //echo "<pre>";
     //print_r($judi);die;
   } else {
    $Tododao=new TodoDao();
    $Todosearch=new TodoSearchCriteria();
    $Odbcdao=new OdbcDao();
    $Odbcsearch=new OdbcSearchCriteria();
    $Oracledao=new OracleDao();
    $Oraclesearch=new OracleSearchCriteria();
    
    $Judidao=new JudiDao();
    $Judisearch=new JudiSearchCriteria();
   }
 
    //////// Exibe tabela /////////
  if(@$act=='ver'){
    //$ordem='Segurado asc';
    $judis=$Judidao->listaAcao($Judisearch,$ordem);// tabela transito x credito
    //echo "<pre>";
    //print_r($judis);die;
       
    $titulos=titulos(); 
      echo "<div class=voltar><a href='index.php'><button title='Voltar'><img src='../web/img/action/back.png' height=20 title='Voltar'></button></a>";
      //echo "<a href='index.php?page=acaoJudicial&act=cadastro'><button title='Adcionar Linha'><img src='../web/img/add.ico' height=20 title='Adcionar Linha' class=add></button></a></div>";
      echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
      echo "<caption><h1>A&Ccedil;&Otilde;ES TRANSITADO E JULGADO</h1></caption>";
      //echo "<tr>";
    echo "<tr><th style=\"background-color: rgba(123, 123, 123, 0.5)\" colspan=12 align=left> Total de linhs ".  number_format(count($judis),'0','','.')."</th></tr>";
      foreach($titulos as $titulo){
       $titulo_=(str_replace(' ','',$titulo));
          echo "<th class=moedas style= \"white-space: nowrap;\">";
           echo "<a href=index.php?page=acaoJudicial&act=ver&ordem=".$titulo_.">";
           echo mb_strtoupper($titulo);
           echo "</a>";
          echo "</th>";
      }
      $x=0; 
      $deferido=$causa=$condenacao=$honorario=$certidao=$pedido=null;
      
      //echo "<pre>";
      //print_r($judis);die;
      
      echo "<tr>";
      $titularOld='inicial';
      $titular_=null;
      foreach($judis as $judi){
          //if($x==50)die;
       if(!$judi->getSINISTRO()){
         $Odbcsearch->setTITULAR(JudiValidator::tirarAcento($judi->getSegurado()));
         $sinistrado=$Odbcdao->busca3($Odbcsearch);
         foreach($sinistrado as $keys => $item){
            $sinistro_=$item->getsinistro();
            $titular_=$item->getTITULAR();
         }
         if($titular_ != $titularOld){
            $judi->setTITULAR_h($titular_);
            $judi->setSINISTRO($sinistro_);
         }
       }
       //echo "<pre>";
       //echo ($sinistro_);
           $titularOld=$titular_;          
          
       $campos=conteudo($judi);
       
       foreach($campos as $key => $campo){
        if(preg_match("/^[0-9]/",$campo) && $campos[0] != $campo && $campos[12] != $campo){
         echo "<td align=right>";
           echo number_format($campo,'2',',','.');
         echo "</td>";
        }else{
         echo "<td align=center>";
          echo mb_strtoupper($campo);
         echo "</td>";
        }
        switch($key){
          case 6:
           $deferido=$deferido+$campo;
           break;
          case 7:
           $causa=$causa+$campo;
           break;
          case 8:
           $condenacao=$condenacao+$campo;
           break;
          case 9:
           $honorario=$honorario+$campo;
           break;
          case 10:
           $pedido=$pedido+$campo;
           break;
        }
        //print_r($key);die;
       }
       $id=$judi->getId();
       //echo "<td class=edicao ><a href='index.php?page=acaoJudicial&act=cadastro&id=".$judi->getId()."' ><img src='../web/img/lapis.gif' height=20 title='Fazer Altera&ccedil;&otilde;es'/></a></td>";
       //echo "<td class=edicao onclick=excluir($id)>&nbsp<img src='../web/img/excluir.png' height=13 title='Excluir Linha'/>&nbsp</td>";
       //echo "<td class=edicao ><a href='index.php?page=delete&id=".$judi->getId()."' ><img src='../web/img/excluir.png' height=13 title='Excluir Linha'/></a></td>";
       echo "</tr>";
       //$Odbcsearch->setSINISTRO(null);
       //$Odbcsearch->setTITULAR(null);
       //$judi->setTITULAR_h(null);
       unset($sinistro,$titular);
       $x++;
     }   
     echo "<tr><th class=moedas style=\"background-color: #556B2F\" colspan=6 align=right>TOTAIS</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($deferido,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($causa,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($condenacao,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($honorario,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($pedido,'2',',','.')."</th><th colspan=3 style=\"background-color: #556B2F\"></th></tr>";
     echo "</table>";
     echo "<script>total($x)</script>";
     echo "<a href='#topo' class=topo><img src='img/setacima.png' height=30px title='Voltar ao Topo'></a>";
     die;
  }
     //////// Fim Exibição /////////
     
     /////// Cadastro /////// 
  if(@$act=='cadastro'){
   echo "<div class=formulario>";
   echo "<form action='index.php?page=grava' method=POST>";
    echo "<fieldset>";
    echo "<legend><h2>CERTID&Atilde;O DE CR&Eacute;DITO PARA IMPRESS&Atilde;O</h2></legend>";
        $titulos=titulos();
  //echo "<pre>";
  //print_r($titulos);die;
        //$judi->getNumero_CNJ_Antigo()=null;
        $x=0;
        foreach($titulos as $titulo){
          switch($x){
              case 0:
               if($edit){
                echo "<input type=hidden name=id value=".Utils::escape($judi->getId()).">";
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=30 name='Numero_CNJ_Antigo' value='".Utils::escape($judi->getNumero_CNJ_Antigo())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=30 name='Numero_CNJ_Antigo'>";
               }
                break;
              case 1:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=15 name='Natureza' value='".Utils::escape($judi->getNatureza())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=15 name='Natureza'>";
               }
                break;
              case 2:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=2 maxlength=2 name='UF' value='".Utils::escape($judi->getUF())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=2 maxlength=2 name='UF'>";
               }
                break;
              case 3:
               if($edit){
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text size=50 name='Parte_contraria' value='".Utils::escape($judi->getParte_contraria())."'>";
               }else{
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text size=50 name='Parte_contraria'>";
               }
                break;
              case 4:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=50 name='Segurado' value='".Utils::escape($judi->getSegurado())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=50 name='Segurado'>";
               }
                break;
              case 5:
               if($edit){
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_deferido' value='".Utils::escape($judi->getVlr_deferido())."'>";
               }else{
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_deferido'>";
               }
                break;
              case 6:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_da_causa' value='".Utils::escape($judi->getVlr_da_causa())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_da_causa'>";
               }
                break;
              case 7:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_condenacao' value='".Utils::escape($judi->getVlr_condenacao())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_condenacao'>";
               }
                break;
              case 8:
               if($edit){
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='Honorarios' value='".Utils::escape($judi->getHonorarios())."'>";
               }else{
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='Honorarios'>";
               }
                break;
              case 9:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_certidao_de_credito' value='".Utils::escape($judi->getVlr_certidao_de_credito())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_certidao_de_credito'>";
               }
                break;
              case 10:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": ";
                echo "<select name='Aba' >";
                  echo "<option selected value='".Utils::escape($judi->getAba())."'>";
                    echo Utils::escape($judi->getAba());
                    echo "</option>";
                  echo "<option value='IMPRESS&Atilde;O'>IMPRESS&Atilde;O</option>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": ";
                echo "<select name=Aba >";
                  echo "<option value='IMPRESS&Atilde;O'>IMPRESS&Atilde;O</option>";
                //echo "&nbsp&nbsp ".$titulo.": <input type=text value='IMPRESS&Atilde;O' disabled>";
                echo "</select>";
               }
                break;            
          }
          $x++;
        }
        echo "</fieldset>";
           echo "<input type=hidden name=Aba value='IMPRESS&Atilde;O'>";
        echo "<div class=botao>";
        echo "<input type=submit name=cancel value=CANCELAR>";
        echo "<input type=submit name=save value=";
            if($edit){
                echo " EDITAR>";
            }else{
                echo " GRAVAR>";
            }
        echo "</div>";
     echo "</form>";
   echo "</div>";
  }
  /////// Fim cadastro ///////
?>
</body>