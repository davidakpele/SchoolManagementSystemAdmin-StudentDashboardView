<?php

class SettingsModel{

    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function __saveLogoChanges($uploadPath){
        $this->db->query("SELECT * FROM `settings` WHERE id=1");
        if (!empty($this->db->resultSet())) {
			$this->db->query("UPDATE `settings` SET `logo`=:uploadPath WHERE id=1");
            $this->db->bind(':uploadPath', $uploadPath);
            if ($this->db->execute()) {
                return true;
            }
		}else {
            $this->db->query("INSERT INTO `settings`(`logo`, `backgroundcolor`) VALUES (:uploadPath,'')");
            $this->db->bind(':uploadPath', $uploadPath);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function __saveTitleChanges($schoolname){
        $this->db->query("SELECT * FROM `settings` WHERE id=1");
        if (!empty($this->db->resultSet())) {
			$this->db->query("UPDATE settings SET schoolname=:schoolname WHERE id=1");
            $this->db->bind(':schoolname', $schoolname);
            if ($this->db->execute()) {
                return true;
            }
		}else {
            $this->db->query("INSERT INTO `settings`(`schoolname`) VALUES (:schoolname)");
            $this->db->bind(':schoolname', $schoolname);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function _isGetLogo(){
        $this->db->query("SELECT * FROM `settings` WHERE id=1");
        $row =$this->db->single();
        if (!empty($row)) {
            return $row;    
        }else{
            return false;
        }
    }
}