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
    fieldset{
        #background-color: white;
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
$act=$_GET['act'];

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
            'id',
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
            $judi->getId(),
       );
       return $campos;
}
    
    echo "<div id=total ></div>";
    $Tododao=new TodoDao();
    $Todosearch=new TodoSearchCriteria();
    $Odbcdao=new OdbcDao();
    $Odbcsearch=new OdbcSearchCriteria();
    $Oracledao=new OracleDao();
    $Oraclesearch=new OracleSearchCriteria();
    
    $Judidao=new JudiDao();
    $Judisearch=new JudiSearchCriteria();
  
 
    //////// Exibe tabela /////////
  if(@$act=='ver'){
    $judis=$Judidao->listacredito($Judisearch);// tabela transito x credito
       
    $titulos=titulos(); 
    
      echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
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
       echo "<td>";
       echo $campo;
       echo "</td>";
       }
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
        $x=0;
        foreach($titulos as $titulo){
          switch($x){
              case 0:
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=30 name='".$titulo."'>";
                break;
              case 1:
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=15 name='".$titulo."'>";
                break;
              case 2:
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=2 maxlength=2 name='".$titulo."'>";
                break;
              case 3:
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text size=50 name='".$titulo."'>";
                break;
              case 4:
                echo "&nbsp&nbsp ".$titulo.": <input type=text size=50 name='".$titulo."'>";
                break;
              case 5:
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."'>";
                break;
              case 6:
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."'>";
                break;
              case 7:
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."'>";
                break;
              case 8:
                echo "<br><br>&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."'>";
                break;
              case 9:
                echo "&nbsp&nbsp ".$titulo.": <input type=text name='".$titulo."'>";
                break;
              case 10:
                echo "&nbsp&nbsp ".$titulo.": <input type=text value='IMPRESS&Atilde;O' disabled>";
                break;            
          }
          $x++;
        }
        echo "</fieldset>";
           echo "<input type=hidden name=Aba value='IMPRESS&Atilde;O'>";
        echo "<div class=botao>";
        echo "<input type=reset name=limpa value=LIMPA>";
        echo "<input type=submit name=grava value=GRAVAR>";
        echo "</div>";
     echo "</form>";
   echo "</div>";
  }
  /////// Fim cadastro ///////
?>
</body>