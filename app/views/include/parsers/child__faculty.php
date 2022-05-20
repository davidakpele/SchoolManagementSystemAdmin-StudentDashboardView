<?php
class Allfunction{
       private $DB;
        public function __construct(){
            $this->DB = new Database;
        }
        public function childcategory(){
            $Faculty__ID = (int)$_POST['Faculty__ID'];
            $this->DB->query('SELECT * FROM `child__faculty__tb` WHERE `Child__Faculty__ID` = :Faculty__ID ORDER BY Child__faculty__name');
            $this->DB->bind(':Faculty__ID', $Faculty__ID);
            $select__Stmt= $this->DB->resultSet();
            return $select__Stmt;
            ob_start(); 
            echo '<option value=""></option>';
           while($child = resultSet($select__Stmt)){
            echo '<option value=""></option>';
            }
             
            echo ob_get_clean();
        }
    }
