<?php
final class TodoSearchCriteria {

    private $status = null;
    private $SINISTRO;
    private $SEGURADOS;
    private $SEGURADO;
    private $N_PROC;
    private $ano;
    private $TITULAR;
    private $ENDOSSO;
    private $IMPORTANCIA_SEGURADA;
    private $idtitular;
    private $nome;
    private $vlindeniza;
    private $idbenefi;


    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
    public function getSINISTRO() {
        return $this->SINISTRO;
    }

    public function setSINISTRO($SINISTRO) {
        $this->SINISTRO = $SINISTRO;
        return $this;
    }
    public function getSEGURADOS() {
        return $this->SEGURADOS;
    }

    public function setSEGURADOS($SEGURADOS) {
        $this->SEGURADOS = $SEGURADOS;
        return $this;
    }
    public function getSEGURADO() {
        return $this->SEGURADO;
    }

    public function setSEGURADO($SEGURADO) {
        $this->SEGURADO = $SEGURADO;
        return $this;
    }
    public function getN_PROC() {
        return $this->N_PROC;
    }

    public function setN_PROC($N_PROC) {
        $this->N_PROC = $N_PROC;
        return $this;
    }
    public function getANO() {
        return $this->ANO;
    }

    public function setANO($ANO) {
        $this->ANO = $ANO;
        return $this;
    }
    public function getTITULAR() {
        return $this->TITULAR;
    }

    public function setTITULAR($TITULAR) {
        $this->TITULAR = $TITULAR;
        return $this;
    }
    public function getENDOSSO() {
        return $this->ENDOSSO;
    }

    public function setENDOSSO($ENDOSSO) {
        $this->ENDOSSO = $ENDOSSO;
        return $this;
    }
    public function getIMPORTANCIA_SEGURADA() {
        return $this->IMPORTANCIA_SEGURADA;
    }

    public function setIMPORTANCIA_SEGURADA($IMPORTANCIA_SEGURADA) {
        $this->IMPORTANCIA_SEGURADA = $IMPORTANCIA_SEGURADA;
        return $this;
    }
    public function getidtitular() {
        return $this->idtitular;
    }

    public function setidtitular($idtitular) {
        $this->idtitular = $idtitular;
        return $this;
    }
    public function getnome() {
        return $this->nome;
    }

    public function setnome($nome) {
        $this->nome = $nome;
        return $this;
    }
    public function getvlindeniza() {
        return $this->vlindeniza;
    }

    public function setvlindeniza($vlindeniza) {
        $this->vlindeniza = $vlindeniza;
        return $this;
    }
    public function getidbenefi() {
        return $this->idbenefi;
    }

    public function setidbenefi($idbenefi) {
        $this->idbenefi = $idbenefi;
        return $this;
    }
}
?>