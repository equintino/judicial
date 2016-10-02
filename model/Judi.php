<?php
include '../mapping/JudiMapper.php';

class Judi {
 
   private $Numero_CNJ_Antigo_con;
   private $Natureza_con;
   private $UF_con;
   private $Parte_contraria_con;
   private $Segurado_con;
   private $Valor_con;
   private $Honorarios_con;
   private $id_con;
   private $SINISTRO_lev;
   private $SEGURADO_lev;
   private $PARTE_CONTRARIA_lev;
   private $VALOR_PEDIDO_lev;
   private $VALOR_ADMINISTRATIVO_lev;
   private $HONORARIOS_lev;
   private $POSSIVEL_lev;
   private $PROVAVEL_lev;
   private $DIGITADOR_lev;
   private $id_lev;
   private $APOLICE_h;
   private $ENDOSSO_h;
   private $SINISTRO_h;
   private $DT_AVISO_h;
   private $TITULAR_h;
   private $CPF_h;
   private $IMPORTANCIA_SEGURADA_h;
   private $CORRECAO_IGPM_h;
   private $CORRECAO_TR_h;
   private $id_h;
   private $id;
   
   private $Numero_CNJ_Antigo_tra;
   private $Natureza_tra;
   private $UF_tra;
   private $Parte_contraria_tra;
   private $Segurado_tra;
   private $Valor_tra;
   private $Honorarios_tra; 

   private $Numero_CNJ_Antigo_cre;
   private $Natureza_cre;
   private $UF_cre;
   private $Parte_contraria_cre;
   private $Segurado_cre;
   private $Honorarios_cre;
   private $Valor_cre;
   
   private $Numero_CNJ_Antigo_mon;
   private $Natureza_mon;
   private $UF_mon;
   private $Parte_contraria_mon;
   private $Segurado_mon;
   private $Vlr_Deferido_mon;
   private $Vlr_Da_causa_mon;
   private $Vlr_Condenação_mon;
   private $Honorarios_mon;
   private $Vlr_certidao_de_credito_mon;
   
   private $PASTA;
   private $SEGURADO_mon2;
   private $ASSINATURA_mon2;
   private $N_SIN_ADM_mon2;
   private $DT_SIN_mon2;
   private $N_PROC_JUD_CNJ_mon2;
   private $N_ANTIGO_mon2;
   private $UF_CIDADE_mon2;
   private $COMARCA_mon2;
   private $FORO_mon2;
   private $VARA_mon2;
   private $HABILITANTE_mon2;
   private $VL_CERT_CRED_mon2;
   private $DT_CRED_mon2;
   private $OBSEVACAO_mon2;

