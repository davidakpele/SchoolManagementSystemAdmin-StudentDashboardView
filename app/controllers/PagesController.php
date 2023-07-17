<?php

Class PagesController extends Controller {
    /**
     * 
     * Class PageController
     * @var false|mixed
     * Author: David AkpELE <akpeledavid@hotmail.com>
     * FROM: MidTech Private Limited
     * @package category 
     */ 

    // =====================================================================================
    // This is like a namespace to accessing our model file that connect us to the database
    // =====================================================================================
    private $dataModel;
    private $namespacemodel;
    private $_settings_model;
    public function __construct() {
       @$this->userModel = @$this->loadModel('User');
       @$this->namespacemodel = @$this->loadModel('LoginModel');
       @$this->_settings_model = $this->loadModel('SettingsModel');
    }

    public function _AppSettings(){
        $isSettings_Data = $this->_settings_model->_isGetLogo();
        if (!empty($isSettings_Data)) {
            return $isSettings_Data;
        }
    }
    public function RenderDep(){
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);
        $getData=$phpObject->{'id'};
        $newJsonString = json_encode($phpObject);
        $id = strip_tags(trim(filter_var($getData, FILTER_SANITIZE_NUMBER_INT)));
        if (!empty($id) && (is_numeric($id) && filter_var((int)$id, FILTER_VALIDATE_INT) !== false && is_int($id) || ctype_digit($id) && strval(intval($id)) === strval($id) && ltrim($id, 0))){
            $crf= $this->userModel->selectDeps($id);
            if ($crf) {
                $response['Status'] = '2001'; 
                $response['result'] = $crf;
            }else {
                $response['Status'] = 'Invalid Data requested.';
            }
            
        }else { 
			header('location:' . ROOT . 'DeniedAccess');
        }
        ob_end_clean();
        echo json_encode($response); 
    }
    

    // ==============================================================
    // First School Page That Will Display On THe Site (Index page)
    // =============================================================

    public function index(){
        @$data = [
                    'page_title' => 'Application Portal',
                    'meta_tag_content_Seo'=>'Mercy College Unversity Student Portal',
                    'meta_tag_description'=>'Mercy College University Online Student Portal For Undergraduate, Postgraduate and Distance Learning Part Time Students'
                ];
        @$this->view('index', @$data);    
    }
    // ==============================================================
    // InitiateOnlinePayment Page for online payment process
    // =============================================================
 
    public function InitiateOnlinePayment(){
        $data=
        [
            'paga_title'=> 'Mecry College University Portal :: Online Initiate Online Payment'
        ];
        $this->view('Application/InitiateOnlinePayment', $data);
    }

    public function InitiateOnlinePaymentController(){
        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $i = json_decode($jsonString);
        $ReferenceNumber=$i->{'ReferenceNumber'};
        $newJsonString = json_encode($i);
        $refid = strip_tags(trim(filter_var($ReferenceNumber, FILTER_SANITIZE_STRING)));
        $fetch = @$this->userModel->sqlfetchstdreference($refid);
        if ($fetch) {
            $response['status'] =  '200';
            $response['message']= 'Reference Number Found.';
        }else {
            $response['message']= 'Your reference number is not valid..';
        }
        ob_end_clean();
        echo json_encode($response);
    }
    // ======================================================
    // ADMIN Login Page Controller
    // ======================================================

    public function Default(){
        if(isLoggedInAdmin()){
            header('location:' . ROOT . 'Admin/');
        }else {
            @$data = ['settings'=>$this->_AppSettings(), 'page_title' => 'Admin Dashboard Login System'];
            @$this->view("Admin/Administration/Default", @$data);
        }
    	
    }

    public function Auth(){
        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $Incomingdata = json_decode($jsonString);

        $Postpassword=$Incomingdata->{'password'};
        $rememberme = $Incomingdata->{'RememberMe'};

        $SetnewJsonString = json_encode($Incomingdata);
        if (!filter_var(strip_tags(trim($Incomingdata->{'email'})), FILTER_VALIDATE_EMAIL)) {
            $response['status'] =  '401';
            $response['message']= 'Invalid Email Address.!';
        }else{
            $Postemail=$Incomingdata->{'email'};
            $data=
            [
                'email'=> strip_tags(trim(filter_var($Postemail, FILTER_SANITIZE_STRING))),
                'password'=> strip_tags(trim(filter_var($Postpassword, FILTER_SANITIZE_STRING))),
            ];
            $loggedInUser = @$this->userModel->login($data);
            if ($loggedInUser) {
                if(!empty($rememberme)){
                    setcookie("_adminEmail",$data['email'],time()+ 3600);
                    setcookie("_adminPassword",$data['password'],time()+ 3600); 
                    $response['rememberme'] = true;                      
               }else{
                    $response['rememberme'] = true;
                }
                if($this->createUserSession($loggedInUser) =="501"){
                    $response['status'] =  '501';
                    $response['message']= 'This account has been logged-in somewhere else at the moment..!';
                }else{
                    $response['status'] =  '200OK';
                }
            }else {
                $response['status'] =  '402';
                $response['message']= 'Invalid Username or Password.';
            }
        }
        
        ob_end_clean();
        echo json_encode($response);
    }
    // =======================================================
    //Creating Management Login method and validation
    // ========================================================

    public function Log(){
        if(isLoggedInAccountant()){
                header('location:' . ROOT . 'Management/LecturalDashboard/index');
            }elseif (isLoggedInStaff()) {
                header('location:' . ROOT . 'Management/LecturalDashboard/index');
            }elseif (isLoggedInHr()) {
                header('location:' . ROOT . 'Management/LecturalDashboard/index');
            }elseif (isLoggedInLectural()) {
                header('location:' . ROOT . 'Management/LecturalDashboard/index');
            }
            @$data = 
            [
                'page_title'=>'Management Login',
                'meta_tage_content_Seo'=>'',
            ]; 
           
        @$this->view("Management/Log", @$data);	
    }
    // Login All Valid MANAGEMENT 
   public function LoginManagement(){
        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);

        $ManagementLoginCode = $phpObject->{'ManagementLoginAccesscode'};
        $ManagementLogPass = $phpObject->{'ManagementLoginPassword'};
        $rememberme = $phpObject->{'RememberMe'};
        $ValString = json_encode($phpObject);

        $Accesscode = strip_tags(trim(filter_var($ManagementLoginCode, FILTER_SANITIZE_STRING)));
        $password = strip_tags(trim(filter_var($ManagementLogPass, FILTER_SANITIZE_STRING)));
        /**
         * -------------------------------------------------------------------
         * There are Steps to Verify Staff(s) BEFORE Login can proccess Successfully.
         * ------------------------------------------------------------------- 
         * 1. check if the accesscode which serve as username exist on any of the database table
         * 1(a) if the User(Staff) Have a typo error from the accesscode, then throw error  'Invalid Data Provided. Please Try Again Later'
         * 2. check if password is correct, if it not correct throw error 'Sorry..! Wrong Password'
         * 3. check if user is assign to ay department which we need to create the URL PATH of his/her dashboard
         * 3(a)after checking is Accesscode and password matches any User/staffd data on our database table, then check if Amin has Appointed he/she to a department, if not throw error 'Sorry..!Account Confirm. You've not been Appointed Yet.'
         * 4(Confirm Login) .if admin happens to appoint the staff to any department THEN Redirect to Dashboard.
         *
         */
        $processManagementLogin =$this->userModel->LoginAccountant($Accesscode);  
        if($processManagementLogin == true){
            $nin = $processManagementLogin->NIN;
            // Fetch ur Role access Role here
            $iv = $this->userModel->mimi($nin);
            if($iv){/**@property-read mixed $name*/
                $code = $processManagementLogin->Accesscode;
                $ie= $this->userModel->MimiPassword($code, $password);
                if($ie){
                    //Now check if access is granted
                    if($processManagementLogin->featured != 1){ /**@property-read mixed $name*/
                        $response['message']='Sorry..! You Account Has Been Disabled.';
                    }elseif ($processManagementLogin->featured == 1) {
                        $fname= $processManagementLogin->Surname;
                        $lname= $processManagementLogin->Othername;
                        $Profemail= $processManagementLogin->Email;
                        $fullname= $fname.' '.$lname;
                        $activeuserid = $iv->ID;
                        $activeusernin = $iv->NIN;
                        $activeuserRole= $iv->Role;
                        $activeuserAccesscode= $processManagementLogin->Accesscode;
                        $activeuserphoto = $processManagementLogin->Profile__Picture;
                        if(!empty($rememberme)){
                            $login1 = $this->ManagementLecturalSession($Profemail, $fullname, $activeusernin, $activeuserid, $activeuserRole,  $activeuserAccesscode, $activeuserphoto);
                            if ($login1) {
                                setcookie ("accesscode",$Accesscode,time()+ 3600);
                                setcookie ("password",$password,time()+ 3600);
                                $_SESSION['cookiecode'] = $_COOKIE['accesscode'];
                                $_SESSION['cookiepass'] = $_COOKIE['password'];
                                $response['status'] = true;
                                $response['rememberme'] = true;
                            }else{
                                $response['rememberme'] = false;
                            }
                        }else {
                            $login1 = $this->ManagementLecturalSession($Profemail, $fullname, $activeusernin, $activeuserid, $activeuserRole,  $activeuserAccesscode, $activeuserphoto);
                            if ($login1) {
                                $response['status'] = true;
                            }
                        }
                    }
                }else { /**@property-read mixed $name */
                    $response['message']= "Sorry..! Wrong Password";
                }
            }else { /**@property-read mixed $name */
                $response['message']= "Access Code Confirmed.! But You've not been Appointed Yet.";
            }
        }else {
                $response['message'] = "Invalid Data Provided. Please Try Again Later";
        }
        ob_end_clean();
        echo json_encode($response);
    }
    
     public function DCC(){
        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);
        $DashboardID = $phpObject->{'ID'};
        $ValString = json_encode($phpObject);
        $data = ['ID'=>trim(filter_var(strip_tags($DashboardID, FILTER_SANITIZE_STRING)))];
        
        if (!empty($data['ID'])) {
            $baseID= $data['ID'];
            if($this->SessionDashboard($baseID)){
                $response['status'] = true;
            }else {
                $response['message'] = 'Something went wrong';
            }
        }
        ob_end_clean();
        echo json_encode($response);
    }

    public function ZoomAPIs(){
        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);
        
        $ZoopTopic=$phpObject->{'Call Topic'};
        $SetCaledar=$phpObject->{'Call CalendarSet'};
        $TimeSet=$phpObject->{'Call Time'};
        $HourLastSet=$phpObject->{'Call Hour'};
        $HostLink =$phpObject->{'APILink'};
        $MinuteLastSet=$phpObject->{'Call Minute'};
        $TimeZone=$phpObject->{'Time Zone'};
        $MeetingID=$phpObject->{'Call ID TYPE'};
        $Password=$phpObject->{'Password'};

        $newJsonString = json_encode($phpObject);

        $ZTopic = strip_tags(trim(filter_var($ZoopTopic, FILTER_SANITIZE_STRING)));
        $ZCaledar = strip_tags(trim(filter_var($SetCaledar, FILTER_SANITIZE_STRING)));
        $Ztime = strip_tags(trim(filter_var($TimeSet, FILTER_SANITIZE_STRING)));
        $ZHour = strip_tags(trim(filter_var($HourLastSet, FILTER_SANITIZE_STRING)));
        $Zminute = strip_tags(trim(filter_var($MinuteLastSet, FILTER_SANITIZE_STRING)));
        $ZtimeZone = strip_tags(trim(filter_var($TimeZone, FILTER_SANITIZE_STRING)));
        $ZID = strip_tags(trim(filter_var($MeetingID, FILTER_SANITIZE_STRING)));
        $Zpassword = strip_tags(trim(filter_var($Password, FILTER_SANITIZE_STRING)));
        $Timeframe = $ZCaledar.' '.$Ztime .' '.$ZtimeZone;
        $duration = $ZHour .' '.$Zminute;
        $HosterId= $_SESSION['ProfessorID'];
        $newJsonString = json_encode($phpObject);

        //Zoomn Manipulation
        @$zoom_meeting = new zoom();
        @$dataAPi = array();
        @$dataAPi['topic'] = 'Mercy College University Student Class - zoom meeting';
        @$dataAPi['start_date'] = date("Y-m-d h:i:s", strtotime('today'));
        @$dataAPi['duration'] =30;
        @$dataAPi['type'] =2;
        @$dataAPi['password'] = '';
         try{
            @$response = @$zoom_meeting->createMeeting(@$dataAPi);
            @$data = 
            [
                'page_title'=>'Lecturar Dashboard',
                'ZoomLink'=>$response->join_url,
                'ZoomId'=>$response->id,
                'Manualpassword'=>$response->password,
                'h323_password'=>$response->h323_password,
                'encrypted_password'=>$response->encrypted_password,
            ];
            }catch(Exception $ex){
                die($ex);
            }
        $InsertZoomData = $this->namespacemodel->scheduleZoomMeeting($HosterId, $HostLink, $ZTopic, $Timeframe, $duration, $ZID, $Zpassword);
        if($InsertZoomData == true) {
            $fetch = $this->namespacemodel->fetchZoomdata();
            $response['status']= '200OK';
            $response['Successmessage'] = "The Conference Meeting Has Successfully Be Scheduled.. Kindly
                                             Click The Button Down Below The Copy The Zoom Link 
                                             And Access Code So Others Can Join.
                                             <br/>
                                             <input type='text' id='copyTarget' 
                                             class='form-control' 
                                             value='Conference Meeting Has Successfully Be Scheduled' style='opacity:0.00000000000001; overflow: hidden;position: absolute;clip: rect(0 0 0 0);'> ";
        }else {
            $response['message']= 'Sorry.. The Network is weak at the moment to schedule this meeting.. Please Try Again later';
        }
        //ob_end_clean();
        echo json_encode($response);
    }
    // ==========================================
    //Student Login method
    // ==========================================

    public function Login(){
        $tokenX60hash = bin2hex(random_bytes(20));
        $token = md5('csrf'.time());
        if(isLoggedInStudent()){
            header('location:' . ROOT . 'Student/Dashboard/');
        }
        // Set cookie is set to test timeStamp hashing using Md5 encryptions. is the md5 is true we take our random_bytes hash code
       $cookSet= (($tokenX60hash))?$token : $token;
        @$data = 
            [
                'page_title' => 'Student\'s Login Portal',
                'meta_tag_content_Seo'=>'Mercy College Unversity Student Login Portal',
                'meta_tag_description'=> 'Mercy College University Student Application Portal.'
            ]; 
            
        @$this->view('Student/Login', @$data); 
        
    }

    // ==============================================
    // Entry Requirment Method 
    // ===============================================

    public function RetrieveMatricNo(){
        @$data = ['page_title' => 'Retrieve Matric Number Requirement Portal'];

        $this->view('Application/RetrieveMatricNo', @$data); 
    }
    
    public function Recover(){
        $data = ['page_title'=>'Recover your Password '];

        @$this->view('Application/Recover', @$data); 
    }

    public function ParentsViewStartPage(){
        $data = ['page_title'=>'Parent Login Portal Page'];

        @$this->view('Parents/ParentsViewStartPage', @$data); 
    }

    public function EntryRequirements(){
        @$DC = @$this->userModel->SelectSpecial__ID();
        @$data = [
                    'page_title' => 'Mercy College Entry Requirement Portal',
                    'DisplayCateogries' => @$DC,
                ];
        @$this->view('Application/EntryRequirements', @$data); 
    }


