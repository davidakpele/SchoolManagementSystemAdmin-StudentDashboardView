<?php 

final class BackupDBModel 
{
    
	private $db;
	public function __construct(){ 
		$this->db = new Database;
	}

    
    public function _backupDb(){
        return true;
    }
}