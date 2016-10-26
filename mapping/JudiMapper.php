<?php

class JudiMapper {
 
   public static function map(Judi $judi, array $properties) {
        if (array_key_exists('id_h', $properties)) {
            $judi->setid_h($properties['id_h']);
        }
        if (array_key_exists('Numero_CNJ_Antigo_con', $properties)) {
            $judi->setNumero_CNJ_Antigo_con($properties['Numero_CNJ_Antigo_con']);
        }
        if (array_key_exists('CORRECAO_TR_h', $properties)) {
            $judi->setCORRECAO_TR_h($properties['CORRECAO_TR_h']);
        }
        if (array_key_exists('CORRECAO_IGPM_h', $properties)) {
            $judi->setCORRECAO_IGPM_h($properties['CORRECAO_IGPM_h']);
        }
        if (array_key_exists('IMPORTANCIA_SEGURADA_h', $properties)) {
            $judi->setIMPORTANCIA_SEGURADA_h($properties['IMPORTANCIA_SEGURADA_h']);
        }
        if (array_key_exists('CPF_h', $properties)) {
            $judi->setCPF_h($properties['CPF_h']);
        }
        if (array_key_exists('TITULAR_h', $properties)) {
            $judi->setTITULAR_h($properties['TITULAR_h']);
        }
        if (array_key_exists('TITULAR', $properties)) {
            $judi->setTITULAR($properties['TITULAR']);
        }
        if (array_key_exists('DT_AVISO_h', $properties)) {
            $judi->setDT_AVISO_h($properties['DT_AVISO_h']);
        }
        if (array_key_exists('SINISTRO_h', $properties)) {
            $judi->setSINISTRO_h($properties['SINISTRO_h']);
        }
        if (array_key_exists('ENDOSSO_h', $properties)) {
            $judi->setENDOSSO_h($properties['ENDOSSO_h']);
        }
        if (array_key_exists('APOLICE_h', $properties)) {
            $judi->setAPOLICE_h($properties['APOLICE_h']);
        }
        if (array_key_exists('id_lev', $properties)) {
            $judi->setid_lev($properties['id_lev']);
        }
        if (array_key_exists('DIGITADOR_lev', $properties)){
            $judi->setDIGITADOR_lev($properties['DIGITADOR_lev']);
        }
        if (array_key_exists('PROVAVEL_lev', $properties)) {
            $judi->setPROVAVEL_lev($properties['PROVAVEL_lev']);
        }
        if (array_key_exists('POSSIVEL_lev', $properties)) {
            $judi->setPOSSIVEL_lev($properties['POSSIVEL_lev']);
        }
        if (array_key_exists('HONORARIOS_lev', $properties)){
            $judi->setHONORARIOS_lev($properties['HONORARIOS_lev']);
        }
        if (array_key_exists('VALOR_ADMINISTRATIVO_lev', $properties)){
            $judi->setVALOR_ADMINISTRATIVO_lev($properties['VALOR_ADMINISTRATIVO_lev']);
        }
        if (array_key_exists('VALOR_PEDIDO_lev', $properties)){
            $judi->setVALOR_PEDIDO_lev($properties['VALOR_PEDIDO_lev']);
        }
        if (array_key_exists('PARTE_CONTRARIA_lev', $properties)){
            $judi->setPARTE_CONTRARIA_lev($properties['PARTE_CONTRARIA_lev']);
        }
        if (array_key_exists('SEGURADO_lev', $properties)){
            $judi->setSEGURADO_lev($properties['SEGURADO_lev']);
        }
        if (array_key_exists('SINISTRO_lev', $properties)){
            $judi->setSINISTRO_lev($properties['SINISTRO_lev']);
        }
        if (array_key_exists('id_con', $properties)){
            $judi->setid_con($properties['id_con']);
        }
        if (array_key_exists('Honorarios_con', $properties)){
            $judi->setHonorarios_con($properties['Honorarios_con']);
        }
        if (array_key_exists('Valor_con', $properties)){
            $judi->setValor_con($properties['Valor_con']);
        }
        if (array_key_exists('Segurado_con', $properties)){
            $judi->setSegurado_con($properties['Segurado_con']);
        }
        if (array_key_exists('Parte_contraria_con', $properties)) {
            $judi->setParte_contraria_con($properties['Parte_contraria_con']);
        }
        if (array_key_exists('UF_con', $properties)) {
            $judi->setUF_con($properties['UF_con']);
        }
        if (array_key_exists('Natureza_con', $properties)){
            $judi->setNatureza_con($properties['Natureza_con']);
        }
        if (array_key_exists('Numero_CNJ_Antigo', $properties)){
            $judi->setNumero_CNJ_Antigo($properties['Numero_CNJ_Antigo']);
        }  
        if (array_key_exists('id', $properties)){
            $judi->setid($properties['id']);
        }
        if (array_key_exists('Numero_CNJ_Antigo_tra', $properties)){
            $judi->setNumero_CNJ_Antigo_tra($properties['Numero_CNJ_Antigo_tra']);
        }
        if (array_key_exists('Natureza_tra', $properties)){
            $judi->setNatureza_tra($properties['Natureza_tra']);
        }
        if (array_key_exists('UF_tra', $properties)){
            $judi->setUF_tra($properties['UF_tra']);
        }
        if (array_key_exists('Parte_contraria_tra', $properties)){
            $judi->setParte_contraria_tra($properties['Parte_contraria_tra']);
        }
        if (array_key_exists('Segurado_tra', $properties)){
            $judi->setSegurado_tra($properties['Segurado_tra']);
        }
        if (array_key_exists('Valor_tra', $properties)){
            $judi->setValor_tra($properties['Valor_tra']);
        }
        if (array_key_exists('Honorarios_tra', $properties)){
            $judi->setHonorarios_tra($properties['Honorarios_tra']);
        }
        if (array_key_exists('Numero_CNJ_Antigo_cre', $properties)){
            $judi->setNumero_CNJ_Antigo_cre($properties['Numero_CNJ_Antigo_cre']);
        }
        if (array_key_exists('Natureza_cre', $properties)){
            $judi->setNatureza_cre($properties['Natureza_cre']);
        }
        if (array_key_exists('UF_cre', $properties)){
            $judi->setUF_cre($properties['UF_cre']);
        }
        if (array_key_exists('Parte_contraria_cre', $properties)){
            $judi->setParte_contraria_cre($properties['Parte_contraria_cre']);
        }
        if (array_key_exists('Segurado_cre', $properties)){
            $judi->setSegurado_cre($properties['Segurado_cre']);
        }
        if (array_key_exists('Honorarios_cre', $properties)){
            $judi->setHonorarios_cre($properties['Honorarios_cre']);
        }
        if (array_key_exists('Valor_cre', $properties)){
            $judi->setValor_cre($properties['Valor_cre']);
        }
        if (array_key_exists('Numero_CNJ_Antigo_mon', $properties)){
            $judi->setNumero_CNJ_Antigo_mon($properties['Numero_CNJ_Antigo_mon']);
        }
        if (array_key_exists('Natureza_mon', $properties)){
            $judi->setNatureza_mon($properties['Natureza_mon']);
        }
        if (array_key_exists('UF_mon', $properties)){
            $judi->setUF_mon($properties['UF_mon']);
        }
        if (array_key_exists('Parte_contraria_mon', $properties)){
            $judi->setParte_contraria_mon($properties['Parte_contraria_mon']);
        }
        if (array_key_exists('Segurado_mon', $properties)){
            $judi->setSegurado_mon($properties['Segurado_mon']);
        }
        if (array_key_exists('Vlr_Deferido_mon', $properties)){
            $judi->setVlr_Deferido_mon($properties['Vlr_Deferido_mon']);
        }
        if (array_key_exists('Vlr_Da_causa_mon', $properties)){
            $judi->setVlr_Da_causa_mon($properties['Vlr_Da_causa_mon']);
        }
        if (array_key_exists('Vlr_Condenação_mon', $properties)){
            $judi->setVlr_Condenação_mon($properties['Vlr_Condenação_mon']);
        }
        if (array_key_exists('Honorarios_mon', $properties)){
            $judi->setHonorarios_mon($properties['Honorarios_mon']);
        }
        if (array_key_exists('Vlr_Certidao_de_credito_mon', $properties)){
            $judi->setVlr_Certidao_de_credito_mon($properties['Vlr_Certidao_de_credito_mon']);
        }
        if (array_key_exists('PASTA', $properties)){
            $judi->setPASTA($properties['PASTA']);
        }
        if (array_key_exists('SEGURADO_mon2', $properties)){
            $judi->setSEGURADO_mon2($properties['SEGURADO_mon2']);
        }
        if (array_key_exists('ASSINATURA_mon2', $properties)){
            $judi->setASSINATURA_mon2($properties['ASSINATURA_mon2']);
        }
        if (array_key_exists('N_SIN_ADM_mon2', $properties)){
            $judi->setN_SIN_ADM_mon2($properties['N_SIN_ADM_mon2']);
        }
        if (array_key_exists('DT_SIN_mon2', $properties)){
            $judi->setDT_SIN_mon2($properties['DT_SIN_mon2']);
        }
        if (array_key_exists('N_PROC_JUD_CNJ_mon', $properties)){
            $judi->setN_PROC_JUD_CNJ_mon($properties['N_PROC_JUD_CNJ_mon']);
        }
        if (array_key_exists('N_ANTIGO_mon2', $properties)){
            $judi->setN_ANTIGO_mon2($properties['N_ANTIGO_mon2']);
        }
        if (array_key_exists('UF_CIDADE_mon2', $properties)){
            $judi->setUF_CIDADE_mon2($properties['UF_CIDADE_mon2']);
        }
        if (array_key_exists('COMARCA_mon2', $properties)){
            $judi->setCOMARCA_mon2($properties['COMARCA_mon2']);
        }
        if (array_key_exists('FORO_mon2', $properties)){
            $judi->setFORO_mon2($properties['FORO_mon2']);
        }
        if (array_key_exists('VARA_mon2', $properties)){
            $judi->setVARA_mon2($properties['VARA_mon2']);
        }
        if (array_key_exists('HABILITANTE_mon2', $properties)){
            $judi->setHABILITANTE_mon2($properties['HABILITANTE_mon2']);
        }
        if (array_key_exists('VL_CERT_CRED_mon2', $properties)){
            $judi->setVL_CERT_CRED_mon2($properties['VL_CERT_CRED_mon2']);
        }
        if (array_key_exists('DT_CRED_mon2', $properties)){
            $judi->setDT_CRED_mon2($properties['DT_CRED_mon2']);
        }
        if (array_key_exists('OBSEVACAO_mon2', $properties)){
            $judi->setOBSEVACAO_mon2($properties['OBSEVACAO_mon2']);
        }
        if (array_key_exists('Vlr_condenacao_mon', $properties)){
            $judi->setVlr_condenacao_mon($properties['Vlr_condenacao_mon']);
        }
        if (array_key_exists('Natureza', $properties)){
            $judi->setNatureza($properties['Natureza']);
        }
        if (array_key_exists('UF', $properties)){
            $judi->setUF($properties['UF']);
        }
        if (array_key_exists('Parte_contraria', $properties)){
            $judi->setParte_contraria($properties['Parte_contraria']);
        }
        if (array_key_exists('Segurado', $properties)){
            $judi->setSegurado($properties['Segurado']);
        }
        if (array_key_exists('Vlr_deferido', $properties)){
            $judi->setVlr_deferido($properties['Vlr_deferido']);
        }
        if (array_key_exists('Vlr_da_causa', $properties)){
            $judi->setVlr_da_causa($properties['Vlr_da_causa']);
        }
        if (array_key_exists('Vlr_condenacao', $properties)){
            $judi->setVlr_condenacao($properties['Vlr_condenacao']);
        }
        if (array_key_exists('Honorarios', $properties)){
            $judi->setHonorarios($properties['Honorarios']);
        }
        if (array_key_exists('Vlr_certidao_de_credito', $properties)){
            $judi->setVlr_certidao_de_credito($properties['Vlr_certidao_de_credito']);
        }
        if (array_key_exists('Aba', $properties)){
            $judi->setAba($properties['Aba']);
        }
        if (array_key_exists('Alteracao', $properties)){
            $judi->setAlteracao($properties['Alteracao']);
        }
        if (array_key_exists('Valor_Pedido', $properties)){
            $judi->setValor_Pedido($properties['Valor_Pedido']);
        }
        if (array_key_exists('OBS', $properties)){
            $judi->setOBS($properties['OBS']);
        }
        if (array_key_exists('SINISTRO', $properties)){
            $judi->setSINISTRO($properties['SINISTRO']);
        }
        if (array_key_exists('Faixa_de_Probabilidade', $properties)){
            $judi->setFaixa_de_Probabilidade($properties['Faixa_de_Probabilidade']);
        }
        if (array_key_exists('login', $properties)){
            $judi->setLogin($properties['login']);
        }
        if (array_key_exists('ok', $properties)){
            $judi->setOk($properties['ok']);
        }
        if (array_key_exists('VALOR_ADMINISTRATIVO', $properties)){
            $judi->setVALOR_ADMINISTRATIVO($properties['VALOR_ADMINISTRATIVO']);
        }   
        if (array_key_exists('beneficiario', $properties)){
            $judi->setbeneficiario($properties['beneficiario']);
        }     
        if (array_key_exists('idtitular', $properties)){
            $judi->setidtitular($properties['idtitular']);
        }     
        if (array_key_exists('idbenefi', $properties)){
            $judi->setidbenefi($properties['idbenefi']);
        }     
        if (array_key_exists('recente', $properties)){
            $judi->setrecente($properties['recente']);
        } 
    }
}
?>