// =================================================
// Register Method for New Fresher
// ==================================================
public function isExistStudentEmail(){
    header("Access-Control-Allow-Origin: *"); 
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    ob_start();
    $jsonString = file_get_contents("php://input");
    $response = array();
    $phpObject = json_decode($jsonString);
    $Stm = $phpObject->{'Email'};
    $newJsonString = json_encode($phpObject);
    $checksql = $this->userModel->isExistsEmail($Stm);
    if($checksql) {
        $response['status'] = 303;
        $response['message']= 'Sorry..! Email Already Been Used By Another Student.';
    }
    ob_end_clean();
    echo json_encode($response);
}
public function isRegister(){
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: *");
    header("Content-Type: application/json");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
        dnd('Failed');
    }else {
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);
        $AppType = $phpObject->{'AppType'};
        $Surname = $phpObject->{'Surname'};
        $FirstName = $phpObject->{'FirstName'};
        $MiddleName = $phpObject->{'MiddleName'};
        $MobileNum = $phpObject->{'MobileNum'};
        $Stm = $phpObject->{'Email'};
        
        $obj = json_encode($phpObject);
        $validateEmail = filter_var($Stm, FILTER_VALIDATE_EMAIL);
        if (empty($AppType)){
            $response['message']= 'Please Select Application Type.';
        }
        if (empty($Surname)){
            $response['message']= 'Please Provide Your Surname.';
        }
        if (empty($FirstName)){
            $response['message']= 'Please Provide Your FirstName.';
        }
        if (empty($MobileNum)){
            $response['message']= 'Please Provide Your Mobile/Telephone Number.';
        }
        if (empty($Stm)){
            $response['message']= 'Please Provide Your Email Address.';
        }elseif (!$validateEmail) {
            $response['message']= $Stm.' is not a valid email address.';
        }elseif (!empty($AppType) && !empty($Surname) && !empty($FirstName) && !empty($MiddleName) && !empty($MobileNum) && !empty($Stm)) {
            if($this->userModel->isExistsEmail($Stm)) {
                $response['status'] = 401;
                $response['message']= 'Sorry..! This Email Has Already Been Used By Another User.';
            }else {
                // Validate
                // Fetch Id 
                $renderStudentId = $this->userModel->createStudentId();
                $length = 11;
                $number = '1234567890';
                $numberLength = strlen($number);
                $randomNumber = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomNumber .= $number[rand(0, $numberLength - 1)];
                }  
                $randomNumber = 'MCU'.$randomNumber;
                // hash password
                $password = password_hash(strtolower(trim(filter_var($Stm, FILTER_SANITIZE_STRING))), PASSWORD_ARGON2ID);
                $data = 
                [
                    'AppType'=>trim(filter_var($AppType, FILTER_SANITIZE_STRING)),
                    'studentid'=>$renderStudentId,
                    'EnrollmentNumber'=>$randomNumber,
                    'nin'=>uniqid(),
                    'Surname'=>trim(filter_var($Surname, FILTER_SANITIZE_STRING)),
                    'FirstName'=>trim(filter_var($FirstName, FILTER_SANITIZE_STRING)),
                    'MiddleName'=>trim(filter_var($MiddleName, FILTER_SANITIZE_STRING)),
                    'MobileNum'=>trim(filter_var($MobileNum, FILTER_SANITIZE_STRING)),
                    'Email'=>trim(filter_var($Stm, FILTER_SANITIZE_EMAIL)),
                    'password'=>$password,
                ];
                
                // insert data now
                $sendDataToModel = $this->userModel->createUser($data);
                if($sendDataToModel){
                    $token = md5($data['Email']).rand(10,9999);
                    $response['status']= 200;
                    $lengthAppNo = 12;
                    $n1 = '21413547890';
                    $numLeng = strlen($n1);
                    $filer = '';
                    for ($i = 0; $i < $lengthAppNo; $i++) {
                        $filer .= $n1[rand(0, $numLeng - 1)];
                    }  
                    $jwtToken = $filer;
                    // Create Php mailer template to send a link of verification to student/users email

                    $link = "<a style='padding: 5px;background: #2383ad;color: #FFF;font-size: 13px;border: none;border-radius: 3px;cursor: pointer;outline: 0px;' href='http://localhost:3000/Confirmation?e=".$data['Email']."&appNo=".$jwtToken."'>Resend Verification Email</a>";
                    $response['message']= 'Verification mail has been sent to the email you provided. Please verify email to continue application. <br/>If you have used a wrong email, please fill the form again with a valid email address. 
                    <br/><br/>
                    <form method="POST" id="co092" className="form-horizontal form-group" onSubmit={this.ResendConfirmationLink} autoComplete="off">
                        '.$link.'
                    </form>';
                }
            }
        }
    }
    ob_end_clean();
    echo json_encode($response);
}

