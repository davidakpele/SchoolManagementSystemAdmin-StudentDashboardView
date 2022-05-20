<?php 
Class User {

	// =====================================================================
	// ALL VALIDATIONS PASS THROUGH HERE. READ, WRITE, POST, DELETE & UPDATA
	// =====================================================================

	/**
	 * Define my access to my database function
	 * Assigning $DB as the Default access to my database each time i need to read,write,post,delete data from the database
	 */

	private $DB;
	public function __construct(){
		$this->DB = new Database;
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

	public function sqlfetchstdreference($refid){
		$this->DB->query("SELECT * FROM student__account WHERE Roll__No = :refid");
		$this->DB->bind(':refid', $refid);
		$stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
	}
	public function RenderProgrammeListSQL($id){
		 $this->DB->query('SELECT Id, Duration, headerone, Subtext, UTME, WASSCE, NECO_SSCE, IGCSE, GCSE, Child_id, Child_name
                            FROM `requirementoutlines`, `sublist` 
                            WHERE Child_id = Id 
                            AND Child_id = :id');
        $this->DB->bind(':id', $id);
		$sqlstmt = $this->DB->resultSet();
		if (!empty($sqlstmt)) {
			return $sqlstmt;
		}else {
			return false;
		}
	}
	
	public function bookfetch($id){
		$this->DB->query('SELECT categories.Category__ID, categories.Category__name, 
            faculty__tb.Faculty__ID, faculty__tb.Faculty__name
            FROM `categories`, `faculty__tb` 
            WHERE categories.Parent = faculty__tb.Parent__ID 
            AND categories.Category__ID = :id');
			$this->DB->bind(':id', $id);
			$books = $this->DB->resultSet();
			if(!empty($book)){
				return $book;
			}else{
				return false;
			}
	}
	
	// ============================================================
	// Validating Accountant data and returning one user
	// ============================================================
	
	public function findUserByApp($Edit__id){
		$this->DB->query('SELECT * FROM lecturals WHERE Professor__id  = :Edit__id');
		$this->DB->bind(':Edit__id', $Edit__id);
		$row = $this->DB->single();
		if(!empty($row)){
			return $row;
		}else {
			return false;
		}
	}

	// =====================================================================================
	// 	Fetch Accountant ID and Return The ID if the POST EDIT ID   is true then return true
	// =====================================================================================

	public function findIserByApp($Edit__id){
		$this->DB->query('SELECT * FROM accountant WHERE Accountant__id = :Edit__id');
		$this->DB->bind(':Edit__id', $Edit__id);
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
	// 	Fetch Accountant ID and Return The ID IF true  
	// ============================================================

	public function returndata($id){
		$this->DB->query('SELECT * FROM accountant WHERE Accountant__id = :id');
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
	// 	Delete Accountant photo  
	// ============================================================

	public function DTAccountantPhotoURL($Edit__id){
		$this->DB->query("UPDATE accountant SET Profile__Picture = '' WHERE Accountant__id = :Edit__id");
		$this->DB->bind(':Edit__id', $Edit__id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}

	public function ReturnFaculty($existFacultyid){
		$id = $existFacultyid;
		$this->DB->query("SELECT * FROM categories WHERE Category__ID =:id");
		$this->DB->bind(':id', $id);
		$keyval = $this->DB->resultSet();
		if($keyval){
			return $keyval;
		}else{
			return false;
		}
	}
	// =============================================================================
	// fetch Professor details out to edit on the Appointment modal if it exist 
	// =============================================================================

	public function ReadOnly($existDepartmentId){
		$ids = $existDepartmentId;
		$this->DB->query("SELECT * FROM sublist WHERE Child_id IN (".$ids.") ");
		$this->DB->bind(':ids', $ids);
		$checkexist = $this->DB->resultSet();
		if (!empty($checkexist)) {
			return $checkexist;
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
		$this->DB->query('SELECT ID, Faculty__ref__id, Base, Professor__id FROM `management__role`, `lecturals` WHERE ID = :sid AND Professor__id = :sid');
			$this->DB->bind(':sid', $sid);
			$checkAccountant = $this->DB->single();
			if(!empty($checkAccountant)){
				return $checkAccountant;
			}else {
			return false;
		}
	}

	public function isExistsEmail($isCheckEmail){
		$this->DB->query("SELECT * FROM student__account WHERE email = :isCheckEmail");
		$this->DB->bind(':isCheckEmail', $isCheckEmail);
		if ($this->DB->single()) {
			return true;
		}else {
			return false;
		}
	}
	 
	public function isUpdate($id, $nin, $Faculty, $role, $implodeDepartment, $Designation){
		$this->DB->query('UPDATE `management__role` 
							SET `Base` = :implodeDepartment, NIN = :nin, Role = :role, 
							Designation = :Designation, Faculty__ref__id = :Faculty  
							WHERE `management__role`.`ID` = :id;');
		$this->DB->bind(':id', $id);
        $this->DB->bind(':nin', $nin);
        $this->DB->bind(':role', $role);
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

	public function AppointProfessor($sid, $nin, $role, $fty, $instructor, $Dsg){
		$this->DB->query('INSERT INTO management__role(ID, NIN, Role, Faculty__ref__id, Base, Designation) 
                            VALUES (:sid, :nin, :role, :fty, :instructor, :Dsg)');
        $this->DB->bind(':sid', $sid);
        $this->DB->bind(':nin', $nin);
        $this->DB->bind(':role', $role);
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
		$this->DB->query('INSERT INTO student__account (student__id, Roll__No, Application__Type, Department__Type, Program__Type, NIN, Entrylevel, Surname, password, othername, Date__of__birth, gender, email, relationship, telephone, session) 
			VALUES (:NewID, :EnrollmentNumber, :App, :Dep, :Prog, 
				:Nin, :Entry, :Surname, :password, :Othername, :DBO, :Gender, :Email, :Relationship, :Tel, :Session)');
		// bind the values
		$this->DB->bind(':NewID', $Sender['NewID']);
		$this->DB->bind(':EnrollmentNumber', $Sender['EnrollmentNumber']);
		$this->DB->bind(':App', $Sender['App']);
		$this->DB->bind(':Dep', $Sender['Dep']);
		$this->DB->bind(':Prog', $Sender['Prog']);
		$this->DB->bind(':Nin', $Sender['Nin']);
		$this->DB->bind(':Entry', $Sender['Entry']);
		$this->DB->bind(':Surname', $Sender['Surname']);
		$this->DB->bind(':password', $Sender['password']);
		$this->DB->bind(':Othername', $Sender['Othername']);
		$this->DB->bind(':DBO', $Sender['DBO']);
		$this->DB->bind(':Gender', $Sender['Gender']);
		$this->DB->bind(':Email', $Sender['Email']);
		$this->DB->bind(':Relationship', $Sender['Relationship']);
		$this->DB->bind(':Tel', $Sender['Tel']);
		$this->DB->bind(':Session', $Sender['Session']);
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
		$this->DB->query('INSERT INTO lecturals(Professor__id, Surname, Middle__name, Othername,
		 Accesscode, Password, Email, featured, Telephone_No, Date_of_Birth, Place__of__birth,
		  Gender, Relationship_sts, Civil_status, Citizenship, NIN, 
		  Height, Weight, Blood_Type, Religion, Address, Qualification, Profile__Picture, Active__time) 
		VALUES (:Professor__id, :Surname, :Middle__name, :Othername, :Accesscode, :Password,  
		:Email, :featured, :Telephone_No, :Date_of_Birth, :Place__of__birth, :Gender, :Relationship_sts, 
		:Civil_status, :Citizenship, :NIN, :Height, :Weight, :Blood_Type, :Religion, :Address, 
		:Qualification,  :Profile__Picture, :Active__time)');
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
		$this->DB->bind(':Civil_status', $data['Civil_status']);
		$this->DB->bind(':Citizenship', $data['Citizenship']);
		$this->DB->bind(':NIN', $data['NIN']);
		$this->DB->bind(':Height', $data['Height']);
		$this->DB->bind(':Weight', $data['Weight']);
		$this->DB->bind(':Blood_Type', $data['Blood_Type']);
		$this->DB->bind(':Religion', $data['Religion']);
		$this->DB->bind(':Address', $data['Address']);
		$this->DB->bind(':Qualification', $data['Qualification']);
		$this->DB->bind(':Profile__Picture', $data['Profile__Picture']);
		$this->DB->bind(':Active__time', $data['Active__time']);
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
		$this->DB->query('SELECT * FROM Super__administrator WHERE Username = :ValidPostUsername');
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

	public function CheckAccountantBanned(){
		$this->DB->query('SELECT * FROM accountant');
		$row = $this->DB->resultSet();
		if($row > 0){
			while($run = $this->DB->resultSet($row)){
				return $run;
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

	// ===================================================================
	// Login Accountant on management
	// ===================================================================
	public function CheckAccountantAccess($Accesscode){
		$this->DB->query('SELECT * FROM accountant WHERE Accesscode = :Accesscode AND featured = 1');
		$this->DB->bind(':Accesscode', $Accesscode);
		$granted = $this->DB->single();
		return $granted;
    }
    
    // ============================================================
    // Login Member
    // ============================================================

	public function LoginAccountant($Accesscode){
		$this->DB->query("SELECT Surname, Othername, Email, featured, NIN, Accesscode, Profile__Picture, Password 
                        FROM (SELECT Surname, Othername, Email, featured, NIN, Profile__Picture, Password, Accesscode as Accesscode
                         FROM accountant 
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
                             FROM accountant 
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
		$this->DB->query('SELECT * FROM student__account');
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
		$this->DB->query('SELECT COUNT(*) AS num FROM lecturals');
		$Count = $this->DB->resultSet();
		// To terminate Zero 
		//$total = $Count[0];
		// To make it by default and start from 0-1-2-3-4...
		$total = $Count;
		return $total;
	}
	public function AccountDataCount(){
		$this->DB->query('SELECT COUNT(*) AS num FROM accountant');
		$runCountRow = $this->DB->resultSet();
		// To terminate Zero 
		$totalRowNum = $runCountRow[0];
		// To make it by default and start from 0-1-2-3-4...
		//$totalNum = $runCount;
		return $totalRowNum;
	}

	public function studentDataCount(){
		$this->DB->query('SELECT COUNT(*) AS num FROM student__account');
		$runCount = $this->DB->resultSet();
		// To terminate Zero 
		$totalNum = $runCount[0];
		// To make it by default and start from 0-1-2-3-4...
		//$totalNum = $runCount;
		return $totalNum;
	}

	// ======================================================================
	//Login student if that data provided by the student are correct
	// ======================================================================

	public function studentLogin($StudentUsername, $StudentPassword){
		$this->DB->query('SELECT * FROM student__account WHERE Roll__No = :StudentUsername');
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
		}
	}

	// ========================================================================
	// Find user by email. email has passed in by the controller
	// ========================================================================

	public function findUserByEmail($email){
		// UsING prepared statement
		$this->DB->query('SELECT * FROM users WHERE email = :email');
		//The email param will be binded with the email variable
		$this->DB->bind(':email', $email);
		//Check if email is already registered
		if($this->DB->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function AddAccountant($data){
		$this->DB->query('INSERT INTO accountant(Accountant__id, Surname, Middle__name, Othername,
		 Accesscode, Password, Email, featured, Telephone_No, Date_of_Birth, Place__of__birth,
		  Gender, Relationship_sts, Civil_status, Citizenship, NIN,  
		  Height, Weight, Blood_Type, Religion, Qualification, Address, Profile__Picture) 
		VALUES (:Accountant__id, :Surname, :Middle__name, :Othername, :Accesscode, :Password,  
		:Email, :featured, :Telephone_No, :Date_of_Birth, :Place__of__birth, :Gender, 
		:Relationship_sts, :Civil_status, :Citizenship, :NIN,
		:Height, :Weight, :Blood_Type, :Religion, :Qualification, :Address, :Profile__Picture)');
		$this->DB->bind(':Accountant__id', $data['Accountant__id']);
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
		$this->DB->bind(':Civil_status', $data['Civil_status']);
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

	//=======================================================================
	// Accountant email if exist
	// ======================================================================

	public function findAccountantByEmail($Email){
		// UsING prepared statement
		$this->DB->query('SELECT * FROM accountant WHERE Email = :Email');
		//The email param will be binded with the email variable
		$this->DB->bind(':Email', $Email);
		//Check if email is already registered
		if($this->DB->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}

	// =======================================================================
	// Find user by email. email has passed in by the controller
	// =======================================================================
	
	public function findUserByEmailInStudent__table($email){
		// UsING prepared statement
		$this->DB->query('SELECT * FROM student__account WHERE email = :email');
		//The email param will be binded with the email variable
		$this->DB->bind(':email', $email);
		//Check if email is already registered
		if($this->DB->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}

	// =====================================================================
	// Select for Edit Accountant Details 
	// =====================================================================

	public function EditAccountant($Edit_id){
		$this->DB->query('SELECT * FROM accountant WHERE Accountant__id = :Edit_id');
		$this->DB->bind(':Edit_id', $Edit_id);
		$row = $this->DB->single();
		if(!empty($row) && $row <= 1){
			return $row;
		}else {
			return false;
		}
	}
	// ======================================================================
	// Find existing professor by email
	// ======================================================================

	public function findProfessorByEmail($Email){
		// UsING prepared statement
		$this->DB->query('SELECT * FROM lecturals WHERE Email = :Email');
		//The email param will be binded with the email variable
		$this->DB->bind(':Email', $Email);
		//Check if email is already registered
		if($this->DB->rowCount() > 0){
			return true;
		}else{
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
		$this->DB->query('SELECT * FROM student__account WHERE student__Id  = :student__Id');
		$this->DB->bind(':student__Id', $student__Id);
		$runquery = $this->DB->single();
		return $runquery;
	}

	// =====================================================================
	// Seleting id from accountant tb to match the delete id 
	// =====================================================================

	public function findAccountanttById($Accountant__Id){
		$this->DB->query('SELECT * FROM accountant WHERE Accountant__Id  = :Accountant__Id');
		$this->DB->bind(':Accountant__Id', $Accountant__Id);
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

	public function fetchApp($Application__Type){
		$this->DB->query('SELECT Category__ID, Category__name FROM `categories` WHERE Category__ID = :Application__Type ');
		$this->DB->bind(':Application__Type', $Application__Type);
		$runfetch = $this->DB->single();
		return $runfetch;
	}
	// ================================================================
	// fetching the faculty id from child__faculty__table 
	// ===============================================================

	public function ReturnFty($Faculty__ID, $Department__Type){
		$this->DB->query('SELECT Faculty__ID, Faculty__name, Child__faculty__ID, Child__faculty__name 
		FROM `faculty__tb`, `child__faculty__tb` 
		WHERE Faculty__ID = :Faculty__ID 
		AND Child__faculty__ID = :Department__Type');
		$this->DB->bind(':Faculty__ID', $Faculty__ID);
		$this->DB->bind(':Department__Type', $Department__Type);
		$rowfetch = $this->DB->single();
		return $rowfetch;
	}

	// ================================================================
	// Matching student data and returning them accordingly
	// ================================================================

	public function ConvertStudentApplicationType($student__Id, $Category__ID, $Application__Type){
		$this->DB->query('SELECT student__Id, Application__Type, Roll__No, Faculty__Type, Department__Type, Program__Type, NIN, Entrylevel, Surname, Othername, Date__of__birth, gender, email, relationship, telephone, session, Category__ID, Category__name
		FROM `categories`, `student__account` 
		WHERE student__Id = :student__Id
		AND Application__Type = :Application__Type 
		AND Category__ID = :Application__Type');
		$this->DB->bind(':student__Id', $student__Id);
		$this->DB->bind(':Application__Type', $Application__Type);
		$this->DB->bind(':Category__ID', $Category__ID);
		$checkmatchdata = $this->DB->single();
		return $checkmatchdata;
	}

	// =====================================================================
	// Select everything from student table
	// ===================================================================== 

	public function student__tb(){
		$this->DB->query('SELECT * FROM student__account');
		$row = $this->DB->resultSet();
		if($row > 0){
			while($run = $this->DB->resultSet($row)){
				return $run;
			}
		}    
	}

	// =====================================================================
	// Find user by Username. Username has passed in by the controller
	// =====================================================================

	public function findUserByUsername($username){
		// USING prepared statement
		$this->DB->query('SELECT * FROM users WHERE username = :username');
		//The username param will be binded with the username variable
		$this->DB->bind(':username', $username);
		//Check if username is already registered
		if($this->DB->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}

	// =====================================================================
	//  Select everything from faculty
	// =====================================================================

	public function GetusersfunArray(){
		$this->DB->query('SELECT * FROM `faculty__tb` ');
		$LiveRow = $this->DB->resultSet();
		if($LiveRow > 0){
			while($run = $this->DB->resultSet($LiveRow)){
			return $run;
			}
		}      
	}

	// ===========================================================
	//Getting faculty name base on the post id from user
	// ===========================================================

	public function GetTheFacultyNameBaseOnPostId(){
		//first check if the ID is a numeric number
		if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) { 
			$id = (int)$_GET['id'];
		}elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) { 
			$id = (int)$_POST['id'];
		}else { 
			header('location:' . ROOT . 'DaniedAccess');
			exit();
		}
		$this->DB->query('SELECT * FROM `Faculty__tb` WHERE `Faculty__ID` = :id');
		$this->DB->bind(':id', $id);
		$fty__stmt = $this->DB->resultSet();
		return $fty__stmt;
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

	// =====================================================================
	//Select everything from child faculty table base on the id user post 
	// =====================================================================

	public function Specular(){
        //first check if the ID is a numeric number
		if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) { 
			$id = (int)$_GET['id'];
		}elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) { 
			$id = (int)$_POST['id'];
		}else { 
			header('location:' . ROOT . 'DaniedAccess');
			exit();
		}
		$this->DB->query('SELECT * FROM `Child__faculty__tb` WHERE `Child__faculty__ID` = :id');
		$this->DB->bind(':id', $id);
		$stmt = $this->DB->resultSet();
		return $stmt;
	}  

	// ===================================================
	// Selecting faculty as array data
	// ===================================================

	public function findAllData(){
		$this->DB->query('SELECT * FROM `Faculty__tb` ');
		$Process__results = $this->DB->resultSet();
		return $Process__results;
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

	// ===================================================
	// Selecting session for the session as array data
	// ===================================================

	public function Selectsession(){
		$this->DB->query('SELECT * FROM `Session`');
		$stmtsession = $this->DB->resultSet();
		return $stmtsession;
	}

	// ====================================================
	//Setting Accountant 
	// ====================================================

	public function AccountantSetting($qut){
		$this->DB->query('SELECT * FROM accountant WHERE Accesscode = :qut');
		$this->DB->bind(':qut', $qut);
		$runResult = $this->DB->resultSet();
		if(!empty($runResult)){
			return $runResult;
		}else{
			die("Sorry..! Something went wrong");
		}
	}

	// ====================================================
	// Admin changing password proccessing 
	// ====================================================
	
	public function UpdatePassword($validID){
		$this->DB->query('SELECT * FROM `super__administrator` WHERE Admin__id = :validID');
		$this->DB->bind(':validID', $validID);
		$row = $this->DB->single();
		if(!empty($row)){		
			return $row;
		}else{
			return false;
		}	
	}
	public function finalAdminUpdate($validID, $encrytPassword){
		$this->DB->query('UPDATE `super__administrator` SET password = :encrytPassword WHERE Admin__id = :validID');
		$this->DB->bind(':encrytPassword', $encrytPassword);
		$this->DB->bind(':validID', $validID);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}

	// ======================================================================
	// Updating Accountant Password
	// ======================================================================

	public function UpdateAccountantPassword($Accesscode, $password, $Newpassword){
		$this->DB->query('SELECT * FROM `accountant` WHERE Accesscode = :Accesscode');
		$this->DB->bind(':Accesscode', $Accesscode);
		$row = $this->DB->single();
		if(!empty($row)){	
			$hashedPassword = $row->Password;
			if(password_verify($password, $hashedPassword)){
				$this->DB->query('UPDATE `accountant` SET password = :Newpassword WHERE Accesscode = :Accesscode');
				$this->DB->bind(':Newpassword', $Newpassword);
				$this->DB->bind(':Accesscode', $Accesscode);
				if($this->DB->execute()){
					return true;
				}else{
					return false;
				}
			}else {
				die("The Old Password Doesn't Match. Please Try again");
				return false;
			}
		}else{
			die('Data not found..');
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
	// Granted ACCESS to accountatn
	// ========================================================================

	public function GrantAccess($Accountant__id, $featured){
		$this->DB->query('UPDATE `accountant` SET featured = :featured WHERE Accountant__id = :Accountant__id');
		$this->DB->bind(':featured', $featured);
		$this->DB->bind(':Accountant__id', $Accountant__id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}

	// =========================================================================
	// Update Accountant data if the Edit id if found
	// =========================================================================
	public function UpdateAccountant($data){
		$this->DB->query('UPDATE accountant SET Surname = :Surname, Middle__name =:Middle__name, Othername= :Othername,
		 Accesscode =:Accesscode, Email =:Email, Telephone_No =:Telephone_No, Date_of_Birth=:Date_of_Birth, 
		 Place__of__birth=:Place__of__birth,  Gender=:Gender, Relationship_sts=:Relationship_sts, 
		 Civil_status=:Civil_status, Citizenship=:Citizenship, NIN=:NIN, Height=:Height, Weight=:Weight,
		 Blood_Type=:Blood_Type, Religion= :Religion, Qualification =:Qualification, Address = :Address, Profile__Picture= :Profile__Picture WHERE Accountant__id = :Accountant__id');
		$this->DB->bind(':Accountant__id', $data['Accountant__id']);
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
		$this->DB->bind(':Civil_status', $data['Civil_status']);
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

	// =========================================================================
	// Update lectural data if the id is found
	// =========================================================================

	public function EditProfessor($data){
		$this->DB->query('UPDATE lecturals SET Surname = :Surname, Middle__name =:Middle__name, Othername= :Othername,
		 Accesscode =:Accesscode, Email =:Email, Telephone_No =:Telephone_No, Date_of_Birth=:Date_of_Birth, 
		 Place__of__birth=:Place__of__birth, Gender=:Gender, Relationship_sts=:Relationship_sts, 
		 Civil_status=:Civil_status, Citizenship=:Citizenship, NIN=:NIN, Height=:Height, Weight=:Weight,
		 Blood_Type=:Blood_Type, Religion=:Religion, Qualification=:Qualification, Address=:Address,
		 Profile__Picture = :Profile__Picture WHERE Professor__id = :Professor__id');
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
		$this->DB->bind(':Civil_status', $data['Civil_status']);
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
		$this->DB->query('UPDATE super__administrator SET last_login = :last_login WHERE Admin__id = :Admin__id');
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
		$this->DB->query('UPDATE student__account SET Surname = :Surname, othername = :othername, email = :email, Date__of__birth = :Date__of__birth, relationship = :relationship, telephone = :telephone, gender = :gender WHERE student__Id = :student__Id');
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
		$this->DB->query('DELETE FROM lecturals WHERE Professor__id = :id');
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
    
	// ==================================================================
	// Delete STUDENT FROM THE SCHOOL SYSTEM BY THE ADMIN
	// ==================================================================
	public function deletestudent($id){
		$this->DB->query('DELETE FROM student__account WHERE student__Id = :id');
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}

	// ====================================================================
	// Delete Accountant from the school system
    // ====================================================================
    
	public function deleteUserAccountant($id){
		$this->DB->query('DELETE FROM accountant WHERE Accountant__Id = :id');
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

	public function isDeleteStudentModel($cheks){
		$i = implode(',', $cheks);
		var_dump($i);
		
		$this->DB->query("DELETE FROM Student__account WHERE student__Id IN (".$i.") ");
		$this->DB->bind(':cheks', $cheks);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function Viewstd($id){
		$this->DB->query('SELECT * FROM student__account WHERE student__Id = :id');
		$this->DB->bind(':id', $id);
		$stmt= $this->DB->resultSet();
		if (!empty($stmt)) {
			return $stmt;
		}else {
			return false;
		}
	}

	public function Changeverifyoldpassword($oldpassword, $id){
		$this->DB->query('SELECT * FROM `student__account` WHERE student__Id = :id');
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
		$this->DB->query('UPDATE `student__account` SET password = :newpassword WHERE student__Id = :id');
		$this->DB->bind(':newpassword', $newpassword);
		$this->DB->bind(':id', $id);
		if($this->DB->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function isEditstudent($data){
		$this->DB->query("UPDATE `student__account` SET Surname = :fname, othername=:lname, Date__of__birth=:DOB,
						gender=:Gender, email= :email, settings=:emailsettings, relationship=:relationship, 
						telephone=:mobile, image=:img WHERE student__Id =:id ");
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
}	