    public function getNumero_CNJ_Antigo_con(){
        return $this->Numero_CNJ_Antigo_con;
    }
    public function setNumero_CNJ_Antigo_con($Numero_CNJ_Antigo_con){
        $this->Numero_CNJ_Antigo_con = $Numero_CNJ_Antigo_con;
    }
    public function getNatureza_con(){
        return $this->Natureza_con;
    }
    public function setNatureza_con($Natureza_con){
        $this->Natureza_con = $Natureza_con;
    }
    public function getUF_con(){
        return $this->UF_con;
    }
    public function setUF_con($UF_con){
        $this->UF_con = $UF_con;
    }
    public function getParte_contraria_con(){
        return $this->Parte_contraria_con;
    }
    public function setParte_contraria_con($Parte_contraria_con){
        $this->Parte_contraria_con = $Parte_contraria_con;
    }
    public function getSegurado_con(){
        return $this->Segurado_con;
    }
    public function setSegurado_con($Segurado_con){
        $this->Segurado_con = $Segurado_con;
    }
    public function getValor_con(){
        return $this->Valor_con;
    }
    public function setValor_con($Valor_con){
        $this->Valor_con = $Valor_con;
    }
    public function getHonorarios_con(){
        return $this->Honorarios_con;
    }
    public function setHonorarios_con($Honorarios_con){
        $this->Honorarios_con = $Honorarios_con;
    }
    public function getid_con(){
        return $this->id_con;
    }
    public function setid_con($id_con){
        $this->id_con = $id_con;
    }
    public function getSINISTRO_lev(){
        return $this->SINISTRO_lev;
    }
    public function setSINISTRO_lev($SINISTRO_lev){
        $this->SINISTRO_lev = $SINISTRO_lev;
    }
    public function getSEGURADO_lev(){
        return $this->SEGURADO_lev;
    }
    public function setSEGURADO_lev($SEGURADO_lev){
        $this->SEGURADO_lev = $SEGURADO_lev;
    }
    public function getPARTE_CONTRARIA_lev(){
        return $this->PARTE_CONTRARIA_lev;
    }
    public function setPARTE_CONTRARIA_lev($PARTE_CONTRARIA_lev){
        $this->PARTE_CONTRARIA_lev = $PARTE_CONTRARIA_lev;
    }
    public function getVALOR_PEDIDO_lev(){
        return $this->VALOR_PEDIDO_lev;
    }
    public function setVALOR_PEDIDO_lev($VALOR_PEDIDO_lev){
        $this->VALOR_PEDIDO_lev = $VALOR_PEDIDO_lev;
    }
    public function getVALOR_ADMINISTRATIVO_lev(){
        return $this->VALOR_ADMINISTRATIVO_lev;
    }
    public function setVALOR_ADMINISTRATIVO_lev($VALOR_ADMINISTRATIVO_lev){
        $this->VALOR_ADMINISTRATIVO_lev = $VALOR_ADMINISTRATIVO_lev;
    }
    public function getHONORARIOS_lev(){
        return $this->HONORARIOS_lev;
    }
    public function setHONORARIOS_lev($HONORARIOS_lev){
        $this->HONORARIOS_lev = $HONORARIOS_lev;
    }
    public function getPOSSIVEL_lev(){
        return $this->POSSIVEL_lev;
    }
    public function setPOSSIVEL_lev($POSSIVEL_lev){
        $this->POSSIVEL_lev = $POSSIVEL_lev;
    }
    public function getPROVAVEL_lev(){
        return $this->PROVAVEL_lev;
    }
    public function setPROVAVEL_lev($PROVAVEL_lev){
        $this->PROVAVEL_lev = $PROVAVEL_lev;
    }
    public function getDIGITADOR_lev(){
        return $this->DIGITADOR_lev;
    }
    public function setDIGITADOR_lev($DIGITADOR_lev){
        $this->DIGITADOR_lev = $DIGITADOR_lev;
    }
    public function getid_lev(){
        return $this->id_lev;
    }
    public function setid_lev($id_lev){
        $this->id_lev = $id_lev;
    }
    public function getAPOLICE_h(){
        return $this->APOLICE_h;
    }
    public function setAPOLICE_h($APOLICE_h){
        $this->APOLICE_h = $APOLICE_h;
    }
    public function getENDOSSO_h(){
        return $this->ENDOSSO_h;
    }
    public function setENDOSSO_h($ENDOSSO_h){
        $this->ENDOSSO_h = $ENDOSSO_h;
    }
    public function getSINISTRO_h(){
        return $this->SINISTRO_h;
    }
    public function setSINISTRO_h($SINISTRO_h){
        $this->SINISTRO_h = $SINISTRO_h;
    }
    public function getDT_AVISO_h(){
        return $this->DT_AVISO_h;
    }
    public function setDT_AVISO_h($DT_AVISO_h){
        $this->DT_AVISO_h = $DT_AVISO_h;
    }
    public function getTITULAR_h(){
        return $this->TITULAR_h;
    }
    public function setTITULAR_h($TITULAR_h){
        $this->TITULAR_h = $TITULAR_h;
    }
    public function getCPF_h(){
        return $this->CPF_h;
    }
    public function setCPF_h($CPF_h){
        $this->CPF_h = $CPF_h;
    }
    public function getIMPORTANCIA_SEGURADA_h(){
        return $this->IMPORTANCIA_SEGURADA_h;
    }
    public function setIMPORTANCIA_SEGURADA_h($IMPORTANCIA_SEGURADA_h){
        $this->IMPORTANCIA_SEGURADA_h = $IMPORTANCIA_SEGURADA_h;
    }
    public function getCORRECAO_IGPM_h(){
        return $this->CORRECAO_IGPM_h;
    }
    public function setCORRECAO_IGPM_h($CORRECAO_IGPM_h){
        $this->CORRECAO_IGPM_h = $CORRECAO_IGPM_h;
    }
    public function getCORRECAO_TR_h(){
        return $this->CORRECAO_TR_h;
    }
    public function setCORRECAO_TR_h($CORRECAO_TR_h){
        $this->CORRECAO_TR_h = $CORRECAO_TR_h;
    }
    public function getid_h(){
        return $this->id_h;
    }
    public function setid_h($id_h){
        $this->id_h = $id_h;
    }
    public function getid(){
        return $this->id;
    }
    public function setid($id){
        $this->id = $id;
    }
    public function getNumero_CNJ_Antigo_tra(){
        return $this->Numero_CNJ_Antigo_tra;
    }
    public function setNumero_CNJ_Antigo_tra($Numero_CNJ_Antigo_tra){
        $this->Numero_CNJ_Antigo_tra = $Numero_CNJ_Antigo_tra;
    }
    public function getNatureza_tra(){
        return $this->Natureza_tra;
    }
    public function setNatureza_tra($Natureza_tra){
        $this->Natureza_tra = $Natureza_tra;
    }
    public function getUF_tra(){
        return $this->UF_tra;
    }
    public function setUF_tra($UF_tra){
        $this->UF_tra = $UF_tra;
    }
    public function getParte_contraria_tra(){
        return $this->Parte_contraria_tra;
    }
    public function setParte_contraria_tra($Parte_contraria_tra){
        $this->Parte_contraria_tra = $Parte_contraria_tra;
    }
    public function getSegurado_tra(){
        return $this->Segurado_tra;
    }
    public function setSegurado_tra($Segurado_tra){
        $this->Segurado_tra = $Segurado_tra;
    }
    public function getValor_tra(){
        return $this->Valor_tra;
    }
    public function setValor_tra($Valor_tra){
        $this->Valor_tra = $Valor_tra;
    }
    public function getHonorarios_tra(){
        return $this->Honorarios_tra;
    }
    public function setHonorarios_tra($Honorarios_tra){
        $this->Honorarios_tra = $Honorarios_tra;
    }
    
    
    public function getNumero_CNJ_Antigo_cre(){
        return $this->Numero_CNJ_Antigo_cre;
    }
    public function setNumero_CNJ_Antigo_cre($Numero_CNJ_Antigo_cre){
        $this->Numero_CNJ_Antigo_cre = $Numero_CNJ_Antigo_cre;
    }
    public function getNatureza_cre(){
        return $this->Natureza_cre;
    }
    public function setNatureza_cre($Natureza_cre){
        $this->Natureza_cre = $Natureza_cre;
    }
    public function getUF_cre(){
        return $this->UF_cre;
    }
    public function setUF_cre($UF_cre){
        $this->UF_cre = $UF_cre;
    }
    public function getParte_contraria_cre(){
        return $this->Parte_contraria_cre;
    }
    public function setParte_contraria_cre($Parte_contraria_cre){
        $this->Parte_contraria_cre = $Parte_contraria_cre;
    }
    public function getSegurado_cre(){
        return $this->Segurado_cre;
    }
    public function setSegurado_cre($Segurado_cre){
        $this->Segurado_cre = $Segurado_cre;
    }
    public function getHonorarios_cre(){
        return $this->Honorarios_cre;
    }
    public function setHonorarios_cre($Honorarios_cre){
        $this->Honorarios_cre = $Honorarios_cre;
    }
    public function getValor_cre(){
        return $this->Valor_cre;
    }
    public function setValor_cre($Valor_cre){
        $this->Valor_cre = $Valor_cre;
    }
    public function getNumero_CNJ_Antigo_mon(){
        return $this->Numero_CNJ_Antigo_mon;
    }
    public function setNumero_CNJ_Antigo_mon($Numero_CNJ_Antigo_mon){
        $this->Numero_CNJ_Antigo_mon = $Numero_CNJ_Antigo_mon;
    }
    public function getNatureza_mon(){
        return $this->Natureza_mon;
    }
    public function setNatureza_mon($Natureza_mon){
        $this->Natureza_mon = $Natureza_mon;
    }
    public function getUF_mon(){
        return $this->UF_mon;
    }
    public function setUF_mon($UF_mon){
        $this->UF_mon = $UF_mon;
    }
    public function getParte_contraria_mon(){
        return $this->Parte_contraria_mon;
    }
    public function setParte_contraria_mon($Parte_contraria_mon){
        $this->Parte_contraria_mon = $Parte_contraria_mon;
    }
    public function getSegurado_mon(){
        return $this->Segurado_mon;
    }
    public function setSegurado_mon($Segurado_mon){
        $this->Segurado_mon = $Segurado_mon;
    }
    public function getVlr_Deferido_mon(){
        return $this->Vlr_Deferido_mon;
    }
    public function setVlr_Deferido_mon($Vlr_Deferido_mon){
        $this->Vlr_Deferido_mon = $Vlr_Deferido_mon;
    }
    public function getVlr_Da_causa_mon(){
        return $this->Vlr_Da_causa_mon;
    }
    public function setVlr_Da_causa_mon($Vlr_Da_causa_mon){
        $this->Vlr_Da_causa_mon = $Vlr_Da_causa_mon;
    }
    public function getVlr_Condenação_mon(){
        return $this->Vlr_Condenação_mon;
    }
    public function setVlr_Condenação_mon($Vlr_Condenação_mon){
        $this->Vlr_Condenação_mon = $Vlr_Condenação_mon;
    }
    public function getHonorarios_mon(){
        return $this->Honorarios_mon;
    }
    public function setHonorarios_mon($Honorarios_mon){
        $this->Honorarios_mon = $Honorarios_mon;
    }
    public function getVlr_certidao_de_credito_mon(){
        return $this->Vlr_certidao_de_credito_mon;
    }
    public function setVlr_certidao_de_credito_mon($Vlr_certidao_de_credito_mon){
        $this->Vlr_certidao_de_credito_mon = $Vlr_certidao_de_credito_mon;
    }
    
    
    public function getPASTA(){
        return $this->PASTA;
    }
    public function setPASTA($PASTA){
        $this->PASTA = $PASTA;
    }
    public function getSEGURADO_mon2(){
        return $this->SEGURADO_mon2;
    }
    public function setSEGURADO_mon2($SEGURADO_mon2){
        $this->SEGURADO_mon2 = $SEGURADO_mon2;
    }
    public function getASSINATURA_mon2(){
        return $this->ASSINATURA_mon2;
    }
    public function setASSINATURA_mon2($ASSINATURA_mon2){
        $this->ASSINATURA_mon2 = $ASSINATURA_mon2;
    }
    public function getN_SIN_ADM_mon2(){
        return $this->N_SIN_ADM_mon2;
    }
    public function setN_SIN_ADM_mon2($N_SIN_ADM_mon2){
        $this->N_SIN_ADM_mon2 = $N_SIN_ADM_mon2;
    }
    public function getDT_SIN_mon2(){
        return $this->DT_SIN_mon2;
    }
    public function setDT_SIN_mon2($DT_SIN_mon2){
        $this->DT_SIN_mon2 = $DT_SIN_mon2;
    }
    public function getN_PROC_JUD_CNJ_mon2(){
        return $this->N_PROC_JUD_CNJ_mon2;
    }
    public function setN_PROC_JUD_CNJ_mon2($N_PROC_JUD_CNJ_mon2){
        $this->N_PROC_JUD_CNJ_mon2 = $N_PROC_JUD_CNJ_mon2;
    }
    public function getN_ANTIGO_mon2(){
        return $this->N_ANTIGO_mon2;
    }
    public function setN_ANTIGO_mon2($N_ANTIGO_mon2){
        $this->N_ANTIGO_mon2 = $N_ANTIGO_mon2;
    }
    public function getUF_CIDADE_mon2(){
        return $this->UF_CIDADE_mon2;
    }
    public function setUF_CIDADE_mon2($UF_CIDADE_mon2){
        $this->UF_CIDADE_mon2 = $UF_CIDADE_mon2;
    }
    public function getCOMARCA_mon2(){
        return $this->COMARCA_mon2;
    }
    public function setCOMARCA_mon2($COMARCA_mon2){
        $this->COMARCA_mon2 = $COMARCA_mon2;
    }
    public function getFORO_mon2(){
        return $this->FORO_mon2;
    }
    public function setFORO_mon2($FORO_mon2){
        $this->FORO_mon2 = $FORO_mon2;
    }
    public function getVARA_mon2(){
        return $this->VARA_mon2;
    }
    public function setVARA_mon2($VARA_mon2){
        $this->VARA_mon2 = $VARA_mon2;
    }
    public function getHABILITANTE_mon2(){
        return $this->HABILITANTE_mon2;
    }
    public function setHABILITANTE_mon2($HABILITANTE_mon2){
        $this->HABILITANTE_mon2 = $HABILITANTE_mon2;
    }
    public function getVL_CERT_CRED_mon2(){
        return $this->VL_CERT_CRED_mon2;
    }
    public function setVL_CERT_CRED_mon2($VL_CERT_CRED_mon2){
        $this->VL_CERT_CRED_mon2 = $VL_CERT_CRED_mon2;
    }
    public function getDT_CRED_mon2(){
        return $this->DT_CRED_mon2;
    }
    public function setDT_CRED_mon2($DT_CRED_mon2){
        $this->DT_CRED_mon2 = $DT_CRED_mon2;
    }
    public function getOBSEVACAO_mon2(){
        return $this->OBSEVACAO_mon2;
    }
    public function setOBSEVACAO_mon2($OBSEVACAO_mon2){
        $this->OBSEVACAO_mon2 = $OBSEVACAO_mon2;
    }
}