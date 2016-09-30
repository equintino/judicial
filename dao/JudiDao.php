<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//namespace judicial;

/**
 * Description of JuduDao
 *
 * @author equintino
 */
class JudiDao extends TodoDao{
    private $db = null;
    
    private function getDb2() {
        if ($this->db !== null) {
            return $this->db;
        }
        $config = Config::getConfig("db2");
        try {
            $this->db = new PDO($config['dsn'], $config['username'], $config['password']);
        } catch (Exception $ex) {
            throw new Exception('DB connection error: ' . $ex->getMessage());
        }
        return $this->db;
    }
    public function listaProvavel2(JudiSearchCriteria $Judisearch = null) {
     $sql="SELECT * FROM provavel_contabilizada LEFT JOIN (levantamento_judicial INNER JOIN geral_henrique) ON provavel_contabilizada.SEGURADO_con = levantamento_judicial.SEGURADO_lev ORDER BY `provavel_contabilizada`.`Segurado_con` ASC LIMIT 0,10";
     $sql="SELECT * FROM levantamento_judicial INNER JOIN geral_henrique ON levantamento_judicial.SEGURADO_lev=geral_henrique.TITULAR_h ORDER BY `levantamento_judicial`.`SEGURADO_lev` ASC";
     $sql="SELECT * FROM levantamento_henrique ORDER BY `SEGURADO_lev` ASC";
     $sql="SELECT * FROM provavel_contabilizada LEFT JOIN levantamento_henrique ON provavel_contabilizada.SEGURADO_con = levantamento_henrique.SEGURADO_lev ORDER BY `provavel_contabilizada`.`Numero_CNJ_Antigo_con` ASC ";
     $rows = $this->query($sql) ->fetchAll();
 /*
        /// Criando arquivo com segurados administratativo ///
            $filename_='arquivos/judicial.csv';
            $handle_=fopen($filename_, 'w+');
            $texto_="Numero_CNJ_Antigo_con;Natureza_con;UF_con;Parte_contraria_con;Segurado_con;Valor_con;Honorarios_con;id_con;SINISTRO_lev;SEGURADO_lev;PARTE_CONTRARIA_lev;VALOR_PEDIDO_lev;VALOR_ADMINISTRATIVO_lev;HONORARIOS_lev;POSSIVEL_lev;PROVAVEL_lev;DIGITADOR_lev;id_lev;APOLICE_h;ENDOSSO_h;SINISTRO_h;DT_AVISO_h;TITULAR_h;CPF_h;IMPORTANCIA_SEGURADA_h;CORRECAO_IGPM_h;CORRECAO_TR_h;id_h\r\n";
            fwrite($handle_, $texto_);
        /// continua ///
  */
     //foreach($rows as $item){ 
      /*
      TodoValidator::removePonto($item['Valor_con']);
      TodoValidator::removePonto($item['Honorarios_con']);
      TodoValidator::removePonto($item['VALOR_PEDIDO_lev']);
      TodoValidator::removePonto($item['VALOR_ADMINISTRATIVO_lev']);
      TodoValidator::removePonto($item['HONORARIOS_lev']);
      TodoValidator::removePonto($item['IMPORTANCIA_SEGURADA_h']);
      TodoValidator::removePonto($item['CORRECAO_IGPM_h']);
      TodoValidator::removePonto($item['CORRECAO_TR_h']);
       */
      
       // echo "<pre>";
       // print_r($item);
       // echo "</pre>";
    // }die;
   /*     
        /// continuacao ///
           $texto_=$item['Numero_CNJ_Antigo_con'].";".$item['Natureza_con'].";".$item['UF_con'].";".$item['Parte_contraria_con'].";".$item['Segurado_con'].";".number_format($item['Valor_con'],'2',',','.').";".number_format($item['Honorarios_con'],'2',',','.').";".$item['id_con'].";".$item['SINISTRO_lev'].";".$item['SEGURADO_lev'].";".$item['PARTE_CONTRARIA_lev'].";".number_format($item['VALOR_PEDIDO_lev'],'2',',','.').";".number_format($item['VALOR_ADMINISTRATIVO_lev'],'2',',','.').";".number_format($item['HONORARIOS_lev'],'2',',','.').";".$item['POSSIVEL_lev'].";".$item['PROVAVEL_lev'].";".$item['DIGITADOR_lev'].";".$item['id_lev'].";".$item['APOLICE_h'].";".$item['ENDOSSO_h'].";".$item['SINISTRO_h'].";".$item['DT_AVISO_h'].";".$item['TITULAR_h'].";".$item['CPF_h'].";".number_format($item['IMPORTANCIA_SEGURADA_h'],'2',',','.').";".number_format($item['CORRECAO_IGPM_h'],'2',',','.').";".number_format($item['CORRECAO_TR_h'],'2',',','.').";".$item['id_h']."\r\n";
           fwrite($handle_, $texto_);
    * 
    */
    //}
           //fclose($handle_);
           //unset($texto_);die;
        /// continua ///
        
        //if (!$row) {
            //return null;
        //}
        foreach($rows as $row){
         $judi = new Judi();
            JudiMapper::map($judi, $row);
            $result[] = $judi;
        }
        return $result;
    }
    public function listatransito(JudiSearchCriteria $Judisearch = null) {
     $sql="SELECT * FROM transito_julgado";
     $rows = $this->query($sql) ->fetchAll();
     //print_r($rows);die;
        foreach($rows as $row){
         $judi = new Judi();
            JudiMapper::map($judi, $row);
            $result[] = $judi;
        }
        return $result;
    }
    public function listacredito(JudiSearchCriteria $Judisearch = null) {
     $sql="SELECT * FROM certidao_cre";
     $rows = $this->query($sql) ->fetchAll();
     //echo "<pre>";
     //print_r($rows);die;
        foreach($rows as $row){
         $judi = new Judi();
            JudiMapper::map($judi, $row);
            $result[] = $judi;
        }
        //echo "<pre>";
        //print_r($result);die;
        return $result;
    }
    public function listaCreditoAdministrativo(JudiSearchCriteria $Judisearch = null) {
     $sql="SELECT * FROM certidao_cre LEFT JOIN levantamento_henrique ON certidao_cre.Segurado_cre = levantamento_henrique.SEGURADO_lev";
     $rows = $this->query($sql) ->fetchAll();
     //echo "<pre>";
     //print_r($rows);die;
        foreach($rows as $row){
         $judi = new Judi();
            JudiMapper::map($judi, $row);
            $result[] = $judi;
        }
        //echo "<pre>";
        //print_r($result);die;
        return $result;
    }
    public function duplicadoTraPro(JudiSearchCriteria $Judisearch = null) {
     $sql="SELECT * FROM certidao_cre_final LEFT JOIN provavel_contabilizada_final ON certidao_cre_final.Nnmero_CNJ_Antigo_cre_fim = provavel_contabilizada_final.Numero_CNJ_Antigo_con_fim";
     $rows = $this->query($sql) ->fetchAll();
     
     echo "<pre>";
     print_r($rows);die;
     
        foreach($rows as $row){
         $judi = new Judi();
            JudiMapper::map($judi, $row);
            $result[] = $judi;
        }
        return $result;
    }
    public function query($sql) {
            set_time_limit(3600);
        $statement = $this->getDb2()->query($sql, PDO::FETCH_ASSOC);
        if ($statement === false) {
            self::throwDbError($this->getDb2()->errorInfo());
        }
        return $statement;
    }
    private static function throwDbError(array $errorInfo) {
        // TODO log error, send email, etc.
        throw new Exception('DB error [' . $errorInfo[0] . ', ' . $errorInfo[1] . ']: ' . $errorInfo[2]);
    }
    
}
