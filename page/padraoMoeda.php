<?php
 $judiDao=new JudiDao();
 $Judisearch=new JudiSearchCriteria();
 
 $judis=$judiDao->listacredito($Judisearch,'id');
 
 //// converte virgula para ponto ///
 foreach($judis as $item){
  $id[]=$item->getId();
  $deferido[]=$item->getVlr_deferido();
  $item->setVlr_deferido(JudiValidator::trocavirgula($item->getVlr_deferido()));
  $causa[]=$item->getVlr_da_causa();
  $item->setVlr_da_causa(JudiValidator::trocavirgula($item->getVlr_da_causa()));
  $condenacao[]=$item->getVlr_condenacao();
  $item->setVlr_condenacao(JudiValidator::trocavirgula($item->getVlr_condenacao()));
  $honorarios[]=$item->getHonorarios();
  $item->setHonorarios(JudiValidator::trocavirgula($item->getHonorarios()));
  $credito[]=$item->getVlr_certidao_de_credito();
  $item->setVlr_certidao_de_credito(JudiValidator::trocavirgula($item->getVlr_certidao_de_credito()));
  //$judiDao->saveJd($item);// salvar na tabela
 }
 echo "<pre>";
 //print_r($honorarios);die;
 //echo array_sum($honorarios);die;
 echo number_format((array_sum($honorarios)),'2',',','.');
 //print_r(number_format(JudiValidator::removePonto(array_sum($honorarios)),'2',',','.'));
 echo "<br>";
 print_r(number_format(array_sum($credito),'2',',','.'));
?>

