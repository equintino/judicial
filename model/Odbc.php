<?php
/**
 * Model class representing one TODO item.
 */
final class Odbc {
    private $idbenefi;
    private $idtitular;
    private $sinistro;
    private $apolice;
    private $endosso;
    private $nome;
    private $tipo;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $municipio;
    private $estado;
    private $uf;
    private $cep;
    private $vlindeniza = 0;
    private $tpcobertura;
    private $identidade;
    private $percentual;
    private $tel_fixo;
    private $tel_cel;
    private $email;
    private $banco;
    private $agencia;
    private $conta;
    private $abertura;
    private $modificacao;
    private $exclui;
    private $centavos;
    private $certificado;
    private $id;

    // colunas tabela Beneficiarios //
    private $codigo;
    private $cobertura;
    
    // colinas sinipend //
    private $TITULAR;
    private $IMPORTANCIA_SEGURADA =0;
    //private $SINISTRO;
    private $ENDOSSO;
    private $DT_AVISO;
    private $DT_DOC_OK;
    private $DT_SINISTRO;
    private $CPF;
    private $Numero_CNJ_Antigo;
    private $Parte_contraria;
    //private $APOLICE;
    private $CORRECAO_TR_h;
    private $beneficiario;
    private $Segurado;
    private $Vlr_deferido;
    private $Vlr_da_causa;
    private $Vlr_condenacao;
    private $Valor_Pedido;
    private $Honorarios;
    
    //private $status;
    
    public function __construct() {
        date_default_timezone_set ( "America/Sao_Paulo" );
        $now = new DateTime();
        $this->setabertura($now);
        $this->setmodificacao($now);
        $this->setexclui(false);
    }
    public static function variaveis($dados){
      foreach($dados as $item){
       $coluna = $item;
       echo "$coluna<br>";
      }
    }
/*
    public static function allStatuses() {
        return array(
            self::STATUS_PENDING,
            self::STATUS_DONE,
            self::STATUS_VOIDED,
            self::STATUS_CANCELADO,
        );
    }
    public static function allPriorities() {
        return array(
            self::PRIORITY_HIGH,
            self::PRIORITY_MEDIUM,
            self::PRIORITY_LOW,
        );
    }
*/
    //~ Getters & setters

    /**
     * @return int <i>null</i> if not persistent
     */
    public function getidtitular() {
        return $this->idtitular;
    }

    public function setidtitular($idtitular) {
        if ($this->idtitular !== null && $this->idtitular != $idtitular) {
            throw new Exception('Cannot change identifier to ' . $idtitular . ', already set to ' . $this->idtitular);
        }
        $this->idtitular = (int) $idtitular;
    }
/*        
    public function getPriority() {
        return $this->priority;
    }

    public function setPriority($priority) {
        OdbcValidator::validatePriority($priority);
        $this->priority = $priority;
    }
*/
    /**
     * @return DateTime
     */
    public function getabertura() {
        return $this->abertura;
    }

    public function setabertura(DateTime $abertura) {
        $this->abertura = $abertura;
    }
    public function getCentavos() {
        return $this->centavos;
    }

    public function setCentavos($centavos) {
        OdbcValidator::validaCentavos($centavos);
        $this->centavos = $centavos;
    }

    /**
     * @return DateTime
     */
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
   
   /*
    public function getEliminacao() {
        return $this->eliminacao;
    }

    public function setEliminacao(DateTime $eliminacao) {
        $this->eliminacao = $eliminacao;
    }
    public function getEliminacao_novo() {
        return $this->eliminacao_novo;
    }

    public function setEliminacao_novo(DateTime $eliminacao_novo) {
        $this->eliminacao_novo = $eliminacao_novo;
    }
    public function getPrazo() {
        return $this->prazo;
    }

    public function setPrazo(DateTime $prazo) {
        $this->prazo = $prazo;
    }

    /**
     * @return DateTime
     */
    public function getmodificacao() {
        return $this->modificacao;
    }

