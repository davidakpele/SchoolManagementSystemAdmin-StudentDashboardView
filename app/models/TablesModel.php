<?php

class TablesModel{

    private $db;
    public function __construct(){
        $this->db = new Database;
    }


    public function _isget_allTable(){
        $this->db->query("show tables");
        return  $this->db->resultSet();
    }

    public function _isprocess_tb($table, $action){
        if ($action == "drop") {
            // drop table
            $this->db->query("DROP TABLE $table");
            if ($this->db->execute()) {
                return true;
            }else {
                return false;
            }
        }elseif ($action == "truncate") {
            // truncate table
            $this->db->query("TRUNCATE $table");
            if ($this->db->execute()) {
                return true;
            }else {
                return false;
            }
        }
    }
}