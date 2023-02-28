<?php 
    class LoginModel
    {

        private $Router;
        public function __construct(){
            $this->Router = new Database;
        }

        public function mimix($basepath){
            $this->Router->query("SELECT Child_id, Child_name FROM `sublist` WHERE Child_id = :basepath");
            $this->Router->bind(':basepath', $basepath);
            $result = $this->Router->single();
            if($result){ 
                return $result;
            }else {
                return false;
            }
        }

        public function examTime($depid,$clasid,$semid){
            $this->Router->query("SELECT * FROM exam__timeset WHERE Department=:depid AND Classes=:clasid AND Semester=:semid AND status=0");
            $this->Router->bind(':depid', $depid);
            $this->Router->bind(':clasid', $clasid);
            $this->Router->bind(':semid', $semid);
            //$this->Router->bind(':eid', $eid);
            $reader = $this->Router->resultSet();
            if(!empty($reader)) {
                return $reader;
            }else {
                return false;
            }
        }
        public function GetNoneExistingExam($eid,$depid,$clasid,$semid){
            $ids = $eid;
            /**
             * this code check is exam is already written by a specific user
             * assuming exam id is [1,2,3,7] and if one exam is written by users, it takes the exam id and the user id and store them both in database-table monitor {Meid | studendid} 
             * the sql check if written by this user that logged-in display the exam that is not written or exist here in the monitor table.x
             */
            $comma_separated = implode("','", $ids);
            $comma_separated = "'".$comma_separated."'";
            $this->Router->query("SELECT * FROM exam__timeset WHERE Department=1 AND Classes=3 AND Semester=1 AND status=0 AND eid NOT IN (".$comma_separated.") ");
            $checkexist = $this->Router->resultSet();
            if (!empty($checkexist)) {
                return $checkexist;
            }else {
                return false;
            }
        }
        public function fetchtimedata($depid, $clasid, $semid){
            $this->Router->query('SELECT * FROM exam__timeset WHERE Department=:depid AND Classes =:clasid AND Semester=:semid AND status=1');
            $this->Router->bind(':depid', $depid);
            $this->Router->bind(':clasid', $clasid);
            $this->Router->bind(':semid', $semid);
            $num = $this->Router->resultSet();
            if(!empty($num)) {
                return $num;
            }else {
                return $num;
            }
        }
        public function demo2($examid, $id){
            $this->Router->query('SELECT Meid, studentid FROM monitor WHERE Meid =:examid AND studentid =:id');
            $this->Router->bind(':examid', $examid);
            $this->Router->bind(':id', $id);
            $stmt = $this->Router->single();
            if(!empty($stmt)) {
                return $stmt;
            }else {
                return false;
            }
        }

        public function isexamTime($eid){
            $this->Router->query('SELECT * FROM exam__timeset WHERE eid=:eid');
            $this->Router->bind(':eid', $eid);
            $num = $this->Router->single();
            if(!empty($num)) {
                return  $num;
            }else {
                return false;
            }
        }
        public function beforeSave($eid,$id){
            $this->Router->query("SELECT * FROM monitor WHERE examid =:eid AND studentid=:id AND examstatus=1");
            $this->Router->bind(':eid', $eid);
            $this->Router->bind(':id', $id);
            $num = $this->Router->resultSet();
            if(!empty($num)) {
                return  $num;
            }else {
                return false;
            }
        }
        public function isSave($eid, $getConAns, $FailAnsQ, $defaultmark, $finallyGrade, $GradeResponse, $id){
            $this->Router->query('INSERT INTO monitor(examid, correctQuest, failQuest, defaultmark, score, grade, studentid, examstatus)
                                VALUES(:eid, :getConAns, :FailAnsQ, :defaultmark, :finallyGrade, :GradeResponse, :id, 1)');
            $this->Router->bind(':eid', $eid);
            $this->Router->bind(':getConAns', $getConAns);
            $this->Router->bind(':FailAnsQ', $FailAnsQ);
            $this->Router->bind(':defaultmark', $defaultmark);
            $this->Router->bind(':finallyGrade', $finallyGrade);
            $this->Router->bind(':GradeResponse', $GradeResponse);
            $this->Router->bind(':id', $id);
            $num = $this->Router->execute();
            if(!empty($num)) {
                return  $num;
            }else {
                return false;
            }
        }

        public function lastlogAccountant($Active_login, $activeusernin, $activeuserAccesscode){
            $this->Router->query("SELECT NIN, Accesscode FROM (SELECT NIN, Accesscode as Accesscode FROM human_resources 
                    UNION ALL
                    SELECT NIN, Accesscode FROM lecturals) x 
                    WHERE Accesscode = :activeuserAccesscode AND NIN = :activeusernin ");
                    //Bind the values 
            $this->Router->bind(':activeuserAccesscode', $activeuserAccesscode);
            $this->Router->bind(':activeusernin', $activeusernin);
            $runAccountant = $this->Router->single();
            return $runAccountant;
        }
            

        public function setExamDepo($question, $answer, $wrong1,  $wrong2, $wrong3, $wrong4, $AnswersButtonType, $configId){
            $this->Router->query("INSERT INTO `examination__center`(`Courseid`, `question`, `answer`, `option 1`, `option 2`, `option 3`, `option 4`, `Ansbutton`)VALUES(:configId, :question, :answer, :wrong1, :wrong2, :wrong3, :wrong4, :AnswersButtonType)");
            $this->Router->bind(':question', $question);
            $this->Router->bind(':answer', $answer);
            $this->Router->bind(':wrong1', $wrong1);
            $this->Router->bind(':wrong2', $wrong2);
            $this->Router->bind(':wrong3', $wrong3);
            $this->Router->bind(':wrong4', $wrong4);
            $this->Router->bind(':AnswersButtonType', $AnswersButtonType);
            $this->Router->bind(':configId', $configId);
            if($this->Router->execute()){
                return true;
            }else {
                return false;
            }
        }

        public function updateExamstatus($eid){ 
            $this->Router->query('UPDATE exam__timeset SET status=1 WHERE eid=:eid');
            $this->Router->bind(':eid', $eid);
            if($this->Router->execute()){
                return true;
            }else{
                return false;
            }
        }
        public function StudentRecords(){
            $this->Router->query('SELECT ReceivedAns,qid,ansid,ans FROM studentans, answer');
            $Statement = $this->Router->resultSet();
            return $Statement;
        }

        public function FetchStudentData($id){
            $this->Router->query('SELECT * FROM student__account WHERE student__Id = :id');
            $this->Router->bind(':id', $id);
            $row = $this->Router->single();
            if(!empty($row)){
                return  $row;
            }else {
                return false;
            }
        }
        public function studentdata($relationid){
            $this->Router->query('SELECT * FROM studentapp WHERE Conid = :relationid');
            $this->Router->bind(':relationid', $relationid);
            $row = $this->Router->single();
            if(!empty($row)){
                return  $row;
            }else {
                return false;
            }
        }
        public function FetchStudentDepartmentName($Courseid){
            $this->Router->query('SELECT * FROM courses WHERE CourseCode = :Courseid');
            $this->Router->bind(':Courseid', $Courseid);
            $row = $this->Router->single();
            if(!empty($row)){
                return  $row;
            }else {
                return false;
            }
        }
        public function FetchStudentCategoryName($Courseid){
            $this->Router->query('SELECT Cat_id, Child_id, Category__ID, Category__name FROM `categories`, `sublist` WHERE `Child_id` = :Courseid AND Category__ID = Cat_id');
            $this->Router->bind(':Courseid', $Courseid);
            $stmt = $this->Router->single();
            return $stmt;
        }
        public function cat($ftyType){
            $this->Router->query('SELECT * FROM `Faculty__tb` WHERE `Faculty__ID` = :ftyType');
            $this->Router->bind(':ftyType', $ftyType);
            $fty__stmt = $this->Router->single();
            return $fty__stmt;
        }
        public function scheduleZoomMeeting($HosterId, $HostLink, $ZTopic, $Timeframe, $duration, $ZID, $Zpassword){
            $this->Router->query('INSERT INTO `ZoomSchedule` (HosterID, Zoom__Topic, Scheduled__TIME, Duration, Zoom_ID, Zoom__link, Zoom__Password, time)VALUES(:HosterId, :ZTopic, :Timeframe, :duration, :ZID, :HostLink, :Zpassword, NOW()) ');
            $this->Router->bind(':HosterId', $HosterId);
            $this->Router->bind(':ZTopic', $ZTopic);
            $this->Router->bind(':Timeframe', $Timeframe);
            $this->Router->bind(':duration', $duration);
            $this->Router->bind(':ZID', $ZID);
            $this->Router->bind(':HostLink', $HostLink);
            $this->Router->bind(':Zpassword', $Zpassword);
            if($this->Router->execute()){
                return true;
            }else {
                return false;
            }   
        }

        public function fetchZoomdata(){
            $this->Router->query('SELECT * FROM ZoomSchedule ORDER BY time ');
            $row = $this->Router->resultSet();
            if($row <= 1){
                return $row;
            }
        }

        public function isCounter($eid){
            $this->Router->query('SELECT * FROM questions WHERE examinationid =:eid');
            $this->Router->bind(':eid', $eid);
            $num = $this->Router->rowCount();
            return  $num;
        }

        public function isStudentComment($data){
            $this->Router->query('INSERT INTO blogcomments (User_id, Post_id, c_token, body, created_at)VALUES(:CommentUSERID, :Postid, :c_token, :Comment, :timePosted)');
            $this->Router->bind(':CommentUSERID', $data['CommentUSERID']);
            $this->Router->bind(':Postid', $data['Postid']);
            $this->Router->bind(':c_token', $data['c_token']);
            $this->Router->bind(':Comment', $data['Comment']);
            $this->Router->bind(':timePosted', $data['timePosted']);
            if($this->Router->execute()){
			    return true;
            }else {
                return false;
            }
        }
    
        public function createBlogPost($data){
            $this->Router->query("INSERT INTO schoolblog (User_id, Post_id, body, created_at) VALUES(:UserId, :BlogPostId, :FeedPost,:timePosted)");
            $this->Router->bind(':UserId', $data['UserId']);
            $this->Router->bind(':FeedPost', $data['FeedPost']);
            $this->Router->bind(':BlogPostId', $data['BlogPostId']);
            $this->Router->bind(':timePosted', $data['timePosted']);
            if($this->Router->execute()){
			    return true;
            }else {
                return false;
            }
        }
        public function ArrayFlag($array){
            $ids = $array;
            $this->Router->query("SELECT * FROM sublist WHERE Child_id IN (".$ids.") ");
            $ids =array();
            if (is_array($ids) || !is_array($ids))
            foreach ($ids as $k => $id)	
            $this->DB->bind(($k+1), $id);
            $run = $this->Router->resultSet();
            if($run){
                return $run;
            }else {
                return false;
            }
        }

        public function fetchstudent($departmentid){
            $this->Router->query("SELECT student__Id, Roll__No, Application__Type, Department__Type,  Program__Type, NIN, Entrylevel, Surname,  othername, Date__of__birth, gender,  email, featured, relationship, telephone, session FROM student__account WHERE Department__Type = :departmentid");
            $this->Router->bind(':departmentid', $departmentid);
            $sql = $this->Router->resultSet();
            if($sql == true){
                return $sql;
            }else {
                return false;
            }
        }
        public function FetchApplicationType($stdappTy){
            $this->Router->query("SELECT * FROM categories WHERE Category__ID = :stdappTy");
            $this->Router->bind(':stdappTy', $stdappTy);
            $stmt= $this->Router->resultSet();
             if($stmt == true){
                return $stmt;
            }else {
                return false;
            }
        }
        public function fetchStudentDepartment($stdDpt){
            $this->Router->query("SELECT * FROM sublist WHERE Child_id = :stdDpt");
            $this->Router->bind(':stdDpt', $stdDpt);
            $stmt2 = $this->Router->resultSet();
             if($stmt2 == true){
                return $stmt2;
            }else {
                return false;
            }
        }

        public function getExam($eid){
            //$this->Router->query("SELECT * FROM questions WHERE examinationid=:eid ORDER BY RAND() ");
            $this->Router->query("SELECT * FROM questions WHERE examinationid=:eid ");
            $this->Router->bind(':eid', $eid);
            $stmt = $this->Router->resultSet();
             if(!empty($stmt)){
                return $stmt;
            }else {
                return false;
            }
        }
        public function isCheckExamAnsers($ci, $userAnswers){
            $this->Router->query("SELECT * FROM answer WHERE qid=:ci AND ans=:userAnswers");
            $this->Router->bind(':ci', $ci);
            $this->Router->bind(':userAnswers', $userAnswers);
            $stmt = $this->Router->resultSet();
             if(!empty($stmt)){
                return $stmt;
            }else {
                return false;
            }
        }
        public function isCheckExam($eid){
            $this->Router->query("SELECT * FROM questions WHERE examinationid=:eid ");
            $this->Router->bind(':eid', $eid);
            $stmt = $this->Router->resultSet();
             if(!empty($stmt)){
                return $stmt;
            }else {
                return false;
            }
        }

        public function getSearchUser($id){
            $this->Router->query("SELECT * FROM student__account WHERE student__Id=:id");
            $this->Router->bind(':id', $id);
            $stmt = $this->Router->single();
             if(!empty($stmt)){
                return $stmt;
            }else {
                return false;
            }
        }
        public function getSearchCourse($id){
            $this->Router->query("SELECT * FROM courses WHERE CourseID=:id");
            $this->Router->bind(':id', $id);
            $stmt = $this->Router->single();
             if(!empty($stmt)){
                return $stmt;
            }else {
                return false;
            }
        }
    }
    