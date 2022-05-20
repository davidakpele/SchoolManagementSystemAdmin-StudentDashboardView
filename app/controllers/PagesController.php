<?php
class PagesController extends Controller {
    /**parhamcurtis
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
    public function __construct() {
       @$this->userModel = @$this->loadModel('User');
       @$this->namespacemodel = @$this->loadModel('LoginModel');
    }

    // ==============================================================================
    // This is responder to Application type and then pass everything to faculty
    // ==============================================================================

      public function RenderRequirementData(){
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);
        $getData=$phpObject->{'DataId'};
        $newJsonString = json_encode($phpObject);
        $___ApplicationType = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
        if(!empty($___ApplicationType) && (is_numeric($___ApplicationType))){
            if ($___ApplicationType ==   1 || $___ApplicationType == 2 || $___ApplicationType ==   3) {
                $crf= $this->userModel->FetchRender($___ApplicationType);
                if ($crf) {
                    $response['Status'] = '2001'; 
                    $response['result'] = $crf;
                }else {
                    $response['Status'] = 'Invalid Data requested.';
                }
            }
         }else { 
			header('location:' . ROOT . 'DeniedAccess');
        }
        ob_end_clean();
        echo json_encode($response); 
    }

    public function RenderProgrammeList(){
        ob_start();
        
        $jsonString = file_get_contents("php://input");
        $response= array();
        $phpObject = json_decode($jsonString);
        $getData=$phpObject->{'RestAPIDataId'};
        $getprogramid=$phpObject->{'ProgramId'};
        $newJsonString = json_encode($phpObject);
        $pid = strip_tags(trim(filter_var((int)$getprogramid, FILTER_VALIDATE_INT)));
        $id = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
            if(!empty($id) && (is_numeric($id))){
               $returnSql = $this->userModel->RenderProgrammeListSQL($id);
                if ($returnSql) {
                    $response['Status'] = '2001'; 
                    $response['result'] = $returnSql;
                }else {
                    $response['ErrorMessage']='Sorry This Course doest exists';
                } 
            }else { 
                header('location:' . ROOT . 'DeniedAccess');
                exit();
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
       @$data = ['page_title' => 'Admin Dashboard Login System'];
		@$this->view("Admin/Administration/Default", @$data);	
    }

    public function SecretInterfaceBug(){
        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $i = json_decode($jsonString);
        $AdminPostUsername=$i->{'Username'};
        $AdminPostPassword=$i->{'Password'};
        $newJsonString = json_encode($i);
        $ValidPostUsername = strip_tags(trim(filter_var($AdminPostUsername, FILTER_SANITIZE_STRING)));
        $ValidPostPassword = strip_tags(trim(filter_var($AdminPostPassword, FILTER_SANITIZE_STRING)));
        $loggedInUser = @$this->userModel->login($ValidPostUsername, $ValidPostPassword);
        if ($loggedInUser) {
            @$this->createUserSession($loggedInUser);
            $response['status'] =  '0390ad4cd33025f6b401dfbedd4d239d90d157c9224bfa22308085d563cd';
        }else {
            $response['message']= 'Invalid Username or Password.';
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
                @$data = [
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
       //var_dump($cookSet);
        @$data = 
            [
                'page_title' => 'Student\'s Login Portal',
                'meta_tag_content_Seo'=>'Mercy College Unversity Student Login Portal',
                'meta_tag_description'=> 'Mercy College University Student Application Portal.'
            ]; 
            
        @$this->view('Student/Login', @$data); 
        
    }

    public function StudentLoginAPIsPortal(){
        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);
        $PostUsername=$phpObject->{'Username'};
        $PostPassword=$phpObject->{'Password'};
        $newJsonString = json_encode($phpObject);
        $StudentUsername = strip_tags(trim(filter_var((int)$PostUsername, FILTER_SANITIZE_STRING)));
        $StudentPassword = strip_tags(trim(filter_var($PostPassword, FILTER_SANITIZE_STRING)));
        @$loggedInstudent = $this->userModel->studentLogin($StudentUsername, $StudentPassword);
        if($loggedInstudent){
            $response['status'] =  'ef6812481094e33f07fd7aec396fdc0d7e75e8a3f8bad2540935';
            $this->createstudentSession($loggedInstudent);
        }else {
            $response['message']= 'Username/Password mismatch';
        }
        ob_end_clean();
        echo json_encode($response);
    }
    // ==============================================
    // Entry Requirment Method 
    // ===============================================

    public function RetrieveMatricNo(){
        @$data = ['page_title' => 'Retrieve Matric Number Requirement Portal'];

        $this->view('Application/RetrieveMatricNo', @$data); 
    }
    public function StudentRetrieveMatricNumberAPIsPortal(){

        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);

        $App = $phpObject->{'ApplicatioNo'};
        $PostSurname = $phpObject->{'Surname'};
        $DOB =$phpObject->{'Password'};

        $newJsonString = json_encode($phpObject);

        $ApplicatioNo = strip_tags(trim(filter_var($App, FILTER_SANITIZE_STRING)));
        $StudentUsername = strip_tags(trim(filter_var($PostSurname, FILTER_SANITIZE_STRING)));
        $DateOfBirthBox = strip_tags(trim(filter_var($DOB, FILTER_SANITIZE_STRING)));

        // @$SearchMatricNumber = $this->userModel->SearchMatric($ApplicatioNo, $StudentUsername, $StudentPassword);
        if(!empty($ApplicatioNo)) {
            $response['message']= 'Successfully Data';
        }else {
            $response['message']= 'Student record not found';
        }
        ob_end_clean();
        echo json_encode($response);
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
        @$DF = @$this->userModel->findAllData();
        @$DC = @$this->userModel->SelectSpecial__ID();
        @$stmt__demo2= @$this->userModel->GetusersfunArray();
        @$data = [
                    'page_title' => 'Mercy College Entry Requirement Portal',
                    'DisplayFaculty' => @$DF,
                    'DisplayCateogries' => @$DC,
                    'stmt' => @$stmt__demo2,
                ];
        @$this->view('Application/EntryRequirements', @$data); 
    }


// =================================================
// Register Method for New Fresher
// ==================================================
public function ProcessNewStudentOnline(){

    header("Access-Control-Allow-Origin: *"); 
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    ob_start();
    $jsonString = file_get_contents("php://input");
    $response = array();
    $phpObject = json_decode($jsonString);

    $NewStudentIdTagNo = $phpObject->{'NewStudentId'};
    $NewStudentEnrollmentNo = $phpObject->{'EnrollmentNumber'};
    $App = $phpObject->{'Application'};
    $Dpt = $phpObject->{'Department'};
    $prg =$phpObject->{'Program'};
    $ninnumber = $phpObject->{'National Identification Number'};
    $Enty = $phpObject->{'Entry Level'};
    $sur =$phpObject->{'Surname'};
    $oda = $phpObject->{'Othername'};
    $Dobh = $phpObject->{'Date of birth'};
    $Gen =$phpObject->{'Gender'};
    $Stm =$phpObject->{'Student Email'};
    $ReS = $phpObject->{'Relationship Status'};
    $Tel = $phpObject->{'Telephone Number'};
    $Ses =$phpObject->{'Session'};
    $isJwtApi = $phpObject->{'JwtApi'};
    // Setting surname as the user default password
    $password = password_hash($sur, PASSWORD_ARGON2ID);
    $newJsonString = json_encode($phpObject);
    
    $Sender = 
        [
            'NewID'=>trim(filter_var($NewStudentIdTagNo, FILTER_SANITIZE_STRING)),
            'EnrollmentNumber' =>trim(filter_var($NewStudentEnrollmentNo, FILTER_SANITIZE_STRING)),
            'App'=> trim(filter_var($App, FILTER_SANITIZE_STRING)),
            'Dep'=> trim(filter_var($Dpt, FILTER_SANITIZE_STRING)),
            'Prog'=>trim(filter_var($prg, FILTER_SANITIZE_STRING)),
            'Nin'=>trim(filter_var($ninnumber, FILTER_SANITIZE_STRING)),
            'Entry'=>trim(filter_var($Enty, FILTER_SANITIZE_STRING)),
            'Surname'=>trim(filter_var($sur, FILTER_SANITIZE_STRING)),
            'Othername'=>trim(filter_var($oda, FILTER_SANITIZE_STRING)),
            'DBO'=>trim(filter_var($Dobh, FILTER_SANITIZE_STRING)),
            'Gender'=>trim(filter_var($Gen, FILTER_SANITIZE_STRING)),
            'Email'=>trim(filter_var($Stm, FILTER_SANITIZE_STRING)),
            'Relationship'=>trim(filter_var($ReS, FILTER_SANITIZE_STRING)),
            'Tel'=>trim(filter_var($Tel, FILTER_SANITIZE_STRING)),
            'Session'=>trim(filter_var($Ses, FILTER_SANITIZE_STRING)),
            'password'=>$password
        ];

        $insertingData = $this->userModel->processor($Sender);
        if($insertingData == true) {
            $response['status'] = 3;
            $response['Successmessage']= 'Verification mail has been sent to the email you provided. Please verify email to continue application. If you have used a wrong email, please fill the form again with a valid email address. 
            <br /><br/><a class="buttonResendEmail" href="'.ROOT.'Application/Registration">Fill Parents Details</a> ';
        }else {
            $response['message']= 'Sorry.. Something went';
        }
        ob_end_clean();
        echo json_encode($response);
    } 

    public function Steptwo(){

        $data= 
        [
            'page_title'=> 'Step to complete registration'
        ];
        $this->view('Application/Steptwo', $data);
    }

    public function Registration(){
        @$DF = @$this->userModel->findAllData();
        @$DC = @$this->userModel->SelectSpecial__ID();
        @$stmt__demo2= @$this->userModel->GetusersfunArray();
        @$throwprogram = @$this->userModel->SelectProgram();
        @$throwSession= @$this->userModel->Selectsession();
        @$throwEntrylevel = @$this->userModel->SelectEntryLevel();
            @$data =
            [
                'page_title' => 'Application Form for Freshers',
                'DisplayFaculty' => $DF, 'DisplayCateogries' => $DC,
                'stmt' => $stmt__demo2,'throw' => $throwprogram, 
                'StmtEntrylevel' => $throwEntrylevel, 'StmtSession' => $throwSession
                ];
        
            @$this->view('Application/Registration', @$data);      
    }

    // Checking if new Student email exist before.
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
        $isCheckEmail = $phpObject->{'Email'};
        // This is jwt token is use to process student /parent data
        $isCheckjwt = $phpObject->{'JwtApi'};
        $newJsonString = json_encode($phpObject);
        $isFetchEmailexist = $this->userModel->isExistsEmail($isCheckEmail);
        if($isFetchEmailexist) {
            $response['status'] = '200';
            $response['message']= 'Sorry..! Email Already Been Used By Another Student.';
        }
        ob_end_clean();
        echo json_encode($response);
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

    // ====================================================
    // Accountant Dashboard
    //
    // ====================================================
    public function AccountantDashboard(){
        if(!isLoggedInAccountant()){
             header('location:' . ROOT . 'Management/Log/');
        }
        @$data = ['page_title'=>'Accountant Dashboard'];
        @$this->view('Management/AccountantDashboard/index', @$data);
    }
    public function ExamTime(){
        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);

        $Time = $phpObject->{'TimeSet'};
        $basseRoll = $_SESSION['MaxBass'];
        if ($this->namespacemodel->SetExamTimer( $basseRoll, $Time)) {
            $response['status'] = '200OK';
            $response['Successmessage'] = 'Successfully Set.';
        }else {
            $response['message'] = 'Sorry.. Something went wrong.';
        }
       
        ob_end_clean();
        echo json_encode($response);
    } 
    public function Exam(){
        if(!isLoggedInLectural()){
            header('location:' . ROOT . 'Management/Log/');
        }else {
            $Courseid=$_SESSION['MaxBass'];
            @$i = @$this->namespacemodel->calluserfun($Courseid);
          @$data = 
            [
                'page_title'=>'Examination Dashboard Settings', 
                'examTable'=>@$i,
                'correct_answer'=> '',
                'correct_answerError'=>'',
                'question'=> '',
                'questionError'=>'',
                'wrong_answer1'=> '',
                'wrong_answer1Error'=>'',
                'wrong_answer2'=> '',
                'wrong_answer2Error'=>'',
                'wrong_answer3'=> '',
                'wrong_answer3Error'=>'',
                'AnswersButtonType'=> '',
                'AnswersButtonTypeError'=>''
            ];
            if(isset($_GET['Add'])){
                //Generate a random string.
                //$token = openssl_random_pseudo_bytes(30);
                //Convert the binary data into hexadecimal representation.
                //$token = bin2hex($token);
                //Print it out for example purposes.
                if(isset($_POST['SetNewExamination'])){
                     @$data = 
                        [
                            'page_title'=>'Examination Dashboard Settings',
                            'correct_answer'=> trim(strip_tags($_POST['correct_answer'], ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401)),
                            'correct_answerError'=>'',
                            'question'=> trim(strip_tags($_POST['question'], ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401)),
                            'questionError'=>'',
                            'wrong_answer1'=> trim(strip_tags($_POST['wrong_answer1'], ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401)),
                            'wrong_answer1Error'=>'',
                            'wrong_answer2'=> trim(strip_tags($_POST['wrong_answer2'], ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401)),
                            'wrong_answer2Error'=>'',
                            'wrong_answer3'=> trim(strip_tags($_POST['wrong_answer3'], ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401)),
                            'wrong_answer3Error'=>'',
                            'wrong_answer4'=> trim(strip_tags($_POST['wrong_answer4'], ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401)),
                            'wrong_answer4Error'=>'',
                            'AnswersButtonType'=> trim(strip_tags($_POST['AnswersButtonType'], ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401)),
                            'AnswersButtonTypeError'=>'',
                        ];
                    if(empty(@$data['question'])){
                        @$data['questionError'] = 'Please Enter The Question';
                    }
                    if(empty(@$data['correct_answer'])){
                        @$data['correct_answerError'] = 'Please Enter The Correct Answer';
                    }
                    if(empty(@$data['wrong_answer1'])){
                        @$data['wrong_answer1Error'] = 'Please Enter Option One';
                    }
                    if(empty(@$data['wrong_answer2'])){
                        @$data['wrong_answer2Error'] = 'Please Enter Option two';
                    }
                    if(empty(@$data['wrong_answer3'])){
                        @$data['wrong_answer3Error'] = 'Please Enter Option three';
                    }
                    if(empty(@$data['wrong_answer4'])){
                        @$data['wrong_answer4Error'] = 'Please Enter Option four';
                    }
                    if(empty(@$data['AnswersButtonType'])){
                        @$data['AnswersButtonTypeError'] = 'How Do you Want The Question To Be selected.?';
                    }
                    if(empty(@$data['questionError']) 
                        && empty(@$data['correct_answerError'])
                        && empty(@$data['wrong_answer1Error'])
                        && empty(@$data['wrong_answer2Error'])
                        && empty(@$data['wrong_answer3Error'])
                        && empty(@$data['wrong_answer4Error'])
                        && empty(@$data['AnswersButtonTypeError'])){
                        @$configId=  stripslashes((int)$_SESSION['MaxBass']);
                        @$question = @$data['question'];
                        @$answer = @$data['correct_answer'];
                        @$wrong1 = @$data['wrong_answer1'];
                        @$wrong2 = @$data['wrong_answer2'];
                        @$wrong3 = @$data['wrong_answer3'];
                        @$wrong4 = @$data['wrong_answer4'];
                        @$AnswersButtonType = @$data['AnswersButtonType'];
                        if (@$this->namespacemodel->setExamDepo($question, $answer, $wrong1,  $wrong2, $wrong3, $wrong4, $AnswersButtonType, $configId)) {
                            header('location:' . ROOT. 'Management/Exam?Add=1');
                        }else {
                            echo "<script>alert('Fail to insert')</script>";
                        }
                    }
                }
            }
            @$this->view('Management/LecturalDashboard/Exam', @$data);
        }
        
    }

    // ====================================================
    // Accountant Profile 
    // ====================================================

    public function AccountantProfile(){
        if(!isLoggedInAccountant()){
            header('location:' . ROOT . 'Management/Log/');
        }
        @$data = ['page_title' => 'Accountant Profile'];
      @$this->view('Management/AccountantDashboard/AccountantProfile', @$data);
    }

    // =====================================================
    // Accountant Setting::Information Page Method
    // =====================================================

    public function AccountantInformations(){
        if(!isLoggedInAccountant()){
            header('location:' . ROOT . 'Management/Log/');
        }
        $qut = $_SESSION['Accesscode'];
        $v = @$this->userModel->AccountantSetting($qut);
        @$data =
         [
             'page_title'=> 'Accountant Informations',
             'runStatment'=> $v
        ];
        @$this->view('Management/AccountantDashboard/AccountantInformations', @$data);
    }
    
    // =====================================================
    // Accountant Method to change password
    // =====================================================

    public function ChangePassword(){
        if(!isLoggedInAccountant()){
            header('location:' . ROOT . 'Management/Log/');
        }
        @$data = 
        [   'Accesscode',
            'password' => '',
            'Newpassword'=>'',
            'Confirmpassword'=>'',
            // PAGE TITLE
            'page_title'=>'Accountant Access To Change Password',
            // Validations Errors
            'AccesscodeError',
            'passwordError'=> '',
            'NewpasswordError'=> '',
            'ConfirmpasswordError'=> '',
        ];
      	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			// Processing form validation
			// Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            @$data = 
            
        [   'Accesscode'=> trim(filter_var($_POST['Accesscode'], FILTER_SANITIZE_STRING)),
            'password' => trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING)),
            'Newpassword' => trim(filter_var($_POST['Newpassword'], FILTER_SANITIZE_STRING)),
            'Confirmpassword'=> trim(filter_var($_POST['Confirmpassword'], FILTER_SANITIZE_STRING)),
            // PAGE TITLE
            'page_title'=>'Accountant Access To Change Password',
            // Validations Errors
            'AccesscodeError',
            'passwordError'=> '',
            'NewpasswordError'=> '',
            'ConfirmpasswordError'=> '',
        ];

             if(empty(@$data['Accesscode'])){
                @$data['AccesscodeError'] = 'Required.';
            }
            if(empty(@$data['password'])){
                @$data['passwordError'] = 'Required.';
            }
            if(empty(@$data['Newpassword'])){
                @$data['NewpasswordError'] = 'Please Enter Your New Pasword.';
            }
            if(empty(@$data['Confirmpassword'])){
                @$data['ConfirmpasswordError'] = 'Please Confirm Your New Password..';
            }elseif(!empty(@$data['Newpassword']) && !empty(@$data['Confirmpassword'] && @$data['Newpassword'] != @$data['Confirmpassword'])){
                @$data['ConfirmpasswordError'] = 'Both password does match.';
            }
            if(empty(@$data['AccesscodeError'])&& empty(@$data['passwordError']) && empty(@$data['NewpasswordError'])&& empty(@$data['ConfirmpasswordError']))
            {
                //hashing professor password
                // The following algorithms are currently supported when using this function:
                // PASSWORD_DEFAULT --60 lenght
                // PASSWORD_BCRYPT -- 60 lenght
                // PASSWORD_ARGON2I
                // PASSWORD_ARGON2ID --97 length
            @$data['Newpassword'] = password_hash(@$data['Newpassword'], PASSWORD_ARGON2ID);
            @$ChangepasswordVar = @$this->userModel->UpdateAccountantPassword(@$data['Accesscode'], @$data['password'], @$data['Newpassword']);
            if($ChangepasswordVar){
                header('location: ' . ROOT . 'Management/AccountantDashboard/index'); 
            }else{
                    die('Something went wrong');
                }
            }
        }
        @$this->view('Management/AccountantDashboard/ChangePassword', @$data);
    }
    // =====================================================
     // Hr Dashboard
    // =====================================================

    public function LecturalDashboard(){
          if (isLoggedInLectural() ) {
            $nin =  $_SESSION['UsenrNin'];
            $check = $this->userModel->mimi($nin);
             if($check) {
                 $array = $check->Base;
                /**
                 * Now we've give our department base a variable 'Array'
                 * We can now check if the department a perfessor signed is more that one
                 * Php gave us a built in function for that 'strpos'
                 * So basically this function check if Department or Base has a comma seperator
                 * Like: 19182012,232342342,2432423
                 * This case it means professor is been assigne to 3 set of department and the login process will be different
                 * if it just 89237238239 without a comma then that function sees it as one department which is correct and the login process is straight to Dashboard
                 * if it more than one department, the Professor will been login but into a Pre- dashboard which he can select the dashboard he/she want to manage
                 */
                $searchForValue = ',';
                 if (strpos($array, $searchForValue) !== false) {
                    // Here is Multiple department 
                    $rs = $this->namespacemodel->ArrayFlag($array);
                    //$vs = $this->namespacemodel->categoryfetch();
                 }else{
                    $_SESSION['csrf'] = $this->RandomToken();
                    $_SESSION['saltcsrf'] = $this->Salt();
                    $_SESSION['base'] = $array;
                }
             }
            @$data = 
                [
                    'page_title'=>'Managament :: Dashboard Control Center',
                    'base'=>$rs
                ];
                @$this->view('Management/LecturalDashboard/index', @$data);
        }else {
            if (session_status() == PHP_SESSION_ACTIVE) {
                header('location:' . ROOT . 'Management/Log/');
            }
        }
                
           
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
       
        @$data = 
                [
                    'page_title' => 'Dashboard',
                    'photo'=>$img
                ];
        @$this->view('Student/Dashboard/index', @$data);
    }
    public function ExamModal(){
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
                    'examid'=>$Courseid
                    
                ];
           
        }else {
             echo "<script>alert('Error..')</script>";
        }
        $this->view("Student/ExamModal", $data);
    }
    
    public function Examination(){
        if(!isLoggedInStudent())
        {
           echo "<script>
                    alert('Sorry..! You have no permission to this page,not until you login with the right credentials');
                    window.location.assign('".ROOT."Student/Login/');
                </script>";
        }else{ 
            $Courseid=$_SESSION['Department'];
            @$selectAllExam =  $this->namespacemodel->calluserfun($Courseid);
            $FetchDepartment= $this->namespacemodel->FetchStudentDepartmentName($Courseid);
            $CountExam = $this->namespacemodel->isCounter($Courseid);
            $CourseName = $FetchDepartment->Child_name;
            if ($selectAllExam){
                @$timeController = $this->namespacemodel->examTimer($Courseid);
                if($timeController) {
                    $startingclock=$timeController->StartTime;
            }else {
                    echo "<script>alert('The Time Of Your Exam Has not been set yet. Please Contact The School Admin or Your Lecturar')</script>";
                }
            }else {
                echo "<script>
                        alert('Exam Has not been set for this Course.');
                        window.location.replace('".ROOT."Student/Dashboard/');
                    </script>";
            }
            if (isset($_GET['id']) && $_GET['id'] == $Courseid) {
                try{
                    $data =
                        [
                            'page_title'=>'Student Examination Board',
                            'examcontroller'=>@$selectAllExam,
                            'examName'=>$CourseName,
                            'Starting__time'=>$startingclock,
                            'examid'=>$Courseid,
                            'isCount'=>$CountExam,
                        ];
                    $this->view("Student/Examination", $data);
                }catch(ViewPageException $e){
                    die('Sorry.. Something went wrong..!');
                }
            }elseif(isset($_GET['id']) && $_GET['id'] != $Courseid) {
                 echo "<script>
                        alert('Sorry..This exam doesn\'t exists in our portal.');
                        window.location.replace('".ROOT."Student/Dashboard/');
                    </script>";
            }
               
        }  
    }

    public function ExamResult(){
        if(!isLoggedInStudent())
        {
           echo "<script>
                    alert('Sorry..! You have no permission to this page,not until you login with the right credentials');
                    window.location.assign('".ROOT."Student/Login/');
                </script>";
        }else{
            $check =  $this->namespacemodel->ExamCount();
            $id = $_SESSION['student__Id'];
            $Courseid=$_SESSION['Department'];
            $appType = $this->namespacemodel->FetchStudentData($id);
            // ============================================
            $Application__Type = $appType->Application__Type;
            // ============================================
            $core1 = $this->userModel->fetchApp($Application__Type);
            // ================================
            $Catname1 = $core1->Category__name;
            $FetchDepartment= $this->namespacemodel->FetchStudentDepartmentName($Courseid);
            $CourseName = $FetchDepartment->Child_name;
            // =============================
            /**
             * Instead of testing each student Post Answers against the RIGHT one, 
             * I decidede to use Asynchronous Option
             * This option is just like Javascript Mapping and React Hooks
             * I load every Post ANSWERS from STUDENTs in variable i.
             * then run against all questions number existed before the post
             * This means that, it get all the values from the post
             * Default way is, if(student_ansNum1 = database[ans1]) if(student_ansNum =database[ans2]). 
             * this is really to long and just to keep out work prettier, i just  Asynchronous Option
             */
            $i=1;
            // Checking all existing  exam by run post ++
            for($i;$i<=$check;$i++){
                // Set the student post into array
                @$userselected = $_POST[$i];
                // Update the student post and test against the default answer
                $updateAnswers = $this->namespacemodel->UpdateExamAnswers($userselected, $i);
            } 
            // Now fetch the post answers from students
            $stmt = $this->namespacemodel->StudentRecords();
               if($stmt){
                //    Loop each one and match all ONCE TO the dafault answer
                    foreach($stmt as $key){
                        if($key['answer'] == $key['Student__answer']){
                            // if true ANY, variable score should override variable key and start score record by 1. 
                            // The +=1 is [We given the variable ability to increase in a state of True]
                            @$scores +=1;
                        }
                    }
                    // 'no' is a Ride over variablen
                    $no = @$scores;
               }
               $baseScore = $no*16.6;
               $GradeResponse = '';
               if($no ==0){
                    $GradeResponse = '<span style="line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;">(<b style="color:red;">Fail</b>) Re-run Course</span>';
                    }elseif($no !=0 && $baseScore <= 39){
                        $GradeResponse= "V.Poor";
                        $finallyGrade = $baseScore;
                    }elseif($no !=0 && $baseScore <= 49){
                            $GradeResponse= "Pass";
                            $finallyGrade = $baseScore;
                    }elseif($no !=0 && $baseScore <= 59){
                        $GradeResponse= "Good";
                        $finallyGrade = $baseScore;
                    }elseif($no !=0 && $baseScore <=69){
                        $GradeResponse= "Credit";
                        $finallyGrade = $baseScore;
                    }elseif($no !=0 && $baseScore <= 100){
                        $GradeResponse= "Distinction";
                        $finallyGrade = $baseScore;
                    }elseif ($no !=0 && $baseScore > 100) {
                        $GradeResponse= "Distinction";
                        $finallyGrade = 100;
                    }if(!isset($finallyGrade)){
                        $finallyGrade = 'O';
                        $scores = '0';
                    }
            $data = 
                [
                    'page_title'=>'Examination Result',
                    'ActualScore'=>'<b>'.@$scores.'</b> Out Of <b>('.$check.')</b>',
                    'DisplayResult'=>'<b>'. $finallyGrade .'</b>%',
                    'StdIdentity'=>$id,
                    'Category'=>$Catname1,
                    'GradeResponse'=>$GradeResponse,
                    'DepartmentName'=>$CourseName
                ];
        $this->view("Student/ExamResult", $data);
        }
    }

    public function inbox(){
        @$this->view('Management/LecturalDashboard/inbox', @$data);
    }
    /**
     * The Part of the Code down is Made to control Student Dashboard Area.  Profile, Settings, Feeds, Post etc
     * List of Controllers Inside
     * UserProfile-:
     * @return void
     */ 
    
    public function UserProfile(){
        //Generate a random string.
        $token = openssl_random_pseudo_bytes(500);
        //Convert the binary data into hexadecimal representation.
        $token1 = bin2hex($token);
        //Print it out for example purposes.
        $data = 
        [
            'page_title'=>'Student Personal Dashboard Portal',
            'token'=>$token1
        ];
        $this->view('Student/UserProfile', $data);
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

    public function StudentRecord(){


        $this->view('Student/StudentRecord');
    }

    public function materials(){
        $this->view('Student/materials');

    }
    public function BlogNews(){
        if(!isLoggedInStudent())
        {
           echo "<script>
                    window.location.assign('".ROOT."Student/Login/');
                </script>";
        }
        // Validate Comment from students
        //Generate a random string. 
        $token = openssl_random_pseudo_bytes(12);
        //Convert the binary data into hexadecimal representation.
        $token = bin2hex($token);
        $posttime = strtotime(date("Y-m-d h:i:sa"));
        $response= array(); 
        if (isset($_POST['BlogPostId']) && isset($_POST['FeedPost'])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $USERiD = $_SESSION['student__Id'];
            $data =
            [
                'BlogPostId'=>trim(filter_var(strip_tags($_POST['BlogPostId'], FILTER_SANITIZE_STRING))),
                'FeedPost'=>trim(filter_var(strip_tags($_POST['FeedPost'], FILTER_SANITIZE_STRING))),
                'UserId'=>$USERiD,
                'timePosted'=>$posttime 
            ];
            if(!empty($data['BlogPostId']) && !empty($data['FeedPost']) && !empty($data['UserId']) && !empty($data['timePosted'])){
               if($this->namespacemodel->createBlogPost($data)){
                    header('location:' . ROOT . 'Student/BlogNews'); 
               };
                
            }
        }
        if(isset($_POST['_Ctoken']) && isset($_POST['CommentPostUserId']) && isset($_POST['Postid']) && isset($_POST['UserComment'])){
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $posttime = strtotime(date("Y-m-d h:i:sa"));
            $data =
            [   
                'c_token'=>trim(filter_var(strip_tags($_POST['_Ctoken'], FILTER_SANITIZE_STRING))),
                'CommentUSERID'=>trim(filter_var(strip_tags($_POST['CommentPostUserId'], FILTER_SANITIZE_STRING))),
                'Postid'=>trim(filter_var(strip_tags($_POST['Postid'], FILTER_SANITIZE_STRING))),
                'Comment'=>trim(filter_var(strip_tags($_POST['UserComment'], FILTER_SANITIZE_STRING))),
                'timePosted'=>$posttime 
            ];
            /**
             * Here You can handle your error validation here.. 
             * To check if any field is empty or invaid strings provided by the user then throw a the array response variable we've declared up dre.
             * 
             * BUT NOTHING because i just choose not to or myabe in my javascript.
             * 
             * Check if all that are  not empty
             */ 
            if(!empty($data['c_token']) 
            && !empty($data['CommentUSERID']) 
            && !empty($data['Postid'])  
            && !empty($data['Comment'])
            && !empty($data['timePosted'])  ){
                if($this->namespacemodel->isStudentComment($data))
                {
                    header('location:' . ROOT . 'Student/BlogNews');
                }else {
                    echo "<script>alert('Bad');</script>";
                }
            }
        }
        $lengthPostid = 12;
        $randvalues= 'XxZzTYKPQsJRVLN1234567890';
        $numberLength = strlen($randvalues);
        $randbase = '';
        for ($i = 0; $i < $lengthPostid; $i++) {
        $randbase .= $randvalues[rand(0, $numberLength - 1)];
        }

        $data = 
            [
                'title'=>'Student Community Center', 
                'token'=>$token,
                'BlogPostid'=>$randbase,
            ];
        $this->view('Student/BlogNews', $data);
    }
    public function StudentEmail(){
        $data = 
            [
                'title'=>'Student Email Center Dashboard Manager'
            ];
        $this->view('Student/StudentEmail', $data);
    }
    public function GenerateIDCard(){

        $this->view('Student/GenerateIDCard');
    }
    public function noticeboard(){
        if (isLoggedInLectural() ) {
            $nin =  $_SESSION['UsenrNin'];
            $check = $this->userModel->mimi($nin);
             if($check) {
                 $array = $check->Base;
                /**
                 * Now we've give our department base a variable 'Array'
                 * We can now check if the department a perfessor signed is more that one
                 * Php gave us a built in function for that 'strpos'
                 * So basically this function check if Department or Base has a comma seperator
                 * Like: 19182012,232342342,2432423
                 * This case it means professor is been assigne to 3 set of department and the login process will be different
                 * if it just 89237238239 without a comma then that function sees it as one department which is correct and the login process is straight to Dashboard
                 * if it more than one department, the Professor will been login but into a Pre- dashboard which he can select the dashboard he/she want to manage
                 */
                $searchForValue = ',';
                 if (strpos($array, $searchForValue) !== false) {
                    // Here is Multiple department 
                    $rs = $this->namespacemodel->ArrayFlag($array);
                    //$vs = $this->namespacemodel->categoryfetch();
                 }else{
                    //  Single Department Validation
                    $_SESSION['csrf'] = $this->RandomToken();
                    $_SESSION['saltcsrf'] = $this->Salt();
                    $_SESSION['base'] = $array;
                }
                if(iscsrf()){
                    //echo "<script>alert(1);</script>";
                }elseif (isLoggedDashboardController()) {
                   //echo "<script>alert(2);</script>";
                }
             }
            @$data = 
                [
                    'page_title'=>'Managament :: Dashboard Control Center',
                    'base'=>$rs
                ];
                $this->view('Management/LecturalDashboard/noticeboard', $data);
        }else {
            if (session_status() == PHP_SESSION_ACTIVE) {
                header('location:' . ROOT . 'Management/Log/');
            }
        }
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
    function Salt(){
        return substr(strtr(base64_encode(hex2bin($this->RandomToken(32))), '+', '.'), 0, 44);
    }
    public function HStudents(){
       if (isLoggedInLectural() && isLoggedDashboardController()) {
            $departmentid = $_SESSION['DashboardID']; 
            $Fetchstuddents= $this->namespacemodel->fetchstudent($departmentid);
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
            $Fetchstuddents= $this->namespacemodel->fetchstudent($departmentid);
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
            ];
            $this->view('Management/LecturalDashboard/HStudents', $data);
        
    }
    public function HZoom(){
        $this->view('Management/LecturalDashboard/HZoom');
    }

    public function HParents(){
        $this->view('Management/LecturalDashboard/HParents');
    }
   
    public function StudentProfile(){
       $id= $_SESSION['student__Id'];
       $ft = $this->userModel->Viewstd($id);
       if ($ft) {
            foreach ($ft as $keyvalue) {
                $email= $keyvalue['email'];
                $img= $keyvalue['image']; 
            }
            
       }
        $data =
        [
            'page_title'=>$_SESSION['globalname'].' Profile',
            'studentEmail'=>$email,
            'photo'=>$img
        ];
       
        $this->view('Student/StudentProfile', $data);
    }
    
    public function EStudent(){
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
                $uploadPath =  'StudentFolder/'.trim(filter_var($_SESSION['student__Id'], FILTER_SANITIZE_STRING)).'/'.$uploadName; 
                $dbpath     =  'StudentFolder/'.trim(filter_var($_SESSION['student__Id'], FILTER_SANITIZE_STRING)).'/'.$uploadName;
                $folder =  'StudentFolder/'.trim(filter_var($_SESSION['student__Id'], FILTER_SANITIZE_STRING));
                if ($fileSize > 90000000000000) {
                    $response['status'] = 300;
                    $response['errormsg'] = '<b>ERROR:</b>Your file was larger than 50kb in file size.';
                }elseif ($fileSize < 90000000000000 ) {
                    
                    if(!file_exists($folder)){
                        mkdir($folder,077,true);
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
    public function CStudent(){
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
        $data=
        [
            'page_title'=> 'Change Password',
            'photo'=>$img

        ];
        $this->view('Student/CStudent', $data);
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
    // =======================================================
    // THIS IS SESSION AREA. CREATING SESSIONS
    // =======================================================

    // Creating Session for Admin
    public function createUserSession($data){
        // Here you determine WHO LOGs-IN TO ADMIN and You can set a control for each User. 
        // ==================================================================================
        // You can direct them  base upon the permission just like the manegement Log action
        @$permission = 'Admin';
        @$permissions = explode(',', @$data->permission);
        if(in_array($permission, $permissions, true)){
            @$last_login = date("Y-m-d H:i:s");
            @$Admin__id = @$data->Admin__id;
            @$Route = @$this->userModel->lastlog($last_login, $Admin__id);
            if($Route){
                $_SESSION['Admin__id'] = @$data->Admin__id;
                $_SESSION['username'] = @$data->username;
                $_SESSION['admin_level'] = (int)@$data->admin_level;
                $_SESSION['adminEmail'] = @$data->Email;
                $_SESSION['adminSurname']= @$data->Surname;
                $_SESSION['adminothername']= @$data->Othername;
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
        }else {
            $_SESSION['error_flash']='<i class="fa fa-info-circle"></i>Sorry...! You Just Dont Have Access To Login..!';
            return false;
        }
    }

    // =========================================================
    // Creating session for student 
    // =========================================================

    public function createstudentSession($data){
        $_SESSION['Reference'] = @$data->Roll__No;
        $_SESSION['student__Id'] = @$data->student__Id;
        $_SESSION['Department'] = @$data->Department__Type;
        @$s = @$data->Surname;
        @$o = @$data->othername;
        @$globalname= @$s .' '.@$o;
        $location = "Student/Dashboard/Home";
        $_SESSION['globalname'] =@$globalname;
        if(isset( $_SESSION['globalname'])){
            echo '<script type="text/javascript">';
                echo 'window.location.replace("'. ROOT . $location .'")';
            echo '</script>';
            // The reason we're using noscript because some people some times turn off their javascript on web browsers 
            echo '<nosript>';
            echo '<meta http-equiv="refresh" content="0;url=' . ROOT . $location . '" />';
            echo '</nosript>';
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

    // ========================================================
     // Creating session for HR on management section
    // ========================================================

    public function ManagementHuman_resourcesSession($basename, $activeuserid, $activeusernin, $activeuserRole, $activeuserDirectoryID, $activeuserAccesscode, $activeuserphoto){
        @$Active_login = date("Y-m-d H:i:s");
        @$Route = @$this->namespacemodel->lastlogAccountant($Active_login, $activeusernin, $activeuserAccesscode);
        if($Route ==true){
            $_SESSION['HRID'] = $activeuserid;
            $_SESSION['Accesscode'] = $activeuserAccesscode;
            $_SESSION['Profile__Picture']= $activeuserphoto;
            $_SESSION['Department_name']= $basename;
            $_SESSION['start'] = time(); 
            // Taking now logged in time.
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

    
    // =========================================================
    // Creating session for Accountant on management section
    // =========================================================

    public function ManagementAccountantSession($basename, $activeuserid, $activeusernin, $activeuserRole, $activeuserDirectoryID, $activeuserAccesscode, $activeuserphoto){
        @$Active_login = date("Y-m-d H:i:s");
        @$Route = @$this->namespacemodel->lastlogAccountant($Active_login, $activeusernin, $activeuserAccesscode);
        if($Route){
            $_SESSION['AccountantID'] = $activeuserid;
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
                unset($_SESSION['expire']);
                unset($_SESSION['DashboardID']);
                header('location:' . ROOT . 'Management/Log/');
            }elseif (isLoggedDashboardController()) {
                unset($_SESSION['ProfessorID']);
                unset($_SESSION['Fullname']);
                unset($_SESSION['Accesscode']);
                unset($_SESSION['UsenrNin']);
                unset($_SESSION['Profile__Picture']);
                unset($_SESSION['expire']);
                unset($_SESSION['DashboardID']);
                header('location:' . ROOT . 'Management/Log/');
            }elseif (iscsrf()) {
                unset($_SESSION['ProfessorID']);
                unset($_SESSION['Fullname']);
                unset($_SESSION['Accesscode']);
                unset($_SESSION['UsenrNin']);
                unset($_SESSION['Profile__Picture']);
                unset($_SESSION['expire']);
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

     // Logout for Accountant On management
	public function LogoutAccountant(){
        if (session_status() == PHP_SESSION_ACTIVE) {
            unset($_SESSION['AccountantID']);
            unset($_SESSION['Accesscode']);
            unset($_SESSION['Profile__Picture']);
            unset($_SESSION['Department_name']);
            header('location:' . ROOT . 'Management/Log/');
        }
    } 

    // ========================================================
      // Logout for Staff On management
    // ========================================================  

	public function LogoutStaff(){
        if (session_status() == PHP_SESSION_ACTIVE) {
            unset($_SESSION['StaffID']);
            unset($_SESSION['Accesscode']);
            unset($_SESSION['Profile__Picture']);
            unset($_SESSION['Department_name']);
            header('location:' . ROOT . 'Management/Log/');
        }
    } 

    // =======================================================
      // Logout for Human resources On management
    // ========================================================
    
	public function LogoutHr(){
        if (session_status() == PHP_SESSION_ACTIVE) {
            unset($_SESSION['HRID']);
            unset($_SESSION['Accesscode']);
            unset($_SESSION['Profile__Picture']);
            unset($_SESSION['Department_name']);
            header('location:' . ROOT . 'Management/Log/');
        }
    } 

    // ========================================================
    // Logout for Admin
    // ========================================================

	public function Logout(){
        if (session_status() == PHP_SESSION_ACTIVE) {
            unset($_SESSION['Admin__id']);
            unset($_SESSION['admin_level']);
            unset($_SESSION['username']);
            unset($_SESSION['adminEmail']);
            unset($_SESSION['adminSurname']);
            unset($_SESSION['adminothername']);
            header('location:' . ROOT . 'Administration/Default/');
        }	
    }  

    // ============================================================= 
     // Logout for Student
    // =============================================================

	public function LogoutStudent(){
      if (session_status() == PHP_SESSION_ACTIVE) {
            unset($_SESSION['Reference']);
            unset($_SESSION['student__Id']);
            unset($_SESSION['globalname']);
            unset($_SESSION['Department']);
            
        header('location:' . ROOT . 'Student/Login/');
        } 
    }
}

//https://fmovies.co/film/numb3rs-season-1-14556?play=13