<!--<script>
    function total($x){
        var x='Total de processos encontrados ('+$x+')';
        document.getElementById('total').innerHTML=x;
    }
</script>-->
<?php
header('Content-type: text/html; charset=UTF-8');
function titulos(){
    $titulos=array(
            //"Número CNJ / Antigo",
            //'Natureza',
            //'UF',
            //'Parte contrária',
            'SINISTRO',
            'Segurado',
            'TITULAR',
            'CPF',
            'VALOR ADMINISTRATIVO',
            //'Faixa de Probabilidade',
            //'Valor Deferido',
            //'Valor da causa',
            //'Valor condenação',
            //'Valor Pedido',
            //'Honorários',
            //'Valor certidão de crédito',
            //'OBS',
            //'DUPLICADO',
            //'TITULAR',
            //'id',
       );
    return $titulos;
}
function conteudo($judi){
       $campos=array(
            //$judi->getNumero_CNJ_Antigo(),
            //$judi->getNatureza(),
            //$judi->getUF(),
            $judi->getSINISTRO_h(),
            $judi->getSegurado(),
            $judi->getTITULAR_h(),
            $judi->getCPF_h(),
            $judi->getCORRECAO_TR_h(),
            //$judi->getFaixa_de_Probabilidade(),
            //$judi->getVlr_deferido(),
            //$judi->getVlr_da_causa(),
            //$judi->getVlr_condenacao(),
            //$judi->getValor_Pedido(),
            //$judi->getHonorarios(),
            //$judi->getVlr_certidao_de_credito(),
            //$judi->getOBS(),
            //$judi->getId(),
            //$judi->getSINISTRO(),
            //$judi->getTITULAR_h(),
       );
       return $campos;
}

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
    
    $Judidao=new JudiDao();
    $Judisearch=new JudiSearchCriteria();
    //$oracle=new Odbc();die;
    
    $campos=$Judidao->dupliciadeAcaoAdmin($Judisearch,'SINISTRO');
    
    //echo "<pre>";
    //print_r($judis);
    
    //print_r(get_class_methods($Judidao));die;
    //echo "<pre>";
     //$Odbcsearch->setTITULAR(JudiValidator::tirarAcento($judi->getSegurado()));
     
     //echo "<br>";
    //print_r(get_class_methods($Odbcdao));
    //$Odbcdao->listaCampo($tabela,$campo,$busca);
          //$sinistrado=$Odbcdao->busca3($Odbcsearch);
    //$dao->busca3($search)
    //print_r($Odbcsearch);
    //echo "<pre>";
    
    /*
    
    foreach($sinistrado as $keys => $item){
       $sinistro[]=$item->getsinistro();
       $titular[]=$item->getTITULAR();
    }
    
    */
    
    
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
     * 
     */
    echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
    $titulos=  titulos();
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
      //$campos=conteudo($judi);
       
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
                    $totalDuplicidade++;
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
    /*
      echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
      echo "<tr><th>N&Uacute;MERO CNJ / ANTIGO</th><th>SINISTRO</th><th>SEGURADO</th><th>AVISO</th><th>PARTE CONTR&Aacute;RIA</th><th>VALOR PEDIDO</th><th>HONOR&Aacute;RIOS</th><th>VALOR ADMINISTRATIVO</th></tr>";die;

/*

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