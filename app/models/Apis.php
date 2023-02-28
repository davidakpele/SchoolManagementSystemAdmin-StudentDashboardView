<?php
    class Apis
    {

        /**
         * 
         * API Data Fetch
         * var [type]
         * 
         */

        private $DB;
        public function __construct(){
            $this->DB = new Database;
        }
        public function RenderProgrammeListSQL($id){
            $this->DB->query('SELECT Id, Duration, headerone, Subtext, UTME, WASSCE, NECO_SSCE, IGCSE, GCSE, Child_id, Child_name 
            FROM `requirementoutlines`, `sublist` 
            WHERE Child_id = Id AND Child_id = :id');
            $this->DB->bind(':id', $id);
            $sqlstmt = $this->DB->resultSet();
            if (!empty($sqlstmt)) {
                return $sqlstmt;
            }else {
                return false;
            }
        }
        public function selectDeps($id){
            $this->DB->query('SELECT faculties.FacultyID, departments.DepartmentName, departments.DepartmentID, departments.FacultyID
            FROM `departments`, `faculties` 
            WHERE departments.FacultyID = faculties.FacultyID AND departments.FacultyID = :id');
            $this->DB->bind(':id', $id);
            $stmt = $this->DB->resultSet();
            if (!empty($stmt)) {
                return $stmt;
            }else {
                return false;
            }
        }
        public function selectFaculties($___ApplicationType){
            $ids = $___ApplicationType;
            $this->DB->query("SELECT  Category__ID, Category__name, FacultyID, Cat_id, FacultyName
            FROM `categories`, `faculties` WHERE  Cat_id=Category__ID AND Cat_id=:ids ");
            $this->DB->bind(':ids', $ids);
            $checkexist = $this->DB->resultSet();
            if (!empty($checkexist)) {
                return $checkexist;
            }else {
                return false;
            }
	    }    
        public function selectProgram($id){
            $this->DB->query("SELECT Program__ID, c_id, Program__name
            FROM `categories`, `program` WHERE  c_id=Category__ID AND c_id=:id ");
            $this->DB->bind(':id', $id);
            $checkexist = $this->DB->resultSet();
            if (!empty($checkexist)) {
                return $checkexist;
            }else {
                return false;
            }
	    }    
        public function selectSemester($id){
            $this->DB->query("SELECT semester.SemesterID, semester.Parent, semester.ClassID, semester.Title, class.ClassID 
            FROM `semester`, `class` WHERE  semester.ClassID=class.ClassID AND class.ClassID=:id ");
            $this->DB->bind(':id', $id);
            $checkexist = $this->DB->resultSet();
            if (!empty($checkexist)) {
                return $checkexist;
            }else {
                return false;
            }
	    }    
        public function selectClass(){
            $this->DB->query("SELECT * FROM class");
            $checkexist = $this->DB->resultSet();
            if (!empty($checkexist)) {
                return $checkexist;
            }else {
                return false;
            }
	    }    
        public function FetchRender($___ApplicationType){
            $this->DB->query('SELECT Category__ID, Category__name, Cat_id, Child_id, Child_name
            FROM `categories`, `sublist` 
            WHERE Cat_id = Category__ID AND Category__ID = :___ApplicationType');
            $this->DB->bind(':___ApplicationType', $___ApplicationType);
            $books = $this->DB->resultSet();
            if (!empty($books)) {
                return $books;
            }else {
                return false;
            }
        }
        
        public function FetchApplication($___ApplicationType){
            $id = $___ApplicationType;
            $this->DB->query("SELECT * FROM `categories` WHERE Category__ID=:id AND Status=1");
            $this->DB->bind(':id', $id);
            $keyval = $this->DB->Single();
            if(!empty($keyval)){
                return true;
            }else{
                return false;
            }
        }
    }