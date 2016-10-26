<?php
    $judidao=new JudiDao();
    $sql="CREATE TABLE IF NOT EXISTS `acoes_transitado_julgado` (
      `Numero_CNJ_Antigo` varchar(28) NOT NULL UNIQUE,
      `Natureza` varchar(11) DEFAULT NULL,
      `UF` varchar(19) DEFAULT NULL,
      `Parte_contraria` varchar(96) DEFAULT NULL,
      `Segurado` varchar(51) DEFAULT NULL,
      `Faixa_de_Probabilidade` varchar(20) DEFAULT NULL,
      `Vlr_deferido` decimal(12,2) DEFAULT NULL,
      `Vlr_da_causa` decimal(12,2) DEFAULT NULL,
      `Vlr_condenacao` decimal(12,2) DEFAULT NULL,
      `Valor_Pedido` decimal(12,2) DEFAULT NULL,
      `Honorarios` decimal(12,2) DEFAULT NULL,
      `OBS` varchar(8) DEFAULT NULL,
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `Alteracao` varchar(50) NOT NULL,
      `login` varchar(10) NOT NULL,
      `SINISTRO` varchar(100) NOT NULL,
      `ok` int(1) NOT NULL DEFAULT '0',
      `TITULAR` varchar(100) NOT NULL,
      `VALOR_ADMINISTRATIVO` decimal(12,2) NOT NULL,
      `beneficiario` varchar(100) NOT NULL,
      `excluido` int(1) NOT NULL DEFAULT '0',
       PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8";
    $judidao->query($sql);
?>

