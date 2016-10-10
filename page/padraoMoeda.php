<meta charset="utf-8">
<?php
 $judiDao=new JudiDao();
 $Judisearch=new JudiSearchCriteria();
 
 //$judis=$judiDao->listacredito($Judisearch,'id');/// tabela credito
 $judis=$judiDao->listaAcao($Judisearch,'id');/// tabela acao
 
 //// converte virgula para ponto ///
 foreach($judis as $item){
  $id[]=$item->getId();
  $deferido[]=$item->getVlr_deferido();
  $item->setVlr_deferido(JudiValidator::trocavirgula($item->getVlr_deferido()));
  $causa[]=$item->getVlr_da_causa();
  $item->setVlr_da_causa(JudiValidator::trocavirgula($item->getVlr_da_causa()));
  $condenacao[]=$item->getVlr_condenacao();
  $item->setVlr_condenacao(JudiValidator::trocavirgula($item->getVlr_condenacao()));
  $pedido[]=$item->getValor_Pedido();
  $item->setValor_Pedido(JudiValidator::trocavirgula($item->getValor_Pedido()));
  $honorarios[]=$item->getHonorarios();
  $item->setHonorarios(JudiValidator::trocavirgula($item->getHonorarios()));
  $credito[]=$item->getVlr_certidao_de_credito();
  $item->setVlr_certidao_de_credito(JudiValidator::trocavirgula($item->getVlr_certidao_de_credito()));
  
  //$judiDao->saveJd($item);// salvar na tabela certidao
  //$judiDao->saveJd2($item);// salvar na tabela certidao
  
 }
 //echo "<pre>";
 //print_r($honorarios);die;
 //echo array_sum($honorarios);die;
 echo number_format((array_sum($honorarios)),'2',',','.');
 //print_r(number_format(JudiValidator::removePonto(array_sum($honorarios)),'2',',','.'));
 echo "<br>";
 //print_r(number_format(array_sum($credito),'2',',','.'));
?>

