<?php 
Class User {
	/**
	 * Define my access to my database function
	 * Assigning $DB as the Default access to my database each time i need to read,write,post,delete data from the database
	 */

	private $DB;
	public function __construct(){
		$this->DB = new Database;
	}


	public function SQLFetchStudentDESC(){
		$this->DB->query('SELECT * FROM student ORDER BY student__Id DESC');
		$row = $this->DB->single();
		if (!empty($row)) {
			return $row;
		}else {
			return false;
		}
	}
	
	public function OnlineStudent($depid, $clasid, $semid){
		$this->DB->query('SELECT student.student__Id, student.Conid, student.Roll__No, student.Surname, student.othername, student.password, student.Date__of__birth, 
		student.gender, student.email, student.featured, student.relationship, student.telephone, student.image, student.Onlinestatus, student.active,
		studentapp.Conid, studentapp.Application_id, studentapp.Faculty_id, studentapp.Department_id, studentapp.Program__Type, studentapp.NIN, studentapp.Entrylevel, studentapp.Class, studentapp.semester, studentapp.settings
		 FROM student, studentapp WHERE studentapp.Department_id =:depid AND studentapp.Class=:clasid AND studentapp.semester=:semid AND student.onlinestatus ="1" ORDER BY student.Surname DESC');
		$this->DB->bind('depid', $depid);
		$this->DB->bind('clasid', $clasid);
		$this->DB->bind('semid', $semid);
		$row = $this->DB->resultSet();
		if (!empty($row)) {
			return $row;
		}else {
			return false;
		}
	}

	public function getviewresult($eid, $id){
		$this->DB->query("SELECT monitor.examid, monitor.correctQuest, monitor.failQuest, monitor.defaultmark, monitor.score, monitor.grade,
						monitor.studentid, e_timeset.eid, e_timeset.Department, e_timeset.Classes, e_timeset.Semester, e_timeset.Course,
						courses.CourseCode, courses.CourseUnit, courses.CourseStatus, courses.CourseTitle 
						FROM monitor, courses, e_timeset 
						WHERE monitor.examid=:eid 
						AND e_timeset.eid=monitor.examid
						AND e_timeset.Course=courses.CourseCode
						AND monitor.studentid=:id");
		$this->DB->bind(':eid', $eid);
		$this->DB->bind(':id', $id);
		$stmt = $this->DB->single();
		if (!empty($stmt)) {
			return $stmt;
		}else {
			return false;
		}
	}
	public function UpdateUserStatus($id){
		$this->DB->query('UPDATE `student` SET onlinestatus = 0 WHERE student__Id  = :id');
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	public function App($id){
		$this->DB->query('DELETE FROM categories WHERE Category__ID=:id');
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function Fact($id){
		$this->DB->query('DELETE FROM faculties WHERE FacultyID=:id');
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function Dep($id){
		$this->DB->query('DELETE FROM departments WHERE DepartmentID=:id');
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function Course($id){
		$ids = implode("','", $id);
		$this->DB->query("DELETE FROM courses WHERE CourseID IN ('".$ids."')");
		if (is_array($ids) || !is_array($ids))
		foreach ($ids as $k => $id)	
		$this->DB->bind(($k+1), $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function DeleteClass($id){
		$ids = implode("','", $id);
		$this->DB->query("DELETE FROM class WHERE ClassID IN ('".$ids."')");
		if (is_array($ids) || !is_array($ids))
		foreach ($ids as $k => $id)	
		$this->DB->bind(($k+1), $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}

	public function DeleteSemester($id){
		$ids = implode("','", $id);
		$this->DB->query("DELETE FROM semester WHERE SemesterID IN ('".$ids."')");
		if (is_array($ids) || !is_array($ids))
		foreach ($ids as $k => $id)	
		$this->DB->bind(($k+1), $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function sqlCountCourse(){
		$this->DB->query("SELECT * FROM courses");
		$stmt = $this->DB->rowCount();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function sqlCountusers(){
		$this->DB->query("SELECT * FROM users");
		$stmt = $this->DB->rowCount();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function ParentDataCount(){
		$this->DB->query("SELECT * FROM parent");
		$stmt = $this->DB->rowCount();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}

	public function ParentSQL(){
		$this->DB->query("SELECT * FROM parent");
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}

	public function fetchCourses(){
		$this->DB->query("SELECT * FROM courses");
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	
	public function fetchClass(){
		$this->DB->query("SELECT * FROM class");
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}

	public function getClassData($id){
		$this->DB->query("SELECT * FROM class WHERE ClassID =:id");
		$this->DB->bind(':id', $id);
		$stmt = $this->DB->single();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	
	public function fetchsemeter(){
		$this->DB->query("SELECT * FROM semester ORDER BY Title ASC");
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
			
		}else {
			return false;
		}
	}

	public function ClassModel(){
		$this->DB->query("SELECT * FROM class ORDER BY Title ASC");
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}

	public function EditClassData($id){
		$this->DB->query("SELECT * FROM class WHERE ClassID =:id");
		$this->DB->bind(':id', $id);
		$stmt = $this->DB->single();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function SQLParent($id){
		$this->DB->query("SELECT * FROM parent WHERE Parent___id =:id");
		$this->DB->bind(':id', $id);
		$stmt = $this->DB->single();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}

	public function SQLSemester($id){
		$this->DB->query("SELECT * FROM semester WHERE ClassID =:id");
		$this->DB->bind(':id', $id);
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function SQLSemesterID($id){
		$this->DB->query("SELECT * FROM semester WHERE SemesterID =:id");
		$this->DB->bind(':id', $id);
		$stmt = $this->DB->single();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}

	public function facultiessSql(){
		$this->DB->query('SELECT * FROM faculties ');
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
 
	public function isSelectArrayParent($newcatid){
		$ids = $newcatid;
		$this->DB->query("SELECT * FROM categories WHERE Category__ID IN (".$ids.") ");
		$ids =array();
		if (is_array($ids) || !is_array($ids))
		foreach ($ids as $k => $id)	
		$this->DB->bind(($k+1), $id);
		$checkexist = $this->DB->resultSet();
		if (!empty($checkexist)) {
			return $checkexist;
		}else {
			return false;
		}
	}
	public function isSelectArrayFacuty($factid){
		$ids = $factid;
		$this->DB->query("SELECT * FROM faculties WHERE FacultyID=:ids ");
		$this->DB->bind(':ids', $ids);
		$checkexist = $this->DB->single();
		if (!empty($checkexist)) {
			return $checkexist;
		}else {
			return false;
		}
	}
	
	public function AddnewUser($data){
		$this->DB->query('INSERT INTO users (Admin__id, Surname, Othername, Email, username, password, Gender, Mobile, Date_of_birth, Create_on, Role)
						VALUES(:id, :Surname, :Othername, :email, :username, :password, :gender, :mobile, :DOB, NOW(), :assign)');
		$this->DB->bind(':id', $data['id']);
		$this->DB->bind(':assign', $data['assign']);
		$this->DB->bind(':username', $data['username']);
		$this->DB->bind(':Surname', $data['Surname']);
		$this->DB->bind(':Othername', $data['Othername']);
		$this->DB->bind(':email', $data['email']);
		$this->DB->bind(':password', $data['password']);
		$this->DB->bind(':mobile', $data['mobile']);
		$this->DB->bind(':DOB', $data['DOB']);
		$this->DB->bind(':gender', $data['gender']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	public function AddCourseModel($data){
		$this->DB->query('INSERT INTO courses (DepartmentID, ClassID, SemesterID, CourseCode, CourseTitle, CourseUnit, CourseStatus)
						VALUES(:departmemtid, :classid, :semester,
						 :courscode, :coursname, :CoursesUnit,
						  :CourseStatus)');
		$this->DB->bind(':departmemtid', $data['departmemtid']);
		$this->DB->bind(':classid', $data['classid']);
		$this->DB->bind(':semester', $data['semester']);
		$this->DB->bind(':courscode', $data['courscode']);
		$this->DB->bind(':coursname', $data['coursname']);
		$this->DB->bind(':CoursesUnit', $data['CoursesUnit']);
		$this->DB->bind(':CourseStatus', $data['CourseStatus']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	public function checksemester($ClassVal){
		$this->DB->query("SELECT ClassID FROM semester WHERE ClassID=:ClassVal ");
		$this->DB->bind(':ClassVal', $ClassVal);
		$checkexist = $this->DB->rowCount();
		if (!empty($checkexist)) {
			return $checkexist;
		}else {
			return false;
		}
	}
	public function GetSemesterData($id){
		$this->DB->query("SELECT * FROM semester WHERE SemesterID=:id ");
		$this->DB->bind(':id', $id);
		$checkexist = $this->DB->single();
		if (!empty($checkexist)) {
			return $checkexist;
		}else {
			return false;
		}
	}
	public function createnewsemester($data){
		$this->DB->query('INSERT INTO semester (Parent, ClassID, Title)
						VALUES(:parent, :classid, :title)');
		$this->DB->bind(':parent', $data['parent']);
		$this->DB->bind(':classid', $data['classid']);
		$this->DB->bind(':title', $data['title']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	public function EditSemester($data){
		$this->DB->query('UPDATE semester SET Parent=:Parent, ClassID=:classid, Title=:titleWHERE SemesterID=:id');
		$this->DB->bind(':id', $data['id']);
		$this->DB->bind(':Parent', $data['Parent']);
		$this->DB->bind(':title', $data['title']);
		$this->DB->bind(':classid', $data['classid']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	public function EditCourseModel($data){
		$this->DB->query('UPDATE courses SET DepartmentID=:departmemtid, ClassID=:classid, SemesterID=:semester, 
		CourseCode=:courscode, CourseTitle=:coursname, CourseUnit=:CoursesUnit, CourseStatus=:CourseStatus WHERE CourseID=:id');
		$this->DB->bind(':id', $data['id']);
		$this->DB->bind(':departmemtid', $data['departmemtid']);
		$this->DB->bind(':classid', $data['classid']);
		$this->DB->bind(':semester', $data['semester']);
		$this->DB->bind(':courscode', $data['courscode']);
		$this->DB->bind(':coursname', $data['coursname']);
		$this->DB->bind(':CoursesUnit', $data['CoursesUnit']);
		$this->DB->bind(':CourseStatus', $data['CourseStatus']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	public function SQLupdateUser($param){
		$this->DB->query('UPDATE users SET Surname =:fname, Othername=:lname, Email=:email, username=:username WHERE Admin__id =:id');
		$this->DB->bind(':fname', $param['fname']);
		$this->DB->bind(':lname', $param['lname']);
		$this->DB->bind(':username', $param['username']);
		$this->DB->bind(':id', $param['id']);
		$this->DB->bind(':email', $param['email']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	public function SQLupdateUserLevel($param){
		$this->DB->query('UPDATE users SET Role =:role, username =:username WHERE Admin__id =:id');
		$this->DB->bind(':role', $param['role']);
		$this->DB->bind(':id', $param['id']);
		$this->DB->bind(':username', $param['username']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}

	public function AddClassModel($data){
		$this->DB->query('INSERT INTO class (Title)VALUES(:Classname)');
		$this->DB->bind(':Classname', $data['Classname']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	public function UpdateClassModel($data){
		$this->DB->query('UPDATE class SET Title =:Classname WHERE ClassID =:id');
		$this->DB->bind(':Classname', $data['Classname']);
		$this->DB->bind(':id', $data['id']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}	
	}
	public function AppRowCount(){
		$this->DB->query("SELECT * FROM categories");
		$stmt = $this->DB->rowCount();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function getCourseData($id){
		$this->DB->query("SELECT * FROM courses WHERE CourseID =:id");
		$this->DB->bind(':id', $id);
		$stmt = $this->DB->single();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function isSelectArrayCat($vim){
		$this->DB->query("SELECT * FROM categories WHERE Category__ID =:vim");
		$this->DB->bind(':vim', $vim);
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function FacutlytRowCount(){
		$this->DB->query("SELECT * FROM faculties");
		$stmt = $this->DB->rowCount();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function DepartmentRowCount(){
		$this->DB->query("SELECT * FROM departments");
		$stmt = $this->DB->rowCount();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function StudentRowCount(){
		$this->DB->query("SELECT * FROM student");
		$stmt = $this->DB->rowCount();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function AdminSQLfetchRole(){
		$this->DB->query("SELECT * FROM usermanager WHERE Id > 1");
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function AdminSQLfetchDepartment(){
		$this->DB->query("SELECT * FROM departments");
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function SuperSQLfetchRole(){
		$this->DB->query("SELECT * FROM usermanager");
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function adminTable(){
		$this->DB->query('SELECT No, Id, Level, Admin__id, Email, Surname, Othername, Create_on, username, password, Role FROM `usermanager`, `users` WHERE Id>1 AND No >1 AND Id = Role');
		$row = $this->DB->resultSet();
		if(!empty($row)){		
			return $row;
		}else{
			return false;
		}	
	}

	public function SuperadminTable(){
		$this->DB->query('SELECT Id, Level, Admin__id, Email, Surname, Othername, Create_on, username, password, Role FROM `usermanager`, `users` WHERE Id=Role');
		$row = $this->DB->resultSet();
		if(!empty($row)){		
			return $row;
		}else{
			return false;
		}	
	}

	public function SQLuserEdit($id){
		$this->DB->query('SELECT * FROM users WHERE Admin__id =:id');
		$this->DB->bind(':id', $id);
		$sqlStmt = $this->DB->single();
		if ($sqlStmt) {
			return $sqlStmt;
		}else {
			return false;
		}
	}

	public function FetchDepartment($___ApplicationType){
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
	// =============================================================================
	// fetch Professor details out to edit on the Appointment modal if it exist 
	// =============================================================================

	public function ReadOnly($existDepartmentId){
		$ids = $existDepartmentId;
		$this->DB->query("SELECT * FROM departments WHERE DepartmentID IN (".$ids.") ");
		$ids =array();
		if (is_array($ids) || !is_array($ids))
		foreach ($ids as $k => $id)	
		$this->DB->bind(($k+1), $id);
		$checkexist = $this->DB->resultSet();
		if (!empty($checkexist)) {
			return $checkexist;
		}else {
			return false;
		}
	}
	
	

	public function sqlfetchstdreference($refid){
		$this->DB->query("SELECT * FROM student WHERE Roll__No = :refid");
		$this->DB->bind(':refid', $refid);
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	
	
	// ============================================================
	// Validating lectural data and returning one user
	// ============================================================
	
	public function findUserByApp($controllerName){
		$this->DB->query('SELECT * FROM lecturals WHERE Professor__id  = :controllerName');
		$this->DB->bind(':controllerName', $controllerName);
		$row = $this->DB->single();
		if(!empty($row)){
			return $row;
		}else {
			return false;
		}
	}


	// ============================================================
	// Validating Student data and returning one user
	// ============================================================
	
	public function findStudentEdiReturnt($id){
		$this->DB->query('SELECT student.student__Id, student.Conid, student.Roll__No, student.Surname, student.othername, student.password, student.Date__of__birth, 
		student.gender, student.email, student.featured, student.relationship, student.telephone, student.image, student.Onlinestatus, student.active,
		studentapp.Conid, studentapp.Application_id, studentapp.Faculty_id, studentapp.Department_id, studentapp.Program__Type, studentapp.NIN, studentapp.Entrylevel, studentapp.Class, studentapp.semester, studentapp.settings
		 FROM student, studentapp WHERE student.student__Id = :id');
		$this->DB->bind(':id', $id);
		$row = $this->DB->single();
		if(!empty($row)){
			return $row;
		}else {
			return false;
		}
	}

	// ============================================================
	// 	Fetch Professor ID and Return The ID IF true  
	// ============================================================
	

	public function loadingProfData($id){
		$this->DB->query('SELECT * FROM lecturals WHERE Professor__id = :id');
		$this->DB->bind(':id', $id);
		$stmt= $this->DB->single();
		if(!empty($stmt)){
			return $stmt;
		}else{
			return false;
		}
	}

	// ============================================================
	// 	fetech Professor ID   
	// ============================================================

	public function fetchProfessorIdForEditAdd(){
		$this->DB->query('SELECT * FROM lecturals ORDER BY Professor__id DESC');
		$stt = $this->DB->single();
		return $stt;
	}
	
	// ============================================================
	// 	Delete Professor photo  
	// ============================================================

	public function DTProfressorPhotoURL($Edit__id){
		$this->DB->query("UPDATE lecturals SET Profile__Picture = '' WHERE Professor__id = :Edit__id");
		$this->DB->bind(':Edit__id', $Edit__id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}

	
	// ============================================================
	// 	Delete Student photo  
	// ============================================================

	public function DeleteStudentPhotoURL($Edit__id){
		$this->DB->query("UPDATE student SET image = '' WHERE student__Id = :Edit__id");
		$this->DB->bind(':Edit__id', $Edit__id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	public function ReturnApplication($appis){
		$id = $appis;
		$this->DB->query("SELECT * FROM `categories` WHERE Category__ID =:id");
		$this->DB->bind(':id', $id);
		$keyval = $this->DB->resultSet();
		if($keyval){
			return $keyval;
		}else{
			return false;
		}
	}

	public function ReturnFaculty($existFacultyid){
		$id = $existFacultyid;
		$this->DB->query("SELECT * FROM faculties WHERE FacultyID =:id");
		$this->DB->bind(':id', $id);
		$keyval = $this->DB->resultSet();
		if($keyval){
			return $keyval;
		}else{
			return false;
		}
	}
	
	public function isEditApplication($id){
		$this->DB->query("SELECT * FROM categories WHERE Category__ID =:id");
		$this->DB->bind(':id', $id);
		$k = $this->DB->single();
		if(!empty($k)){
			return $k;
		}else{
			return false;
		}
	}
	public function isEditDepartment($id){
		$this->DB->query("SELECT * FROM departments WHERE DepartmentID =:id");
		$this->DB->bind(':id', $id);
		$k = $this->DB->single();
		if(!empty($k)){
			return $k;
		}else{
			return false;
		}
	}

	
	public function isEditFaculty($id){
		$this->DB->query("SELECT * FROM faculties WHERE FacultyID =:id");
		$this->DB->bind(':id', $id);
		$k = $this->DB->single();
		if(!empty($k)){
			return $k;
		}else{
			return false;
		}
	}
	public function sqlcategorylist(){
		$this->DB->query("SELECT * FROM categories ");
		$keyval = $this->DB->resultSet();
		if($keyval){
			return $keyval;
		}else{
			return false;
		}
	}
	public function AddApplModel($data){
		$p = 0;
		$this->DB->query('INSERT INTO categories (Category__name, Parent)VALUES(:Appname, :p)');
		$this->DB->bind(':Appname', $data['Appname']);
		$this->DB->bind(':p', $p);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	public function isEditApp($data){
		$this->DB->query('UPDATE categories SET Category__name=:Appname WHERE Category__ID =:id');
		$this->DB->bind(':Appname', $data['Appname']);
		$this->DB->bind(':id', $data['id']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}

	public function isCreateHealthData($data){
		$this->DB->query('INSERT INTO healthdetails (ID, Blood_Group, Height, Weight)VALUES(:id, :Blood_Type, :height, :Weight)');
		$this->DB->bind(':id', $data['id']);
		$this->DB->bind(':Blood_Type', $data['Blood_Type']);
		$this->DB->bind(':height', $data['height']);
		$this->DB->bind(':Weight', $data['Weight']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	public function AddFactModel($Factname, $Appid){
		$Parent = 0;
		$this->DB->query('INSERT INTO faculties (Cat_id, FacultyName, Parent, Created_date)VALUES(:Appid, :Factname, :Parent, NOW())');
		$this->DB->bind(':Appid', $Appid);
		$this->DB->bind(':Factname', $Factname);
		$this->DB->bind(':Parent', $Parent);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	public function isEditFact($data){
		$this->DB->query('UPDATE faculties SET Cat_id =:App, FacultyName=:Depname WHERE FacultyID =:id');
		$this->DB->bind(':App', $data['App']);
		$this->DB->bind(':id', $data['id']);
		$this->DB->bind(':Depname', $data['Depname']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	public function AddDepModel($data){
		$this->DB->query('INSERT INTO departments (DepartmentName, FacultyID)VALUES(:Depname, :FtyName)');
		$this->DB->bind(':Depname', $data['Depname']);
		$this->DB->bind(':FtyName', $data['FtyName']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	

	

	public function isEditDep($data){
		$this->DB->query('UPDATE departments SET DepartmentName=:Depname, FacultyID=:Fid WHERE departmentID =:id');
		$this->DB->bind(':Depname', $data['Depname']);
		$this->DB->bind(':id', $data['id']);
		$this->DB->bind(':Fid', $data['Fid']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}

	
	

	// =============================================================================
	// Checking if the Post Professor ID ALREADY for appointed Modal exist 
	// =============================================================================

	public function ReturnInvalidData($id){
		$this->DB->query('SELECT * FROM management__role WHERE ID = :id');
		$this->DB->bind(':id', $id);
		$void = $this->DB->single();
		if(!empty($void)){
			return $void;
			}else {
			return false;
		}
	}

	// =============================================================================
	// Checking if the Post Professor ID ALREADY been appointed to any Departement
	// =============================================================================

	public function validatechecking($sid){
		$this->DB->query('SELECT ID, Cat_id, Faculty__ref__id, Base, Professor__id FROM `management__role`, `lecturals` WHERE ID = :sid AND Professor__id = :sid');
			$this->DB->bind(':sid', $sid);
			$checkAccountant = $this->DB->single();
			if(!empty($checkAccountant)){
				return $checkAccountant;
			}else {
			return false;
		}
	}

	public function isExistsEmail($Stm){
		$this->DB->query("SELECT * FROM student WHERE email = :Stm");
		$this->DB->bind(':Stm', $Stm);
		if ($this->DB->single()) {
			return true;
		}else {
			return false;
		}
	}
	 
	public function isUpdate($id, $nin, $appid, $Faculty, $role, $implodeDepartment, $Designation){
		$this->DB->query('UPDATE `management__role` SET NIN = :nin, Role= :role, Cat_id=:appid, Faculty__ref__id = :Faculty, Base=:implodeDepartment, Designation = :Designation  WHERE `management__role`.`ID` = :id;');
		$this->DB->bind(':id', $id);
        $this->DB->bind(':nin', $nin);
        $this->DB->bind(':role', $role);
		$this->DB->bind(':appid', $appid);
		$this->DB->bind(':Faculty', $Faculty);
		$this->DB->bind(':implodeDepartment', $implodeDepartment);
		$this->DB->bind(':Designation', $Designation);
		if ($this->DB->execute()) {
			return true;
		}else {
			return false;
		}
	}


	// ============================================================
	// Appointing Professor to a certain department
	// ============================================================

	public function AppointProfessor($sid, $nin, $role, $appid, $fty, $instructor, $Dsg){
		$this->DB->query('INSERT INTO management__role(ID, NIN, Role, Cat_id, Faculty__ref__id, Base, Designation) VALUES (:sid, :nin, :role, :appid, :fty, :instructor, :Dsg)');
        $this->DB->bind(':sid', $sid);
        $this->DB->bind(':nin', $nin);
        $this->DB->bind(':role', $role);
		$this->DB->bind(':appid', $appid);
		$this->DB->bind(':fty', $fty);
		$this->DB->bind(':instructor', $instructor);
		$this->DB->bind(':Dsg', $Dsg);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	
	// ============================================================
	// Validating student method 
	// ============================================================
	
	public function processor($Sender){
		$conid =  uniqid();
		//dnd($Sender);
		$this->DB->query('INSERT INTO student (student__id, Conid, Roll__No, Surname, password, 
		othername, Date__of__birth, gender, email, relationship, telephone) 
		VALUES (:NewID, :conid, :EnrollmentNumber, :Surname, :password, :Othername, 
		:DBO, :Gender, :Email, :Relationship, :Tel)');
		// bind the values
		$this->DB->bind(':conid', $conid);
		$this->DB->bind(':NewID', $Sender['NewID']);
		$this->DB->bind(':EnrollmentNumber', $Sender['EnrollmentNumber']);
		$this->DB->bind(':Surname', $Sender['Surname']);
		$this->DB->bind(':password', $Sender['password']);
		$this->DB->bind(':Othername', $Sender['Othername']);
		$this->DB->bind(':DBO', $Sender['DBO']);
		$this->DB->bind(':Gender', $Sender['Gender']);
		$this->DB->bind(':Email', $Sender['Email']);
		$this->DB->bind(':Relationship', $Sender['Relationship']);
		$this->DB->bind(':Tel', $Sender['Tel']);
		//Execute the function   
		if($this->DB->execute()){
			$this->DB->query('INSERT INTO studentapp (Conid, Application_id, Faculty_id, Department_id,
			Program__Type, NIN, Entrylevel, Class, semester)
			VALUES (:conid, :App, :Fac, :Dep, :Prog, :Nin, :Entry, :class, :sess)');
			$this->DB->bind(':App', $Sender['App']);
			$this->DB->bind(':Fac', $Sender['Fac']);
			$this->DB->bind(':Dep', $Sender['Dep']);
			$this->DB->bind(':Prog', $Sender['Prog']);
			$this->DB->bind(':Nin', $Sender['Nin']);
			$this->DB->bind(':Entry', $Sender['Entry']);
			$this->DB->bind(':class', $Sender['class']);
			$this->DB->bind(':sess', $Sender['sess']);
			$this->DB->bind(':conid', $conid);
			if ($this->DB->execute()) {
				return true;
			}
			
		}else {
			return false;
		}
	}
	// Student Registering parent details
	public function isParentSQLstmt($data){
		$this->DB->query('INSERT INTO parent (Parent___id, child__id, First_name, Last_name, ParentEmail, Parentfeatured, ParentPassword, ParentGender, ParentDOB, Mobile, Address, Profile___Picture)
		VALUES (:Fatherid, :ChildId, :fname, :lname, :email, :featured, :password, :Gender, :DOB, :mobile, :address, :img)');
		// bind the values
		$this->DB->bind(':Fatherid', $data['Fatherid']);
		$this->DB->bind(':ChildId', $data['ChildId']);
		$this->DB->bind(':fname', $data['fname']);
		$this->DB->bind(':lname', $data['lname']);
		$this->DB->bind(':email', $data['email']);
		$this->DB->bind(':featured', $data['featured']);
		$this->DB->bind(':password', $data['password']);
		$this->DB->bind(':Gender', $data['Gender']);
		$this->DB->bind(':DOB', $data['DOB']);
		$this->DB->bind(':mobile', $data['mobile']);
		$this->DB->bind(':address', $data['address']);
		$this->DB->bind(':img', $data['img']);
		//Execute the function   
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
	// ============================================================
	// Validating Professors method 
	// ============================================================

	public function AddProfessor($data){
		$this->DB->query('INSERT INTO lecturals(Professor__id, Surname, Middle__name, Othername, Accesscode, Password, Email, featured, 
												Telephone_No, Date_of_Birth, Place__of__birth, Gender, Relationship_sts, 
												Citizenship, NIN, Height, Weight, Blood_Type, Religion, Address, 
												Qualification, Profile__Picture) 
				VALUES (:Professor__id, :Surname, :Middle__name, :Othername, :Accesscode, :Password,  :Email, :featured, :Telephone_No, :Date_of_Birth, :Place__of__birth, :Gender, :Relationship_sts, :Citizenship, :NIN, :Height, :Weight, :Blood_Type, :Religion, :Address, :Qualification,  :Profile__Picture)');
		$this->DB->bind(':Professor__id', $data['Professor__id']);
		$this->DB->bind(':Surname', $data['Surname']);
		$this->DB->bind(':Middle__name', $data['Middle__name']);
		$this->DB->bind(':Othername', $data['Othername']);
		$this->DB->bind(':Accesscode', $data['Accesscode']);
		$this->DB->bind(':Password', $data['Password']);
		$this->DB->bind(':Email', $data['Email']);
		$this->DB->bind(':featured', $data['featured']);
		$this->DB->bind(':Telephone_No', $data['Telephone_No']);
		$this->DB->bind(':Date_of_Birth', $data['Date_of_Birth']);
		$this->DB->bind(':Place__of__birth', $data['Place__of__birth']);
		$this->DB->bind(':Gender', $data['Gender']);
		$this->DB->bind(':Relationship_sts', $data['Relationship_sts']);
		$this->DB->bind(':Citizenship', $data['Citizenship']);
		$this->DB->bind(':NIN', $data['NIN']);
		$this->DB->bind(':Height', $data['Height']);
		$this->DB->bind(':Weight', $data['Weight']);
		$this->DB->bind(':Blood_Type', $data['Blood_Type']);
		$this->DB->bind(':Religion', $data['Religion']);
		$this->DB->bind(':Address', $data['Address']);
		$this->DB->bind(':Qualification', $data['Qualification']);
		$this->DB->bind(':Profile__Picture', $data['Profile__Picture']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
 
	// ============================================================
	//Login admin if that ADMIN 
	// ============================================================

	public function login($ValidPostUsername, $ValidPostPassword){
		$this->DB->query('SELECT Id, Level, Admin__id, username, password, Role FROM `usermanager`, `users` WHERE Id=Role AND Username = :ValidPostUsername');
		// Bind the values
		$this->DB->bind(':ValidPostUsername', $ValidPostUsername);
		$row = $this->DB->single();
		if(!empty($row)){
			$hashedPassword = $row->password;
			if(password_verify($ValidPostPassword, $hashedPassword)){
				return $row;
			}else {
				return false;
			}
		}
	}

		public function isChangePassword($data){
		$this->DB->query('SELECT * FROM `users` WHERE Admin__id =:id');
		// Bind the values
		$this->DB->bind(':id', $data['id']);
		$row = $this->DB->single();
		if(!empty($row)){
			$hashedPassword = $row->password;
			if(password_verify($data['old'], $hashedPassword)){
				$this->DB->query('UPDATE users SET password = :new');
				$this->DB->bind(':new', $data['new']);
				if ($this->DB->execute()) {
					return true;
				}else {
					return false;
				}
			}else {
				return false;
			}
		}
	}

	// ================================================================
	// Login LoginLecturals  on management
	// ================================================================

	public function LoginLecturals($Accesscode, $Department, $password){
		$this->DB->query("SELECT * FROM lecturals WHERE  Accesscode = :Accesscode AND Department = :Department AND featured = 1");
		 //Bind the values
			$this->DB->bind(':Department', $Department);
			$this->DB->bind('Accesscode', $Accesscode);
			$runLectural = $this->DB->single();
			if(!empty($runLectural)){
			$LecturalPassword = $runLectural->Password;
			if(password_verify($password, $LecturalPassword)){
				return $runLectural;
			}else{
				return false;
			}
		}
	}



	// ==================================================================
	// Login human resources  on management
	// ==================================================================

	public function LoginHuman_resources($Accesscode, $Department, $password){
		$this->DB->query("SELECT * FROM human_resources WHERE  Accesscode = :Accesscode AND Department = :Department");
		 //Bind the values
			$this->DB->bind(':Department', $Department);
			$this->DB->bind('Accesscode', $Accesscode);
			$runHr = $this->DB->single();
			if(!empty($runHr)){
			$HrPassword = $runHr->Password;
			if(password_verify($password, $HrPassword)){
				return $runHr;
			}else{
				return false;
			}
		}
	}
    // ============================================================
    // Login Member
    // ============================================================

	public function LoginAccountant($Accesscode){
		$this->DB->query("SELECT Surname, Othername, Email, featured, NIN, Accesscode, Profile__Picture, Password 
                        FROM (SELECT Surname, Othername, Email, featured, NIN, Profile__Picture, Password, Accesscode as Accesscode
                         FROM human_resources 
                            UNION ALL
                            SELECT Surname, Othername,  Email, featured, NIN, Profile__Picture, Password, Accesscode 
                            FROM lecturals) x 
                            WHERE Accesscode = :Accesscode ");
                            //Bind the values 
                    $this->DB->bind(':Accesscode', $Accesscode);
                    $runAccountant = $this->DB->single();
                return $runAccountant;
                
	}

	public function mimi($nin){
		$this->DB->query("SELECT ID, NIN, Role, Base FROM management__role WHERE NIN = :nin");
		$this->DB->bind(':nin', $nin);
		$r= $this->DB->single();
		return $r;
	}

    public function MimiPassword($code, $password){
        $this->DB->query("SELECT Password, Accesscode FROM 
                            (SELECT Password, Accesscode as Accesscode
                             FROM human_resources 
                            UNION ALL 
                            SELECT Password, Accesscode 
                            FROM lecturals) a 
                            WHERE Accesscode = :code");
                            //Bind the values 
                            $this->DB->bind(':code', $code);
                    $mass = $this->DB->single();
        if(!empty($mass)){
            $Loginpass = $mass->Password;
                if(password_verify($password, $Loginpass)){
                   return $mass;
                }else{
                    return false;
            }
        }
    }
	// =====================================================================
	//Creating Login for management 
	// =====================================================================

	public function LoginStaff($Accesscode, $Department, $password){
		$this->DB->query("SELECT * FROM staff WHERE  Accesscode = :Accesscode AND Department = :Department");
		 //Bind the values
			$this->DB->bind(':Department', $Department);
			$this->DB->bind('Accesscode', $Accesscode);
			$runStaff = $this->DB->single();
			if(!empty($runStaff)){
			$StaffPassword = $runStaff->Password;
			if(password_verify($password, $StaffPassword)){
				return $runStaff;
			}else{
				return false;
			}
		}	
	}

	// ====================================================================
	// Select everything from Student table
	// ====================================================================

	public function studentData(){
		$this->DB->query('SELECT * FROM student');
		$runstmt = $this->DB->resultSet();
		if($runstmt > 0){
			while($run = $this->DB->resultSet($runstmt)){
				return $run;
			}
		}    
	}
	// ====================================================================
	// Select Count from student table
	// ====================================================================
	public function LecturalDataCount(){
		$this->DB->query('SELECT * FROM lecturals ');
		$Count = $this->DB->rowCount();
		$total = $Count;
		if (!empty($total)) {
			return $total;
		}else {
			return false;
		}
		
	}

	public function studentDataCount(){
		$this->DB->query('SELECT * FROM student');
		$runCount = $this->DB->rowCount();
		if (!empty($runCount)) {
			return $runCount;
		}else {
			return false;
		}
		
	}

	public function SqlFetchAllParentCount($parentCourse){
		$this->DB->query("SELECT Category__ID, Category__name, Parent, Cat_id, Child_id, Child_name FROM `sublist`, `categories`	WHERE Category__ID =Cat_id AND Cat_id =:parentCourse AND Parent =0 ");
		$this->DB->bind(':parentCourse', $parentCourse);
		$stmt = $this->DB->rowCount();
		if($stmt){
			return $stmt;
		}else{
			return false;
		}
	}
	
	public function P_LoginAuth($studentid, $StudentPassword){
		$this->DB->query('SELECT * FROM parent WHERE child__id = :studentid');
		// Bind the values
		$this->DB->bind(':studentid', $studentid);
		$row = $this->DB->single();
		if(!empty($row)){
			$hashedPassword = $row->ParentPassword;
			if(password_verify($StudentPassword, $hashedPassword)){
				return $row;
			}else {
				return false;
			}
		}else {
			return false;
		}
	}
	public function ParentLogin($StudentUsername){
		$this->DB->query('SELECT * FROM student WHERE Roll__No = :StudentUsername');
		// Bind the values
		$this->DB->bind(':StudentUsername', $StudentUsername);
		$row = $this->DB->single();
		if(!empty($row)){
			return $row;
		}else {
			return false;
		}
	}

	// =======================================================================
	// Find user by email. email has passed in by the controller
	// =======================================================================
	
	public function findUserByEmailInStudent__table($email){
		// UsING prepared statement
		$this->DB->query('SELECT * FROM student WHERE email = :email');
		//The email param will be binded with the email variable
		$this->DB->bind(':email', $email);
		//Check if email is already registered
		if($this->DB->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}


	// ======================================================================
	// Find existing professor by email
	// ======================================================================

	public function findProfessorByEmail($isCheckEmail){
		// UsING prepared statement
		$this->DB->query('SELECT * FROM lecturals WHERE Email = :isCheckEmail');
		//The email param will be binded with the email variable
		$this->DB->bind(':isCheckEmail', $isCheckEmail);
		//Check if email is already registered
		if($this->DB->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}
 
	// ======================================================================
	// find a specific lectural by id when edit and delete request is made
	// ======================================================================

	public function findPostById($Professor__id){
		$this->DB->query('SELECT * FROM lecturals WHERE Professor__id = :Professor__id');
		$this->DB->bind(':Professor__id', $Professor__id);
		$row = $this->DB->single();
		return $row;
	}

	// ====================================================================
	// Find student by id
	// ====================================================================

	public function findStudentById($student__Id){
		$this->DB->query('SELECT * FROM student WHERE student__Id  = :student__Id');
		$this->DB->bind(':student__Id', $student__Id);
		$runquery = $this->DB->single();
		return $runquery;
	}

	// =====================================================================
	// Seleting id from lectural tb to match the delete id 
	// =====================================================================

	public function findProfessorById($Professor__id){
		$this->DB->query('SELECT * FROM lecturals WHERE Professor__id  = :Professor__id');
		$this->DB->bind(':Professor__id', $Professor__id);
		$prow = $this->DB->single();
		return $prow;
	}

	// ===================================================================
	// Fetch the Application Id FOR Category Table
	// ===================================================================

	public function fetchApp($Application_id){
		$this->DB->query('SELECT Category__ID, Category__name FROM `categories` WHERE Category__ID = :Application_id ');
		$this->DB->bind(':Application_id', $Application_id);
		$runfetch = $this->DB->single();
		return $runfetch;
	}
	// ================================================================
	// fetching the faculty id from child__faculty__table 
	// ===============================================================

	public function isStudentUpdate($data){
		$this->DB->query('UPDATE student SET Roll__No = :Enrlid, Surname =:Surname, othername =:Othername,
		 Date__of__birth=:DOB, gender=:gender, email =:email, relationship=:rel,
		  telephone=:mobile WHERE student__Id =:id ');
		$this->DB->bind(':id', $data['id']);
		$this->DB->bind(':Surname', $data['Surname']);
		$this->DB->bind(':Othername', $data['Othername']);
		$this->DB->bind(':Enrlid', $data['Enrlid']);
		$this->DB->bind(':email', $data['email']);
		$this->DB->bind(':mobile', $data['mobile']);
		$this->DB->bind(':DOB', $data['DOB']);
		$this->DB->bind(':gender', $data['gender']);
		$this->DB->bind(':rel', $data['rel']);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}

	public function SqlStudentSelectall(){
		$this->DB->query('SELECT * FROM student ');
		$row = $this->DB->resultSet();
		if($row > 0){
			while($run = $this->DB->resultSet($row)){
				return $run;
			}
		}    
	}
	public function StudentSelectall(){
		$this->DB->query('SELECT student.student__Id, student.Conid, student.Roll__No, student.Surname, student.othername, student.password, student.Date__of__birth, 
		student.gender, student.email, student.featured, student.relationship, student.telephone, student.image, student.Onlinestatus, student.active,
		studentapp.Conid, studentapp.Application_id, studentapp.Faculty_id, studentapp.Department_id, studentapp.Program__Type, studentapp.NIN, studentapp.Entrylevel, studentapp.Class, studentapp.semester, studentapp.settings
		 FROM student, studentapp WHERE  student.Conid =studentapp.Conid');
		$row = $this->DB->resultSet();
		if($row > 0){
			while($run = $this->DB->resultSet($row)){
				return $run;
			}
		}    
	}
	// =====================================================================
	// Select everything from student tables
	// ===================================================================== 

	public function student__tb(){
		$this->DB->query('SELECT * FROM student');
		$row = $this->DB->resultSet();
		if($row > 0){
			return $row;
		}else {
			return false;
		}    
	}

	// =======================================================================
	// Select everything from lectural table
	// =======================================================================

	public function lectural(){
		$this->DB->query('SELECT * FROM lecturals ORDER BY Professor__id ASC');
		$presults = $this->DB->resultSet();
		if($presults > 0){
			while($run = $this->DB->resultSet($presults)){
				return $run;
			}
		}else {
			return false;
		}  
	}
	// ===================================================
	// Selecting session for the session as array data
	// ===================================================

	public function Selectsession(){
		$this->DB->query('SELECT * FROM `Session`');
		$stmtsession = $this->DB->resultSet();
		return $stmtsession;
	}


	// ===========================================================
	// Selecting categories
	// ===========================================================

	public function com($pr){
		$this->DB->query('SELECT * FROM `faculty__tb` WHERE Parent__ID = :pr');
		$this->DB->bind(':pr', $pr);
		$st = $this->DB->resultSet();
		if($st > 0){
			while($run = $this->DB->resultSet($st)){
				return $run;
			}
		}
	}

	public function FetchDataAsMenuBar(){
		$this->DB->query('SELECT * FROM `Categories` ');
		$RunData__result = $this->DB->resultSet();
		return $RunData__result;
	} 

	// ===================================================
	// Selecting categories as array data
	// ===================================================

	public function SelectSpecial__ID(){
		$this->DB->query('SELECT * FROM `Categories`');
		$RunData__result = $this->DB->resultSet();
		return $RunData__result;
	}

	// ===================================================
	// Selecting program as array data
	// ===================================================

	public function SelectProgram(){
		$this->DB->query('SELECT * FROM `program` ');
		$stmtProgram = $this->DB->resultSet();
		return $stmtProgram;
	}

	// ===================================================
	// Selecting faculty as array data
	// ===================================================

	public function SelectMode(){
		$this->DB->query('SELECT * FROM `mode__of__study` ');
		$stmtmode= $this->DB->resultSet();
		return $stmtmode;
	}

	// ===================================================
	// Selecting entry level as array data
	// ===================================================

	public function SelectEntryLevel(){
		$this->DB->query('SELECT * FROM `entry__level__tb` ');
		$stmtentrylevel= $this->DB->resultSet();
		return $stmtentrylevel;
	}

	// ====================================================
	// Admin changing password proccessing 
	// ====================================================
	
	public function UpdatePassword($validID){
		$this->DB->query('SELECT * FROM `users` WHERE Admin__id = :validID');
		$this->DB->bind(':validID', $validID);
		$row = $this->DB->single();
		if(!empty($row)){		
			return $row;
		}else{
			return false;
		}	
	}

	public function SQLEdituser($id){
		$this->DB->query('SELECT * FROM `users` WHERE Admin__id = :id');
		$this->DB->bind(':id', $id);
		$row = $this->DB->single();
		if(!empty($row)){		
			return $row;
		}else{
			return false;
		}	
	}
	public function finalAdminUpdate($validID, $encrytPassword){
		$this->DB->query('UPDATE `users` SET password = :encrytPassword WHERE Admin__id = :validID');
		$this->DB->bind(':encrytPassword', $encrytPassword);
		$this->DB->bind(':validID', $validID);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}

	// =========================================================================
	// Granted ACCESS to accountatn
	// ========================================================================

	public function GrantAccessTOprofessor($Professor__id, $featured){
		$this->DB->query('UPDATE `lecturals` SET featured = :featured WHERE Professor__id = :Professor__id');
		$this->DB->bind(':featured', $featured);
		$this->DB->bind(':Professor__id', $Professor__id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}


	// =========================================================================
	// Update lectural data if the id is found
	// =========================================================================
 
	public function EditProfessor($data){
		$this->DB->query('UPDATE lecturals SET Surname = :Surname, Middle__name =:Middle__name, Othername= :Othername, Accesscode =:Accesscode, Email =:Email, Telephone_No =:Telephone_No, Date_of_Birth=:Date_of_Birth, Place__of__birth=:Place__of__birth, Gender=:Gender, Relationship_sts=:Relationship_sts, Citizenship=:Citizenship, NIN=:NIN, Height=:Height, Weight=:Weight,Blood_Type=:Blood_Type, Religion=:Religion, Qualification=:Qualification, Address=:Address,Profile__Picture = :Profile__Picture WHERE Professor__id = :Professor__id');
		$this->DB->bind(':Professor__id', $data['Professor__id']);
		$this->DB->bind(':Surname', $data['Surname']);
		$this->DB->bind(':Middle__name', $data['Middle__name']);
		$this->DB->bind(':Othername', $data['Othername']);
		$this->DB->bind(':Accesscode', $data['Accesscode']);
		$this->DB->bind(':Email', $data['Email']);
		$this->DB->bind(':Telephone_No', $data['Telephone_No']);
		$this->DB->bind(':Date_of_Birth', $data['Date_of_Birth']);
		$this->DB->bind(':Place__of__birth', $data['Place__of__birth']);
		$this->DB->bind(':Gender', $data['Gender']);
		$this->DB->bind(':Relationship_sts', $data['Relationship_sts']);
		$this->DB->bind(':Citizenship', $data['Citizenship']);
		$this->DB->bind(':NIN', $data['NIN']);
		$this->DB->bind(':Height', $data['Height']);
		$this->DB->bind(':Weight', $data['Weight']);
		$this->DB->bind(':Blood_Type', $data['Blood_Type']);
		$this->DB->bind(':Religion', $data['Religion']);
		$this->DB->bind(':Qualification', $data['Qualification']);
		$this->DB->bind(':Address', $data['Address']);
		$this->DB->bind(':Profile__Picture', $data['Profile__Picture']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	} 
	
	// ===================================================================
	// Record Admin Last Login
	// ===================================================================

	public function lastlog($last_login, $Admin__id){
		$this->DB->query('UPDATE users SET last_login = :last_login WHERE Admin__id = :Admin__id');
		$this->DB->bind(':Admin__id', $Admin__id);
		$this->DB->bind(':last_login', $last_login);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}

	// ===================================================================
	// Updating student DATA by ADMIN
	// ===================================================================

	public function updateStudentData($data){
		$this->DB->query('UPDATE student SET Surname = :Surname, othername = :othername, email = :email, Date__of__birth = :Date__of__birth, relationship = :relationship, telephone = :telephone, gender = :gender WHERE student__Id = :student__Id');
	 // bind the values
		$this->DB->bind(':student__Id', $data['student__Id']);
		$this->DB->bind(':Surname', $data['Surname']);
		$this->DB->bind(':othername', $data['othername']);
		$this->DB->bind(':email', $data['email']);
		$this->DB->bind(':Date__of__birth', $data['Date__of__birth']);
		$this->DB->bind(':relationship', $data['relationship']);
		$this->DB->bind(':telephone', $data['telephone']);
		$this->DB->bind(':gender', $data['gender']);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	// =====================================================================
	//Admin  Delete leactural method	
	// =====================================================================
	
	public function deleteUserProfessor($id){
		$ids = implode("','", $id);
		$this->DB->query("DELETE FROM lecturals WHERE Professor__id IN ('".$ids."')");
		$ids = [];
		if (is_array($ids) || !is_array($ids))
		foreach ($ids as $k => $id)	
		$this->DB->bind(($k+1), $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}		
	}
	public function deleteUserParent($id){
		$ids = implode("','", $id);
		$this->DB->query("DELETE  a.*, b.*, c.*  FROM parent a INNER JOIN student b ON a.child__id =b.student__Id INNER JOIN studentapp c ON c.Conid = b.Conid WHERE a.Parent___id IN ('".$ids."')");
		$ids = [];
		if (is_array($ids) || !is_array($ids))
		foreach ($ids as $k => $id)	
		$this->DB->bind(($k+1), $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}		
	}

	public function dndUser($id){
		$ids = implode("','", $id);
		$this->DB->query("DELETE FROM users WHERE Admin__id IN ('".$ids."')");
		if (is_array($ids) || !is_array($ids))
		foreach ($ids as $k => $id)	
		$this->DB->bind(($k+1), $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function SQLdeletestudent($id){
		$ids = implode("','", $id);
		$this->DB->query("DELETE  a.*, b.*, c.*  FROM student a INNER JOIN studentapp b ON b.Conid = a.Conid INNER JOIN parent c ON c.child__id =a.student__Id WHERE a.student__Id IN ('".$ids."')");
		$ids = [];
		if (is_array($ids) || !is_array($ids))
		 	if ($ids) 
			foreach ($ids as $k => $id)	
			$this->DB->bind(($k+1), $id);
			if($this->DB->execute()){
				return true;
			}else{
				return false;
			} 		
	}
	// =====================================================================
	//Admin  Delete st method	
	// =====================================================================
	
	public function isSQLdeleteStudentADMIN($id){
		$i = implode(',', $id);
		$this->DB->query("DELETE FROM student WHERE student__Id IN (".$i.")");
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
// Dismissed Professor From Management Role
	public function SQLDismissedManagementRole($id){
		$this->DB->query("DELETE FROM management__role WHERE ID = :id ");
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	// Admin Send Professor Email
	public function SQLSendProfEmail($data){
		$this->DB->query("INSERT INTO EmailBox(EmailID, SenderID, RecipientID, SenderName, SenderMail, RecipientEmail, RecipientName, Subject, message, parent, Time)VALUES(:EmailID, :SenderID, :targetid, :SenderName, :SenderMail, :Email, :RecipientName, :Subject, :message, :parent, NOW())");
		$this->DB->bind(':EmailID', $data['EmailID']);
		$this->DB->bind(':SenderID', $data['SenderID']);
		$this->DB->bind(':targetid', $data['targetid']);
		$this->DB->bind(':SenderName', $data['SenderName']);
		$this->DB->bind(':SenderMail', $data['SenderMail']);
		$this->DB->bind(':Email', $data['Email']);
		$this->DB->bind(':RecipientName', $data['RecipientName']);
		$this->DB->bind(':Subject', $data['Subject']);
		$this->DB->bind(':message', $data['message']);
		$this->DB->bind(':parent', $data['parent']);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}

	// Fetching admin data from the database from email composer
	public function SQLProfessorEmailData($ProfessorID){
		$this->DB->query("SELECT * FROM lecturals WHERE Professor__id = :ProfessorID");
		$this->DB->bind(':ProfessorID', $ProfessorID);
		$stmt = $this->DB->single();
		if ($stmt) {
			return $stmt;
		}else {
			return false;
		}
	}

	// Fetching professor data from the database from email composer 
	public function SqlFetchProfessEmails($mim){
		$this->DB->query("SELECT * FROM `emailbox` WHERE RecipientID = :mim AND parent = 1");
		 $this->DB->bind(':mim', $mim);
		 $row = $this->DB->resultSet();
		if($row > 0){
			return $row;
		}else {
			return false;
		}   
	}

	// Fetch a specific email 

	public function isFetchEmails($id, $mim){
		$this->DB->query("SELECT * FROM `emailbox` WHERE EmailID = :id AND RecipientID = :mim AND parent = 1");
		$this->DB->bind(':id', $id);
		$this->DB->bind(':mim', $mim);
		$row = $this->DB->single();
		if($row == true){
			return $row;
		}else {
			return false;
		}   
	}
	// Fetch Admin All Email 
	public function SqlFetchAdminEmails(){
		$this->DB->query("SELECT Admin__id, EmailID, SenderID, SenderName, SenderMail, RecipientEmail, RecipientName, 
		Subject, message, Time, parent FROM `users`, `emailbox` WHERE Admin__id = SenderID AND parent = 0");
		 $row = $this->DB->resultSet();
		if($row > 0){
			return $row;
		}else {
			return false;
		}   
	}
	// ==================================================================
	// Delete STUDENT FROM THE SCHOOL SYSTEM BY THE ADMIN
	// ==================================================================
	public function deletestudent($id){
		$this->DB->query('DELETE FROM student WHERE student__Id = :id');
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}


    // ========================================================================
    //  
    // ========================================================================
	public function tryone($username, $password){
		$this->DB->query('SELECT admin.username, admin.role_id, admin.password, admin2.username, admin2.role_id, 
		admin2.password FROM `admin2`, `admin` 
		WHERE admin.username = :username AND admin.password = :password 
		OR admin2.username = :username AND admin2.password = :password');
		$this->DB->bind(':username', $username);
		$this->DB->bind(':password', $password);
		$run= $this->DB->single();
		return $run;
	}

	public function FindCourseId($Courseid){
		$this->DB->query("SELECT * FROM student WHERE Department_id = :Courseid AND Onlinestatus ='1'");
		$this->DB->bind(':Courseid', $Courseid);
		$stmt= $this->DB->resultSet();
		if($stmt > 0){
			while($run = $this->DB->resultSet($stmt)){
				return $run;
			}
		}else {
			return false;
		}
	}

	
	public function updateStudentLogOutTime($id){
		$this->DB->query("UPDATE `student` SET Onlinestatus = '0' WHERE student__Id = :id");
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function Viewstd($id){
		$this->DB->query('SELECT student.student__Id, student.Conid, student.Roll__No, student.Surname, student.othername, student.password, student.Date__of__birth, 
		student.gender, student.email, student.featured, student.relationship, student.telephone, student.image, student.Onlinestatus, student.active,
		studentapp.Conid, studentapp.Application_id, studentapp.Faculty_id, studentapp.Department_id, studentapp.Program__Type, studentapp.NIN, studentapp.Entrylevel, studentapp.Class, studentapp.semester, studentapp.settings
		 FROM student, studentapp  WHERE student.student__Id = :id');
		$this->DB->bind(':id', $id);
		$stmt= $this->DB->single();
		if (!empty($stmt)) {
			return $stmt;
		}else {
			return false;
		}
	}

	public function ViewStudentRelationalTablewithParent($id){
		$this->DB->query('SELECT student.student__Id, student.Conid, student.Roll__No, student.Surname, student.othername, student.password, student.Date__of__birth,student.gender, student.email, student.featured, student.relationship, student.telephone, student.image, student.Onlinestatus, student.active, studentapp.Conid, studentapp.Application_id, studentapp.Faculty_id, studentapp.Department_id, studentapp.Program__Type, studentapp.NIN, studentapp.Entrylevel, studentapp.Class, studentapp.semester, studentapp.settings, parent.Parent___id, parent.child__id, parent.First_name, parent.Last_name, parent.ParentEmail, parent.Parentfeatured, parent.ParentPassword, parent.ParentGender, parent.ParentDOB, parent.Mobile, parent.Address, parent.Profile___Picture FROM parent, student, studentapp WHERE student.student__Id = :id AND parent.child__id = student.student__Id AND studentapp.Conid =  student.Conid');
		$this->DB->bind(':id', $id);
		$stmt= $this->DB->resultSet();
		if (!empty($stmt)) {
			return $stmt;
		}else {
			return false;
		}
	}

	public function isDeleteStudentModel($cheks){
		$i = implode(',', $cheks);
		$this->DB->query("DELETE FROM student WHERE student__Id IN (".$i.") ");
		$this->DB->bind(':cheks', $cheks);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}

	
	public function Changeverifyoldpassword($oldpassword, $id){
		$this->DB->query('SELECT * FROM `student` WHERE student__Id = :id');
		$this->DB->bind(':id', $id);
		$row = $this->DB->single();
		if(!empty($row)){	
			$hashedPassword = $row->password;
			if(password_verify($oldpassword, $hashedPassword)){
				return true;
			}else {
				return false;
			}
		}else{
			return false;
		}	
	}
	public function updatestdpassword($newpassword, $id){
		$this->DB->query('UPDATE `student` SET password = :newpassword WHERE student__Id = :id');
		$this->DB->bind(':newpassword', $newpassword);
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function isEditstudent($data){
		$this->DB->query("UPDATE student, studentapp SET student.Surname = :fname, student.othername=:lname, student.Date__of__birth=:DOB,
						student.gender=:Gender, student.email= :email, studentapp.settings=:emailsettings, student.relationship=:relationship, 
						student.telephone=:mobile, image=:img WHERE student__Id =:id ");
				
		$this->DB->bind('fname', $data['fname']);
		$this->DB->bind('lname', $data['lname']);
		$this->DB->bind('DOB', $data['DOB']);
		$this->DB->bind('Gender', $data['Gender']);
		$this->DB->bind('email', $data['email']);
		$this->DB->bind('emailsettings', $data['emailsettings']);
		$this->DB->bind('relationship', $data['relationship']);
		$this->DB->bind('mobile', $data['mobile']);
		$this->DB->bind(':img', $data['img']);
		$this->DB->bind('id', $data['id']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
		
	}

	public function UpdateparentModel($data){
		$this->DB->query('UPDATE parent SET First_name=:fname,Last_name=:lname,ParentEmail=:email,ParentGender=:gender,
		ParentDOB=:DOB,Mobile=:mobile,Address=:address WHERE Parent___id=:id');
		$this->DB->bind(':id', $data['id']);
		$this->DB->bind(':fname', $data['fname']);
		$this->DB->bind(':lname', $data['lname']);
		$this->DB->bind(':email', $data['email']);
		$this->DB->bind(':gender', $data['gender']);
		$this->DB->bind(':DOB', $data['DOB']);
		$this->DB->bind(':mobile', $data['mobile']);
		$this->DB->bind(':address', $data['address']);
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}
 
	public function isHealthEmpty($id){
		$this->DB->query('SELECT * FROM healthdetails WHERE ID =:id');
		$this->DB->bind(':id', $id);
		$result = $this->DB->single();
		if (empty($result)) {
			return true;
		}else {
			return false;
		}
	}


	public function createUser($data){
		$this->DB->query('INSERT INTO student (student__id, Roll__No, Application_id, NIN, Surname, othername, password, email, telephone) 
		VALUES (:studentid, :EnrollmentNumber, :AppType, :nin, :Surname, :FirstName, :password, :Email, :MobileNum)');
		// bind the values
		$this->DB->bind(':studentid', $data['studentid']);
		$this->DB->bind(':EnrollmentNumber', $data['EnrollmentNumber']);
		$this->DB->bind(':AppType', $data['AppType']);
		$this->DB->bind(':nin', $data['nin']);
		$this->DB->bind(':Surname', $data['Surname']);
		$this->DB->bind(':FirstName', $data['FirstName']);
		$this->DB->bind(':password', $data['password']);
		$this->DB->bind(':Email', $data['Email']);
		$this->DB->bind(':MobileNum', $data['MobileNum']);
		//Execute the function   
		if($this->DB->execute()){
			return true;
		}else {
			return false;
		}
	}

	// create Student id {REACT FORM VALIDATION}
	public function createStudentId(){
		$this->DB->query('SELECT * FROM student ORDER BY student__Id DESC');
		$row = $this->DB->single();
		if (empty($row)) {
			$AvaliableID = $row['student__Id'];
			$Studentid = '9001';
		}else {
			$AvaliableID = $row->student__Id;
			$stmtid = str_replace("900", "", $AvaliableID);
			$id =str_pad($stmtid + 1,1,0, STR_PAD_LEFT);
			$Studentid = '900'.  $id;
			return $Studentid;
		}
	}
}	