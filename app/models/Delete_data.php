<?php
final class Delete_data
{
    private $getdb_connect;
    public function __construct(){
        $this->getdb_connect = new Database;
    }

    public function delete_subject($id){
        $ids = implode("','", $id);
		$this->getdb_connect->query("DELETE  FROM courses_subjects WHERE id IN ('".$ids."')");
		$ids = [];
		if (is_array($ids) || !is_array($ids))
		 	if ($ids) 
				foreach ($ids as $k => $id)	
					$this->getdb_connect->bind(($k+1), $id);
					if($this->getdb_connect->execute()){
						return true;
					}else{
						return false;
					} 
    }
}
