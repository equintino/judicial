<?php
//namespace judicial;

class JudiDao {//extends TodoDao{
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
     //$sql="SELECT * FROM provavel_contabilizada LEFT JOIN (levantamento_judicial INNER JOIN geral_henrique) ON provavel_contabilizada.SEGURADO_con = levantamento_judicial.SEGURADO_lev ORDER BY `provavel_contabilizada`.`Segurado_con` ASC LIMIT 0,10";
     //$sql="SELECT * FROM levantamento_judicial INNER JOIN geral_henrique ON levantamento_judicial.SEGURADO_lev=geral_henrique.TITULAR_h ORDER BY `levantamento_judicial`.`SEGURADO_lev` ASC";
     //$sql="SELECT * FROM levantamento_henrique ORDER BY `SEGURADO_lev` ASC";
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
    public function listacredito(JudiSearchCriteria $Judisearch = null, $ordem) {
     $sql="SELECT * FROM certidao_cre_impressao ";
     //print_r($ordem);
     if($ordem){
       if("NúmeroCNJ/Antigo"==$ordem){
        $ordem='Numero_CNJ_Antigo asc';
       }elseif('Partecontrária'==$ordem){
        $ordem='Parte_contraria asc';
       }elseif('Honorários'==$ordem){
        $ordem='Honorarios asc';
       }elseif('ValorDeferido'==$ordem){
        $ordem='Vlr_deferido asc';
       }elseif('Valordacausa'==$ordem){
        $ordem='Vlr_da_causa asc';
       }elseif('Valorcondenação'==$ordem){
        $ordem='Vlr_condenacao asc';
       }elseif('Valorcertidãodecrédito'==$ordem){
        $ordem='Vlr_certidao_de_credito asc';
       }
       $sql.="ORDER BY ".$ordem;
     }
     $rows = $this->query($sql) ->fetchAll();
        foreach($rows as $row){
         $judi = new Judi();
            JudiMapper::map($judi, $row);
            $result[] = $judi;
        }
        return $result;
    }
    public function listaCreditoAdministrativo(JudiSearchCriteria $Judisearch = null) {
     $sql="SELECT * FROM acoes_transitado_julgado_05102016 INNER JOIN geral_henrique ON acoes_transitado_julgado_05102016.Segurado = geral_henrique.TITULAR_h";
     //$sql="SELECT * FROM acoes_transitado_julgado2 INNER JOIN certidao_cre_mon_final ON acoes_transitado_julgado2.Numero_CNJ_Antigo = certidao_cre_mon_final.N_PROC_JUD_CNJ_mon";
     //$sql="SELECT * FROM suspenso LEFT JOIN geral_henrique ON suspenso.Segurado = geral_henrique.TITULAR_h";
     $rows = $this->query($sql) ->fetchAll();
     //echo "<pre>";
    // print_r($rows);die;
        foreach($rows as $row){
         $judi = new Judi();
            JudiMapper::map($judi, $row);
            $result[] = $judi;
        }
        return $result;
    }
    public function ajunta(JudiSearchCriteria $Judisearch = null) {
     //$sql="SELECT * FROM acoes_transitado_julgado_05102016 left JOIN suspenso ON acoes_transitado_julgado_05102016.Numero_CNJ_Antigo = suspenso.Numero_CNJ_Antigo";
     //$sql="SELECT * FROM acoes_transitado_julgado2 INNER JOIN certidao_cre_mon_final ON acoes_transitado_julgado2.Numero_CNJ_Antigo = certidao_cre_mon_final.N_PROC_JUD_CNJ_mon";
     //$sql="SELECT * FROM suspenso LEFT JOIN geral_henrique ON suspenso.Segurado = geral_henrique.TITULAR_h";
     //$sql="SELECT * FROM acoes_transitado_julgado_05102016";
     $sql="SELECT * FROM acoes_transitado_julgado_05102016,suspenso WHERE 1";
     $rows = $this->query($sql) ->fetchAll();
     //echo "<pre>";
     //print_r($rows);die;
        foreach($rows as $row){
            //print_r($row);
            //echo $row['Numero_CNJ_Antigo'];
            //echo "<br>";
         $judi = new Judi();
            JudiMapper::map($judi, $row);
            $result[] = $judi;
        }
        //die;
        return $result;
    }
    public function duplicadoTraPro(JudiSearchCriteria $Judisearch = null) {
     $sql="SELECT * FROM certidao_cre_final LEFT JOIN provavel_contabilizada_final ON certidao_cre_final.Nnmero_CNJ_Antigo_cre_fim = provavel_contabilizada_final.Numero_CNJ_Antigo_con_fim";
     $rows = $this->query($sql) ->fetchAll();
     
     //echo "<pre>";
     //print_r($rows);die;
     
        foreach($rows as $row){
         $judi = new Judi();
            JudiMapper::map($judi, $row);
            $result[] = $judi;
        }
        return $result;
    }
    public function duplicadoTabelas(JudiSearchCriteria $Judisearch = null,$tabela) {
     $sql="SELECT * FROM $tabela";// LEFT JOIN provavel_contabilizada_final ON certidao_cre_final.Nnmero_CNJ_Antigo_cre_fim = provavel_contabilizada_final.Numero_CNJ_Antigo_con_fim";
     $rows = $this->query($sql) ->fetchAll();
     
     //echo "<pre>";
     //print_r($rows);die;
     
        foreach($rows as $row){
         $judi = new Judi();
            JudiMapper::map($judi, $row);
            $result[] = $judi;
        }
        return $result;
    }
    public function findById($id) {
     //print_r($id);die;
        $row = $this->query('SELECT * FROM certidao_cre_impressao WHERE id = ' . (int) $id)->fetch();
        //print_r($row);die;
        if (!$row) {
            return null;
        }
        $judi = new Judi();
        JudiMapper::map($judi, $row);
        return $judi;
    }
    public function saveJd(Judi $judi) {
     //echo "<pre>";
     //print_r($judi);die;
        if ($judi->getId() === null) {
         //echo "estou aqui";die;
            return $this->insert($judi);
        }
        //echo "estou aqui";die;
        return $this->update($judi);
    }
    public function query($sql) {
            set_time_limit(3600);
        $statement = $this->getDb2()->query($sql, PDO::FETCH_ASSOC);
        if ($statement === false) {
            self::throwDbError($this->getDb2()->errorInfo());
        }
        return $statement;
    }
    private function insert(Judi $judi) {
        //$now = new DateTime();
        $judi->setId(null);
        //$todo->setCreatedOn($now);
        //echo "estou aqui -> ".date("H:i d/m/Y");
        //print_r($judi->getAlteracao($now));die;
        //$judi->setAlteracao($now);
        //print_r($judi->setAlteracao($now));die;
        //$todo->setStatus(Todo::STATUS_PENDING);
           
        $sql = '
            INSERT INTO `certidao_cre_impressao` (`Numero_CNJ_Antigo`, `Natureza`, `UF`, `Parte_contraria`, `Segurado`, `Vlr_deferido`, `Vlr_da_causa`, `Vlr_condenacao`, `Honorarios`, `Vlr_certidao_de_credito`, `Aba`, `id`, `Alteracao`) VALUES (:Numero_CNJ_Antigo, :Natureza, :UF, :Parte_contraria, :Segurado, :Vlr_deferido, :Vlr_da_causa, :Vlr_condenacao, :Honorarios, :Vlr_certidao_de_credito, :Aba, :id, :Alteracao)';
        //print_r($judi);die;
        return $this->execute($sql, $judi);
    }
    private function update(Judi $judi) {
        //echo "estou aqui";die;
        //$judi->setLastModifiedOn(new DateTime(), new DateTimeZone('America/Sao_Paulo'));
        //$sql = 'UPDATE certidao_cre_impressao SET \'Numero_CNJ_Antigo\'=:Numero_CNJ_Antigo WHERE id = :id';
        $sql = "UPDATE `certidao_cre_impressao` SET Numero_CNJ_Antigo = :Numero_CNJ_Antigo , Natureza=:Natureza, UF=:UF, Parte_contraria=:Parte_contraria, Segurado=:Segurado, Vlr_deferido=:Vlr_deferido, Vlr_da_causa=:Vlr_da_causa, Vlr_condenacao=:Vlr_condenacao, Honorarios=:Honorarios, Vlr_certidao_de_credito=:Vlr_certidao_de_credito, Aba=:Aba, Alteracao=:Alteracao WHERE id = :id";
        //print_r($sql);die;
        return $this->execute($sql, $judi);
        //
    }
    public function delete($id) {
        $sql = '
          delete from certidao_cre_impressao
            WHERE
                id = :id';
        //echo $sql;die;
            /*UPDATE todo SET
                last_modified_on = :last_modified_on,
                deleted = :deleted*/
        $statement = $this->getDb2()->prepare($sql);
        $this->executeStatement($statement, array(
            ':id' => $id
        ));
        //':last_modified_on' => self::formatDateTime(new DateTime(), new DateTimeZone('America/Sao_Paulo')),':deleted' => true,
        return $statement->rowCount() == 1;
    }
    public function execute($sql,$judi) {
     //die;
        $statement = $this->getDb2()->prepare($sql);
        //print_r($statement);die;
        //print_r($this->getParams($judi));die;
        //print_r($this->executeStatement($statement, $this->getParams($judi)));die;
        $this->executeStatement($statement, $this->getParams($judi));
        //echo "estou aqui<pre>";
        //print_r($judi);die;
        //print_r($judi->getId());die;
        //if (!$judi->getId()) {
            //return $this->findById($this->getDb()->lastInsertId());
        //}
        if (!$statement->rowCount()) {
            //throw new NotFoundException('Processo com ID "' . $todo->getId() . '" nao existe.');
        }
        //print_r($judi);die;
        return $judi;
    }
    private function getParams(Judi $judi) {
     //print_r($judi);die;
        $params = array(
            ':Numero_CNJ_Antigo' => $judi->getNumero_CNJ_Antigo(),
            ':Natureza' => $judi->getNatureza(),
            ':UF' => $judi->getUF(),
            ':Parte_contraria' => $judi->getParte_contraria(),
            ':Segurado' => $judi->getSegurado(),
            ':Vlr_deferido' => $judi->getVlr_deferido(),
            ':Vlr_da_causa' => $judi->getVlr_da_causa(),
            ':Vlr_condenacao' => $judi->getVlr_condenacao(),
            ':Honorarios' => $judi->getHonorarios(),
            ':Vlr_certidao_de_credito' => $judi->getVlr_certidao_de_credito(),
            ':Aba' => $judi->getAba(),
            ':id' => $judi->getid(),
            ':Alteracao' => $judi->getAlteracao()
            );
        //echo "estou aqui";
        //print_r($judi->getNumero_CNJ_Antigo());die;
        //print_r($params);die;
        if ($judi->getId()) {
            // unset created date, this one is never updated
            unset($params[':created_on']);
        }
        //print_r($params);die;
        return $params;
    }
    private function executeStatement(PDOStatement $statement, array $params) {
        //print_r($statement->execute($params));die;
        if (!$statement->execute($params)) {
            self::throwDbError($this->getDb2()->errorInfo());
        }
    }
    private static function throwDbError(array $errorInfo) {
        // TODO log error, send email, etc.
        throw new Exception('DB error [' . $errorInfo[0] . ', ' . $errorInfo[1] . ']: ' . $errorInfo[2]);
    }
    
}