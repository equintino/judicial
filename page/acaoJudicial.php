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
    function atualiza(){
        var x=confirm('Esta ação levará alguns minutos. Confirma?');
        if(x){
            //alert('você confirmou');
            location.href='index.php?page=acaoJudicial&act=ver&atualiza=1';
            //location.href='index.php?page=acaoJudicial&act=ver&atualiza=1';
        }
    }
function id(el) {
	return document.getElementById(el);
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
        #background-color: white;
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
.btn{
     width: 100%;
     #background: -webkit-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -moz-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     #background: -o-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     #background: -ms-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     #background: linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     #border: 1px solid #CCCCCE;
     #border-radius: 3px;
     box-shadow: 0 3px 0 rgba(0, 0, 0, .3),
                   0 2px 7px rgba(0, 0, 0, 0.2);
 /*    color: #616165;
     display: block;
     font-family: "Trebuchet MS";
     font-size: 14px;
     font-weight: bold;
     line-height: 25px;
     text-align: center;
     text-decoration: none;
     text-transform: uppercase;
     text-shadow:1px 1px 0 #FFF;
     #padding: 5px 15px;
     #position: relative;
     #width: 80px; 
  */
}
.btn:hover{
    width: 100%;
    background: -moz-linear-gradient(bottom, #efedd3, #fdfdf8 70%);
}
.conteudo{
    position: absolute;
    top:1px;
}
.carregando{
    position: relative;
    left: 39%;
    top: 130px;
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
            'DUPLICADO',
            //'TITULAR',
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
            //$judi->getTITULAR_h(),
       );
       return $campos;
}
@$act=$_GET['act'];
$errors = array();
$judi = null;
$edit = array_key_exists('id', $_GET);
@$ordem = $_GET['ordem'];
@$atualiza = $_GET['atualiza'];
//echo "<h1>$atualiza</h1>";
    
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
   
   
        echo "<div class=carregando>";
	echo '<img src="img/loading.gif" alt="" id="loading" />';
        echo "<i>POR FAVOR AGUARDE...</i>";
        echo "</div>";
                
 
    //////// Exibe tabela /////////
  if(@$act=='ver'){
        echo "<div id=mostra class=conteudo style='display:none'>";
    //$ordem='Segurado asc';
    $judis=$Judidao->listaAcao($Judisearch,$ordem);// tabela transito x credito
    //echo "<pre>";
    //print_r($judis);die;
       
    $titulos=titulos(); 
      echo "<div class=voltar><a href='index.php'><button title='Voltar'><img src='../web/img/action/back.png' height=20 title='Voltar'></button></a></div>";
      //echo "<a href='index.php?page=acaoJudicial&act=cadastro'><button title='Adcionar Linha'><img src='../web/img/add.ico' height=20 title='Adcionar Linha' class=add></button></a></div>";
      echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
      echo "<caption><h1>A&Ccedil;&Otilde;ES TRANSITADO E JULGADO</h1></caption>";
      //echo "<tr>";
    echo "<tr><th style=\"background-color: rgba(123, 123, 123, 0.5)\" colspan=12 align=left> Total de linhs ".  number_format(count($judis),'0','','.')."</th><th style=\"background-color: rgba(123, 123, 123, 0.5)\" ><button  class=btn onclick=atualiza() title='Clique aqui para atualizar'><img src=img/atualizar.png height=20px></button></th></tr>";
      foreach($titulos as $titulo){
       $titulo_=(str_replace(' ','',$titulo));
          echo "<th class=moedas style= \"white-space: nowrap;\">";
          if($titulo != 'DUPLICADO'){
           echo "<a href=index.php?page=acaoJudicial&act=ver&ordem=".$titulo_.">";
            echo mb_strtoupper($titulo);
           echo "</a>";
          }else{
            echo mb_strtoupper($titulo);
          }
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
          //if($x==110)die;
       if($atualiza == 1){
        if(!$judi->getSINISTRO() && $judi->getSegurado() != null){
         $Odbcsearch->setTITULAR(JudiValidator::tirarAcento($judi->getSegurado()));
         //print_r($Odbcsearch);die;
         $sinistrado=$Odbcdao->busca3($Odbcsearch);
         //print_r($sinistrado);die;
         foreach($sinistrado as $keys => $item){
            $sinistro_=$item->getsinistro();
            $titular_=$item->getTITULAR();
         }
         if($titular_ != $titularOld){
            $judi->setTITULAR_h($titular_);
            @$judi->setSINISTRO($sinistro_);
         }
        }
           $titularOld=$titular_; 
       }
           
      
           ///// Construindo a tabela ////
       $campos=conteudo($judi);
       
       foreach($campos as $key => $campo){
        if(preg_match("/^[0-9]/",$campo) && $campos[0] != $campo && $campos[12] != $campo){
         echo "<td align=right bgcolor=white>";
           echo number_format($campo,'2',',','.');
         echo "</td>";
        }elseif(($campo == $judi->getTITULAR_h() || $campo == $judi->getSINISTRO() || $campo == $judi->getSegurado()) && $judi->getSegurado() != null && $judi->getTITULAR_h() != null && $campo != $judi->getParte_contraria()){
         if(mb_strlen($judi->getSegurado(),'utf8') != mb_strlen($judi->getTITULAR_h(),'utf8')){
            if($campo == $judi->getSINISTRO()){
                echo "<td align=center bgcolor=white>";
                    echo "<img src=img/interroga.png height=20 title=\"Poss&iacute;vel Duplica&ccedil;&atilde;o &#10 ".mb_strtoupper($judi->getTITULAR_h())."\">";
                //echo mb_strtoupper($campo);
                echo "</td>";
            }elseif($campo == $judi->getSegurado()){
               echo "<td bgcolor=yellow>";
                //echo "<img src=img/interroga.png height=20px>";
                  echo mb_strtoupper($campo); 
               echo "</td>"; 
            }
         }else{
           ///// Gravando Sinistro em Acoes /////
           $Judidao->saveJd2($judi);
          echo "<td align=center bgcolor=white>";
          if($campo == $judi->getSINISTRO()){ 
           echo "<img src=img/atencao.png height=20 title='Duplicado &#10 ".$judi->getSINISTRO()."'>";
           //echo mb_strtoupper($campo);
          }else{
            echo mb_strtoupper($campo);  
          }
          echo "</td>";
         }
        }elseif($campo == $judi->getSINISTRO () && $campo != null){
         echo "<td align=center bgcolor=white>";
            if($atualiza == 1){
                $confereExclusao=new OdbcSearchCriteria();
                $confereExclusao->setTITULAR(JudiValidator::tirarAcento($judi->getSegurado()));
                //print_r($Odbcsearch);die;
                $sinistrado=$Odbcdao->busca3($confereExclusao);
                //echo "<pre>";
                //print_r($sinistrado);
                //}
                //die;
                if($sinistrado){
                 foreach($sinistrado as $item2);
                 $judi->setSINISTRO($item2->getsinistro());
                    echo "<img src=img/atencao.png height=20 title=\"Duplicado &#10 ".$judi->getSINISTRO()."\">";
                    //echo $judi->getSINISTRO();
                    //echo "ainda está lá";die;
                    //echo "<pre>";
                    //print_r($sinistrado);die;
                }else{
                    echo "<img src=img/confirmado.png heght=20 title='Exclus&atilde;o Confirmada'>";
                    //echo $judi->getSINISTRO();
                    $judi->setOk(1);
                    //echo "<pre>";
                    //print_r($judi);die;
                    $Judidao->saveJd2($judi);
                    //echo "<pre>";
                    //print_r($sinistrado);
                }
            }else{
                if($judi->getOk() == 1){
                    echo "<img src=img/confirmado.png title='Exclus&atilde;o Confirmada'>";                
                }else{
                    echo "<img src=img/atencao.png height=20 title=\"Duplicado &#10 ".$judi->getSINISTRO()."\">"; 
                }
            }
          //echo mb_strtoupper($campo);
         echo "</td>";
        }else{
         echo "<td bgcolor=white>";
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
     echo "<tr><th class=moedas style=\"background-color: #556B2F\" colspan=6 align=right>TOTAIS</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($deferido,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($causa,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($condenacao,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($honorario,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($pedido,'2',',','.')."</th><th colspan=2 style=\"background-color: #556B2F\"></th></tr>";
     echo "</table>";
     echo "<script>total($x)</script>";
     echo "<a href='#topo' class=topo><img src='img/setacima.ico' title='Voltar ao Topo'></a>";
        echo "<script>id('mostra').style.display = 'block';</script>";
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