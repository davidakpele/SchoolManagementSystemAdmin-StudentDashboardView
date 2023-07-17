<?php 

final class BackupDBModel 
{
    
	private $db;
	public function __construct(){ 
		$this->db = new Database;
	}

    
    public function _backupDb(){
     
      $command = "mysqldump -u username -p password midtechserver > /public/backup.sql";
      system($command);
    }
}