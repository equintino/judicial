<?php

class Judi extends Todo{
 
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
}