    public function setmodificacao(DateTime $modificacao) {
        $this->modificacao = $modificacao;
    }
 /*   
    public function getEficazData() {
        return $this->eficaz_data;
    }

    public function setEficazData(DateTime $eficaz_data) {
        $this->eficaz_data = $eficaz_data;
    }

    /**
     * @return string
     */
   /*
    public function getTitle() {
        return $this->title;
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    /**
     * @return string
     */
 /*   
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    /**
     * @return string
     */
  /* 
    public function getComment() {
        return $this->comment;
    }

    public function setComment($comment) {
        $this->comment = $comment;
    }
    public function getComentario(){
        return $this->comentario;
    }
    public function setComentario($comentario){
        $this->comentario = $comentario;
    }
    public function getDetalhamento(){
        return $this->detalhamento;
    }
    public function setDetalhamento($detalhamento){
        $this->detalhamento = $detalhamento;
    }
    public function getOrigem(){
        return $this->origem;
    }
    public function setOrigem($origem){
        $this->origem = $origem;
    }
    public function getTipoacao(){
        return $this->tipoacao;
    }
    public function setTipoacao($tipoacao){
        $this->tipoacao = $tipoacao;
    }
    public function getProcesso(){
        return $this->processo;
    }
    public function setProcesso($processo){
        $this->processo = $processo;
    }
    public function getIdentificador(){
        return $this->identificador;
    }
    public function setIdentificador($identificador){
        $this->identificador = $identificador;
    }
    public function getCausa(){
        return $this->causa;
    }
    public function setCausa($causa){
        $this->causa = $causa;
    }
    public function getimediata(){
        return $this->imediata;
    }
    public function setImediata($imediata){
        $this->imediata = $imediata;
    }
    public function getCorretiva(){
        return $this->corretiva;
    }
    public function setCorretiva($corretiva){
        $this->corretiva = $corretiva;
    }
    public function getImplementador(){
        return $this->implementador;
    }
    public function setImplementador($implementador){
        $this->implementador = $implementador;
    }
    public function getRegEficacia(){
        return $this->reg_eficacia;
    }
    public function setRegEficacia($reg_eficacia){
        $this->reg_eficacia = $reg_eficacia;
    }
    public function getRespVerificacao(){
        return $this->resp_verificacao;
    }
    public function setRespVerificacao($resp_verificacao){
        $this->resp_verificacao = $resp_verificacao;
    }
    public function getNovoRnc(){
        return $this->novo_rnc;
    }
    public function setNovoRnc($novo_rnc){
        $this->novo_rnc = $novo_rnc;
    }
    public function getEficaz(){
        return $this->eficaz;
    }
    public function setEficaz($eficaz){
        $this->eficaz = $eficaz;
    }
    public function getAndamento(){
        return $this->andamento;
    }
    public function setAndamento($andamento){
        $this->andamento = $andamento;
    }

    /**
     * @return string one of PENDING/DONE/VOIDED
     */
 /*
    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        OdbcValidator::validateStatus($status);
        $this->status = $status;
    }

    /**
     * @return boolean
     */
    public function getexclui() {
        return $this->exclui;
    }

    public function setexclui($exclui) {
        $this->exclui = (bool) $exclui;
    }
    
