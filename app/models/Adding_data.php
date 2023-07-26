<?php

final class Adding_data
{
    private $getdb_connect;
    public function __construct(){
        $this->getdb_connect = new Database;
    }

    public function addcourse($courseid,$subject,$course, $coursecode){
        $this->getdb_connect->query("INSERT INTO courses_subjects(course_id, course_code, subject_name) VALUES (:courseid, :coursecode, :subject)");
        $this->getdb_connect->bind(':subject',$subject);
        $this->getdb_connect->bind(':coursecode',$coursecode);
        $this->getdb_connect->bind(':courseid',$courseid);
        if ($this->getdb_connect->execute()) {
            return true;
        }else {
            return false;
        }
    }
}
