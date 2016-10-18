<script>
    function total($x){
        var x='Total de linhas encontradas ('+$x+')';
        document.getElementById('total').innerHTML=x;
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
            'Número CNJ / Antigo',
            'Parte contrária',
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
            //$judi->getNatureza(),
            //$judi->getUF(),
            $judi->getSINISTRO(),
            $judi->getTITULAR(),
            $judi->getnome(),
            $judi->getNumero_CNJ_Antigo(),
            $judi->getParte_contraria(),
            $judi->getCPF(),
            $judi->getIMPORTANCIA_SEGURADA(),
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
    //$judis=$Judidao->dupliciadeAcaoAdmin($Judisearch,'SINISTRO');
    $sinistro_old=null;
    $contador=0;
    $totalAdm=0;
    $seguradoOld=null;
    
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
        echo "<div class=carregando>";
	echo '<img src="img/loading.gif" alt="" id="loading" height=55px />';
        echo "<i>POR FAVOR AGUARDE...</i>";
        echo "</div>";
        
        echo "<div id=mostra class=conteudo style='display:none'>";
      echo "<div class=voltar><button title='Voltar' onclick=location.href='index.php?page=acaoJudicial&act=ver' ;><img src='../web/img/action/back.png' height=15 title='Voltar'></button></div>";
    echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
      echo "<caption><h2>DUPLICADO NO ADMINSTRATIVO (COM A&Ccedil;&Otilde;ES JUDICIAIS JULGADAS)</h2></caption>";
    echo "<tr><th style=\"background-color: rgba(123, 123, 123, 0.5)\" colspan=7 align=left><div id=total></div></th></tr>";
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
       if($seguradoOld != $item->getTITULAR()){
          $segurado=JudiValidator::tirarAcento($item->getTITULAR());
          $Odbcsearch->setTITULAR($segurado);
          $odbcs=$Odbcdao->busca3($Odbcsearch);
          //echo "<pre>";
          //PRINT_R($Odbcsearch);
          //print_r($odbcs);die;
          //$item->setSegurado($segurado);
          //print_r($item);
           //echo $segurado;
             //echo "<br>";
             //die;
      //}
      //die;
      //echo "<pre>";
      //print_r($segurado);die;   
        foreach($odbcs as $key => $judi){
          if(mb_strlen($segurado,'utf8') == mb_strlen($judi->getTITULAR(),'utf8')){
            $judi->setnome($item->getSegurado());
            $judi->setIMPORTANCIA_SEGURADA($item->getCORRECAO_TR_h());
            $judi->setNumero_CNJ_Antigo($item->getNumero_CNJ_Antigo());
            $judi->setParte_contraria($item->getParte_contraria());
            //echo "<pre>";
            //print_r($item);
            //print_r($judi);die;
            $campos=conteudo($judi);
            if($campos[0] != $sinistro_old) {
                $contador++;
        //echo "<pre>";
        //print_r($campos);die;
                foreach($campos as $chaves => $campo){
         //print_r($campos);die;
        //echo $campo->getSINISTRO();die;
                    if($chaves == 6){
                        echo "<td align=right bgcolor=white>";
                            echo $campo;
                            $totalAdm=JudiValidator::trocavirgula($campo)+$totalAdm;
                        echo "</td>";
                    }elseif($chaves == 5){
                        echo "<td align=center bgcolor=white>";
                            $campo_=JudiValidator::removePonto($campo);
                            echo JudiValidator::mask($campo_, '###.###.###-##');
                            //$sinistro_old=$campos[0];
                        echo "</td>";
                    }else{
                        echo "<td bgcolor=white>";
                            echo mb_strtoupper($campo);
                        echo "</td>";  
                    }
        //print_r($key);die;
                }
                echo "</tr>";
            }
          }
        }
      }
          $seguradoOld=$segurado;
    }
     echo "<tr><th class=moedas style=\"background-color: #556B2F\" colspan=6 align=right>TOTAL</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($totalAdm,'2',',','.')."</th></tr>";
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