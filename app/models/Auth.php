<?php 
    class Auth
    {

        /**
         * 
         * LoginModel Processing Model
         * var [type]
         * 
         */

        private $DB;
        public function __construct(){
            $this->DB = new Database;
        }
        // ======================================================================
        //Login student if that data provided by the student are correct
        // ======================================================================

        public function studentLogin($StudentUsername, $StudentPassword){
            $this->DB->query('SELECT * FROM student WHERE Roll__No = :StudentUsername');
            // Bind the values
            $this->DB->bind(':StudentUsername', $StudentUsername);
            $row = $this->DB->single();
            if(!empty($row)){
                $hashedPassword = $row->password;
                if(password_verify($StudentPassword, $hashedPassword)){
                    return $row;
                }else {
                    return false;
                }
            }else {
                return false;
            }
        }
        public function SearchMatric($ApplicatioNo, $dbo, $SUname){
            $this->DB->query("SELECT Roll__No, Surname, Date__of__birth FROM `student` WHERE Roll__No=:ApplicatioNo AND Surname=:SUname AND Date__of__birth=:dbo");
            $this->DB->bind(':ApplicatioNo', $ApplicatioNo);
            $this->DB->bind(':SUname', $SUname);
            $this->DB->bind(':dbo', $dbo);
            $stmt= $this->DB->single();
            if (!empty($stmt)) {
                return $stmt;
            }else {
                return false;
            }
        }
        
        public function isUserMatrichNumber($MatricNo){
            $this->DB->query('SELECT * FROM student WHERE Roll__No=:MatricNo');
            $this->DB->bind(':MatricNo', $MatricNo);
            $row = $this->DB->single();
            if (!empty($row)) {
                return true;
            }else {
                return false;
            }
        }
        public function updateStudentLoginTime($id, $Active_login){
            $this->DB->query("UPDATE `student` SET active = :Active_login, Onlinestatus = '1' WHERE student__Id = :id");
            $this->DB->bind(':id', $id);
            $this->DB->bind(':Active_login', $Active_login);
            if($this->DB->execute()){
                return true;
            }else{
                return false;
            }
        }
        public function findSpecificStudent($id){
		$this->DB->query('SELECT student.student__Id, student.Conid, student.Roll__No, student.Surname, student.othername, student.password, student.Date__of__birth, 
		student.gender, student.email, student.featured, student.relationship, student.telephone, student.image, student.Onlinestatus, student.active,
		studentapp.Conid, studentapp.Application_id, studentapp.Faculty_id, studentapp.Department_id, studentapp.Program__Type, studentapp.NIN, studentapp.Entrylevel, studentapp.Class, studentapp.semester, studentapp.settings
		 FROM student, studentapp WHERE student.student__Id = :id AND student.Conid = studentapp.Conid');
		$this->DB->bind(':id', $id);
		$row = $this->DB->single();
		if(!empty($row)){
			return $row;
		}else {
			return false;
		}
	}
    }   