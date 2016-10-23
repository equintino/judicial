<script>
    function total($x){
        var x='Total de linhas encontradas ('+$x+')';
        document.getElementById('total').innerHTML=x;
    }
    function contagem($msg,$atual){
        var atual=$atual;
        var msg="<br><i><font color=blue>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp buscando </font></i><font size=5>"+atual+"</font><i><font color=blue> registros </font></i>";//<font size=5>"+$msg+"</font>";
        document.getElementById('contagem').innerHTML=msg;
    }
function id(el) {
        document.getElementById('carregando').innerHTML='';
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
         font-size: 10px;
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
<?php
header('Content-type: text/html; charset=UTF-8');
echo "<div id=topo></div>";
function titulos(){
    $titulos=array(
            //'Natureza',
            //'UF',
            'SINISTRO',
            'TITULAR',
            'Segurado',
            'Beneficiário',
            'CPF',
            'Parte contrária',
            'Número CNJ / Antigo',
            'VALOR DEFERIDO',
            'VALOR DA CAUSA',
            'VALOR CONDENAÇÃO',
            'VALOR PEDIDO',
            'HONORÁRIOS',
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
            //$judi->getNatureza(),
            //$judi->getUF(),
            $judi->getSINISTRO(),
            $judi->getTITULAR(),
            $judi->getSegurado(),
            $judi->getbeneficiario(),
            $judi->getCPF(),
            $judi->getParte_contraria(),
            $judi->getNumero_CNJ_Antigo(),
            $judi->getVlr_deferido(),
            $judi->getVlr_da_causa(),
            $judi->getVlr_condenacao(),
            $judi->getValor_Pedido(),
            $judi->getHonorarios(),
            $judi->getCORRECAO_TR_h(),
            //$judi->getIMPORTANCIA_SEGURADA(),
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
    $Odbcsearch=new OdbcSearchCriteria();
    $Odbcdao=new OdbcDao();
    //$oracle=new Odbc();die;
    $ordem='TITULAR';
    
    $segurados=$Judidao->listaSegurados($Judisearch, $ordem);
    $atual=count($segurados);
    //$judis=$Judidao->dupliciadeAcaoAdmin($Judisearch,'SINISTRO');
    $sinistro_old=null;
    $contador=0;
    $totalAdm=0;
    for($z=7;$z<12;$z++){
     $totais[$z]=0;
    }
    $seguradoOld=null;
    $segurado=null;
    
    //echo "<pre>";
    //print_r($segurados);die;
    
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
    //echo "<div id=total></div>";
        echo "<div class=carregando id=carregando>";
         echo '<img src="img/loading.gif" alt="" id="loading" height=55px />';
         echo "<i>POR FAVOR AGUARDE...</i>";
         echo "<br>";
         echo "<div id=contagem></div>";
        echo "</div>";
        
        echo "<div id=mostra class=conteudo style='display:none'>";
        
      echo "<div class=voltar><button title='Voltar' onclick=location.href='index.php?page=acaoJudicial&act=ver' ;><img src='../web/img/action/back.png' height=15 title='Voltar'></button></div>";
    echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
      echo "<caption><h2>DUPLICADO NO ADMINSTRATIVO (COM A&Ccedil;&Otilde;ES JUDICIAIS JULGADAS)</h2></caption>";
    echo "<tr><th style=\"background-color: rgba(123, 123, 123, 0.5)\" colspan=13 align=left><div id=total></div></th></tr>";
    echo "<tr>";
    $titulos=  titulos();
      foreach($titulos as $titulo){
       $titulo_=(str_replace(' ','',$titulo));
          echo "<th class=moedas style= \"white-space: nowrap;\">";
           //echo "<a href=index.php?page=acaoJudicial&act=ver&ordem=".$titulo_.">";
            echo mb_strtoupper($titulo);
           //echo "</a>";
          echo "</th>";
      }
      echo "</tr><tr>";
      
    foreach($segurados as $item){
          //echo "<pre>";
          //print_r($segurados);
          //print_r($item->getbeneficiario());die;
       if($seguradoOld != $item->getTITULAR() || $item->getTITULAR() == ''){
           if($item->getTITULAR() == ''){
               $Odbcsearch->setnome($item->getbeneficiario());
               $odbcs=$Odbcdao->busca4($Odbcsearch);
               //print_r($odbcs);die;
           }else{
                $segurado=JudiValidator::tirarAcento($item->getTITULAR());
          //$beneficiario=
          //$segurado='francisco da silva';
                $Odbcsearch->setTITULAR($segurado);
                $odbcs=$Odbcdao->busca3($Odbcsearch);
           }
          //$item->setSegurado($segurado);
          //print_r($item);
          //echo "<pre>";
          //print_r($odbcs);
           //echo $segurado;
             //echo "<br>";
             //die;
      //}
      //die;
      //echo "<pre>";
      //print_r($segurado);die;   
        foreach($odbcs as $key => $judi){
            //ECHO "<pre>";
            //print_r($judi);die;
            //if($judi->getTITULAR() == ''){
                //echo "<pre>"; 
                //echo "não achei nada";
                //print_r($odbcs);die;
            //}
          if(mb_strlen($segurado,'utf8') == mb_strlen($judi->getTITULAR(),'utf8')){
              //echo "<pre>";
              //print_r($item);die;
            $judi->setSegurado($item->getSegurado());
            //$judi->setIMPORTANCIA_SEGURADA($item->getCORRECAO_TR_h());
            $judi->setNumero_CNJ_Antigo($item->getNumero_CNJ_Antigo());
            $judi->setParte_contraria($item->getParte_contraria());
            $judi->setbeneficiario($item->getbeneficiario());
            $judi->setVlr_deferido($item->getVlr_deferido());
            $judi->setVlr_da_causa($item->getVlr_da_causa());
            $judi->setVlr_condenacao($item->getVlr_condenacao());
            $judi->setHonorarios($item->getHonorarios());
            $judi->setValor_Pedido($item->getValor_Pedido());
            //echo "<pre>";
            //print_r($item);
            //print_r($judi);die;
            $campos=conteudo($judi);
            if($campos[0] != $sinistro_old) {
                $contador++;
                    $vlrCorrigido=$Judidao->findBySinistro($campos[0]);
                    //echo "<pre>";
                    //print_r($vlrCorrigido);die;
                    if($vlrCorrigido){
                        $judi->setCORRECAO_TR_h($vlrCorrigido->getCORRECAO_TR_h());//die;
                    }
                    //print_r($judi);
        //echo "<pre>";
        //print_r($segurados);die;
                  $campos[12]=$judi->getCORRECAO_TR_h();
        //print_r($campos);
                foreach($campos as $chaves => $campo);
                 //echo "<pre>";
                 //print_r($campos);
                for($z=0;$z<count($campos);$z++){
                 switch ($z){
                   case 0:
                    echo "<td bgcolor=white>";
                      echo mb_strtoupper($campos[$z]);
                    echo "</td>";
                    $sinistro_old=$campos[0];
                    break;
                   case 1: case 2: case 3: case 5: case 6:
                    echo "<td bgcolor=white>";
                      echo mb_strtoupper($campos[$z]);
                    echo "</td>";
                    break;
                   case 4:
                    $confirmaCpf=JudiValidator::validaCpf($campos[$z]);
                    //echo "<h1>".substr($campo, -2,2).' - '.$confirmaCpf."</h1>";
                    if(substr($campos[$z], -2,2) == $confirmaCpf){
                       echo "<td align=center bgcolor=white><font>";
                    }else{
                       echo "<td align=center bgcolor=white><font color=red>";
                    }
                       $campo_=JudiValidator::removePonto($campos[$z]);
                       echo JudiValidator::mask($campo_, '###.###.###-##');
                       echo "</font></td>";
                    break;
                   case 7: case 8: case 9: case 10: case 11:
                    echo "<td bgcolor=white align=right>";
                      //echo $campos[$z];
                      echo mb_strtoupper(number_format($campos[$z],'2',',','.'));
                    echo "</td>";
                      //$valor[$z]=$campos[$z];
                      $totais[$z]=$campos[$z]+$totais[$z];
                      break;
                    break;
                   case 12:
                    echo "<td align=right bgcolor=white>";
                      echo $campos[$z];
                      $valor=JudiValidator::trocavirgula($campos[$z]);
                      //echo $valor;die;
                      $totalAdm=$valor+$totalAdm;
                    echo "</td>";
                    break;                   
                 }
                }
                /*
                    if($chaves == 12){
                        echo "<td align=right bgcolor=white>";
                            echo $campos[12];
                            $valor=JudiValidator::trocavirgula($campos[12]);
                            //echo $valor;die;
                            $totalAdm=$valor+$totalAdm;
                        echo "</td>";
                    }elseif($chaves == 4){
                        $confirmaCpf=JudiValidator::validaCpf($campo);
                        //echo "<h1>".substr($campo, -2,2).' - '.$confirmaCpf."</h1>";
                        if(substr($campo, -2,2) == $confirmaCpf){
                           echo "<td align=center bgcolor=white><font>";
                        }else{
                           echo "<td align=center bgcolor=white><font color=red>";
                        }
                            $campo_=JudiValidator::removePonto($campo);
                            echo JudiValidator::mask($campo_, '###.###.###-##');
                        echo "</font></td>";
                    }else{
                        echo "<td bgcolor=white>";
                            echo mb_strtoupper($campo);
                        echo "</td>";
                            $sinistro_old=$campos[0];  
                    }
                    */
        //print_r($key);die;
                //}
                echo "</tr>";         
           //} die;
          }
           $sinistro_old=$campos[0]; 
        }
       }
        $atual--;
      }
      //echo $segurado;
       $seguradoOld=$segurado;
        ///// contagem dos processos /////
         echo "<script>contagem(".count($segurados).",".$atual.")</script>";
        //// ///
    }
     echo "<tr><th class=moedas style=\"background-color: #556B2F\" colspan=7 align=right>TOTAIS</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($totais[7],'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($totais[8],'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($totais[9],'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($totais[10],'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($totais[11],'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($totalAdm,'2',',','.')."</th></tr>";
     echo "</table>";
      echo "<script>total($contador);</script>";
     echo "<a href='#topo' class=topo><img src='img/setacima.ico' title='Voltar ao Topo' height=20px ></a>";
     echo "</div>";
        echo "<script>id('mostra').style.display = 'block';</script>";
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