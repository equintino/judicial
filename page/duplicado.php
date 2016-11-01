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
    function contagem2($tempo){
        var tempo_=$tempo;
        var msg="<br><i><font color=#606060 size=1>"+tempo_+" segundos</font></i>";//<font size=5>"+$msg+"</font>";
        document.getElementById('tempo').innerHTML=msg;
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
        position: fixed;
        left: 39%;
        top: 130px;
    }
     .tempo{
         position: absolute;
         top: 30px;
         left: 15px;
     }
</style>
<?php
header('Content-type: text/html; charset=UTF-8');
$time = time(true);
echo "<div id=topo></div>";
function titulos(){
    $titulos=array(
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
    );
    return $titulos;
}
function conteudo($judi){
    $campos=array(
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
    );
    return $campos;
}

$Judidao=new JudiDao();
$Judisearch=new JudiSearchCriteria();
$Odbcsearch=new OdbcSearchCriteria();
$Odbcdao=new OdbcDao();
$ordem='TITULAR';

$segurados=$Judidao->listaSegurados($Judisearch, $ordem);
//echo '<pre>';
//print_r($segurados);die;
$atual=count($segurados);
$sinistro_old=null;
$contador=0;
$totalAdm=0;
for($z=7;$z<12;$z++){
    $totais[$z]=0;
}
$seguradoOld=null;
$segurado=null;

echo "<div id=tempo class=tempo></div>";
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

$sinistros=array();
foreach($segurados as $item){
    echo "<div><script>contagem2('".(time(true) - $time)."');</script></div>";
    if($seguradoOld != $item->getTITULAR() || $item->getTITULAR() == ''){
        if($item->getTITULAR() != ''){
            $segurado=JudiValidator::tirarAcento($item->getTITULAR());
            $Odbcsearch->setTITULAR($segurado);
            $odbcs=$Odbcdao->busca3($Odbcsearch);
            //if($item->getTITULAR()=='FRANCISCO GONÇALVES DA SILVA'){
             //echo $segurado;
             //echo '<br>';
             //echo "<pre>";
             //print_r($odbcs);
            //}
            if(!$odbcs){
              $Odbcsearch->setnome($item->getbeneficiario());
              $odbcs=$Odbcdao->busca4($Odbcsearch);
            }
        }else{
            $Odbcsearch->setnome($item->getbeneficiario());
            $odbcs=$Odbcdao->busca4($Odbcsearch);         
        }
        foreach($odbcs as $key => $judi){
          if(!in_array($judi->getSINISTRO(),$sinistros)){
            //if(mb_strlen($segurado,'utf8') == mb_strlen($judi->getTITULAR(),'utf8')){
                $judi->setSegurado($item->getSegurado());
                $judi->setNumero_CNJ_Antigo($item->getNumero_CNJ_Antigo());
                $judi->setParte_contraria($item->getParte_contraria());
                $judi->setbeneficiario($item->getbeneficiario());
                $judi->setVlr_deferido($item->getVlr_deferido());
                $judi->setVlr_da_causa($item->getVlr_da_causa());
                $judi->setVlr_condenacao($item->getVlr_condenacao());
                $judi->setHonorarios($item->getHonorarios());
                $judi->setValor_Pedido($item->getValor_Pedido());
                $campos=conteudo($judi);
                if($campos[0] != $sinistro_old) {
                    $contador++;
                    $vlrCorrigido=$Judidao->findBySinistro($campos[0]);
                    if($vlrCorrigido){
                        $judi->setCORRECAO_TR_h($vlrCorrigido->getCORRECAO_TR_h());
                    }
                    $campos[12]=$judi->getCORRECAO_TR_h();
                    foreach($campos as $chaves => $campo);
                    for($z=0;$z<count($campos);$z++){
                        switch ($z){
                            case 0:
                                echo "<td bgcolor=white>";
                                echo mb_strtoupper($campos[$z]);
                                echo "</td>";
                                $sinistro_old=$campos[0];
                                $sinistros[]=$campos[0];
                                break;
                            case 1: case 2: case 3: case 5: case 6:
                            echo "<td bgcolor=white>";
                            echo mb_strtoupper($campos[$z]);
                            echo "</td>";
                            break;
                            case 4:
                                $confirmaCpf=JudiValidator::validaCpf($campos[$z]);
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
                            echo mb_strtoupper(number_format($campos[$z],'2',',','.'));
                            echo "</td>";
                            $totais[$z]=$campos[$z]+$totais[$z];
                            break;
                            break;
                            case 12:
                                echo "<td align=right bgcolor=white>";
                                echo $campos[$z];
                                $valor=JudiValidator::trocavirgula($campos[$z]);
                                $totalAdm=$valor+$totalAdm;
                                echo "</td>";
                                break;
                        }
                    }
                    echo "</tr>";
                    //echo "<pre>";
                    //print_r($judi);
                    //$Judidao->saveJd3($judi);die;
                }
                $sinistro_old=$campos[0];
               //$sinistros[]=$campos[0];
            //}
          }
        }
        $atual--;
    }
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
?>