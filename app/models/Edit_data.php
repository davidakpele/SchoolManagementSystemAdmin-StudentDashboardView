<?php
final class Edit_data 
{
    private $getdb_connect;
    public function __construct(){
        $this->getdb_connect = new Database;
    }

    public function edit_course($edit_id, $courseid, $subject, $course, $coursecode){
        $this->getdb_connect->query("UPDATE courses_subjects SET course_id=:courseid, course_code=:coursecode, subject_name=:subject WHERE id=:edit_id");
        $this->getdb_connect->bind(':edit_id', $edit_id);
        $this->getdb_connect->bind(':subject', $subject);
        $this->getdb_connect->bind(':coursecode', $coursecode);
        $this->getdb_connect->bind(':courseid', $courseid);
        if ($this->getdb_connect->execute()) {
            return true;
        }else {
            return false;
        }
    }
}
