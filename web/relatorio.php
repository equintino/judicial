   <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Relat&oacuterio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script>
    function total($x){
        var x='Total de processos encontrados ('+$x+')';
        document.getElementById('total').innerHTML=x;
    }
</script>
<?php  
    include '../dao/TodoDao.php';
    include '../dao/TodoSearchCriteria.php';
    include '../dao/JudiDao.php';
    include '../dao/JudiSearchCriteria.php';
    include '../config/config.php';
    include '../model/Judi.php';
    include '../model/Todo.php';

    $Tododao=new TodoDao();
    $Todosearch=new TodoSearchCriteria();
    //$Odbcdao=new OdbcDao();
    //$Odbcsearch=new OdbcSearchCriteria();
    //$Oracledao=new OracleDao();
    //$Oraclesearch=new OracleSearchCriteria();
    
    $Judidao=new JudiDao();
    $Judisearch=new JudiSearchCriteria();
    
    $judis=$Judidao->listaProvavel2($Judisearch);
?>
        
    </head>
    <body>
        <div class="relatorio">
            <?php 
                  $array=array(
                      'N&uacute;mero CNJ Antigo',
                      'Natureza',
                      'UF',
                      'PARTE CONTR&Aacute;RIA',
                      'Segurado',
                      'Valor',
                      'Honor&aacute;rios',
                      'SINISTRO',
                      'SEGURADO',
                      'PARTE CONTR&Aacute;RIA',
                      'VALOR PEDIDO',
                      'VALOR ADMINISTRATIVO',
                      'HONOR&Aacute;RIOS',
                      'PROV&Aacute;VEL',
                      'DIGITADOR',
                      'AP&Oacute;LICE',
                      'CERTIFICADO',
                      'SINISTRO',
                      'DATA AVISO',
                      'TITULAR',
                      'CPF',
                      'IMPORT&Acirc;NCIA SEGURADA',
                      'CORRE&Ccedil;&Atilde;O IGPM',
                      'CORRE&Ccedil;&Atilde;O TR'
                      );
    echo "<div id=total ></div>";
                  echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
                  //print_r(count($array));
                  echo "<tr>";
                for ($x=0;$x < 24;$x++){
                   echo "<th>".$array[$x]."</th>";
                }
                  echo "</tr>";
                 // echo "<tr><th>N&uacute;mero CNJ Antigo</th><th>Natureza</th><th>UF</th><th>PARTE CONTR&Aacute;RIA</th><th>Segurado</th><th>Valor</th><th>Honor&aacute;rios</th><th>SINISTRO</th><th>SEGURADO</th><th>PARTE CONTR&Aacute;RIA</th><th>VALOR PEDIDO</th><th>VALOR ADMINISTRATIVO</th><th>HONOR&Aacute;RIOS</th><th>PROV&Aacute;VEL</th><th>DIGITADOR</th><th>AP&Oacute;LICE</th><th>CERTIFICADO</th><th>SINISTRO</th><th>DATA AVISO</th><th>TITULAR</th><th>CPF</th><th>IMPORT&Acirc;NCIA SEGURADA</th><th>CORRE&Ccedil;&Atilde;O IGPM</th><th>CORRE&Ccedil;&Atilde;O TR</th><tr>";
                  
                  $Segurado_con_old=null;
                foreach($judis as $provavel){
                     echo "<tr><td>";
                     echo $provavel->getNumero_CNJ_Antigo_con();
                     echo "</td><td>";
                     echo $provavel->getNatureza_con();
                     echo "</td><td>";
                     echo $provavel->getUF_con();
                     echo "</td><td>";
                     echo $provavel->getParte_contraria_con();
                     if($Segurado_con_old==$provavel->getSegurado_con()&&$Segurado_con_old!=null){
                        echo "</td><td bgcolor=yellow>";
                     }else{
                        echo "</td><td>"; 
                     }
                     echo $provavel->getSegurado_con();
                     echo "</td><td>";
                     echo $provavel->getValor_con();
                     echo "</td><td>";
                     echo $provavel->getHonorarios_con();
                     echo "</td><td>";
                     echo $provavel->getSINISTRO_lev();
                     echo "</td><td>";
                     echo $provavel->getSEGURADO_lev();
                     echo "</td><td>";
                     echo $provavel->getPARTE_CONTRARIA_lev();
                     echo "</td><td>";
                     echo $provavel->getVALOR_PEDIDO_lev();
                     echo "</td><td>";
                     echo $provavel->getVALOR_ADMINISTRATIVO_lev();
                     echo "</td><td>";
                     echo $provavel->getHONORARIOS_lev();
                     echo "</td><td>";
                     echo $provavel->getPROVAVEL_lev();
                     echo "</td><td>";
                     echo $provavel->getDIGITADOR_lev();
                     echo "</td><td>";
                     echo $provavel->getAPOLICE_h();
                     echo "</td><td>";
                     echo $provavel->getENDOSSO_h();
                     echo "</td><td>";
                     echo $provavel->getSINISTRO_h();
                     echo "</td><td>";
                     echo $provavel->getDT_AVISO_h();
                     echo "</td><td>";
                     echo $provavel->getTITULAR_h();
                     echo "</td><td>";
                     echo $provavel->getCPF_h();
                     echo "</td><td>";
                     echo $provavel->getIMPORTANCIA_SEGURADA_h();
                     echo "</td><td>";
                     echo $provavel->getCORRECAO_IGPM_h();
                     echo "</td><td>";
                     echo $provavel->getCORRECAO_TR_h();
                     echo "</td>"; 
                     $Segurado_con_old=$provavel->getSegurado_con();
                }
                echo "</tr></table>";
            ?>
        </div>
    </body>
</html>