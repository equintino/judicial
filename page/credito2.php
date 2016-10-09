<script>
    function total($x){
        var x='Total de processos encontrados ('+$x+')';
        document.getElementById('total').innerHTML=x;
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
    table th{
        background-color: green;
        color: white;
    }
    table td{
        background-color: white;
    }
</style>
<body>
<?php
header('Content-type: text/html; charset=UTF-8');
function titulos(){
    $titulos=array(
            'Numero_CNJ_Antigo',
            'Natureza',
            'UF',
            'Parte_contraria',
            'Segurado',
            'Vlr_deferido',
            'Vlr_da_causa',
            'Vlr_condenacao',
            'Honorarios',
            'Vlr_certidao_de_credito',
            'Aba',
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
            $judi->getAba(),
            //$judi->getId(),
       );
       return $campos;
}
$act=$_GET['act'];
$errors = array();
$judi = null;
$edit = array_key_exists('id', $_GET);
    
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
    echo "<div id=total ></div>";
 
    //////// Exibe tabela /////////
  if(@$act=='ver'){
    $judis=$Judidao->listacredito($Judisearch);// tabela transito x credito
       
    $titulos=titulos(); 
    
      echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
      echo "<caption><h1>CERTID&Otilde;ES DE CR&Eacute;DITO</h1></caption>";
      echo "<tr>";
      foreach($titulos as $titulo){
          echo "<th>";
          echo $titulo;
          echo "</th>";
      }
      $x=0;
      echo "<tr>";
      foreach($judis as $judi){
         
       $campos=conteudo($judi);
       foreach($campos as $campo){
         echo "<td align=center>";
          echo $campo;
         echo "</td>";
       }
       echo "<td><a href='index.php?page=credito2&act=cadastro&id=".$judi->getId()."' ><img src='../web/img/lapis.gif' height=20 /></a></td>";
       echo "<td><a href='index.php?page=delete&id=".$judi->getId()."' ><img src='../web/img/excluir.png' height=13 /></a></td>";
       echo "</tr>";
     }   
     echo "</table>";
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
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=30 name='".$titulo."' value='".Utils::escape($judi->getNumero_CNJ_Antigo())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=30 name='".$titulo."'>";
               }
                break;
              case 1:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=15 name='".$titulo."' value='".Utils::escape($judi->getNatureza())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=15 name='".$titulo."'>";
               }
                break;
              case 2:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=2 maxlength=2 name='".$titulo."' value='".Utils::escape($judi->getUF())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=2 maxlength=2 name='".$titulo."'>";
               }
                break;
              case 3:
               if($edit){
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text size=50 name='".$titulo."' value='".Utils::escape($judi->getParte_contraria())."'>";
               }else{
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text size=50 name='".$titulo."'>";
               }
                break;
              case 4:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=50 name='".$titulo."' value='".Utils::escape($judi->getSegurado())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=50 name='".$titulo."'>";
               }
                break;
              case 5:
               if($edit){
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."' value='".Utils::escape($judi->getVlr_deferido())."'>";
               }else{
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."'>";
               }
                break;
              case 6:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."' value='".Utils::escape($judi->getVlr_da_causa())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."'>";
               }
                break;
              case 7:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."' value='".Utils::escape($judi->getVlr_condenacao())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."'>";
               }
                break;
              case 8:
               if($edit){
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."' value='".Utils::escape($judi->getHonorarios())."'>";
               }else{
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."'>";
               }
                break;
              case 9:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."' value='".Utils::escape($judi->getVlr_certidao_de_credito())."'>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."'>";
               }
                break;
              case 10:
               if($edit){
                echo "&nbsp&nbsp ".$titulo.": ";
                echo "<select name='".$titulo."' >";
                  echo "<option selected value='".Utils::escape($judi->getAba())."'>";
                    echo Utils::escape($judi->getAba());
                    echo "</option>";
                  echo "<option value='IMPRESS&Atilde;O'>IMPRESS&Atilde;O</option>";
               }else{
                echo "&nbsp&nbsp ".$titulo.": ";
                echo "<select name=".$titulo." >";
                  echo "<option selected value=''></option>";
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