    //// tabela Beneficiarios ////
    public function getidbenefi(){
        return $this->idbenefi;
    }
    public function setidbenefi($idbenefi){
        $this->idbenefi = $idbenefi;
    }
    public function getsinistro(){
        return $this->sinistro;
    }
    public function setsinistro($sinistro){
        $this->sinistro = $sinistro;
    }
    public function getcertificado(){
        return $this->certificado;
    }
    public function setcertificado($certificado){
        $this->certificado = $certificado;
    }
    public function getapolice(){
        return $this->apolice;
    }
    public function setapolice($apolice){
        $this->apolice = $apolice;
    }
    public function getendosso(){
        return $this->endosso;
    }
    public function setendosso($endosso){
        $this->endosso = $endosso;
    }
    public function getnome(){
        return $this->nome;
    }
    public function setnome($nome){
        $this->nome = $nome;
    }
    public function gettipo(){
        return $this->tipo;
    }
    public function settipo($tipo){
        $this->tipo = $tipo;
    }   
    public function getendereco(){
        return $this->endereco;
    }
    public function setendereco($endereco){
        $this->endereco = $endereco;
    } 
    public function getnumero(){
        return $this->numero;
    }
    public function setnumero($numero){
        $this->numero = $numero;
    } 
    public function getcomplemento(){
        return $this->complemento;
    }
    public function setcomplemento($complemento){
        $this->complemento = $complemento;
    }  
    public function getbairro(){
        return $this->bairro;
    }
    public function setbairro($bairro){
        $this->bairro = $bairro;
    }   
    public function getmunicipio(){
        return $this->municipio;
    }
    public function setmunicipio($municipio){
        $this->municipio = $municipio;
    }   
    public function getestado(){
        return $this->estado;
    }
    public function setestado($estado){
        $this->estado = $estado;
    }
    public function getuf(){
        return $this->uf;
    }
    public function setuf($uf){
        $this->uf = $uf;
    }    
    public function getcep(){
        return $this->cep;
    }
    public function setcep($cep){
        $this->cep = $cep;
    }   
    public function getvlindeniza(){
        return $this->vlindeniza;
    }
    public function setvlindeniza($vlindeniza){
        $this->vlindeniza = $vlindeniza;
    }    
    public function gettpcobertura(){
        return $this->tpcobertura;
    }
    public function settpcobertura($tpcobertura){
        $this->tpcobertura = $tpcobertura;
    }       
    public function getidentidade(){
        return $this->identidade;
    }
    public function setidentidade($identidade){
        $this->identidade = $identidade;
    }
    public function getpercentual(){
        return $this->percentual;
    }
    public function setpercentual($percentual){
        $this->percentual = $percentual;
    }     
    public function gettel_fixo(){
        return $this->tel_fixo;
    }
    public function settel_fixo($tel_fixo){
        $this->tel_fixo = $tel_fixo;
    }       
    public function gettel_cel(){
        return $this->tel_cel;
    }
    public function settel_cel($tel_cel){
        $this->tel_cel = $tel_cel;
    }  
    public function getemail(){
        return $this->email;
    }
    public function setemail($email){
        $this->email = $email;
    }   
    public function getbanco(){
        return $this->banco;
    }
    public function setbanco($banco){
        $this->banco = $banco;
    }   
    public function getagencia(){
        return $this->agencia;
    }
    public function setagencia($agencia){
        $this->agencia = $agencia;
    }
    public function getconta(){
        return $this->conta;
    }
    public function setconta($conta){
        $this->conta = $conta;
    }  
    public function getcodigo(){
        return $this->codigo;
    }
    public function setcodigo($codigo){
        $this->codigo = $codigo;
    }
    public function getcobertura(){
        return $this->cobertura;
    }
    public function setcobertura($cobertura){
        $this->cobertura = $cobertura;
    }  
    public function getTITULAR(){
        return $this->TITULAR;
    }
    public function setTITULAR($TITULAR){
        $this->TITULAR = $TITULAR;
    }
    public function getIMPORTANCIA_SEGURADA(){
        return $this->IMPORTANCIA_SEGURADA;
    }
    public function setIMPORTANCIA_SEGURADA($IMPORTANCIA_SEGURADA){
        $this->IMPORTANCIA_SEGURADA = $IMPORTANCIA_SEGURADA;
    }
    public function getDT_AVISO(){
        return $this->DT_AVISO;
    }
    public function setDT_AVISO($DT_AVISO){
        $this->DT_AVISO = $DT_AVISO;
    }
    public function getDT_VIG_FINAL(){
        return $this->DT_VIG_FINAL;
    }
    public function setDT_VIG_FINAL($DT_VIG_FINAL){
        $this->DT_VIG_FINAL = $DT_VIG_FINAL;
    }
    public function getDT_SINISTRO(){
        return $this->DT_SINISTRO;
    }
    public function setDT_SINISTRO($DT_SINISTRO){
        $this->DT_SINISTRO = $DT_SINISTRO;
    }
    public function getCPF(){
        return $this->CPF;
    }
    public function setCPF($CPF){
        $this->CPF = $CPF;
    }
    public function getNumero_CNJ_Antigo(){
        return $this->Numero_CNJ_Antigo;
    }
    public function setNumero_CNJ_Antigo($Numero_CNJ_Antigo){
        $this->Numero_CNJ_Antigo = $Numero_CNJ_Antigo;
    }
    public function getParte_contraria(){
        return $this->Parte_contraria;
    }
    public function setParte_contraria($Parte_contraria){
        $this->Parte_contraria = $Parte_contraria;
    }
    public function getCORRECAO_TR_h(){
        return $this->CORRECAO_TR_h;
    }
    public function setCORRECAO_TR_h($CORRECAO_TR_h){
        $this->CORRECAO_TR_h = $CORRECAO_TR_h;
    }
    public function getbeneficiario(){
        return $this->beneficiario;
    }
    public function setbeneficiario($beneficiario){
        $this->beneficiario = $beneficiario;
    }
    public function getSegurado(){
        return $this->Segurado;
    }
    public function setSegurado($Segurado){
        $this->Segurado = $Segurado;
    }
    public function getVlr_deferido(){
        return $this->Vlr_deferido;
    }
    public function setVlr_deferido($Vlr_deferido){
        $this->Vlr_deferido = $Vlr_deferido;
    }
    public function getVlr_da_causa(){
        return $this->Vlr_da_causa;
    }
    public function setVlr_da_causa($Vlr_da_causa){
        $this->Vlr_da_causa = $Vlr_da_causa;
    }
    public function getVlr_condenacao(){
        return $this->Vlr_condenacao;
    }
    public function setVlr_condenacao($Vlr_condenacao){
        $this->Vlr_condenacao = $Vlr_condenacao;
    }
    public function getValor_Pedido(){
        return $this->Valor_Pedido;
    }
    public function setValor_Pedido($Valor_Pedido){
        $this->Valor_Pedido = $Valor_Pedido;
    }
    public function getHonorarios(){
        return $this->Honorarios;
    }
    public function setHonorarios($Honorarios){
        $this->Honorarios = $Honorarios;
    }
}
?>