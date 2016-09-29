<script>
    function total($x){
        var x='Total de processos encontrados ('+$x+')';
        document.getElementById('total').innerHTML=x;
    }
</script>
<?php
header('Content-type: text/html; charset=UTF-8');

 /*
    @$filename=$_GET['arquivo'];
    $mode='r';
    @$handle=fopen($filename, $mode);
    
    @$dados=file($filename);
    @$conteudo = fread ($handle, filesize ($filename));
    
    @fclose($handle);
 
 */   
    echo "<div id=total ></div>";
    $Tododao=new TodoDao();
    $Todosearch=new TodoSearchCriteria();
    $Odbcdao=new OdbcDao();
    $Odbcsearch=new OdbcSearchCriteria();
    //$Todo=new Todo();
    //$odbc=new Odbc();
    $Oracledao=new OracleDao();
    $Oraclesearch=new OracleSearchCriteria();
    
    $Judidao=new JudiDao();
    $Judisearch=new JudiSearchCriteria();
    //$oracle=new Odbc();die;
    
    //print_r($Odbcsearch);die;
    
    //print_r(get_class_methods($Judidao));die;
            
    //print_r(get_class_methods($Odbcdao));die;
    
    
    
    $judis=$Judidao->listaProvavel3($Judisearch);// tabela transito julgado
    
      echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
      echo "<tr><th>N&Uacute;MERO CNJ / ANTIGO</th><th>SINISTRO</th><th>SEGURADO</th><th>AVISO</th><th>SEGURADO_TRA</th><th>PARTE CONTR&Aacute;RIA</th><th>VALOR PEDIDO</th><th>HONOR&Aacute;RIOS</th><th>VALOR ADMINISTRATIVO</th></tr>";



    //die;
     //echo "<pre>";
        //print_r($judis);
     //echo "</pre>";die;
      $x=0;
     foreach($judis as $judi){
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
            //echo $judi->getHonorarios_tra();
            //die;
                //echo "<pre>";
                //print_r($item->getnome());
            
                    echo "<tr><td>";
                    echo $judi->getNumero_CNJ_Antigo_tra();
                    echo "</td><td>";
                    echo $sinistro;
                    echo "</td><td>";
                    echo mb_strtoupper($nome);
                    echo "</td><td>";
                    echo $aviso;
                    echo "</td><td>";
                    echo mb_strtoupper($judi->getSegurado_tra());
                    echo "</td><td>";
                    echo mb_strtoupper($judi->getParte_contraria_tra());
                    echo "</td><td align=right>";
                    echo $judi->getValor_tra();
                    //echo "</td><td align=right>";
                    //echo number_format($item2->getIMPORTANCIA_SEGURADA(),'2',',','.');
                    echo "</td><td align=right>";
                    echo $judi->getHonorarios_tra();
                    echo "</td><td align=right>";
                    echo $impSegurado_tr;
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
     die;
    
    //echo "<pre>";
    //print_r($judis);
    //echo "</pre>";
    //die;
    
    //die;
    /*
    //print_r($Tododao->find5());die;
    echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
    echo "<tr><th>SINISTRO</th><th>SEGURADO</th><th>PARTE CONTR&Aacute;RIA</th><th>VALOR PEDIDO</th><th>HONOR&Aacute;RIOS</th><th>POSSIVEL</th><th>PROVAVEL</th></tr>";
    foreach($Tododao->find5() as $possivel){
     //print_r($Tododao->find5());die;
      echo "<tr><td>";
      echo $possivel->getSINISTRO();
      echo "</td><td>";
      echo $possivel->getSEGURADOS();
      echo "</td><td>";
      echo $possivel->getPARTE_CONTRARIA();
      echo "</td><td>";
      echo $possivel->getVALOR_PEDIDO();
      echo "</td><td>";
      echo $possivel->getHONORARIOS();
      echo "</td><td>";
      echo @$possivel->getPOSSIVEL();
      //echo "</td><td>";
      //$Todosearch->setSEGURADOS($possivel->getSEGURADOS());
      //print_r($Todosearch);
      //$provavel=$Tododao->find6($Todosearch);
      //print_r($provavel);
      //echo @$provavel->getPROVAVEL();
      echo "</td><td>";
    }
      echo "</tr></table>";
    
      die;
     * 
     */
    /*  
    @$sinistro= $_POST['num_sinistro'];
    if(@!$sinistro){
       @$sinistro= $_GET['num_sinistro']; 
    }
    @$sinistrado=$_POST['sinistrado'];
    if(@!$sinistrado){
       @$sinistrado=$_GET['sinistrado'];//  OdbcValidator::tirarAcento($_GET['sinistrado']); 
    }
    @$processo=$_POST['processo'];
    if(@!$processo){
       @$processo=$_GET['processo']; 
    }    
    $Todosearch->setSINISTRO($sinistro);
    $Todosearch->setSEGURADOS($sinistrado);
    $Todosearch->setN_PROC($processo);
    
    $todos=$Tododao->find($Todosearch);
    //echo @$sinistrado;die;
     
     //print_r($todos);die;  
    //$Oraclesearch->setSINISTRO($sinistro);
    //$Oraclesearch->setSEGURADOS($sinistrado);
    //$Oraclesearch->setN_PROC($processo);
    
    //$oracles=$Oracledao->find($Oraclesearch);
    //$OracleSeaech->
    
    //print_r($todos);die;
    
    echo "<div class=judiciais>";
    /*
    if(!$todos){
        echo "<b>Nenhum resultado foi obtido</b>";
    }else{
        echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
        echo "<tr><th>SINISTRO</th><th>PROCESSO</th><th>PROC. ANTIGO</th><th>SEGURADO</th><th>OBS.</th></tr>";
        foreach($todos as $item){
            echo "<tr><td>";
            echo $item->getSINISTRO();
            echo "</td><td>";
            echo $item->getN_PROC();
            echo "</td><td align=right>";
            echo $item->getN_NATIGO();
            echo "</td><td>";
            echo $item->getSEGURADOS();
            echo "</td><td>";
            echo $item->getOBS();
            echo "</td></tr>";
        }
        echo "</table>";
    }
    
     * 
     */
    //$dao=new OdbcDao();
    
    //print_r($todos);
    //echo "<br><br>";
    //print_r($oracles);die;
    /*
    $x=0;
    if($todos){
     //echo "existe todos";die;
     //print_r($todos);
        echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
        echo "<tr><th>SINISTRO</th><th>SEGURADO</th><th>PARTE CONTR&Aacute;RIA</th><th>VALOR PEDIDO</th><th>VALOR ADMINISTRATIVO</th><th>HONOR&Aacute;RIOS
</th><th>POS/PROV</th><th>DIGITADOR</th></tr>";
        foreach($todos as $item){          
            $search->setsinistro($item->getSINISTRO());
            $odbcs=$dao->busca3($search);
            foreach($odbcs as $item2);
            //print_r($item2);die;
                //$search->setsinistro($item->getSINISTRO());
                //echo "<tr><td>";
                //echo($item->getsinistro());
                //echo "</td>";
                //@$todos=$Tododao->busca6($search);
            //if($todos){
             //print_r($todos);die;
                //foreach($todos as $item3){
                    echo "<tr><td>";
                    echo $item->getSINISTRO();
                    echo "</td><td>";
                    echo $item->getSEGURADOS();
                    echo "</td><td>";
                    echo $item->getPARTE_CONTRARIA();
                    echo "</td><td align=right>";
                    echo $item->getVALOR_PEDIDO();
                    echo "</td><td align=right>";
                    echo number_format($item2->getIMPORTANCIA_SEGURADA(),'2',',','.');
                    echo "</td><td align=right>";
                    echo $item->getHONORARIOS();
                    echo "</td><td>";
                    if($item->getPOSSIVEL()){
                     echo $item->getPOSSIVEL();
                    }elseif($item->getPROVAVEL()){
                     echo $item->getPROVAVEL();
                    }
                    echo "</td><td align=center>";
                     echo $item->getDIGITADOR();
                    echo "</td></tr>";
                    $x++;
                //}
           // }
        }
        echo "</table>";
    }
    
    echo "<script>total($x);</script>";
    //print_r($odbcs);
    //echo "<br><br>";
    //print_r($search);
    echo "</div>";
     * 
     */
?>