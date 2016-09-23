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
class JudiDao {
    
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
    public function listaProvavel2(TodoSearchCriteria $Todosearch = null) {
        $rows = $this->query("SELECT * FROM provavel_contabilizada LEFT JOIN (levantamento_judicial INNER JOIN geral_henrique) ON provavel_contabilizada.SEGURADO = levantamento_judicial.SEGURADO ORDER BY `levantamento_judicial`.`SINISTRO`  ASC") ->fetchAll();
        print_r($row);die;
        //if (!$row) {
            //return null;
        //}
        $todo = new Todo();
        foreach($rows as $row){
            TodoMapper::map($todo, $row);
            $todos[]=$row;
        }
        //print_r($todos);die;
        return $todos;
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
