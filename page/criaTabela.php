<?php
$Judidao=new JudiDao();

$sql="CREATE TABLE IF NOT EXISTS `duplicidade`(
  `id` INTEGER AUTO_INCREMENT PRIMARY KEY,
  `SINISTRO` varchar(40) DEFAULT NULL,
  `TITULAR` varchar(40) DEFAULT NULL,
  `Segurado` varchar(40) DEFAULT NULL,
  `beneficiario` varchar(42) DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `Parte_contraria` varchar(50) DEFAULT NULL,
  `Numero_CNJ_Antigo` varchar(28) DEFAULT NULL,
  `Vlr_deferido` varchar(10) DEFAULT NULL,
  `Vlr_da_causa` varchar(10) DEFAULT NULL,
  `Vlr_condenacao` varchar(10) DEFAULT NULL,
  `Valor_Pedido` varchar(10) DEFAULT NULL,
  `Honorarios` varchar(9) DEFAULT NULL,
  `CORRECAO_TR_h` varchar(10) DEFAULT NULL,
  `Alteracao` varchar(50) DEFAULT NULL,
  `login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$Judidao->query($sql);

//print_r($Judidao->saveJd3($judi));
/*
 * ':SINISTRO' => $judi->getSINISTRO(),
            ':TITULAR'=>$judi->getTITULAR(),
            ':Segurado' => $judi->getSegurado(),
            ':beneficiario' => $judi->getbeneficiario(),
            ':CPF'=>$judi->getCPF(),
            ':Parte_contraria' => $judi->getParte_contraria(),
            ':Numero_CNJ_Antigo' => $judi->getNumero_CNJ_Antigo(),
            ':Vlr_deferido' => $judi->getVlr_deferido(),
            ':Vlr_da_causa' => $judi->getVlr_da_causa(),
            ':Vlr_condenacao' => $judi->getVlr_condenacao(),
            ':Valor_Pedido' => $judi->getValor_Pedido(),
            ':Honorarios' => $judi->getHonorarios(),
            ':VALOR_ADMINISTRATIVO'=>$judi->getVALOR_ADMINISTRATIVO(),
            ':Alteracao' => $judi->getAlteracao(),
            ':login' => $judi->getLogin()
    [tipo:Odbc:private] => Rua
    [endereco:Odbc:private] => Riachuelo
    [numero:Odbc:private] => 35
    [complemento:Odbc:private] => 
    [bairro:Odbc:private] => Boa Esperan�a
    [municipio:Odbc:private] => Lad�rio
    [estado:Odbc:private] => MS
    [uf:Odbc:private] => 
    [cep:Odbc:private] => 79370000
    [vlindeniza:Odbc:private] => 789.9600
    [tpcobertura:Odbc:private] => 1 - MORTE
    [identidade:Odbc:private] => 
    [percentual:Odbc:private] => 50
    [tel_fixo:Odbc:private] => 
    [tel_cel:Odbc:private] => 
    [email:Odbc:private] => 
    [banco:Odbc:private] => 
    [agencia:Odbc:private] => 
    [conta:Odbc:private] => 
    [abertura:Odbc:private] => DateTime Object
        (
            [date] => 2016-10-23 22:53:14.000000
            [timezone_type] => 3
            [timezone] => America/Sao_Paulo
        )

    [modificacao:Odbc:private] => DateTime Object
        (
            [date] => 2016-10-23 22:53:14.000000
            [timezone_type] => 3
            [timezone] => America/Sao_Paulo
        )

    [exclui:Odbc:private] => 
    [centavos:Odbc:private] => 
    [certificado:Odbc:private] => 
    [id:Odbc:private] => 
    [codigo:Odbc:private] => 
    [cobertura:Odbc:private] => 
    [TITULAR:Odbc:private] => 
    [IMPORTANCIA_SEGURADA:Odbc:private] => 0
    [ENDOSSO:Odbc:private] => 
    [DT_AVISO:Odbc:private] => 
    [DT_DOC_OK:Odbc:private] => 
    [DT_SINISTRO:Odbc:private] => 
    [CPF:Odbc:private] => 31393969100
    [Numero_CNJ_Antigo:Odbc:private] => 0004964-22.2011.8.12.0008
    [Parte_contraria:Odbc:private] => Nilza Gomes Dos Santos
    [CORRECAO_TR_h:Odbc:private] => 2.541,04
    [beneficiario:Odbc:private] => NILZA GOMES DOS SANTOS
    [Segurado:Odbc:private] => 
    [Vlr_deferido:Odbc:private] => 0.00
    [Vlr_da_causa:Odbc:private] => 3354.78
    [Vlr_condenacao:Odbc:private] => 0.00
    [Valor_Pedido:Odbc:private] => 0.00
    [Honorarios:Odbc:private] => 0.00
 * 
 */

?>

