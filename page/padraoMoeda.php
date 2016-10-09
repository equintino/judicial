<?php
 $judiDao=new JudiDao();
 $Judisearch=new JudiSearchCriteria();
 
 $judis=$judiDao->listacredito($Judisearch,'id');
 echo "<pre>";
 print_r($judis);
 foreach($judis as $item){
  echo $item->getId();
  echo " - ";
  echo $item->getVlr_deferido();
  echo " - ";
  echo $item->getVlr_da_causa();
  echo " - ";
  echo $item->getVlr_condenacao();
  echo " - ";
  echo $item->getHonorarios();
  echo " - ";
  echo $item->getVlr_certidao_de_credito();
  echo "<br>";
 }
?>

