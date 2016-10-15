<?php
?>
<!doctype html>
<!--<html lang="en">-->
<head>
	<meta charset="UTF-8">

<script type="text/javascript">
function id(el) {
	return document.getElementById(el);
}
function hide(el) {
	id(el).style.display = 'none';//escondendo tudo
}
window.onload = function() {
	id('all').style.display = 'block';//liberando quando terminar
	hide('loading');
}
</script>
<style>
#loading { 
	display: block;
	width: 200px;
}
.content { margin: 0 auto; }
#all {
	width: 1680px; overflow: hidden;
}
</style>
</head>
<body>
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
            'DUPLICADO',
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
@$act=$_GET['act'];
$errors = array();
$judi = null;
$edit = array_key_exists('id', $_GET);
@$ordem = $_GET['ordem'];
@$atualiza = $_GET['atualiza'];

    $Tododao=new TodoDao();
    $Todosearch=new TodoSearchCriteria();
    $Odbcdao=new OdbcDao();
    $Odbcsearch=new OdbcSearchCriteria();
    $Oracledao=new OracleDao();
    $Oraclesearch=new OracleSearchCriteria();
    
    $Judidao=new JudiDao();
    $Judisearch=new JudiSearchCriteria();
	//echo '<section id="all" class="content">';
    
if(@$act=='ver'){
    //$ordem='Segurado asc';
    $judis=$Judidao->listaAcao($Judisearch,$ordem);// tabela transito x credito
    //echo "<pre>";
    //print_r($judis);
    //echo '<img src="http://3.bp.blogspot.com/-Bo2GNAVNb90/URkAlN-0V_I/AAAAAAAACfs/VHFT6oP1ZTk/s1600/Loading+-+Carregando+%252826%2529.gif" alt="" id="loading" class="content"/>';
        echo "<div id=esconde style='display:none'>";
    
    $titulos=titulos(); 
    
      echo "<div class=voltar><a href='index.php'><button title='Voltar'><img src='../web/img/action/back.png' height=20 title='Voltar'></button></a></div>";
      //echo "<a href='index.php?page=acaoJudicial&act=cadastro'><button title='Adcionar Linha'><img src='../web/img/add.ico' height=20 title='Adcionar Linha' class=add></button></a></div>";
      echo "<table border=1 align=center cellspacing=0 spanspacing=0 class=\"tabela\">";
      echo "<caption><h1>A&Ccedil;&Otilde;ES TRANSITADO E JULGADO</h1></caption>";
      //echo "<tr>";
    echo "<tr><th style=\"background-color: rgba(123, 123, 123, 0.5)\" colspan=12 align=left> Total de linhs ".  number_format(count($judis),'0','','.')."</th><th style=\"background-color: rgba(123, 123, 123, 0.5)\" ><button  class=btn onclick=atualiza() title='Clique aqui para atualizar'><img src=img/atualizar.png height=20px></button></th></tr>";
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
      $x=0; 
      $deferido=$causa=$condenacao=$honorario=$certidao=$pedido=null;
      
      //echo "<pre>";
      //print_r($judis);die;
      
      echo "<tr>";
      $titularOld='inicial';
      $titular_=null;
      foreach($judis as $judi){
          //if($x==10)die;
       if($atualiza == 1){
        if(!$judi->getSINISTRO() && $judi->getSegurado() != null){
         $Odbcsearch->setTITULAR(JudiValidator::tirarAcento($judi->getSegurado()));
         //print_r($Odbcsearch);die;
         $sinistrado=$Odbcdao->busca3($Odbcsearch);
         //print_r($sinistrado);die;
         foreach($sinistrado as $keys => $item){
            $sinistro_=$item->getsinistro();
            $titular_=$item->getTITULAR();
         }
         if($titular_ != $titularOld){
            $judi->setTITULAR_h($titular_);
            @$judi->setSINISTRO($sinistro_);
         }
        }
           $titularOld=$titular_; 
       }
           
      
           ///// Construindo a tabela ////
       $campos=conteudo($judi);
       
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
       $id=$judi->getId();
       //echo "<td class=edicao ><a href='index.php?page=acaoJudicial&act=cadastro&id=".$judi->getId()."' ><img src='../web/img/lapis.gif' height=20 title='Fazer Altera&ccedil;&otilde;es'/></a></td>";
       //echo "<td class=edicao onclick=excluir($id)>&nbsp<img src='../web/img/excluir.png' height=13 title='Excluir Linha'/>&nbsp</td>";
       //echo "<td class=edicao ><a href='index.php?page=delete&id=".$judi->getId()."' ><img src='../web/img/excluir.png' height=13 title='Excluir Linha'/></a></td>";
       echo "</tr>";
       //$Odbcsearch->setSINISTRO(null);
       //$Odbcsearch->setTITULAR(null);
       //$judi->setTITULAR_h(null);
       unset($sinistro,$titular);
       $x++;
     }
      
      //echo '</section>';
      
      
      
     echo "<tr><th class=moedas style=\"background-color: #556B2F\" colspan=6 align=right>TOTAIS</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($deferido,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($causa,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($condenacao,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($honorario,'2',',','.')."</th><th style=\"background-color: #556B2F\" align=right>R$ ".number_format($pedido,'2',',','.')."</th><th colspan=2 style=\"background-color: #556B2F\"></th></tr>";
     echo "</table>";
     echo "<script>total($x)</script>";
     echo "<a href='#topo' class=topo><img src='img/setacima.ico' title='Voltar ao Topo'></a>";
     echo "<script>id('esconde').style.display = 'block';</script>";
     
}
  echo '</section';
            ?>
            <!--<div class=voltar><a href='index.php'><button title='Voltar'><img src='../web/img/action/back.png' height=20 title='Voltar'></button></a>
               <table border=1 align=center cellspacing=0 spanspacing=0 class="tabela">
                   <caption><h1>A&Ccedil;&Otilde;ES TRANSITADO E JULGADO</h1></caption>
                   <tr><th style="background-color: rgba(123, 123, 123, 0.5)" colspan=12 align=left> Total de linhs "<?php  //number_format(count($judis),'0','','.') ?>"</th><th style=\"background-color: rgba(123, 123, 123, 0.5)\" ><button  class=btn onclick=atualiza() title='Clique aqui para atualizar'><img src=img/atualizar.png height=20px></button></th></tr>
               </table>
            </div>-->
		<!--<img src="http://fc03.deviantart.net/fs25/f/2009/250/e/5/Within_Temptation___Utopia_by_KigaMistriver.jpg" alt="">
		<img src="http://images.fanpop.com/images/image_uploads/within-temptation-within-temptation-595989_1672_1417.jpg" alt="">
		<img src="http://images4.alphacoders.com/247/247868.gif" alt="">-->
		<!--<img src="http://www.withinforever.xpg.com.br/within_temptation_wallpaper_3_1024x768.jpg" alt="">
	<!-- #all -->

	<img src="http://3.bp.blogspot.com/-Bo2GNAVNb90/URkAlN-0V_I/AAAAAAAACfs/VHFT6oP1ZTk/s1600/Loading+-+Carregando+%252826%2529.gif" alt="" id="loading" class="content"/>


<script type="text/javascript">
	hide('all');
</script>

</body>
</html>

