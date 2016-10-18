<script>
    function total($x){
        var x='Total de processos encontrados ('+$x+')';
        document.getElementById('total').innerHTML=x;
    }
    function excluir($id){
       var y=confirm('Confirma a excusão?');
       var id=$id;
       if(y){
         location.href='index.php?page=delete&id='+id;
       }
    }
</script>
<head><a id="topo"></a></head>
<style>
    .formulario{
        margin: 50px auto;
        width: 90%;
    }
    .botao{
        margin: 10px;
        float: right;
    }
    .botao input{
        font-size: 10px;
      background: -webkit-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -moz-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -o-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -ms-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     border: 1px solid #CCCCCE;
     border-radius: 3px;
     box-shadow: 0 3px 0 rgba(0, 0, 0, .3),
                   0 2px 7px rgba(0, 0, 0, 0.2);
      color: #616165;
     //display: block;
     font-family: "Trebuchet MS";
     //font-size: 14px;
     font-weight: bold;
     line-height: 15px;
     text-align: center;
     text-decoration: none;
     text-transform: uppercase;
     text-shadow:1px 1px 0 #FFF;
     #padding: 5px 15px;
     #position: relative;
     #width: 80px;
    }
    .botao input:hover{
      font-size: 10px;
      background: -webkit-linear-gradient(bottom, #E0E0E0, #F9F9F9 10%);
     background: -moz-linear-gradient(bottom, #E0E0E0, #F9F9F9 10%);
     background: -o-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -ms-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     border: 1px solid #CCCCCE;
     border-radius: 3px;
     box-shadow: 0 3px 0 rgba(0, 0, 0, .3),
                   0 2px 7px rgba(0, 0, 0, 0.2);
      color: #616165;
     //display: block;
     font-family: "Trebuchet MS";
     //font-size: 14px;
     font-weight: bold;
     line-height: 15px;
     text-align: center;
     text-decoration: none;
     text-transform: uppercase;
     text-shadow:1px 1px 0 #FFF;
     #padding: 5px 15px;
     #position: relative;
     #width: 80px;
    }
    body{
        background-color: silver;
    }
    table{
         width: 100%;
         font-size: 10px;
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
    //height: 14px;
    //width: 20px;
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
.tituloCertidao{
    padding: 10px 20px;
}
.tituloSegurado{
    padding: 0 100px;
}
a:link,a:visited{
    text-decoration: none;
    color: white;
}
.topo{
    position: absolute;
    right: 10px;
}
form {
    font-size: 15px;
}
select{
    font-size: 11px;
}
</style>
<body>
<?php
header('Content-type: text/html; charset=UTF-8');
//echo getenv("USERNAME");
//phpinfo();die;
function titulos(){
    $titulos=array(
            "Número CNJ / Antigo",
            'Natureza',
            'UF',
            'Parte contrária',
            'Segurado',
            'Valor Deferido',
            'Valor da causa',
            'Valor condenação',
            'Honorários',
            'Certidão de crédito',
            'Login',
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
            $judi->getVlr_deferido(),
            $judi->getVlr_da_causa(),
            $judi->getVlr_condenacao(),
            $judi->getHonorarios(),
            $judi->getVlr_certidao_de_credito(),
            $judi->getLogin(),
            //$judi->getId(),
       );
       return $campos;
}
$act=$_GET['act'];
$errors = array();
$judi = null;
$edit = array_key_exists('id', $_GET);
@$ordem = $_GET['ordem'];

//echo "<pre>";
//print_r($_GET);

   if($edit){
     $judi = Utils::getJudiByGetId();
     //echo "<pre>";
     //print_r($judi);die;
   }else{
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
    $judis=$Judidao->listacredito($Judisearch,$ordem);// tabela transito x credito
       
    $titulos=titulos(); 
      echo "<div class=voltar><a href='index.php'><button title='Voltar'><img src='../web/img/action/back.png' height=15 title='Voltar'></button></a>";
      echo "<a href='index.php?page=credito&act=cadastro'><button title='Adcionar Linha'><img src='../web/img/add.ico' height=15 title='Adcionar Linha' class=add></button></a></div>";
      echo "<table border=1 cellspacing=0 spanspacing=0 class=\"tabela\">";
      echo "<caption><h1>CERTID&Otilde;ES DE CR&Eacute;DITO</h1></caption>";
      echo "<tr>";
    echo "<tr><th style=\"background-color: rgba(123, 123, 123, 0.5)\" colspan=11 align=left> Total de linhs ".count($judis)."</th></tr>";
      foreach($titulos as $chave => $titulo){
       $titulo_=(str_replace(' ','',$titulo));
        if($chave == 9){
          echo "<th class=tituloCertidao style= \"white-space: normal;\">";
           echo "<a href=index.php?page=credito&act=ver&ordem=".$titulo_.">";
           echo mb_strtoupper($titulo);
           echo "</a>";
          echo "</th>";
        }elseif($chave == 3 || $chave == 4){
          echo "<th class=tituloSegurado style= \"white-space: nowrap;\">";
           echo "<a href=index.php?page=credito&act=ver&ordem=".$titulo_.">";
           echo mb_strtoupper($titulo);
           echo "</a>";
          echo "</th>";
        }else{
          echo "<th class=moedas style= \"white-space: nowrap;\">";
           echo "<a href=index.php?page=credito&act=ver&ordem=".$titulo_.">";
           echo mb_strtoupper($titulo);
           echo "</a>";
          echo "</th>";
        }
      }
      $x=0; 
      $deferido=$causa=$condenacao=$honorario=$certidao=null;
      echo "<tr>";
      foreach($judis as $judi){         
       $campos=conteudo($judi);
       foreach($campos as $key => $campo){
        if(preg_match("/^[0-9]/",$campo) && $campos[0] != $campo){
         echo "<td align=right>";
           echo number_format($campo,'2',',','.');
         echo "</td>";
        }else{
         echo "<td align=center>";
          echo mb_strtoupper($campo);
         echo "</td>";
        }
        switch($key){
          case 5:
           $deferido=$deferido+$campo;
           break;
          case 6:
           $causa=$causa+$campo;
           break;
          case 7:
           $condenacao=$condenacao+$campo;
           break;
          case 8:
           $honorario=$honorario+$campo;
           break;
          case 9:
           $certidao=$certidao+$campo;
           break;
        }
        //print_r($key);die;
       }
       $id=$judi->getId();
       echo "<td class=edicao ><a href='index.php?page=credito&act=cadastro&id=".$judi->getId()."' ><img src='../web/img/lapis.gif' height=20 title='Fazer Altera&ccedil;&otilde;es'/></a></td>";
       echo "<td class=edicao onclick=excluir($id)>&nbsp<img src='../web/img/excluir.png' height=13 title='Excluir Linha'/>&nbsp</td>";
       //echo "<td class=edicao ><a href='index.php?page=delete&id=".$judi->getId()."' ><img src='../web/img/excluir.png' height=13 title='Excluir Linha'/></a></td>";
       echo "</tr>";
       $x++;
     }   
     echo "<tr><th class=moedas style=\"background-color: #556B2F\" colspan=5 align=right>TOTAIS</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($deferido,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($causa,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($condenacao,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($honorario,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($certidao,'2',',','.')."</th><th colspan=3 style=\"background-color: #556B2F\"></th></tr>";
     echo "</table>";
     echo "<script>total($x)</script>";
     echo "<a href='#topo' class=topo><img src='img/setacima.png' height=20px title='Voltar ao Topo'></a>";
     die;
  }
     //////// Fim Exibição /////////
     
     /////// Cadastro /////// 
  if(@$act=='cadastro'){
   echo "<div class=formulario>";
   echo "<form action='index.php?page=grava' method=POST>";
    echo "<fieldset>";
    echo "<legend><h3>CERTID&Atilde;O DE CR&Eacute;DITO PARA IMPRESS&Atilde;O</h3></legend>";
        $titulos=titulos();
  //echo "<pre>";
  //print_r($titulos);die;
        //$judi->getNumero_CNJ_Antigo()=null;
        //echo "<pre>";
        //$judi = Utils::getJudiByGetId();
        //print_r($judi);die;
         
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
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_deferido' value='".JudiValidator::colocavirgula(Utils::escape($judi->getVlr_deferido()))."'>";
               }else{
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_deferido'>";
               }
                break;
              case 6:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_da_causa' value='".JudiValidator::colocavirgula(Utils::escape(Utils::escape($judi->getVlr_da_causa())))."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_da_causa'>";
               }
                break;
              case 7:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_condenacao' value='".JudiValidator::colocavirgula(Utils::escape(Utils::escape($judi->getVlr_condenacao())))."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_condenacao'>";
               }
                break;
              case 8:
               if($edit){
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='Honorarios' value='".JudiValidator::colocavirgula(Utils::escape(Utils::escape($judi->getHonorarios())))."'>";
               }else{
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='Honorarios'>";
               }
                break;
              case 9:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='Vlr_certidao_de_credito' value='".JudiValidator::colocavirgula(Utils::escape(Utils::escape($judi->getVlr_certidao_de_credito())))."'>";
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
                echo "&nbsp&nbsp Aba: ";
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
        echo "<input type=submit name=cancel value=CANCELAR>&nbsp";
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