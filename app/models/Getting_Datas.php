<?php
class Getting_Datas{

    private $getdb_connect;
    public function __construct(){
        $this->getdb_connect = new Database;
    }


    public function get_all_courses_subjects(){
        $responses=[];
        $this->getdb_connect->query("Select a.*, b.CourseID, b.CourseCode, b.CourseTitle from courses_subjects a inner join courses b where b.CourseID=a.course_id and a.course_code=b.CourseCode");
        $run_stmt = $this->getdb_connect->resultSet();
		if($run_stmt > 0 && !empty($run_stmt)){
			while($result = $this->getdb_connect->resultSet($run_stmt)){
				return $result;
			}
		}else {
            return $responses['data']='No data found.!';
        } 
    }

    public function get_all_courses(){
		$this->getdb_connect->query("SELECT * FROM courses");
		$stmt = $this->getdb_connect->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
    public function get_aSinlge_courses($id){
		$this->getdb_connect->query("SELECT * FROM courses WHERE CourseID=:id");
		$this->getdb_connect->bind(':id', $id);
		$stmt = $this->getdb_connect->single();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}

	public function get_subject_ina_course($id){
		$this->getdb_connect->query("SELECT * FROM courses_subjects WHERE course_id=:id");
		$this->getdb_connect->bind(':id', $id);
		$returning_stmt = $this->getdb_connect->resultSet();
		if(!empty($returning_stmt)){
			return $returning_stmt;
		}else {
			return false;
		}
    }
}