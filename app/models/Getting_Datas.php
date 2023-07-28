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
            return $responses['data']=false;
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

	public function get_edit_subject($id){
		$data = [];
		$this->getdb_connect->query("SELECT * FROM courses_subjects WHERE id =:id");
		$this->getdb_connect->bind(':id', $id);
		$course_stmt = $this->getdb_connect->single();
		if(!empty($course_stmt)){
			$data['subject_data']=$course_stmt;
			$this->getdb_connect->query("SELECT * FROM courses");
			$department_stmt = $this->getdb_connect->resultSet();
			$data['course_data']=$department_stmt;
			return $data;
		}else{
			return false;
		}
	}

	public function view_single_student_attendance_table($id){
		$responses = array();
		$data = array();

		$this->getdb_connect->query("SELECT e.Surname, e.othername FROM student e WHERE e.student__Id=:id ");
		$this->getdb_connect->bind(":id", $id);
		$AuthStudentName=$this->getdb_connect->single();

		$data['student_name']=$AuthStudentName;
		$this->getdb_connect->query("SELECT a.*, s.*, c.ClassID, b.CourseID, b.CourseCode, q.SemesterID, q.Title 
		FROM attendance_record a INNER JOIN attendance_list s ON a.attendance_id = s.id 
		INNER JOIN semester q ON q.SemesterID=s.semester
		INNER JOIN class c ON c.ClassID=s.class
		INNER JOIN courses b ON b.CourseID=s.course
		WHERE a.student_id=:id ");
		$this->getdb_connect->bind(":id", $id);
		$result=$this->getdb_connect->resultSet();
		if (!empty($result)) {
			$data['result']=$result;
			return $data;
		}else{
			
			$responses['Status']="404";
			$responses['Data']='Attendance has not been mark on this student..!';
			return $responses;
		}
	}
}