public function ProcessNewStudentOnline(){
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: *");
    header("Content-Type: application/json");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
        dnd('Failed');
    }else {
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);
        //get or set id and entry number
        $stmt = $this->userModel->SQLFetchStudentDESC();
        if ($stmt == false) {
           $Studentid = '9001';
        }else {
            $AvaliableID = $stmt->student__Id;
            $Studentid = $AvaliableID+1;
        }
        $length = 11;
        $number = '1234567890';
        $numberLength = strlen($number);
        $randomNumber = '';
        for ($i = 0; $i < $length; $i++) {
            $randomNumber .= $number[rand(0, $numberLength - 1)];
        }  
        $enrolNo = 'MCU'.$randomNumber;

        $NewStudentIdTagNo = $Studentid;
        $NewStudentEnrollmentNo = $enrolNo;
        $App = $phpObject->{'Application'};
        $Fac = $phpObject->{'Faculty'};
        $Dpt = $phpObject->{'Department'};
        $prg =$phpObject->{'Program'};
        $ninnumber = $phpObject->{'National Identification Number'};
        $Enty = ((isset($phpObject->{'Entry Level'})?$phpObject->{'Entry Level'} : ''));
        $class = ((isset($phpObject->{'classid'})?$phpObject->{'classid'} : ''));
        $sess = ((isset($phpObject->{'semester'})?$phpObject->{'semester'} : ''));
        $sur =$phpObject->{'Surname'};
        $oda = $phpObject->{'Othername'};
        // $phpObject->{'Entry Level'}) ? $phpObject->{'Entry Level'} : ''
        $Dobh = $phpObject->{'Date of birth'};
        $Gen =$phpObject->{'Gender'};
        $Stm =$phpObject->{'Student Email'};
        $ReS = $phpObject->{'Relationship Status'};
        $Tel = $phpObject->{'Telephone Number'};
        $isJwtApi = $phpObject->{'JwtApi'};
        
        $newJsonString = json_encode($phpObject);
        
        // This is jwt token is use to process student /parent data
        
        $isFetchEmailexist = $this->userModel->isExistsEmail($Stm);
        if($isFetchEmailexist) {
            $response['status'] = 505;
            $response['message']= 'Sorry..! Email Already Been Used By Another Student.';
        }else {
        // Setting surname as the user default password
            $password = password_hash(strtolower($sur), PASSWORD_ARGON2ID);
            $pwd = password_hash($sur, PASSWORD_BCRYPT);
            $Sender = 
            [
                'NewID'=>trim(filter_var($NewStudentIdTagNo, FILTER_SANITIZE_STRING)),
                'EnrollmentNumber' =>trim(filter_var($NewStudentEnrollmentNo, FILTER_SANITIZE_STRING)),
                'App'=> trim(filter_var($App, FILTER_SANITIZE_STRING)),
                'Fac'=> trim(filter_var($Fac, FILTER_SANITIZE_STRING)),
                'Dep'=> trim(filter_var($Dpt, FILTER_SANITIZE_STRING)),
                'Prog'=>trim(filter_var($prg, FILTER_SANITIZE_STRING)),
                'Nin'=>trim(filter_var($ninnumber, FILTER_SANITIZE_STRING)),
                'Entry'=>((isset($Enty)?trim(filter_var($Enty, FILTER_SANITIZE_STRING)): '')),
                'class'=>((isset($class)?trim(filter_var($class, FILTER_SANITIZE_STRING)): '')),
                'sess'=>((isset($sess)?trim(filter_var($sess, FILTER_SANITIZE_STRING)): '')),
                'Surname'=>trim(filter_var($sur, FILTER_SANITIZE_STRING)),
                'Othername'=>trim(filter_var($oda, FILTER_SANITIZE_STRING)),
                'DBO'=>trim(filter_var($Dobh, FILTER_SANITIZE_STRING)),
                'Gender'=>trim(filter_var($Gen, FILTER_SANITIZE_STRING)),
                'Email'=>trim(filter_var($Stm, FILTER_SANITIZE_STRING)),
                'Relationship'=>trim(filter_var($ReS, FILTER_SANITIZE_STRING)),
                'Tel'=>trim(filter_var($Tel, FILTER_SANITIZE_STRING)),
                'password'=>$password,
            ];

            $insertingDataStudent = $this->userModel->processor($Sender);
            //$insertingParentData = $this->userModel->isParentSQLstmt($Sender);
            $_SESSION['api'] =$isJwtApi;
            $_SESSION['userID'] = $Sender['NewID'];
            if($insertingDataStudent){
                $response['api']= $_SESSION['api'];
                $response['userid']= $_SESSION['userID'];
                // Send Student Via Email
                // if email is sent, show this message
                $response['status']= 200;
                $response['Successmessage']= 'Verification mail has been sent to the student email you provided. Please verify email to continue application. If you have used a wrong email, please fill the form again with a valid email address. 
                <br/><br/><a class="buttonResendEmail" href="'.ROOT.'Application/Registration"><b>Continue Application</b></a> ';
                // close sending email
                unset($_SESSION['userID']);
                unset($_SESSION['api']);
            }else {
                $response['message']= 'Sorry.. Something went';
            }
        }
    }
    ob_end_clean();
    echo json_encode($response);
    } 

    public function Registration(){
        @$DC = @$this->userModel->SelectSpecial__ID();
        @$throwprogram = @$this->userModel->SelectProgram();
        @$throwSession= @$this->userModel->Selectsession();
        @$throwEntrylevel = @$this->userModel->SelectEntryLevel();
        $parentid= uniqid();
            @$data =
            [
                'page_title' => 'Application Form for Freshers',
                'DisplayCateogries' => $DC,
                'throw' => $throwprogram, 
                'StmtEntrylevel' => $throwEntrylevel,
                'StmtSession' => $throwSession, 
                'pid'=>$parentid,
            ];
        @$this->view('Application/Registration', @$data);      
    }
    public function isDeleteStudent(){
        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);

        // The data am receiving 
        $isCheckid = $phpObject->{'Datakey'};
        $cheks =  $isCheckid;
        if ($cheks) {
            // Here is Multiple department 
            $isVerifyDelete = $this->userModel->isDeleteStudentModel($cheks);
            if($isVerifyDelete) {
                $response['status'] = 200;
                $response['message']= 'Successfully Deleted.';
            }
        }
    
        ob_end_clean();
        echo json_encode($response);
    }
    // ====================================================
    // Creating Confirmation method for user
    // ====================================================

    public function Confirm(){
        @$data = [
                    'page_title' => 'Student Confirmation Page',
                ];
        @$this->view('Application/Confirm', @$data); 
    }

    // =====================================================
    // Creating Student dashboard method  Index page
    // =====================================================

    public function Examcenter(){
        if(!isLoggedInStudent()){header('location:' . ROOT . 'Student/Login/');}
        $id= $_SESSION['student__Id'];
        $ft = $this->userModel->Viewstd($id);
       if ($ft) {
            foreach ($ft as $keyvalue) {
                $Sname = $keyvalue['Surname'];
                $Oname = $keyvalue['othername'];
                $Dob = $keyvalue['Date__of__birth'];
                $gender= $keyvalue['gender'];
                $email= $keyvalue['email'];
                $rel= $keyvalue['relationship'];
                $tel= $keyvalue['telephone'];
                $img= $keyvalue['image'];
                $settings= $keyvalue['settings'];
            }
       }
        @$statement1 = @$this->userModel->studentData();
        @$statement2 = @$this->userModel->studentDataCount();
        $Courseid=$_SESSION['Department'];
        $FetchDepartment= $this->namespacemodel->FetchStudentDepartmentName($Courseid);
        $CourseName = $FetchDepartment->Child_name;
        @$data = 
        [
            'page_title' => 'Dashboard',
            'DisplaySuccefulsession'=> @$statement1,
            'CountStudent'=> @$statement2,
            'examName'=>$CourseName,
            'Id'=>$Courseid,
            'photo'=>$img
        ];
        @$this->view('Student/Examcenter', @$data);
    }

    public function Dashboard(){
        if(!isLoggedInStudent()){header('location:' . ROOT . 'Student/Login/');}else {
            $id= $_SESSION['student__Id'];
            $ft = $this->userModel->Viewstd($id);
            $depid =$_SESSION['Department'];
            $clasid=$_SESSION['Classid'];
            $semid=$_SESSION['semsterid'];
            $onlineUser = $this->userModel->OnlineStudent($depid, $clasid, $semid);
            if ($ft) {
                $email= $ft->email;
                $img= $ft->image; 
            }
            @$data = 
                [
                    'page_title' => 'Dashboard',
                    'photo'=>$img,
                    'parentCourse'=>$parentCourse,
                    'online'=>$onlineUser,
                ];   
            }
        @$this->view('Student/Dashboard/index', @$data);
    }
    public function ExamModal(){
        if(!isLoggedInStudent()){header('location:' . ROOT . 'Student/Login/');}
        if(isset($_GET['id']) && $_GET['id'] > 0){
            $Courseid=$_SESSION['Department'];
            $FetchDepartment= $this->namespacemodel->FetchStudentDepartmentName($Courseid);
            $FetchCategory = $this->namespacemodel->FetchStudentCategoryName($Courseid);
            $CountExam = $this->namespacemodel->isCounter($Courseid);
            $PassScore = '100%';
            $CourseName = $FetchDepartment->Child_name;
            $catname = $FetchCategory->Category__name;
            $data = 
                [
                    'examName'=>$CourseName,
                    'ApplicationName'=>$catname,
                    'isCount'=>$CountExam,
                    'isHighScore'=>$PassScore,
                    'examid'=>$Courseid,
                ];
           
        }else {
             echo "<script>alert('Error..')</script>";
        }
        $this->view("Student/ExamModal", $data);
    }
    
    public function Examination($url){
        if(!isLoggedInStudent()){
           echo "<script>
                    alert('Sorry..! You have no permission to this page,not until you login with the right credentials');
                    window.location.assign('".ROOT."Student/Login/');
                </script>";
        }else{ 
            $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $parts = explode('/', $url);
            $new_url = $parts[0].'/'.$parts[1].'/'.$parts[2].'/'.$parts[3].'/'.$parts[4].'/'.$parts[5].'/'.$parts[6];
            $eid=strip_tags(trim((string)filter_var($parts[6], FILTER_SANITIZE_STRING), true));
            $isSelectExam= $this->namespacemodel->getExam($eid);
            //dnd($isSelectExam);
            $CountExam = $this->namespacemodel->isCounter($eid);
            $GetExamTime= $this->namespacemodel->isexamTime($eid);
            $id = $_SESSION['student__Id'];
            if ($GetExamTime == false) {
                echo "<script>
                    alert('Sorry..This exam doesn\'t exists in our portal.');
                    window.location.replace('".ROOT."Student/Dashboard/');
                </script>";
            }else{
                $beforeSave = $this->namespacemodel->beforeSave($eid,$id);
                if (!empty($beforeSave)) {
                    $msg = ". ";
                    echo '<script>alert("You\'ve Already Written This Particular Exam, You Can\'t Re-write This Exam unless You Got The Admin Permission.");
                        window.location.replace("'.ROOT.'Dashboard/AuthExamination");
                    </script>';
                }else {
                    try{
                        $data =
                            [
                                'page_title'=>'Student Examination Board',
                                'examcontroller'=>$isSelectExam,
                                'examTime'=>$GetExamTime,
                                'isCount'=>$CountExam,
                            ];
                        $this->view("Student/Examination", $data);
                    }catch(ViewPageException $e){
                        throw new Exception("Error Processing Request", 1);
                    }
                }
            }
        }  
    }

    public function AuthExamination(){
        if(!isLoggedInStudent()){header('location:' . ROOT . 'Student/Login/');}else {  
            $id= $_SESSION['student__Id'];
            $ft = $this->userModel->Viewstd($id);
            $email = $_SESSION['studEmail'];
            $depid =$_SESSION['Department'];
            $clasid=$_SESSION['Classid'];
            $semid=$_SESSION['semsterid'];
            $validateExams = $this->namespacemodel->fetchtimedata($depid, $clasid, $semid);
            if ($validateExams) {
                foreach ($validateExams as $key) {
                    $eid = $key['eid'];
                    $beforeSave = $this->namespacemodel->beforeSave($eid,$id);
                    $msg = '';
                }
            }
            $data =
            [
                'page_title'=>'Welcome to Exam Portal',
                'exam'=>$validateExams,
                'eid'=>((!empty($eid))?$eid:''),
            ];

            $this->view('Student/AuthExam', $data);
        }
    }
    public function ExamResult(){
        if(!isLoggedInStudent()){
           echo "<script>
                    alert('Sorry..! You have no permission to this page,not until you login with the right credentials');
                    window.location.assign('".ROOT."Student/Login/');
                </script>";
        }else{
            $eid = $_POST['exam_id'];
            $id = $_SESSION['student__Id'];
            $isSelectExam= $this->namespacemodel->isCheckExam($eid);
            $count = 0;
            $arr = [];
            $ci = [];
            $isAnswers=[];
            $CorrentAns= array();
            $FailAns = array();
            $ansResult= false;
            $userAnswers = [];
            $defaultmark= 100;
            foreach ($isSelectExam as $k ) {
                $count++;
               
                $arr = $k['questionid'];
                $ansid = $k['ansid'];
                
                if (isset($_POST[$count])) {
                   foreach ($_POST[$count] as $key => $value) {
                        if ($_POST[$count]) {
                            $ci = $key;
                            $userAnswers = $value;
                        }
                    }
                 
                    $isAnswers= $this->namespacemodel->isCheckExamAnsers($ci, $userAnswers);
                    
                    if ($isAnswers == false) {
                        $FailAns[]= 'true';
                        $wrongAns = count($FailAns);
        
                        $CorrentAnsresult= count($CorrentAns);
                    }elseif ($isAnswers == true) {
                        $wrongAns = count($FailAns);
                        $CorrentAns[]= 'true';
                        $CorrentAnsresult= count($CorrentAns);
                    }
                }else {
                    $FailAns[]= 'true';
                    $CorrentAnsresult= '0';
                }
                
            } 
            //processing score and grade
            // to avoid error of empty value
            $wrongAns = (!empty($wrongAns)) ? $wrongAns : '';
            $CorrentAnsresult = (!empty($CorrentAnsresult)) ? $CorrentAnsresult : '0' ;
           
            if ($CorrentAnsresult =='') {
                $getConAns = 0;
            }else {
                $getConAns = $CorrentAnsresult;
            }
            if ($wrongAns == '') {
                $FailAnsQ = 0;
            }else {
                $FailAnsQ = $wrongAns;
            }
            $id = $_SESSION['student__Id'];
            $Courseid= $_POST['courseid'];
            $appType = $this->namespacemodel->FetchStudentData($id);
            
            if ($appType) {
                $relationid = $appType->Conid;
                $checkStudentData = $this->namespacemodel->studentdata($relationid);
                // ============================================
                $Application__Type = $checkStudentData->Application_id;
            }
               
            // ============================================
            $core1 = $this->userModel->fetchApp($Application__Type);
            // ================================
            $Catname1 = $core1->Category__name;
            $i=1;
            $userid = $_SESSION['student__Id'];
            
            $FetchDepartment= $this->namespacemodel->FetchStudentDepartmentName($Courseid);
            $CourseName = $FetchDepartment->CourseTitle;
            
            $baseScore = (!empty($CorrentAnsresult)) ? $CorrentAnsresult*16.6 : '' ;
            $GradeResponse = '';
            if($CorrentAnsresult ==0){
                $ansmsg= 'Fail';
                $GradeResponse = '<span style="line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;">(<b style="color:red;">Fail</b>) Re-run Course</span>';
            }elseif($CorrentAnsresult !=0 && $baseScore <= 39){
                $GradeResponse= "V.Poor";
                $ansmsg= 'V.Poor';
                $finallyGrade = $baseScore;
            }elseif($CorrentAnsresult !=0 && $baseScore <= 49){
                    $GradeResponse= "Pass";
                    $ansmsg= 'Pass';
                    $finallyGrade = $baseScore;
            }elseif($CorrentAnsresult !=0 && $baseScore <= 59){
                $GradeResponse= "Good";
                $ansmsg= 'Good';
                $finallyGrade = $baseScore;
            }elseif($CorrentAnsresult !=0 && $baseScore <=69){
                $GradeResponse= "Credit";
                $ansmsg= 'Credit';
                $finallyGrade = $baseScore;
            }elseif($CorrentAnsresult !=0 && $baseScore <= 100){
                $GradeResponse= "Distinction";
                $ansmsg= 'Distinction';
                $finallyGrade = $baseScore;
            }elseif ($CorrentAnsresult !=0 && $baseScore > 100) {
                $GradeResponse= "Distinction";
                $ansmsg= 'Distinction';
                $finallyGrade = 100;
            }if(!isset($finallyGrade)){
                $finallyGrade = 'O';
                $scores = '0';
            }
            
            $beforeSave = $this->namespacemodel->beforeSave($eid,$id);
         
            if (!empty($beforeSave)) {
                $msg = ". ";
                echo '<script>alert("You\'ve Already Written This Particular Exam, You Can\'t Re-write This Exam unless You Got The Admin Permission.");
                    window.location.replace("'.ROOT.'Dashboard/AuthExamination");
                </script>';
            }else {
                $save= $this->namespacemodel->isSave($eid, $getConAns, $FailAnsQ, $defaultmark, $finallyGrade, $ansmsg, $id);
                if ($save) {
                $data = 
                    [                     
                        'page_title'=>'Examination Result',
                        'ActualScore'=>'<b>'.@$CorrentAnsresult.'</b> Out Of <b>('.$_GET['no'].')</b>',
                        'DisplayResult'=>'<b>'. $finallyGrade .'</b>%',
                        'StdIdentity'=>$id,
                        'FailScore'=>'<b>'.$wrongAns.'</b>',
                        'Category'=>$Catname1,
                        'GradeResponse'=>$GradeResponse,
                        'DepartmentName'=>$CourseName
                    ];
                }
                $this->view("Student/ExamResult", $data);
            }
        }
    }
  
    public function Settings(){
            $data = 
            [
                'page_title'=>'Students Settings Controller',
                'meta_tag_content_Seo'=> 'Settings',
                'meta_tag_description'=>'Student Dashboard Setting'
            ];
        $this->view('Management/LecturalDashboard/Settings', $data);
    }

    function RandomToken($length = 32){
        if(!isset($length) || intval($length) <= 8 ){
            $length = 32;
        }
        if (function_exists('random_bytes')) {
            return bin2hex(random_bytes($length));
        }
        if (function_exists('mcrypt_create_iv')) {
            return bin2hex(mcrypt_create_iv($length, MCRYPT_DEV_URANDOM));
        }
        if (function_exists('openssl_random_pseudo_bytes')) {
            return bin2hex(openssl_random_pseudo_bytes($length));
        }
    }
    public function Salt(){
        return substr(strtr(base64_encode(hex2bin($this->RandomToken(32))), '+', '.'), 0, 44);
    }
    public function HStudents(){
       if (isLoggedInLectural() && isLoggedDashboardController()) {
            $departmentid = $_SESSION['DashboardID']; 
            $Fetchstuddents= $this->namespacemodel->fetchstudent($departmentid);
            $mim =  $_SESSION['ProfessorID'];
            $emailstmt = $this->userModel->SqlFetchProfessEmails($mim);
            if($Fetchstuddents < 1){
                $NullData = '<div class="alert alert-danger tex-center" role="alert">Sorry..! No Student Has Register For This Course.. The table is empty.!</div>';
            }
            if(isset($_POST['delete'])){
                $checkbox = $_POST['checkbox'];
                for($i=0;$i<count($_POST['checkbox']);$i++){
                $del_id = $checkbox[$i];
                print_r($del_id);
                }
            }
        }elseif(isLoggedInLectural() && iscsrf()) {
           $departmentid = $_SESSION['base']; 
           $mim =  $_SESSION['ProfessorID'];
            $Fetchstuddents= $this->namespacemodel->fetchstudent($departmentid);
            $emailstmt = $this->userModel->SqlFetchProfessEmails($mim);
                if($Fetchstuddents < 1){
                    $NullData = '<div class="alert alert-danger tex-center" role="alert">Sorry..! No Student Has Register For This Course.. The table is empty.!</div>';
                }
                if(isset($_POST['delete'])){
                    $checkbox = $_POST['checkbox'];
                    for($i=0;$i<count($_POST['checkbox']);$i++){
                    $del_id = $checkbox[$i];
                    print_r($del_id);
                    } 
                }
        }else {
            header('location:' . ROOT . 'Management/LecturalDashboard/index');
        }
        $data = 
            [   
                'page_title'=>'Professor  :: Students Dashboard',
                'fetchstudent'=>$Fetchstuddents,
                'NullData'=>((isset($NullData))?$NullData: ''),
                'emailstmt'=>$emailstmt,
            ];
            $this->view('Management/LecturalDashboard/HStudents', $data);
        
    }

    public function Inbox(){
        if (isset($_GET['tab'])) {
            $id = $_GET['tab'];
            $mim =  $_SESSION['ProfessorID'];
            $emailstmt = $this->userModel->isFetchEmails($id, $mim);
            if ($emailstmt) {
                if ($emailstmt){
                    $emailid =  $emailstmt->EmailID;
                    $sendername = $emailstmt->SenderName;
                    $senderemail=  $emailstmt->SenderMail;
                    $emailsubject=  $emailstmt->Subject;
                    $emailbody =  $emailstmt->message;
                    $emailtimesent= $emailstmt->Time;
                }
            }else {
                header('location:' . ROOT . 'Management/HStudents/');
            }
        }
        $data =
        [
            'page_title'=>$emailsubject,
            'email'=>$emailid,
            'sendername'=>$sendername,
            'senderemail'=>$senderemail,
            'emailbody'=>$emailbody,
            'emailtimesent'=>$emailtimesent,
        ];
        $this->view('Management/LecturalDashboard/Inbox', $data);
    }
   
    public function StudentProfile(){
        if(!isLoggedInStudent()){header('location:' . ROOT . 'Student/Login/');}else {
            $id= $_SESSION['student__Id'];
            $ft = $this->userModel->Viewstd($id);
            if ($ft) {
                    $email= $ft->email;
                    $img= $ft->image; 
            }
                $data =
                [
                    'page_title'=>$_SESSION['globalname'].' Profile',
                    'studentEmail'=>$email,
                    'photo'=>$img
                ];
                $this->view('Student/StudentProfile', $data);
            }
    }
    
    public function EStudent(){
        if(!isLoggedInStudent()){header('location:' . ROOT . 'Student/Login/');}else {
            $id= $_SESSION['student__Id'];
            $ft = $this->userModel->Viewstd($id);
            if ($ft) {
                    $Sname = $ft->Surname;
                    $Oname = $ft->othername;
                    $Dob = $ft->Date__of__birth;
                    $gender= $ft->gender;
                    $email= $ft->email;
                    $rel= $ft->relationship;
                    $tel= $ft->telephone;
                    $img= $ft->image;
                    $settings= $ft->settings;
            }
            $data =
            [
                'page_title'=>'Edit '.$_SESSION['globalname'].' Profile',
                'fname'=>$Sname,
                'SurnameError'=> '',
                'lname'=>$Oname,
                'lastnameError'=> '',
                'Dob'=>$Dob,
                'DobError'=> '',
                'gender'=>$gender,
                'genderError'=> '',
                'email'=>$email,
                'emailError'=> '',
                'emailSettings'=>'', 
                'SettingsError'=> '',
                'relationship'=>$rel,
                'relError'=> '',
                'telephone'=>$tel,
                'telError'=> '',
                'photo'=>$img,
                'photoError'=> '',
                'settings'=> $settings,
            ];
        $this->view('Student/EStudent',$data);
        }
    }

    // Edit Student
    public function EditStudentDataController(){
       
        $response = array();
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            if (isset($_FILES['file']['name']) != '' && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['DOB']) && isset($_POST['Gender'])
                && isset($_POST['email']) && isset($_POST['emailsettings']) && isset($_POST['relationship']) 
                && isset($_POST['mobile'])) {
                // validate file
                $photo = $_FILES['file'];
                $name = $photo['name'];
                $response['status'] = 200;
                $response['message'] = 'Yes';
                $nameArray = explode('.', $name);
                $fileName = $nameArray[0];
                $fileExt = $nameArray[1];
                $mime = explode('/', $photo['type']);
                $mimeType = $mime[0];
                $mimeExt = $mime[1];
                $tmpLoc = $photo['tmp_name'];   
                $fileSize = $photo['size']; 
                // $allowed = array('jpg', 'jpeg', 'png');
                $uploadName = md5(microtime()).'.'.$fileExt;
                $uploadPath =  'Students/assets/images/'.trim(filter_var($_SESSION['student__Id'], FILTER_SANITIZE_STRING)).'/'.$uploadName; 
                $dbpath     =  'Students/assets/images/'.trim(filter_var($_SESSION['student__Id'], FILTER_SANITIZE_STRING)).'/'.$uploadName;
                $folder =  'Students/assets/images/'.trim(filter_var($_SESSION['student__Id'], FILTER_SANITIZE_STRING));
                if ($fileSize > 90000000000000) {
                    $response['status'] = 300;
                    $response['errormsg'] = '<b>ERROR:</b>Your file was larger than 50kb in file size.';
                }elseif ($fileSize < 90000000000000 ) {
                    
                    if(!file_exists($folder)){
                        mkdir($folder,077,true);
                    }
                    // this code check if on the student id folder has old photo, if yes, delete every old photo and upload new profile photo.
                    foreach(glob($folder . '/*') as $file){
                        // check if file older than 90 days
                        if((time() - filemtime($file)) > (60 * 60 * 24 * 90)){
                            unlink($file);
                        }else {
                            // delete file
                            unlink($file);
                        }
                    }
                    move_uploaded_file($tmpLoc,$dbpath);
                    $data = 
                    [
                        'img'=>$uploadPath,
                        'fname'=>trim(filter_var($_POST['fname'], FILTER_SANITIZE_STRING)),
                        'lname'=>trim(filter_var($_POST['lname'], FILTER_SANITIZE_STRING)),
                        'DOB'=>trim(filter_var($_POST['DOB'], FILTER_SANITIZE_STRING)),
                        'Gender'=>trim(filter_var($_POST['Gender'], FILTER_SANITIZE_STRING)),
                        'email'=>trim(filter_var($_POST['email'], FILTER_SANITIZE_STRING)),
                        'emailsettings'=>trim(filter_var($_POST['emailsettings'], FILTER_SANITIZE_STRING)),
                        'relationship'=>trim(filter_var($_POST['relationship'], FILTER_SANITIZE_STRING)),
                        'mobile'=>trim(filter_var($_POST['mobile'], FILTER_SANITIZE_STRING)),
                        'id'=>$_SESSION['student__Id']
                    ];
                   if ($this->userModel->isEditstudent($data)) {
                       $response['status'] = 200;
                       $response['message'] = 'Your Profile Has Successfully Updated.!';
                   } 
                }
            }
        echo json_encode($response);
    }
    
    // Student Change Controller method
    public function change_password(){
        $id= $_SESSION['student__Id'];
        $ft = $this->userModel->Viewstd($id);
       if ($ft) {
            $Sname = $ft->Surname;
            $Oname = $ft->othername;
            $Dob = $ft->Date__of__birth;
            $gender= $ft->gender;
            $email= $ft->email;
            $rel= $ft->relationship;
            $tel= $ft->telephone;
            $img= $ft->image;
            $settings= $ft->settings;
       }
        $data=
        [
            'page_title'=> 'Change Password',
            'photo'=>$img
        ];
        $this->view('Student/change_password', $data);
    }

    public function check_result(){
        $action = $_GET['action'];
        if ($action=='result') {
            $eid=$_GET['eid'];
            $id = $_GET['user'];
            $getviewresult= $this->userModel->getviewresult($eid, $id);
            
            $total = '';
            if (!empty($getviewresult->failQuest)) {
                $total = $getviewresult->failQuest + $getviewresult->correctQuest;
            }elseif ($getviewresult->failQuest == 0) {
                $total= $getviewresult->correctQuest;
            }
            if (!empty($getviewresult->correctQuest)) {
                $total = $getviewresult->failQuest + $getviewresult->correctQuest;
            }elseif ($getviewresult->correctQuest ==0) {
                $total= $getviewresult->failQuest;
            }
    
            $data= 
            [
                'page_title'=>'View Result',
                'data'=>$getviewresult,
                'failQuest'=>((!empty($getviewresult->failQuest))? $getviewresult->failQuest : '0'),
                'ActualScore'=>$getviewresult->correctQuest,
                'totalQuest'=>$total,
                'DisplayResult'=>'<b>'. $getviewresult->grade.'</b>',
                'FailScore'=>'<b>'.($getviewresult->failQuest == 0) ? '' : $getviewresult->failQuest .'</b>',
                'DepartmentName'=>$getviewresult->CourseCode,
                'score'=>$getviewresult->score,
                'coursename'=>$getviewresult->CourseTitle,
                'defaultmark'=>$getviewresult->defaultmark
            ];
            $this->view('Student/check_result', $data);
        }
        
    }
    public function CStudentProcessing(){
        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);

        $oldpassword = $phpObject->{'oldpassword'};
        $id = $phpObject->{'studentid'};
        $newpassword = $phpObject->{'newpassword'};
        if ($this->userModel->Changeverifyoldpassword($oldpassword, $id)) {
            $newpassword = password_hash($newpassword, PASSWORD_ARGON2ID);
            if ($this->userModel->updatestdpassword($newpassword, $id)) {
                $response['status'] = '200';
                $response['Successmessage'] = 'Password has Successfully Updated.!';
            }
        }else {
            $response['message']= "<span style='margin-left:42px'>The Old Password Doesn't Match. Please Try again</span>";
        }
       
        ob_end_clean();
        echo json_encode($response);
    }
    
  
    // Creating Session for Admin
    public function createUserSession($data){
        $user_ip= get_IP_address();
        @$last_login = date("Y-m-d H:i:s");
        @$Admin__id = @$data->Admin__id;
        $id = $Admin__id;
        @$Route = @$this->userModel->lastlog($user_ip, $last_login, $Admin__id);
        if ($Route ==='501') {
            return $Route;
        }else {
            $stmt = $this->userModel->SQLuserEdit($id);
            if($stmt){
                $_SESSION['Admin__id'] = @$stmt->Admin__id;
                $_SESSION['username'] = @$stmt->username;
                $_SESSION['adminExmail'] = @$stmt->Email;
                $_SESSION['adminSurname']= @$stmt->Surname;
                $_SESSION['adminothername']= @$stmt->Othername;
                $_SESSION['Role'] = $stmt->Role;
                // Taking current system Time
                $_SESSION['start'] = time();
                //set session to expire after one day 24hr
                // $_SESSION['expire'] = $_SESSION['start'] + (73 * 60 * 60) ;  
                // Use a ternary operation to set the URL 
                $url = ($_SESSION['admin_level'] === 1) ? 'Admin/Home' : 'PagesController/Logout';
                if(isset($url)){ 
                    echo "<script>
                            window.location.replace('". ROOT . @$url."');
                        </script>";
                    echo '<nosript>';
                    echo '<meta http-equiv="refresh" content="0;url=' . ROOT . $url . '" />';
                    echo '</nosript>';
                }
            }
        }
    }

   
    // =========================================================
    // Creating session for Lectural on management section
    // =========================================================

    public function ManagementLecturalSession($Profemail, $fullname, $activeusernin, $activeuserid, $activeuserRole,  $activeuserAccesscode, $activeuserphoto){
        @$Active_login = date("Y-m-d H:i:s");
        @$Route = @$this->namespacemodel->lastlogAccountant($Active_login, $activeusernin, $activeuserAccesscode);
        if($Route){ 
            $_SESSION['Fullname']= $fullname;
            $_SESSION['UsenrNin'] = $activeusernin;
            $_SESSION['ProfessorID']  = $activeuserid;
            $_SESSION['Accesscode'] = $activeuserAccesscode;
            $_SESSION['Profile__Picture']= $activeuserphoto;
            $_SESSION['Prof_email']= $Profemail;
            $_SESSION['ProfTimestart'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['ProfTimestart'] + (30 * 60);
            if ($_SESSION['expire']) {
                echo "<script>
                    window.location.replace('". ROOT ."Management/LecturalDashboard/index');
                </script>";
                return true;
            }
        }else {
            return false;
        }  
    }



    // ======================================================
    // Creating session for staff on management section
    // ======================================================
    public function ManagementStaffSession($basename, $activeuserid, $activeusernin, $activeuserRole, $activeuserDirectoryID, $activeuserAccesscode, $activeuserphoto){
        @$Active_login = date("Y-m-d H:i:s");
        @$Route = @$this->namespacemodel->lastlogAccountant($Active_login, $activeusernin, $activeuserAccesscode);
        if($Route){
            $_SESSION['StaffID'] = $activeuserid;
            $_SESSION['Accesscode'] = $activeuserAccesscode;
            $_SESSION['Profile__Picture']= $activeuserphoto;
            $_SESSION['Department_name']= $basename;
            $_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
            echo "<script>
                    window.location.replace('". ROOT ."Management/LecturalDashboard/index');
                </script>";
            return true;
        }else {
            return false;
        }
    }

    
    public function SessionDashboard($baseID){
        $_SESSION['DashboardID'] = $baseID;
        if ($_SESSION['DashboardID']) {
            echo "<script>
                    window.location.replace('". ROOT ."Management/LecturalDashboard/index');
                </script>";
            return true; 
        }else {
            return false;
        }
    }
    // =======================================================
    // THIS AREA IS TO DESTROY SESSION AND UNSET ALL SESSION
    // =======================================================

    public function Migrate(){
        if (session_status() == PHP_SESSION_ACTIVE) {
            unset($_SESSION['DashboardID']);
            header('location:' . ROOT . 'Management/LecturalDashboard/index');
        }
    }
      // Logout for Accountant On management
	public function LogoutLectural(){
        if (session_status() == PHP_SESSION_ACTIVE) {
            if (isLoggedInLectural() && !isLoggedDashboardController() && !iscsrf()) {
                unset($_SESSION['ProfessorID']);
                unset($_SESSION['Fullname']);
                unset($_SESSION['Accesscode']);
                unset($_SESSION['UsenrNin']);
                unset($_SESSION['Profile__Picture']);
                unset($_SESSION['DashboardID']);
                header('location:' . ROOT . 'Management/Log/');
            }elseif (isLoggedDashboardController()) {
                unset($_SESSION['ProfessorID']);
                unset($_SESSION['Fullname']);
                unset($_SESSION['Accesscode']);
                unset($_SESSION['UsenrNin']);
                unset($_SESSION['Profile__Picture']);
                unset($_SESSION['DashboardID']);
                header('location:' . ROOT . 'Management/Log/');
            }elseif (iscsrf()) {
                unset($_SESSION['ProfessorID']);
                unset($_SESSION['Fullname']);
                unset($_SESSION['Accesscode']);
                unset($_SESSION['UsenrNin']);
                unset($_SESSION['Profile__Picture']);
                unset($_SESSION['DashboardID']);
                unset($_SESSION['ProfTimestart']);
                unset($_SESSION['Prof_email']);
                unset($_SESSION['csrf']);
                unset($_SESSION['saltcsrf']);
                unset($_SESSION['base']); 
                header('location:' . ROOT . 'Management/Log/');
            }
        }
    } 


public function LogoutStudent(){
    if (session_status() == PHP_SESSION_ACTIVE) {
        $id = $_SESSION['student__Id'];
        if($updateStatus = $this->userModel->UpdateUserStatus($id)){
            unset($_SESSION['Reference']);
            unset($_SESSION['student__Id']);
            unset( $_SESSION['Department']);
            unset($_SESSION['globalname']);
            header('location:' . ROOT . 'Student/Login/'); 
        }
        
    }
}
    // ========================================================
    // Logout for Admin
    // ========================================================

	public function Logout(){
        if (session_status() == PHP_SESSION_ACTIVE) {
            @$Update_logout_time = date("Y-m-d H:i:s");
            @$Admin__id = $_SESSION['Admin__id'];
            if($this->userModel->_updateLogoutAdmin($Update_logout_time, $Admin__id)){
                 unset($_SESSION['Admin__id']);
                unset($_SESSION['username']);
                unset($_SESSION['adminEmail']);
                unset($_SESSION['adminSurname']);
                unset($_SESSION['adminothername']);
                header('location:' . ROOT . 'Administration/Default/');
            }
        }	
    }  

    public function Studentgrade(){
        $id= $_SESSION['student__Id'];
        $ft = $this->userModel->Viewstd($id);
        if ($ft) {
            $email= $ft->email;
            $img= $ft->image; 
        }
        $data =
        [
            'page_title'=>'Grade - '.$_SESSION['globalname'],
            'studentEmail'=>$email,
            'photo'=>$img
        ];
        $this->view("Student/Studentgrade", $data);
    }
    
    public function AuthUser(){
        if(!isLoggedInStudent()){header('location:' . ROOT . 'Student/Login/');}else {
            if (isset($_GET['Search'])) {
                $id= strip_tags(trim(filter_var((int)($_GET['Search']), FILTER_SANITIZE_STRING)));
                // FETCH DATA
                $isReturn = $this->namespacemodel->getSearchUser($id);
                if ($isReturn) {
                    //set data
                    $data = 
                    [
                        'page_title'=> 'Found User',
                        'returnData'=> $isReturn
                    ];
                    
                }
                $data = 
                    [
                        'page_title'=> 'Found User',
                        'returnData'=> $isReturn
                    ];
                $this->view("Student/AuthUser", $data);
            }
        }
    }
    public function ReadMore(){
        if(!isLoggedInStudent()){header('location:' . ROOT . 'Student/Login/');}else {
            if (isset($_GET['Search'])) {
                $id= strip_tags(trim(filter_var((int)($_GET['Search']), FILTER_SANITIZE_STRING)));
                // FETCH DATA
                $isReturn = $this->namespacemodel->getSearchCourse($id);
                if ($isReturn) {
                    //set  data
                    $data = 
                    [
                        'page_title'=> 'Read More About Course',
                        'returnData'=> $isReturn
                    ];
                }
                $this->view("Student/__readmore", $data);
            }
        }
    }

    public function exam($url){
        if(!isLoggedInStudent()){header('location:' . ROOT . 'Student/Login/');}else {
            $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $parts = explode('/', $url);
            $new_url = $parts[0].'/'.$parts[1].'/'.$parts[2].'/'.$parts[3].'/'.$parts[4].'/'.$parts[5].'/'.$parts[6];
            $id = $_SESSION['student__Id']; 
            $eid=strip_tags(trim((string)filter_var($parts[6], FILTER_SANITIZE_STRING), true));
            if ($this->namespacemodel->beforeSave($eid,$id)) {
                $msg = ". ";
                echo '<script>alert("You\'ve Already Written This Particular Exam, You Can\'t Re-write This Exam unless You Got The Admin Permission.");
                    window.location.replace("'.ROOT.'Dashboard/AuthExamination");
                </script>';
            }else {
                $CountExam = $this->namespacemodel->isCounter($eid);
                $GetExamTime= $this->namespacemodel->isexamTime($eid);
                $data=
                [
                    'page_title'=>'Exam',
                    'id'=>$eid,
                    'iscount'=>$CountExam,
                    'timestamp'=>$GetExamTime,
                ];
            
                $this->view('Student/exam', $data);
            }
        }
    }
}