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
            'DUPLICIDADE',
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
    //echo "<pre>";
    //print_r($judis);die;
?>
        
    </head>
    <body>
        <div class="relatorio">
            <?php 
                  $array=array(
                      //'Natureza',
                      //'UF',
                      //'PARTE CONTR&Aacute;RIA',
                      //'Segurado',
                      //'Valor',
                      //'Honor&aacute;rios',
                      'SINISTRO',
                      'TITULAR',
                      'SEGURADO',
                      'N&uacute;mero CNJ Antigo',
                      'PARTE CONTR&Aacute;RIA',
                      //'VALOR PEDIDO',
                      'VALOR ADMINISTRATIVO',
                      //'HONOR&Aacute;RIOS',
                      //'PROV&Aacute;VEL',
                      //'DIGITADOR',
                      //'AP&Oacute;LICE',
                      //'CERTIFICADO',
                      //'SINISTRO',
                      //'DATA AVISO',
                      //'CPF',
                      //'IMPORT&Acirc;NCIA SEGURADA',
                      //'CORRE&Ccedil;&Atilde;O IGPM',
                      //'CORRE&Ccedil;&Atilde;O TR'
                      );
    echo "<div id=total ></div>";
                  echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
                  //print_r(count($array));
                  echo "<tr>";
                  /*
                for ($x=0;$x < count($array);$x++){
                   echo "<th>".$array[$x]."</th>";
                }
                   * 
                   */
                  
      $titulos=  titulos();            
      foreach($titulos as $titulo){
       $titulo_=(str_replace(' ','',$titulo));
          echo "<th class=moedas style= \"white-space: nowrap;\">";
          if($titulo != 'DUPLICIDADE'){
           echo "<a href=index.php?page=acaoJudicial&act=ver&ordem=".$titulo_.">";
            echo mb_strtoupper($titulo);
           echo "</a>";
          }else{
            echo mb_strtoupper($titulo);
          }
          echo "</th>";
      }
                  echo "</tr>";
                  
                  ///// Construindo a tabela ////
       $judis=$Judidao->ajunta($Judisearch);
       echo "<pre>";
       print_r($judis);die;
       $campos=conteudo($judi);
       
       foreach($campos as $key => $campo){
        if(preg_match("/^[0-9]/",$campo) && $campos[0] != $campo && $campos[12] != $campo){
         echo "<td align=right bgcolor=white>";
           echo number_format($campo,'2',',','.');
         echo "</td>";
        }elseif(($campo == $judi->getTITULAR_h() || $campo == $judi->getSINISTRO() || $campo == $judi->getSegurado()) && $judi->getSegurado() != null && $judi->getTITULAR_h() != null && $campo != $judi->getParte_contraria()){
            //echo "estou aqui";die;
         if(mb_strlen($judi->getSegurado(),'utf8') != mb_strlen($judi->getTITULAR_h(),'utf8')){
            if($campo == $judi->getSINISTRO()){
                echo "<td bgcolor=white>";
                    echo "<img src=img/interroga.png height=15 title=\"Poss&iacute;vel Duplica&ccedil;&atilde;o &#10 ".mb_strtoupper($judi->getTITULAR_h())."\">";
                //echo mb_strtoupper($campo);
                echo "</td>";
            }elseif($campo == $judi->getSegurado()){
               echo "<td bgcolor=yellow>";
                //echo "<img src=img/interroga.png height=15>";
                  echo mb_strtoupper($campo); 
               echo "</td>"; 
            }
         }else{
           ///// Gravando Sinistro e Titular em Acoes /////
             $judi->setTITULAR($judi->getTITULAR_h());
             $judi->setVALOR_ADMINISTRATIVO($judi->getCORRECAO_TR_h());
             //echo "<pre>";
             //print_r($judi);die;
           $Judidao->saveJd2($judi);
           
          echo "<td align=center bgcolor=white>";
          if($campo == $judi->getSINISTRO()){ 
           echo "<img src=img/atencao.png height=15 title='Duplicado &#10 ".$judi->getSINISTRO()."'>";
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
                    echo "<img src=img/atencao.png height=15 title=\"Duplicado &#10 ".$judi->getSINISTRO()."\">";
                    $totalDuplicidade++;
                    //echo $judi->getSINISTRO();
                    //echo "ainda está lá";die;
                    //echo "<pre>";
                    //print_r($sinistrado);die;
                }else{
                    echo "<img src=img/confirmado.png heght=15 title='Exclus&atilde;o Confirmada'>";
                    /// Salvando confirmação de exclusão em ações ///
                    $judi->setOk(1);
                    //echo "<pre>";
                    //print_r($judi);die;
                    $Judidao->saveJd2($judi);
                }
            }else{
                if($judi->getOk() == 1){
                    echo "<img src=img/confirmado.png heght=15 title='Exclus&atilde;o Confirmada'>";                
                }else{
                    echo "<img src=img/atencao.png height=15 title=\"Duplicado &#10 ".$judi->getSINISTRO()."\">"; 
                    $totalDuplicidade++;
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
                  
                  
                  
die;                  
////////////////////////////////
                  
                 // echo "<tr><th>N&uacute;mero CNJ Antigo</th><th>Natureza</th><th>UF</th><th>PARTE CONTR&Aacute;RIA</th><th>Segurado</th><th>Valor</th><th>Honor&aacute;rios</th><th>SINISTRO</th><th>SEGURADO</th><th>PARTE CONTR&Aacute;RIA</th><th>VALOR PEDIDO</th><th>VALOR ADMINISTRATIVO</th><th>HONOR&Aacute;RIOS</th><th>PROV&Aacute;VEL</th><th>DIGITADOR</th><th>AP&Oacute;LICE</th><th>CERTIFICADO</th><th>SINISTRO</th><th>DATA AVISO</th><th>TITULAR</th><th>CPF</th><th>IMPORT&Acirc;NCIA SEGURADA</th><th>CORRE&Ccedil;&Atilde;O IGPM</th><th>CORRE&Ccedil;&Atilde;O TR</th><tr>";
                  
                  $Segurado_con_old=null;
                foreach($judis as $provavel){
                     echo "<tr><td>";
                     echo $provavel->getSINISTRO();
                     echo "</td><td>";
                     echo $provavel->getTITULAR_h();
                     echo "</td><td>";
                     echo $provavel->getSegurado();
                     echo "</td><td>";
                     echo $provavel->getNumero_CNJ_Antigo();
                     echo "</td><td>";
                     echo $provavel->getParte_contraria();
                     echo "</td><td>";
                     echo $provavel->getCORRECAO_TR_h();
                     echo "</td>"; 
                     
                     
                     /*
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
                     */
                }
                echo "</tr></table>";
            ?>
        </div>
    </body>
</html>