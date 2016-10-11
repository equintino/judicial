<!--<script>
    function total($x){
        var x='Total de processos encontrados ('+$x+')';
        document.getElementById('total').innerHTML=x;
    }
</script>-->
<?php
//header('Content-type: text/html; charset=UTF-8');

 /*
    @$filename=$_GET['arquivo'];
    $mode='r';
    @$handle=fopen($filename, $mode);
    
    @$dados=file($filename);
    @$conteudo = fread ($handle, filesize ($filename));
    
    @fclose($handle);
 
 */  
//echo "estou aqui";die;
    //echo "<div id=total ></div>";
    //$Tododao=new TodoDao();
    //$Todosearch=new TodoSearchCriteria();
    //$Odbcdao=new OdbcDao();
    //$Odbcsearch=new OdbcSearchCriteria();
    //$Todo=new Todo();
    //$odbc=new Odbc();
    //$Oracledao=new OracleDao();
    //$Oraclesearch=new OracleSearchCriteria();
    
    //$Judidao=new JudiDao();
    //$Judisearch=new JudiSearchCriteria();
    //$oracle=new Odbc();die;
    
    //print_r($Odbcsearch);die;
    
    //print_r(get_class_methods($Judidao));die;
    //echo "<pre>";
     $Odbcsearch->setTITULAR(JudiValidator::tirarAcento($judi->getSegurado()));
     
     //echo "<br>";
    //print_r(get_class_methods($Odbcdao));
    //$Odbcdao->listaCampo($tabela,$campo,$busca);
    $sinistrado=$Odbcdao->busca3($Odbcsearch);
    //$dao->busca3($search)
    //print_r($Odbcsearch);
    //echo "<pre>";
    foreach($sinistrado as $keys => $item){
       $sinistro[]=$item->getsinistro();
       $titular[]=$item->getTITULAR();
    }
    //echo "<pre>";
    //print_r($titular);
    //die;
    /*
    //die;
    
    //$judis=$Judidao->listacredito($Judisearch);// tabela credito
    //if($Judisearch){
       $duplicado=$Judidao->duplicadoTraPro($Judisearch);// tabela transito x credito
    //}
    //echo "<pre>";
    //print_r($judis);die;
    
      echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
      echo "<tr><th>N&Uacute;MERO CNJ / ANTIGO</th><th>SINISTRO</th><th>SEGURADO</th><th>AVISO</th><th>SEGURADO_cre</th><th>PARTE CONTR&Aacute;RIA</th><th>VALOR PEDIDO</th><th>HONOR&Aacute;RIOS</th><th>VALOR ADMINISTRATIVO</th></tr>";



    //die;
     //echo "<pre>";
        //print_r($judis);
     //echo "</pre>";die;
      $x=0;
     foreach($judis as $judi){
      /*
            $segurado=JudiValidator::tirarAcento($judi->getSegurado_tra());
            
            $tabela='sinipend';
            $campo='TITULAR';
            $busca=$segurado;
            //print_r($judis);die;
            
            $Odbcsearch->setTITULAR($segurado);
            //print_r($Odbcsearch->getTITULAR());die;
            if($Odbcsearch->getTITULAR()){
                //echo "<h1>".$Odbcsearch->getTITULAR()."</h1>";die;
                $odbcs=$Odbcdao->busca7($Odbcsearch);
            //PRINT_R($odbcs);die;
                if($odbcs){
                    foreach($odbcs as $item){
                        //print_r($item);die;
                        $nome=$item->getTITULAR();
                        $sinistro=$item->getSINISTRO();
                        $impSegurado=$item->getIMPORTANCIA_SEGURADA();
                        $aviso=$item->getDT_AVISO();
                    }
                    $Todosearch->setSINISTRO($sinistro);
                    $henr=$Tododao->find8($Todosearch);
                    //print_r($henr);//die;
                    if($henr){
                        foreach($henr as $item2){
                            if($sinistro == $item2->getSINISTRO()){
                                //print_r($item2);die;
                                $impSegurado_tr=$item2->getCORRECAO_TR();
                                //print_r($item2);
                            }
                        }
                    }else{
                       $impSegurado_tr=null;
                    }
                }
            }else{
                $nome=null;
                $sinistro=null;
                $impSegurado=null;
                $aviso=null;
                $impSegurado_tr=null;
            }
       * 
       */
            //echo $judi->getHonorarios_tra();
            //die;
                //echo "<pre>";
                //print_r($judi);die;
       /*     
                    echo "<tr><td>";
                    echo $judi->getNumero_CNJ_Antigo_cre();
                    echo "</td><td>";
                    echo $judi->getSINISTRO_lev();
                    echo "</td><td>";
                    echo mb_strtoupper($judi->getTITULAR_h());
                    echo "</td><td>";
                    echo $judi->getDT_AVISO_h();
                    echo "</td><td>";
                    echo mb_strtoupper($judi->getSegurado_cre());
                    echo "</td><td>";
                    echo mb_strtoupper($judi->getParte_contraria_cre());
                    echo "</td><td align=right>";
                    echo $judi->getValor_cre();
                    //echo "</td><td align=right>";
                    //echo number_format($item2->getIMPORTANCIA_SEGURADA(),'2',',','.');
                    echo "</td><td align=right>";
                    echo $judi->getHonorarios_cre();
                    echo "</td><td align=right>";
                    echo $judi->getCORRECAO_TR_h();
                    echo "</td></tr>";
                    $nome=null;
                    $sinistro=null;
                    $impSegurado=null;
                    $aviso=null;
                    $impSegurado_tr=null;
                    
                    //if($x=200){
                        //die;
                    //}
                    //$x++;
     }
     
     echo "</table>";
        * 
        */
?>