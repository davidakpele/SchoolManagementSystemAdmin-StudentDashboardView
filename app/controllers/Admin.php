<?php

class Admin extends Controller {
    /**
     * My New Server email password: dRi^8%c*$9i-
     * @var false|mixed
     * Author: David AkpELE
     * FROM: MidTech Private Limited
     */
   
    private $userModel;
    private $_tbl_model;
    private $_chat_module;
    private $_settings_model;
    private $_backup_model;
    private $_getting_data_display;
    private $_adding_data;
    private $_editing_data;
    private $_deleting_data;
    public function __construct() {
        $this->userModel = $this->loadModel('User');
        $this->_tbl_model = $this->loadModel('TablesModel');
        $this->_chat_module = $this->loadModel('ChartModel');
        $this->_settings_model = $this->loadModel('SettingsModel');
        $this->_backup_model = $this->loadModel('BackupDBModel');
        $this->_getting_data_display = $this->loadModel('Getting_Datas');
        $this->_adding_data = $this->loadModel('Adding_data');
        $this->_editing_data = $this->loadModel('Edit_data');
        $this->_deleting_data = $this->loadModel('Delete_data');
    }


    public function _AppSettings(){
        $isSettings_Data = $this->_settings_model->_isGetLogo();
        if (!empty($isSettings_Data)) {
            return $isSettings_Data;
        }
    }

    //To Creating Other web page, You just need to create a method
    public function index() {
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $countStudent = $this->userModel->studentDataCount();
        $CountProfessors= $this->userModel->LecturalDataCount();
        $countuser= $this->userModel->sqlCountusers();
        $countApp = $this->userModel->AppRowCount();
        $countFaculties =$this->userModel->FacutlytRowCount();
        $countDept =$this->userModel->DepartmentRowCount();
        $countCourse =$this->userModel->sqlCountCourse();
        $role= (int)$_SESSION['Role'];
        if ($role==2) {
            $countuser = $countuser-1;
        }else {
            if ($role==1) {
                $countuser = $countuser;
            }else {
                 $countuser = 1;
            }
        }
        
        $data = 
        [
            'page_title' => 'Administrative Dashboard ',
            'Studentcount'=> $countStudent,
            'lecturalCount'=>$CountProfessors,
            'App'=>$countApp,
            'faculty'=>$countFaculties,
            'department'=>$countDept,
            'ReadOnly'=> $countuser,
            'CourseRow'=>$countCourse,
            'settings'=>$this->_AppSettings(),
        ];
        //dnd($data);
        $this->view('Admin/index', $data);
    }


    // Adding new professor
    public function isAddNewProf(){
    if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $response = array();
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if (isset($_FILES['file']['name']) != ''&& isset($_POST['id']) && isset($_POST['surname']) && isset($_POST['middlename']) 
            && isset($_POST['lastname']) && isset($_POST['Accesscode']) && isset($_POST['Email']) && isset($_POST['Mobile'])
            && isset($_POST['POB']) && isset($_POST['DOB']) && isset($_POST['Gender']) && isset($_POST['Rel'])
            && isset($_POST['CIZ']) && isset($_POST['NIN']) && isset($_POST['Height'])
            && isset($_POST['Weight']) && isset($_POST['BlT']) && isset($_POST['Religion']) && isset($_POST['QTF'])
            && isset($_POST['Address'])){
            // validate file
            $isCheckEmail = $_POST['Email'];
            $isFetchEmailexist = $this->userModel->findProfessorByEmail($isCheckEmail);
            if($isFetchEmailexist) {
                $response['status'] = 401;
                $response['message']= '<b>ERROR:</b> Email Is Already Taken By Another User.';
            }else {
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
                $uploadPath = 'Lecturar/assets/images/'.trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING)).'/'.$uploadName; 
                $dbpath     = 'Lecturar/assets/images/'.trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING)).'/'.$uploadName;
                $folder = 'Lecturar/assets/images/'.trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING));
                //die($_POST['id']);
                if ($fileSize > 90000000000000) {
                    $response['status'] = 300;
                    $response['errormsg'] = '<b>ERROR:</b>Your file was larger than 50kb in file size.';
                }elseif ($fileSize < 90000000000000 ) {
                    if(!file_exists($folder)){
                        mkdir($folder,077,true);
                    }
                    //upload file
                    move_uploaded_file($tmpLoc,$dbpath);
                    $data = 
                    [
                        'Profile__Picture'=>$uploadPath,
                        'Surname'=>trim(filter_var($_POST['surname'], FILTER_SANITIZE_STRING)),
                        'Middle__name'=>trim(filter_var($_POST['middlename'], FILTER_SANITIZE_STRING)),
                        'Othername'=>trim(filter_var($_POST['lastname'], FILTER_SANITIZE_STRING)),
                        'Accesscode'=>trim(filter_var($_POST['Accesscode'], FILTER_SANITIZE_STRING)),
                        'Password'=>trim(filter_var($_POST['Password'], FILTER_SANITIZE_STRING)),
                        'Email'=>trim(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)),
                        'Telephone_No'=>trim(filter_var($_POST['Mobile'], FILTER_SANITIZE_STRING)),
                        'Date_of_Birth'=>trim(filter_var($_POST['DOB'], FILTER_SANITIZE_STRING)),
                        'featured'=>'1',
                        'Place__of__birth'=>trim(filter_var($_POST['POB'], FILTER_SANITIZE_STRING)),
                        'Gender'=>trim(filter_var($_POST['Gender'], FILTER_SANITIZE_STRING)),
                        'Relationship_sts'=>trim(filter_var($_POST['Rel'], FILTER_SANITIZE_STRING)),
                        'Citizenship'=>trim(filter_var($_POST['CIZ'], FILTER_SANITIZE_STRING)),
                        'NIN'=>trim(filter_var($_POST['NIN'], FILTER_SANITIZE_STRING)),
                        'Height'=>trim(filter_var($_POST['Height'], FILTER_SANITIZE_STRING)),
                        'Weight'=>trim(filter_var($_POST['Weight'], FILTER_SANITIZE_STRING)),
                        'Blood_Type'=>trim(filter_var($_POST['BlT'], FILTER_SANITIZE_STRING)),
                        'Religion'=>trim(filter_var($_POST['Religion'], FILTER_SANITIZE_STRING)),
                        'Qualification'=>trim(filter_var($_POST['QTF'], FILTER_SANITIZE_STRING)),
                        'Address'=>trim(filter_var($_POST['Address'], FILTER_SANITIZE_STRING)),
                        'Professor__id'=>trim(filter_var((int)$_POST['id'], FILTER_SANITIZE_STRING))
                    ];
                    $data['Password'] = password_hash($data['Password'], PASSWORD_ARGON2ID); 
                if($this->userModel->AddProfessor($data)){
                        $response['status'] = 200;
                        $response['message'] = 'New Profesor Has Successfully Added..!';
                    } 
                }

            }
        }
        echo json_encode($response);
    }

    public function AddNewStudents(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        extract($_POST);
        $response = array();
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if (isset($_FILES['file']['name']) != '' && isset($_POST['id']) 
            && isset($_POST['AppType']) && isset($_POST['Department']) && isset($_POST['Program'])
            && isset($_POST['EntryLevel']) && isset($_POST['Session']) && isset($_POST['surname'])
            && isset($_POST['lastname']) && isset($_POST['EnrollmentNumber']) && isset($_POST['Email']) && isset($_POST['Mobile'])
            && isset($_POST['DOB']) && isset($_POST['Gender']) && isset($_POST['Rel']) && isset($_POST['NIN'])){
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
            $uploadPath = ROOT.'/StudentMedia/'.trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING)).'/'.$uploadName; 
            $dbpath     = ROOT.'/StudentMedia/'.trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING)).'/'.$uploadName;
            $folder = ROOT.'/StudentMedia/'.trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING));
            //die($_POST['id']);
            if ($fileSize > 90000000000000) {
                $response['status'] = 300;
                $response['errormsg'] = '<b>ERROR:</b>Your file was larger than 50kb in file size.';
            }elseif ($fileSize < 90000000000000 ) {
                if(!file_exists($folder)){
                    mkdir($folder,077,true);
                    
                }
                $Sender = 
                [
                    'Profile__Picture'=>$uploadPath,
                    'App'=>trim(filter_var($_POST['AppType'], FILTER_SANITIZE_STRING)),
                    'Dep'=>trim(filter_var($_POST['Department'], FILTER_SANITIZE_STRING)),
                    'Prog'=>trim(filter_var($_POST['Program'], FILTER_SANITIZE_STRING)),
                    'Entry'=>trim(filter_var($_POST['EntryLevel'], FILTER_SANITIZE_STRING)),
                    'Surname'=>trim(filter_var($_POST['surname'], FILTER_SANITIZE_STRING)),
                    'Othername'=>trim(filter_var($_POST['lastname'], FILTER_SANITIZE_STRING)),  
                    'EnrollmentNumber'=>trim(filter_var($_POST['EnrollmentNumber'], FILTER_SANITIZE_STRING)),
                    'password'=>trim(filter_var($_POST['surname'], FILTER_SANITIZE_STRING)),
                    'Email'=>trim(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)),
                    'Tel'=>trim(filter_var($_POST['Mobile'], FILTER_SANITIZE_STRING)),
                    'DBO'=>trim(filter_var($_POST['DOB'], FILTER_SANITIZE_STRING)),
                    'featured'=>'1',
                    'Session'=>trim(filter_var($_POST['Session'], FILTER_SANITIZE_STRING)),
                    'Gender'=>trim(filter_var($_POST['Gender'], FILTER_SANITIZE_STRING)),
                    'Relationship'=>trim(filter_var($_POST['Rel'], FILTER_SANITIZE_STRING)),
                    'Nin'=>trim(filter_var($_POST['NIN'], FILTER_SANITIZE_STRING)),
                    'NewID'=>trim(filter_var((int)$_POST['id'], FILTER_SANITIZE_STRING))
                ];
                $Sender['password'] = password_hash($Sender['password'], PASSWORD_ARGON2ID);
                move_uploaded_file($tmpLoc,$dbpath);
            if($this->userModel->processor($Sender)){
                    $response['status'] = 200;
                    $response['message'] = 'Successfully Added New Student..!';
                } 
            }
        }
        echo json_encode($response);
    }

    // Admin all profile methodjhgouihpigfiyfougy98
    public function Professors(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{ 
            $stmt = $this->userModel->lectural();
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'page_title' => 'PROFESSOR TABLE',
                'All'=> $stmt,
            ];
            if(isset($_GET['featured'])){
                // Sanitize POST data
                $Professor__id = $_GET['Professor__id'];
                $featured= (int)$_GET['featured'];
            $data = 
                [
                    'page_title'=> 'PROFESSOR TABLE LIST',
                    'settings'=>$this->_AppSettings(),
                    'ft'=> $stmt,
                    'Professor__id'=> $Professor__id,
                    'featured'=> $featured
                ];
                if ($this->userModel->GrantAccessTOprofessor($Professor__id, $featured)){
                    //Redirect to the page
                    header('location: ' . ROOT . 'Admin/Professors' );
                } else {
                        die('Sorry..! Something went wrong');
                }
            }
            //  This right here will fetch data from the database to the UI
            if(isset($_GET['Edit'])){
                $Edit__id = $_GET['Edit'];
                $Edit__id = (int)$_GET['Edit'];
                $row =$this->userModel->findUserByApp($Edit__id);
                if($row == true){
                    //  Fetching values from database
                    $ssid=$row->Professor__id;
                    $sname=$row->Surname;$mname=$row->Middle__name;$Oname=$row->Othername;
                    $Ascode=$row->Accesscode;$email=$row->Email;$ftd=$row->featured;
                    $tel=$row->Telephone_No;$DoB=$row->Date_of_Birth;$PoD=$row->Place__of__birth;
                    $gn= $row->Gender;$Religion = $row->Religion;$relatx=$row->Relationship_sts;
                    $Cst=$row->Civil_status;$Ctz= $row->Citizenship;$nin=$row->NIN;$Hat=$row->Height;
                    $Wat= $row->Weight;$Bty=$row->Blood_Type;$QCT=$row->Qualification;$photo=$row->photo;
                    $Add=$row->Address;
                    $Saved_image = (($photo != '')?$photo : '');
                    // Assign each one to data array so we can pass in data to our page.
                    $data =
                        [
                            'page_title'=>'Edit Professor',
                            'SavephotoError'=>'',
                            'id'=>$ssid,'sname'=>$sname,'mname'=>$mname,
                            'Oname'=>$Oname,'Ascode'=> $Ascode,'email'=>$email,
                            'ftd'=>$ftd,'tel'=>$tel,'DoB'=>$DoB,'PoD'=>$PoD,
                            'gn'=>$gn,'relatx'=>$relatx,
                            'Cst'=>$Cst,'Ctz'=>$Ctz,'nin'=>$nin,'Hat'=>$Hat,
                            'Wat'=>$Wat,'QCT'=>$QCT, 'Religion'=>$Religion,
                            'Bty'=>$Bty,'photo'=>$photo,'Add'=>$Add,
                            'Saved_image'=>$Saved_image,
                        ];
                    if(isset($_POST['__EditProfessor']) && !empty($data['Saved_image'])){
                    $data['SavephotoError']= 'You must delete or replace this photo before you make a successful Edit'; 
                    }elseif (isset($_POST['__EditProfessor']) && empty($_FILES)) {
                        echo "<script>alert('File is empty')</script>";
                    }
                }else {
                    header('location:' . ROOT. 'Admin/Professors');
                }
            } 
            if (isset($_GET['View'])) {
        
                $id = $_GET['View'];
                $fetchSingleUser = $this->userModel->loadingProfData($id);
                if(!$fetchSingleUser == true){
                    echo "<script>alert('Invalid ID Given..! Pleasee You are not authorised to Access this User. Contact Super Admin.');
                        window.location.replace('".ROOT."Admin/Professors');
                    </script>";
                // header('location:' . ROOT. 'Admin/Professors/');
                }
                if($fetchSingleUser == true){
                    $returnIdS=$fetchSingleUser->Professor__id;$fname = $fetchSingleUser->Surname;$lname = $fetchSingleUser->Othername;$mname=$fetchSingleUser->Middle__name;$Ascode=$fetchSingleUser->Accesscode;$email=$fetchSingleUser->Email;$ftd=$fetchSingleUser->featured;$tel=$fetchSingleUser->Telephone_No;$DoB=$fetchSingleUser->Date_of_Birth;$PoD=$fetchSingleUser->Place__of__birth;$gn= $fetchSingleUser->Gender;$relatx=$fetchSingleUser->Relationship_sts;$Cst=$fetchSingleUser->Civil_status;$Ctz= $fetchSingleUser->Citizenship;$nin=$fetchSingleUser->NIN;$Hat=$fetchSingleUser->Height;$Wat= $fetchSingleUser->Weight;$QCT =$fetchSingleUser->Qualification;$Religion =$fetchSingleUser->Religion;$Bty=$fetchSingleUser->Blood_Type;$photo=$fetchSingleUser->photo;$Add=$fetchSingleUser->Address;
                    $patch = $fname .' '.$lname;
                    $data = 
                    [
                        'page_title'=>'View '.$patch.' Personal Data Sheet - PROFILE',
                        'settings'=>$this->_AppSettings(),
                        'returnIdS'=>$returnIdS,'sname'=>$fname,'Oname'=>$lname,'mname'=>$mname,'Ascode'=>$Ascode,'email'=>$email,'ftd'=>$ftd,'tel'=>$tel,'DoB'=>$DoB,'PoD'=>$PoD,'gn'=>$gn,'relatx'=>$relatx,'Cst'=>$Cst,'Ctz'=>$Ctz,'nin'=>$nin,'Hat'=>$Hat,'Wat'=>$Wat,'QCT'=>$QCT,'Religion'=>$Religion,'Bty'=>$Bty,'photo'=>$photo,'Add'=>$Add,
                    ];
                }else{
                    die('Something went wrong on the Server.');   
                }
            }
            
            $this->view('Admin/Professors', $data);
        }
    }

    public function add(){
       if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $getDESCpRoFeSsrID = $this->userModel->fetchProfessorIdForEditAdd();
        $a = 8;
        $w = '0123456789';
        $g = strlen($w);
        $r = '';
        for($i = 0; $i<$a; $i++) {
            $r .= $w[rand(0, $g - 1)];
            $Prof__ID = $r;
        }

        $length = 8;
        $key = 'UD';
        $number = '1234567890';
        $numberLength = strlen($number);
        $randomNumber = '';
        for($i = 0; $i<$length; $i++) {
            $randomNumber .= $number[rand(0, $numberLength - 1)];
            $randcount = $key.$randomNumber;
        }
        $id = $Prof__ID;
        $rand = $randcount;
        $data=
        [
            'settings'=>$this->_AppSettings(),
            'page_title'=>'Add New Professor',
            'id'=>$id,
            'accesscode'=>$rand
        ];

        $this->view('Admin/AddProfessor', $data);
    }

    public function edit($url){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $urlParts = explode('/', $url);
        // Set Controller 
        $controller = !empty($urlParts[0])? $urlParts[0] : ROOT.'Admin/Professors';
        $controllerName = $controller;
        // Set Action
        $row =$this->userModel->findUserByApp($controllerName);
        if ($row) {
            //  Fetching values from database
            $ssid=$row->Professor__id;
            $sname=$row->Surname;$mname=$row->Middle__name;$Oname=$row->Othername;
            $Ascode=$row->Accesscode;$email=$row->Email;$ftd=$row->featured;
            $tel=$row->Telephone_No;$DoB=$row->Date_of_Birth;$PoD=$row->Place__of__birth;
            $gn= $row->Gender;$Religion = $row->Religion;$relatx=$row->Relationship_sts;
            $Ctz= $row->Citizenship;$nin=$row->NIN;$Hat=$row->Height;
            $Wat= $row->Weight;$Bty=$row->Blood_Type;$QCT=$row->Qualification;$photo=$row->photo;
            $Add=$row->Address;
            $Saved_image = (($photo != '')?$photo : '');
            // Assign each one to data array so we can pass in data to our page.
            $data =
                [
                    'page_title'=>'Edit Professor',
                    'settings'=>$this->_AppSettings(),
                    'SavephotoError'=>'',
                    'id'=>$ssid,'sname'=>$sname,'mname'=>$mname,
                    'Oname'=>$Oname,'Ascode'=> $Ascode,'email'=>$email,
                    'ftd'=>$ftd,'tel'=>$tel,'DoB'=>$DoB,'PoD'=>$PoD,
                    'gn'=>$gn,'relatx'=>$relatx,
                    'Ctz'=>$Ctz,'nin'=>$nin,'Hat'=>$Hat,
                    'Wat'=>$Wat,'QCT'=>$QCT, 'Religion'=>$Religion,
                    'Bty'=>$Bty,'photo'=>$photo,'Add'=>$Add,
                    'Saved_image'=>$Saved_image,
                ];
        }else {
            header('location:' . ROOT. 'Admin/Professors');
        }
        if (isset($_POST['isEdit'])) {
            die('Yes');
        }
        $this->view('Admin/EditProfessor', $data);
    }

    public function save(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $RequestMethod  = getRequestMethod('method', true);
        $method 	    = trim(filter_var($_POST['method'], FILTER_SANITIZE_STRING), true);
		$nip 		    = trim(filter_var($_POST['nip'], FILTER_SANITIZE_STRING), true);
		$nama_dosen     = trim(filter_var($_POST['nama_dosen'], FILTER_SANITIZE_STRING), true); 
		$email 		    = trim(filter_var($_POST['email'], FILTER_SANITIZE_STRING), true);
		$matkul 	    = trim(filter_var($_POST['matkul'], FILTER_SANITIZE_STRING), true);
        if($method      == 'add') {
			
            
		}else {
            
        }
        
    }


    public function isSaveEdit(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $response = array();
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $id = $_POST['id'];

        if (isset($_FILES['file']['name']) != '' || isset($_FILES['file']['name']) == '' && isset($_POST['id']) && isset($_POST['surname']) && isset($_POST['middlename']) 
        && isset($_POST['lastname']) && isset($_POST['Accesscode']) && isset($_POST['Email']) && isset($_POST['Mobile'])
        && isset($_POST['POB']) && isset($_POST['DOB']) && isset($_POST['Gender']) && isset($_POST['Rel'])
        && isset($_POST['CIZ']) && isset($_POST['NIN']) && isset($_POST['Height'])
        && isset($_POST['Weight']) && isset($_POST['BlT']) && isset($_POST['Religion']) && isset($_POST['QTF'])
        && isset($_POST['Address'])){
        // validate file
        if (isset($_FILES['file']['name']) != ''){
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
            $uploadPath = 'Lecturar/assets/images/'.trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING)).'/'.$uploadName; 
            $dbpath     = 'Lecturar/assets/images/'.trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING)).'/'.$uploadName;
            $folder = 'Lecturar/assets/images/'.trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING));
            //die($_POST['id']);
            if ($fileSize > 90000000000000) {
                $response['status'] = 300;
                $response['errormsg'] = '<b>ERROR:</b>Your file was larger than 50kb in file size.';
            }elseif ($fileSize < 90000000000000 ) {
                if(!file_exists($folder)){
                    mkdir($folder,077,true);
                }
                // this code check if on the student id folder has old photo, if yes, delete every old photo and upload new profile photo.
                foreach(glob($folder . '/*') as $file){
                    // check if is a file and not sub-directory
                    if(is_file($file)){
                          // check if file older than 90 days
                        if((time() - filemtime($file)) > (60 * 60 * 24 * 90)){
                            unlink($file);
                        }else {
                            // delete file
                            unlink($file);
                        }
                    }
                }
                move_uploaded_file($tmpLoc,$dbpath);
            }
        }
        $row =$this->userModel->loadingProfData($id);
        if ($row ==true) {
            $defaultImg  = $row->photo;
        }
       

            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'Profile__Picture'=>((isset($uploadPath))?$uploadPath : $defaultImg),
                'Surname'=>trim(filter_var($_POST['surname'], FILTER_SANITIZE_STRING)),
                'Middle__name'=>trim(filter_var($_POST['middlename'], FILTER_SANITIZE_STRING)),
                'Othername'=>trim(filter_var($_POST['lastname'], FILTER_SANITIZE_STRING)),
                'Accesscode'=>trim(filter_var($_POST['Accesscode'], FILTER_SANITIZE_STRING)),
                'Email'=>trim(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)),
                'Telephone_No'=>trim(filter_var($_POST['Mobile'], FILTER_SANITIZE_STRING)),
                'Date_of_Birth'=>trim(filter_var($_POST['DOB'], FILTER_SANITIZE_STRING)),
                'featured'=>'1',
                'Place__of__birth'=>trim(filter_var($_POST['POB'], FILTER_SANITIZE_STRING)),
                'Gender'=>trim(filter_var($_POST['Gender'], FILTER_SANITIZE_STRING)),
                'Relationship_sts'=>trim(filter_var($_POST['Rel'], FILTER_SANITIZE_STRING)),
                'Citizenship'=>trim(filter_var($_POST['CIZ'], FILTER_SANITIZE_STRING)),
                'NIN'=>trim(filter_var($_POST['NIN'], FILTER_SANITIZE_STRING)),
                'Height'=>trim(filter_var($_POST['Height'], FILTER_SANITIZE_STRING)),
                'Weight'=>trim(filter_var($_POST['Weight'], FILTER_SANITIZE_STRING)),
                'Blood_Type'=>trim(filter_var($_POST['BlT'], FILTER_SANITIZE_STRING)),
                'Religion'=>trim(filter_var($_POST['Religion'], FILTER_SANITIZE_STRING)),
                'Qualification'=>trim(filter_var($_POST['QTF'], FILTER_SANITIZE_STRING)),
                'Address'=>trim(filter_var($_POST['Address'], FILTER_SANITIZE_STRING)),
                'Professor__id'=>trim(filter_var((int)$_POST['id'], FILTER_SANITIZE_STRING))
            ];
           if($this->userModel->EditProfessor($data)){
                $response['status'] = 200;
                $response['message'] = 'Professor Data Has Successfully Update..!';
            } 
    }
    echo json_encode($response);
    }


    // Checking if professor email exist 
    public function isProfessorEmailExist(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $isCheckEmail = $phpObject->{'Email'};
            
                $newJsonString = json_encode($phpObject);
                $isFetchEmailexist = $this->userModel->findProfessorByEmail($isCheckEmail);
                if($isFetchEmailexist) {
                    $response['status'] = 200;
                    $response['message']= '<b>ERROR:</b> Email Is Already Taken By Another User.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }

    }

    // View professor profile 
    public function ProfessorsProfile($SSD){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST)){
            $id = trim(filter_var((int)$SSD));
            $fetchSingleUser = $this->userModel->loadingProfData($id);
                if($fetchSingleUser == true){
                    $returnIdS=$fetchSingleUser->Professor__id;$fname = $fetchSingleUser->Surname;$lname = $fetchSingleUser->Othername;$mname=$fetchSingleUser->Middle__name;$Ascode=$fetchSingleUser->Accesscode;$email=$fetchSingleUser->Email;$ftd=$fetchSingleUser->featured;$tel=$fetchSingleUser->Telephone_No;$DoB=$fetchSingleUser->Date_of_Birth;$PoD=$fetchSingleUser->Place__of__birth;$gn= $fetchSingleUser->Gender;$relatx=$fetchSingleUser->Relationship_sts;$Cst=$fetchSingleUser->Civil_status;$Ctz= $fetchSingleUser->Citizenship;$nin=$fetchSingleUser->NIN;$Hat=$fetchSingleUser->Height;$Wat= $fetchSingleUser->Weight;$QCT =$fetchSingleUser->Qualification;$Religion =$fetchSingleUser->Religion;$Bty=$fetchSingleUser->Blood_Type;$photo=$fetchSingleUser->photo;$Add=$fetchSingleUser->Address;
                    $patch = $fname .' '.$lname;
                    $data = 
                    [
                        'page_title'=>'View '.$patch.' Personal Data Sheet - PROFILE',
                        'returnIdS'=>$returnIdS,'fname'=>$fname,'lname'=>$lname,'mname'=>$mname,'Ascode'=>$Ascode,'email'=>$email,'ftd'=>$ftd,'tel'=>$tel,'DoB'=>$DoB,'PoD'=>$PoD,'gn'=>$gn,'relatx'=>$relatx,'Cst'=>$Cst,'Ctz'=>$Ctz,'nin'=>$nin,'Hat'=>$Hat,'Wat'=>$Wat,'QCT'=>$QCT,'Religion'=>$Religion,'Bty'=>$Bty,'photo'=>$photo,'Add'=>$Add,
                    ];
                }else if(!$fetchSingleUser == true){
                        header('location:' . ROOT . 'Admin/Professors/');
                    }else{
                    die('Something went wrong on the Server.');   
                }
            }
        }
        $this->view('Admin/modal/ProfessorsProfile', $data);
    }

    public function deleteimg($url){
      if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $urlParts = explode('/', $url);
        // Set Controller 
        $controller = !empty($urlParts[0])? $urlParts[0] : ROOT.'Admin/Professors';
        $controllerName = $controller;
     
        $Edit__id = (int)$controllerName; 
        $post = $this->userModel->findUserByApp($Edit__id);
        if(!$post == true){
            header('location:' . ROOT. 'Admin/Professors');
        }
        $photo = $post->photo;
        $link = 'Professor/'.$Edit__id;
        $image_url = PATHROOT.$photo;
        if($post == true){
            if(is_file($photo) || is_dir($image_url)){
                unlink($photo);
            }
            $deletePhotoPATH = $this->userModel->DTProfressorPhotoURL($Edit__id);
            if($deletePhotoPATH ==true){
                header('location:' . ROOT. 'Admin/edit/'.$Edit__id);
            }
        }else{
            die('Something went Wrong...!');
        }
    } 

    public function import(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $data =
        [
            'settings'=>$this->_AppSettings(),
            'page_title'=>'import File',
        ];
        $this->view('Admin/importFile', $data);
    }
    
    public function users(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{ 
            $role= (int)$_SESSION['Role'];
            if ($role==2) {
                $all = $this->userModel->adminTable();
            }else {
                if ($role==1) {
                    $all = $this->userModel->SuperadminTable();
                }else {
                    dnd('Accountant');
                }
            }
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'page_title'=>'User Management',
                'All'=>$all,
            ];
            $this->view('Admin/ManageUser', $data);
        }
    }

    public function dassa(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                
                $id =  $phpObject->{'id'};
                $old =  $phpObject->{'old'}; 
                $new =  $phpObject->{'new'}; 
                $confirmpassword =  $phpObject->{'confirmpassword'}; 
                if ($id == "") {
                $response['message']="The  field is required.";
                $response['status1'] = false;
                }
                if ($old == "") {
                $response['message']="The  field is required.";
                $response['status2'] = false;
                }
                if ($new == "") {
                $response['message']="The  field is required.";
                $response['status3'] = false;
                }
                if ($confirmpassword == "") {
                $response['message']="The  field is required.";
                $response['status4'] = false;
                }elseif (!empty($id) && !empty($old) && !empty($new) && !empty($confirmpassword)) {
                    if ($new !== $confirmpassword){
                        $response['message']="New Password does not match with Comfirm Password..! Please Check";
                        $response['status4'] = false;
                    }else {
                        // Hash the new password
                        $new = password_hash($new, PASSWORD_ARGON2ID);
                        // now check if old password match 
                        $data = [
                            'id'=>$id,
                            'old'=>$old,
                            'new'=>$new
                        ];
                        if ($this->userModel->isChangePassword($data)) {
                            $response['message']= "Password Successfully Changed..!";
                            $response['status'] = true;
                        }else {
                        $response['message']="Sorry.. Old password Does not match our Data.";
                            $response['status2'] = false;
                        }
                    }
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }

    public function edituser($url){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}else {
            $urlParts = explode('/', $url);
            // Set Controller 
            $controller = !empty($urlParts[0])? $urlParts[0] : ROOT.'Admin/users';
            $controllerName = $controller;
            $id= trim(filter_var((int)$controllerName, FILTER_VALIDATE_INT));
            if ($id == 1) {
                $id = $_SESSION['Admin__id'] ;
                $stmt= $this->userModel->SQLuserEdit($id); 
                $role= (int)$_SESSION['Role'];
                if ($role==2) {
                    $ci_d = $this->userModel->AdminSQLfetchRole();
                }else {
                    if ($role==1) {
                        $ci_d = $this->userModel->SuperSQLfetchRole();
                    }else {
                        dnd('Accountant');
                    }
                }
            }else {
                $stmt= $this->userModel->SQLuserEdit($id); 
                $role= (int)$_SESSION['Role'];
                if ($role==2) {
                    $ci_d = $this->userModel->AdminSQLfetchRole();
                }else {
                    if ($role==1) {
                        $ci_d = $this->userModel->SuperSQLfetchRole();
                    }else {
                        dnd('Accountant');
                    }
                } 
            }
            if($stmt == true){
                $data = 
                [
                    'settings'=>$this->_AppSettings(),
                    'page_title'=>'Edit User Data',
                    'editdata'=>$stmt,
                    'rolelist'=>$ci_d,
                    'id'=>$controllerName
                ];
                $this->view('Admin/edit/edituser', $data);
            }
        }
    }

    public function editusermethod(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);

                $data['status'] = false;
                
                $id =  $phpObject->{'id'};
                $username = $phpObject->{'username'};
                $fname = $phpObject->{'fname'};
                $lname = $phpObject->{'lname'};
                $email = $phpObject->{'email'};

                $id = trim(filter_var((int)$id, FILTER_SANITIZE_STRING));
                $username = trim(filter_var($username, FILTER_SANITIZE_STRING));
                $fname = trim(filter_var($fname, FILTER_SANITIZE_STRING));
                $lname = trim(filter_var($lname, FILTER_SANITIZE_STRING));
                $email = trim(filter_var($email, FILTER_SANITIZE_STRING));
                $param = 
                [
                    'settings'=>$this->_AppSettings(),
                    'id'=>$id,
                    'username'=>$username,
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'email'=>$email
                    
                ];
                $update = $this->userModel->SQLupdateUser($param);
                $response['status'] = $update ? true : false;
                if ($response['status'] ==true) {
                    $response['mesg']= 'User information has been successfully updated';
                }else {
                $response['error']='Sorry.. Unable to update user.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    public function edituserlevel(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);

                $data['status'] = false;
                
                $id =  $phpObject->{'id'};
                $role = $phpObject->{'role'};
                $username = $phpObject->{'username'};

                $id = trim(filter_var((int)$id, FILTER_SANITIZE_STRING));
                $role = trim(filter_var((int)$role, FILTER_SANITIZE_STRING));
                $username = trim(filter_var($username, FILTER_SANITIZE_STRING));
            
                $param = 
                [
                    'id'=>$id,
                    'role'=>$role,
                    'username'=>$username,
                    'settings'=>$this->_AppSettings(),
                ];
                $update = $this->userModel->SQLupdateUserLevel($param);
                $response['status'] = $update ? true : false;
                if ($response['status'] ==true) {
                    $response['mesg']= 'User level has been successfully updated';
                }else {
                $response['error']='Sorry.. Unable to update user.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    public function edituserstatus(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);

                $data['status'] = false;
                
                $id =  $phpObject->{'id'};
                $username = $phpObject->{'username'};
                $fname = $phpObject->{'fname'};
                $lname = $phpObject->{'lname'};
                $email = $phpObject->{'email'};

                $id = trim(filter_var((int)$id, FILTER_SANITIZE_STRING));
                $username = trim(filter_var($username, FILTER_SANITIZE_STRING));
                $fname = trim(filter_var($fname, FILTER_SANITIZE_STRING));
                $lname = trim(filter_var($lname, FILTER_SANITIZE_STRING));
                $email = trim(filter_var($email, FILTER_SANITIZE_STRING));
                $param = 
                [
                    'id'=>$id,
                    'username'=>$username,
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'email'=>$email
                ];
                $update = $this->userModel->SQLupdateUser($param);
                $response['status'] = $update ? true : false;
                if ($response['status'] ==true) {
                    $response['mesg']= 'User information has been successfully updated';
                }else {
                $response['error']='Sorry.. Unable to update user.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }

    public function MailToProfessor(){
       if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);

                $email = $phpObject->{'Email'};
                $RecipientName = $phpObject->{'RecipientName'};
                $SenderMail = $phpObject->{'SenderMail'};
                $SenderName = $phpObject->{'SenderName'};
                $message = $phpObject->{'message'};
                $subject = $phpObject->{'subject'};
                $EmailID = $phpObject->{'EmailID'};
                $SenderID = $phpObject->{'SenderID'};
                $targetid = $phpObject->{'targetid'};
                $newJsonString = json_encode($phpObject);
                $data = 
                [
                    'settings'=>$this->_AppSettings(),
                    'EmailID'=> strip_tags(trim(filter_var($EmailID, FILTER_SANITIZE_EMAIL))),
                    'SenderID'=> strip_tags(trim(filter_var($SenderID, FILTER_SANITIZE_STRING))),
                    'targetid'=> strip_tags(trim(filter_var($targetid, FILTER_SANITIZE_STRING))),
                    'SenderName'=> strip_tags(trim(filter_var($SenderName, FILTER_SANITIZE_STRING))),
                    'SenderMail'=> strip_tags(trim(filter_var($SenderMail, FILTER_SANITIZE_EMAIL))),
                    'Email'=> strip_tags(trim(filter_var($email, FILTER_SANITIZE_EMAIL))),
                    'RecipientName'=> trim(filter_var($RecipientName, FILTER_SANITIZE_STRING)),
                    'Subject'=> trim(filter_var($subject, FILTER_SANITIZE_STRING)),
                    'message'=> trim(filter_var($message, FILTER_SANITIZE_STRING)),
                    'parent'=> '1',
                ]; 
                if(!empty($data['EmailID']) && !empty($data['SenderID']) && !empty($data['targetid']) && !empty($data['SenderName']) && !empty($data['SenderMail']) && !empty($data['Email']) && !empty($data['RecipientName']) && !empty($data['Subject']) && !empty($data['message']))
                {
                    $header = "From:".$data['SenderName']. ' to '.$data['RecipientName']."\r\n".
                    "------------------------------------------------------------\n";
                    $header .= "MIME-Version: 1.0\r\n";
                    $header .= "Content-type: text/html\r\n";

                    $to =  $data['Email'];
                    $name = $data['SenderName'];
                    $subject= 'Subject: '.$data['Subject']."\n".
                    "------------------------- MESSAGE -------------------------\n\n".
                    // Set the body of the email you're sending
                    $message = 'Message: '.$data['message']."\n".
                    "\n\n------------------------------------------------------------\n";
                //   First store your data in your database just for future references
                    $isUserModel= $this->userModel->SQLSendProfEmail($data);
                    if($isUserModel == true){
                        // we are sending the mail structure not just txt but the email structure
                        $response['status']= 200;
                        $response['message']= 'Email Has Successfully Sent';
                        // if you want this function work completely to Live Email.. UNCOMMENT THIS BELOW
                        // $retval = mail ($to,$subject,$message,$header);
                        // if( $retval == true ) {
                            
                        // }else {
                        //     echo "Message could not be sent...";
                        // }
                    } 
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    //Admin Delete method for lectural
    public function delete($Lectural___ID){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $post = $this->userModel->findPostById($Lectural___ID);
        if(!$post == true){
            header('location:' . ROOT . 'Admin/Professors/');
        }
         if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         }
        $data = [
                    'page_title' => 'Mercy College Lecturals',
                ]; 
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                    if($this->userModel->delete($Lectural___ID)){
                        header('location:' . ROOT . 'Admin/Professors/');
                    }else{
                        die('Something went wrong');
                    }
                } 
            $this->view('Admin/Professors', $data);
    }
    
    // Admin display All students data
    public function Students(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{ 
            @$DC = @$this->userModel->SelectSpecial__ID();
            $stmt1 = $this->userModel->StudentSelectall();
            @$DC = @$this->userModel->SelectSpecial__ID();
            @$throwprogram = @$this->userModel->SelectProgram();
            @$throwSession= @$this->userModel->Selectsession();
            @$throwEntrylevel = @$this->userModel->SelectEntryLevel();
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'page_title' => 'Students',
                'select' => $stmt1,
                'DisplayCateogries' => $DC,
                'throw' => $throwprogram, 
                'StmtEntrylevel' => $throwEntrylevel,
                'StmtSession' => $throwSession, 
            ];
            if(isset($_GET['delete_image']) && isset($_GET['Edit'])){
                $Edit__id = $_GET['Edit'];
                $Edit__id = (int)$_GET['Edit']; 
                $post = $this->userModel->findStudentEdiReturnt($Edit__id);
                if(!$post == true){
                    header('location:' . ROOT. 'Admin/Students');
                }
                $photo = $post->image;
                $image_url = PATHROOT.$photo;
                if($post == true){
                    if(is_file($photo) || is_dir($image_url)){
                        unlink($photo);
                    }
                    $deletePhotoPATH = $this->userModel->DeleteStudentPhotoURL($Edit__id);
                    if($deletePhotoPATH ==true){
                        header('location:' . ROOT. 'Admin/Students?Edit='.$Edit__id);
                    }
                }else{
                    die('Something went Wrong...!');
                }
            }
            
            $this->view('Admin/Students', $data);
        }
    }

    // Edit student by amdin
    
    public function isEditStudent(){
       if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                    $jsonString = file_get_contents("php://input");
                    $response = array();
                    $phpObject = json_decode($jsonString);
                
                    $id = $phpObject->{'id'};
                    $Enrlid = $phpObject->{'Enrlid'};
                    $Surname = $phpObject->{'Surname'};
                    $Othername = $phpObject->{'Othername'};
                    $email = $phpObject->{'email'};
                    $mobile = $phpObject->{'mobile'};
                    $DOB = $phpObject->{'DOB'};
                    $gender = $phpObject->{'gender'};
                    $rel = $phpObject->{'rel'};
                    $newJsonString = json_encode($phpObject);
                    // validate file  

                    $data = 
                    [
                        'settings'=>$this->_AppSettings(),
                        'id'=>strip_tags(trim(filter_var((int)$id, FILTER_VALIDATE_INT))),
                        'Enrlid'=>strip_tags(trim(filter_var($Enrlid, FILTER_SANITIZE_STRING))),
                        'Surname'=>strip_tags(trim(filter_var($Surname, FILTER_SANITIZE_STRING))),
                        'Othername'=>strip_tags(trim(filter_var($Othername, FILTER_SANITIZE_STRING))),
                        'email'=>strip_tags(trim(filter_var($email, FILTER_SANITIZE_STRING))),
                        'mobile'=>strip_tags(trim(filter_var($mobile, FILTER_SANITIZE_STRING))),
                        'DOB'=>strip_tags(trim(filter_var($DOB, FILTER_SANITIZE_STRING))),
                        'gender'=>strip_tags(trim(filter_var($gender, FILTER_SANITIZE_STRING))),
                        'rel'=>strip_tags(trim(filter_var($rel, FILTER_SANITIZE_STRING))),
                    ];
                    if ($this->userModel->isStudentUpdate($data)){
                        $response['status']= 200;
                        $response['message']= "Data Successfully Updated.!";
                    } else {
                        $response['message']="Sorry..! Could Not Update This Student.";
                    }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    
  public function edits($url){
    if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         }else {
            $urlParts = explode('/', $url); 
            // Set Controller 
            $controller = !empty($urlParts[0])? $urlParts[0] : ROOT.'Admin/Students';
            $controllerName = $controller;
            $id= trim(filter_var((int)$controllerName, FILTER_SANITIZE_NUMBER_INT)); 
            $row =$this->userModel->findStudentEdiReturnt($id);
            if($row == true){
            //  Fetching values from database
            $ssid=$row->student__Id;$enrollmentNo = $row->Roll__No;
            $AppType = $row->Application_id;$Department= $row->Department_id;
            $Program = $row->Program__Type;$entryLeve = $row->Entrylevel;
            $sname=$row->Surname;$Oname=$row->othername;$email=$row->email;
            $ftd=$row->featured;$tel=$row->telephone;$DoB=$row->Date__of__birth;
            $gn= $row->gender;$relatx=$row->relationship;
            $nin=$row->NIN;$photo=$row->image;
            $Saved_image = (($photo != '')?$photo : '');
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'page_title'=>'Editing '. $sname.' '.$Oname.' Data',
                'id'=>$ssid,'enrolNo'=>$enrollmentNo,
                'App'=>$AppType,'Dep'=>$Department,'Prog'=>$Program,
                'entry'=>$entryLeve,'sname'=>$sname,'Oname'=>$Oname,
                'Ascode'=> $enrollmentNo,'email'=>$email,'ftd'=>$ftd,
                'tel'=>$tel,'DoB'=>$DoB,'gn'=>$gn,'relatx'=>$relatx,
                'nin'=>$nin,
                'Saved_image'=>$Saved_image,
            ];
            //dnd($data);
            $this->view('Admin/edits', $data);
            }else {
                header('location:' .ROOT. 'Admin/Students');
            }
        }   
  }


    public function AdminUpdatePassword(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                // retreive Post data
                $Sendid=$phpObject->{'AdminId'};
                $OldPass=$phpObject->{'AdminOldPassword'};
                $NewPasswordRequestPost=$phpObject->{'NewPassword'};
                $newJsonString = json_encode($phpObject);
                // wrap everything in array data 
                $Wrapper = 
                [
                    'id'=>strip_tags(trim(filter_var($Sendid, FILTER_SANITIZE_STRING | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW | FILTER_FLAG_ENCODE_HIGH | FILTER_SANITIZE_ENCODED | FILTER_FLAG_STRIP_BACKTICK))),
                    'OldPass'=>strip_tags(trim(filter_var($OldPass, FILTER_SANITIZE_STRING | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW | FILTER_FLAG_ENCODE_HIGH | FILTER_SANITIZE_ENCODED | FILTER_FLAG_STRIP_BACKTICK))),
                    'SetNewPassword'=>strip_tags(trim(filter_var($NewPasswordRequestPost, FILTER_SANITIZE_STRING | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW | FILTER_FLAG_ENCODE_HIGH | FILTER_SANITIZE_ENCODED | FILTER_FLAG_STRIP_BACKTICK))),
                ];
                // Hash the new password
                $validID = $Wrapper['id'];
                $Verifyoldpassword = $Wrapper['OldPass'];
                $encrytPassword = password_hash($Wrapper['SetNewPassword'], PASSWORD_ARGON2ID);
                
                $SendToSqlModel = $this->userModel->UpdatePassword($validID);
                if($SendToSqlModel== true){
                    $DatabaseDefaultPasswordNow = $SendToSqlModel->password;
                    if(password_verify($Verifyoldpassword, $DatabaseDefaultPasswordNow)){
                        //Return json message to the GUI
                        $UpdateTable = $this->userModel->finalAdminUpdate($validID, $encrytPassword);
                        if($UpdateTable  == true){
                            $response['status']=200;
                        $response['Successmessage']= 'Your Password Has Successfully Updated.';
                        }
                    }else {
                        $response['message']= 'The Old Password Doesnt Match. Please Try again.';
                    }
                }else {
                    $response['message']= 'Sorry..! User Doesnt EXIST On Our Record.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    
    public function ResetPassword(){
         if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');} 
        $data = ['page_title'=> 'Change :: Password','settings'=>$this->_AppSettings(),];
        $this->view('Admin/ResetPassword', $data);
    }
  
// Dismissed Professor From Management Role
    public function DisMissedManagementRole(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getid=$phpObject->{'ID'};
                $newJsonString = json_encode($phpObject);
                $id = $getid;
                //Return json message to the GUI
                if($this->userModel->SQLDismissedManagementRole($id)){
                    $response['status'] = 200;
                    $response['message']= 'Successfully deleted.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
 // Delete Professors By Admin
    public function deleteProfessor(){
       if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'DataId'};
                $newJsonString = json_encode($phpObject);
                $id = $getData;
                //Return json message to the GUI
                if($this->userModel->deleteUserProfessor($id)){
                    $response['status'] = 200;
                    $response['message']= 'Successfully deleted.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    public function deleteApp(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'id'};
                $newJsonString = json_encode($phpObject);
                $id = $getData;
                //Return json message to the GUI
                if($this->userModel->App($id)){
                    $response['status'] = 200;
                    $response['message']= 'Successfully deleted.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
     public function deleteFact(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'id'};
                $newJsonString = json_encode($phpObject);
                $id = $getData;
                //Return json message to the GUI
                if($this->userModel->Fact($id)){
                    $response['status'] = 200;
                    $response['message']= 'Successfully deleted.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
     public function deleteDep(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'id'};
                $newJsonString = json_encode($phpObject);
                $id = $getData;
                //Return json message to the GUI
                if($this->userModel->Dep($id)){
                    $response['status'] = 200;
                    $response['message']= 'Successfully deleted.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    public function deleteCourse(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'id'};
                $newJsonString = json_encode($phpObject);
                $id = $getData;
                //Return json message to the GUI
                if($this->userModel->Course($id)){
                    $response['status'] = 200;
                    $response['message']= 'Successfully deleted.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    public function adds(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        @$DC = @$this->userModel->SelectSpecial__ID();
        @$throwprogram = @$this->userModel->SelectProgram();
        @$throwSession= @$this->userModel->Selectsession();
        @$throwEntrylevel = @$this->userModel->SelectEntryLevel();
    
        @$data =
        [
            'settings'=>$this->_AppSettings(),
            'page_title' => 'Application Form for Freshers',
            'DisplayCateogries' => $DC,
            'throw' => $throwprogram, 
            'StmtEntrylevel' => $throwEntrylevel,
            'StmtSession' => $throwSession, 
        ];
        $this->view('Admin/Addstudent', $data);
    }

    public function deletestudents(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'DataId'};
                $newJsonString = json_encode($phpObject);
                $id = $getData;
                //Return json message to the GUI
                if($this->userModel->SQLdeletestudent($id)){
                    $response['status'] = 200;
                    $response['message']= 'Successfully deleted.';
                }else {
                    $response['status'] = 'error';
                    $response['message']= 'Sorry..! Something Happen At The Database Process.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }

    // Delete student by Admin
      public function isDeleteStudent(){
       if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'DataId'};
                $newJsonString = json_encode($phpObject);
                $id = $getData;
                //Return json message to the GUI
                if($this->userModel->isSQLdeleteStudentADMIN($id)){
                    $response['status'] = 200;
                    $response['message']= 'Successfully deleted.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }

    // Delete Accountant By Admin
    public function deleteAccountant(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'DataId'};
                $newJsonString = json_encode($phpObject);
                $id = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
                if($id ==true){
                    //Return json message to the GUI
                    if($this->userModel->deleteUserAccountant($id)){
                        $response['status'] = 'success';
                        $response['message']= 'Successfully deleted.';
                    }else {
                        $response['status'] = 'error';
                        $response['message']= 'Sorry..! Something Happen At The Database Process.';
                    }
                }else {
                    $response['status'] = 'error';
                    $response['message']= 'Invalid Data Sent. ';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    // Declearing AppointmentModal toggle
    public function AppointmentModal(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $id = trim(filter_var($_POST['SSD'], FILTER_SANITIZE_STRING));
        $runcheck = $this->userModel->returndata($id);
        if($runcheck == true){
           	$i = $runcheck->Accountant__id;
            $sname=$runcheck->Surname;
            $mname = $runcheck->Middle__name;
            $Oname=$runcheck->Othername;
            $e= $runcheck->Email;
        }
        $data= 
        [
            'settings'=>$this->_AppSettings(),
            'id'=>$i,
            'User_idError'=>'',
            'sname'=>$sname,
            'mname'=>$mname,
            'Oname'=>$Oname,
            'e'=>$e,
        ];
        
        $this->view('Admin/modal/AppointmentModal', $data);
    }

    public function views($url){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         }else {
            $urlParts = explode('/', $url); 
            // Set Controller 
            $controller = !empty($urlParts[0])? $urlParts[0] : ROOT.'Admin/Students';
            $controllerName = $controller;
            $id= trim(filter_var((int)$controllerName, FILTER_SANITIZE_NUMBER_INT)); 
            
            $fetchSingleUser = $this->userModel->ViewStudentRelationalTablewithParent($id);
            if(!$fetchSingleUser == true){
                echo"<script>alert('Invalid ID Given..! Pleasee You are not authorised to Access this User. Contact Super Admin.');
                        window.location.replace('".ROOT."Admin/Students/');
                    </script>";
            }elseif($fetchSingleUser == true){
                
                $data = 
                [
                    'settings'=>$this->_AppSettings(),
                    'page_title'=>'Personal Data Sheet ',
                    'returnData'=>$fetchSingleUser
                ];
                $this->view('Admin/edit/view', $data);
            }
            else{
                die('Something went wrong on the Server.');   
            }
        }
    }
    public function LoadPrintProfile(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST)){
                $id= $_POST['id'];
                $fetchSingleUser = $this->userModel->returndata($id);
                if($fetchSingleUser == true){
                    $fname = $fetchSingleUser->Surname;
                    $lname = $fetchSingleUser->Othername;
                    $patch = $fname .' '.$lname;
                    $data = 
                    [
                        'settings'=>$this->_AppSettings(),
                        'page_title'=>'View '.$patch.' Profile',
                    ];
                }
                else
                {
                    die('Something went wrong on the Server.'); 
                }
            }
        }
        $this->view('Admin/modal/LoadPrintProfile', $data);
    }

    public function AcctAppointment(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //check if its an ajax request, exit if not
            if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest'){
                //exit script outputting json data
                $output = json_encode(
                    array
                    (
                      'type'=> 'error',
                      'text'=> 'Request must come from Ajax'
                    ));
                die($output);
            }
            if(isset($_POST)){
                //check $_POST vars are set, exit if any missing
                if (!isset($_POST["User_id"]) || !isset($_POST["FacultyID"])  || !isset($_POST["Faculty__Type"]) || !isset($_POST["Department__Type"]) || !isset($_POST["Designation"])) {
                    $output = json_encode(array('type' => 'error', 'text' => 'Input fields are empty!'));
                    die($output);
                }
                $data = 
                [
                    'settings'=>$this->_AppSettings(),
                    'user'=>trim(filter_var($_POST['User_id'], FILTER_SANITIZE_STRING)),
                    'TheFaculty'=>trim(filter_var($_POST['Faculty__Type'], FILTER_SANITIZE_STRING)),
                    'TheDepartment'=>trim(filter_var($_POST['Department__Type'], FILTER_SANITIZE_STRING)),
                    'TheDesignation'=>trim(filter_var($_POST['Designation'], FILTER_SANITIZE_STRING)),
                    'errorMessage'=> ''
                ];
               $sid = $data['user'];
               $fty = $data['TheFaculty'];
               $Dty = $data['TheDepartment'];
               $Dsg = $data['TheDesignation'];
               $pt = $this->userModel->validatechecking($sid, $Dty);
               if($pt == true){
                   $data['errorMessage'] = "THIS PROFESSOR IS ALREADY APPOINTED" .$pt->ID;
                   return false;
               }
               else if(empty($pt)){
                    if($this->userModel->AppointProfessor($sid, $fty, $Dty, $Dsg)){
                        header('location:' . ROOT . 'Admin/Accountant/');
                    }else{
                        die('Something went wrong');
                    }
               }else{
                   die("Sorry the server is running slow, The system can't not process this program at the moment.");
               }
        
            }
        }
    }
    public function ProfAppointment(){
      if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $arr_data = explode("=",$jsonString);
                $response = array();
                $i = json_decode($jsonString);

                $id=$i->{'ID'};
                $nin=$i->{'Nin'};
                $app= $i->{'Application'};
                $Designation=$i->{'DesignationID'};
                $Department=$i->{'DepartmentID'};
                $Faculty=$i->{'FacultyID'}; 
                $newJsonString = json_encode($i);

                $appid = strip_tags(trim(filter_var($app, FILTER_SANITIZE_STRING)));
                $ValidID = strip_tags(trim(filter_var($id, FILTER_SANITIZE_STRING)));
                $Validfty = strip_tags(trim(filter_var($Faculty, FILTER_SANITIZE_STRING)));
                $ValidDsg = strip_tags(trim(filter_var($Designation, FILTER_SANITIZE_STRING)));

                $data = 
                    [
                        'nin'=>$nin,
                        'user'=>$ValidID,
                        'Role'=>'3',
                        'TheFaculty'=>$Validfty,
                        'appid'=>$appid,
                        'TheDepartment'=>$Department,
                        'TheDesignation'=>$ValidDsg,
                    ];
                
                $sid = $data['user'];
                $nin = $data['nin'];
                $appid = $data['appid'];
                $fty = $data['TheFaculty'];
                $Dty = $data['TheDepartment'];
                $Dsg = $data['TheDesignation'];
                $role = strip_tags(trim(filter_var((int)$data['Role'], FILTER_SANITIZE_STRING)));
                $pt = $this->userModel->validatechecking($sid);
                if($pt == true){
                    // update statement
                    $instructor= implode(',', $Dty);
                    $insertData1 = $this->userModel->isUpdate($sid, $nin, $appid, $fty, $role, $instructor, $Dsg);
                    if($insertData1){
                        $response['status'] =  '200OK';
                    }else {
                        $response['message']= 'Sorry..! Something went wrong on the process.';
                    }
                }else {
                    // Insert New
                    $instructor= implode(',', $Dty);
                    $insertData2 = $this->userModel->AppointProfessor($sid, $nin,  $role, $appid, $fty,$instructor, $Dsg);
                    if($insertData2){
                        $response['status'] =  '200OK';
                    }else {
                        $response['message']= 'Sorry..! Something went wrong on the process.';
                    }
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }

    public function isEditApplication(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $id = trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING));
        $fetchApp = $this->userModel->isEditApplication($id);
        if ($fetchApp) {
            $data = 
            [
                'app'=>$fetchApp,
                'settings'=>$this->_AppSettings(),
            ];
            $this->view('Admin/modal/editCat', $data);
        }else {
            
        } 
    }

    // Handles Edit Faculty PAGE
     public function ise($url){
       if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         }else {
            $urlParts = explode('/', $url); 
            // Set Controller 
            $controller = !empty($urlParts[0])? $urlParts[0] : ROOT.'Admin/Students';
            $controllerName = $controller;
            $id= trim(filter_var((int)$controllerName, FILTER_SANITIZE_NUMBER_INT));
            $fetchFact = $this->userModel->isEditFaculty($id);
            $catid = $fetchFact->Cat_id;
            $vim = array();
            $vim[] = $catid;
            $newcatid = implode(',', $vim);
            $rowCat = $this->userModel->isSelectArrayParent($newcatid);
            if ($fetchFact) {
                $data = 
                [
                    'settings'=>$this->_AppSettings(),
                    'page_title'=>'Factulty Data',
                    'Fact'=>$fetchFact,
                    'App'=>$rowCat,
                ];
                $this->view('Admin/edit/editFaculty', $data);
            }
         }
    }

    // Handles Edit Department Page
    public function editDep($url){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         }else {
            $urlParts = explode('/', $url); 
            // Set Controller 
            $controller = !empty($urlParts[0])? $urlParts[0] : ROOT.'Admin/Students';
            $controllerName = $controller;
            $id= trim(filter_var((int)$controllerName, FILTER_SANITIZE_NUMBER_INT));
            $fetchDep = $this->userModel->isEditDepartment($id);
            $factid = $fetchDep->FacultyID;
            $rowDep = $this->userModel->isSelectArrayFacuty($factid);
        
            if ($fetchDep) {
                $data = 
                [
                    'settings'=>$this->_AppSettings(),
                    'page_title'=>'Department Data',
                    'Dep'=>$fetchDep,
                    'Fact'=>$rowDep,
                ];
                $this->view('Admin/edit/editDepartment', $data);
            }
         }
    }
    
    // Handles Edit Course PAGE
     public function isEditDepartment(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $id = trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING));
        $fetchDep = $this->userModel->isEditDepartment($id);
        if ($fetchDep) {
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'Dep'=>$fetchDep
            ];
            $this->view('Admin/modal/editDep', $data);
        }else {
            
        } 
    }

     // Declearing AppointmentModal toggle
    public function ProfessorAppointment(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $id = trim(filter_var($_POST['SSD'], FILTER_SANITIZE_STRING));
        $checkIFappointed = $this->userModel->ReturnInvalidData($id);
        if(!empty($checkIFappointed) && $checkIFappointed != false){
            $existUserID = $checkIFappointed->ID;
            $existFacultyid =$checkIFappointed->Faculty__ref__id;
            $designation= $checkIFappointed->Designation;
            $appis = $checkIFappointed->Cat_id;
            $f = $this->userModel->ReturnFaculty($existFacultyid);
            $apid = $this->userModel->ReturnApplication($appis);
            if ($f) {
                foreach ($f as $k) {
                    $n = $k['FacultyName'];
                    $nid = $k['FacultyID'];
                }
            }
            if ($apid) {
                foreach ($apid as $cn) {
                    $cnid = $cn['Category__ID'];
                    $cn = $cn['Category__name'];
                    
                }
            }
            $existDepartmentId= $checkIFappointed->Base;
            $searchForValue = ',';
                if (strpos($existDepartmentId, $searchForValue) !== false) {
                // Here is Multiple department 
                    $existDesignation = $checkIFappointed->Designation;
                    $fetchdata = $this->userModel->ReadOnly($existDepartmentId);
                }else {
                    $fetchdata = $this->userModel->ReadOnly($existDepartmentId);
                }
            }
            $runcheck = $this->userModel->loadingProfData($id);
            $DC = $this->userModel->SelectSpecial__ID();
            if($runcheck == true){
                $nin = $runcheck->NIN;
                $i = $runcheck->Professor__id;
                $sname=$runcheck->Surname;
                $mname = $runcheck->Middle__name;
                $Oname=$runcheck->Othername;
                $e= $runcheck->Email;
                $xname = $sname .' '.$mname.' '. $Oname;
            }
            $data= 
            [
                'settings'=>$this->_AppSettings(),
                'id'=>$i,
                'n'=>$nin,
                'catname'=>$cn,
                'Department'=>((!empty($fetchdata)?$fetchdata: '')),
                'catid'=>((!empty($cnid)?$cnid: '')),
                'ftyname'=>((!empty($n)?$n: '')),
                'ftyid'=>((!empty($nid)?$nid: '')),
                'designation'=>((!empty($designation)?$designation: '')),
                'checkingexistence'=>$checkIFappointed,
                'User_idError'=>'',
                'sname'=>$xname,
                'e'=>$e,
                'DisplayCateogries'=>$DC
            ];
        
        $this->view('Admin/modal/ProfessorAppointment', $data);
    }

  
    public function UpdateAppointment(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
        
                $jsonString = file_get_contents("php://input");
                $response = array();
                $decodeValue = json_decode($jsonString);

                $id=$decodeValue->{'ID'};
                $nin=$decodeValue->{'Nin'};
                $appNo = $decodeValue->{'Application'};
                $Designation=$decodeValue->{'DesignationID'};
                $Department=$decodeValue->{'DepartmentID'};
                $Faculty=$decodeValue->{'FacultyID'}; 
                $newJsonString = json_encode($decodeValue);

                $appid = strip_tags(trim(filter_var($appNo, FILTER_SANITIZE_STRING)));
                $ValidID = strip_tags(trim(filter_var($id, FILTER_SANITIZE_STRING)));
                $Validfty = strip_tags(trim(filter_var($Faculty, FILTER_SANITIZE_STRING)));
                $ValidDsg = strip_tags(trim(filter_var($Designation, FILTER_SANITIZE_STRING)));
                $role = '3';
                // update statement
                $implodeDepartment= implode(',', $Department);
                $insertData1 = $this->userModel->isUpdate($id, $nin, $appid, $Faculty, $role, $implodeDepartment, $Designation);
                if($insertData1 == true){
                    $response['status'] = '200';
                }else {
                    $response['status'] = 'error';
                    $response['message']= 'Invalid Data Sent. ';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    public function CollectionAPIs(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
        
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'DataId'};
                $newJsonString = json_encode($phpObject);
                $id = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
                if($id == true){
                    //Return json message to the GUI
                    if($this->userModel->clearob($id)){
                        $response['status'] = 'success';
                        $response['message']= 'Successfully deleted.';
                    }else {
                        $response['status'] = 'error';
                    $response['message']= 'Sorry..! Something Happen At The Database Process.';
                    }
                }else {
                    $response['status'] = 'error';
                    $response['message']= 'Invalid Data Sent. ';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    public function deleteCategory(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                //You can either use this or json_decode function
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'BaseId'};
                $newJsonString = json_encode($phpObject);
                $id = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
                if($id == true){
                    //Return json message to the GUI
                    if($this->userModel->clearob($id)){
                        $response['status'] = 'success';
                        $response['message']= 'Successfully deleted.';
                    }else {
                        $response['status'] = 'error';
                    $response['message']= 'Sorry..! Something Happen At The Database Process.';
                    }
                }else {
                    $response['status'] = 'error';
                    $response['message']= 'Invalid Data Sent. ';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }

    public function Library(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        @$DC = @$this->userModel->SelectSpecial__ID();
        $data = 
        [
            'DisplayCateogries' => $DC,
            'page_title'=>'Admin :: Library',
        ];
       
        $this->view('Admin/Library', $data);
    }

    public function addUser(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $id = substr(str_shuffle('123456789'), -9);
        $role= (int)$_SESSION['Role'];
        if ($role==2) {
            $stmt = $this->userModel->AdminSQLfetchRole();
        }else {
            if ($role==1) {
                $stmt = $this->userModel->SuperSQLfetchRole();
            }else {
                dnd('Accountant');
            }
        }
        $data = 
        [
            'settings'=>$this->_AppSettings(),
            'page_title'=> 'Add User',
            'role'=>$stmt,
            'id'=>$id
        ];
        $this->view('Admin/users/index', $data);
    }

    public function miosuer(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                    $jsonString = file_get_contents("php://input");
                    $response = array();
                    //You can either use this or json_decode function
                    $phpObject = json_decode($jsonString);
                    $id =  $phpObject->{'id'};
                    $username = $phpObject->{'username'};
                    $assign =  $phpObject->{'assign'}; 
                    $Surname =  $phpObject->{'Surname'}; 
                    $Othername =  $phpObject->{'Othername'};
                    $email =  $phpObject->{'email'}; 
                    $mobile =  $phpObject->{'mobile'}; 
                    $DOB =  $phpObject->{'DOB'};
                    $gender =  $phpObject->{'gender'};

                    if ($Surname == "") {
                    $response['message']="The  field is required.";
                    $response['status1'] = false;
                    }
                    if ($Othername == "") {
                    $response['message']="The  field is required.";
                    $response['status2'] = false;
                    }
                    if ($email == "") {
                    $response['message']="The  field is required.";
                    $response['status3'] = false;
                    }
                    if ($mobile == "") {
                    $response['message']="The  field is required.";
                    $response['status4'] = false;
                    }
                    if ($DOB == "") {
                    $response['message']="The  field is required.";
                    $response['status5'] = false;
                    }
                    if ($gender == "") {
                    $response['message']="The  field is required.";
                    $response['status6'] = false;
                    }
                    if ($assign == "") {
                    $response['message']="The  field is required.";
                    $response['status7'] = false;
                    }
                    elseif (!empty($Surname) && !empty($Othername) && !empty($email) && !empty($mobile) && !empty($DOB) && !empty($gender)) {
                    // Hash the new password
                    $pass = '123';
                    $hashpassword = password_hash($pass, PASSWORD_ARGON2ID);
                    // now check if old password match 
                    $data = [
                        'id'=>$id,
                        'username'=>$username,
                        'assign'=>$assign,
                        'Surname'=>$Surname,
                        'Othername'=>$Othername,
                        'email'=>$email,
                        'mobile'=>$mobile,
                        'DOB'=>$DOB,
                        'gender'=>$gender,
                        'password'=>$hashpassword
                    ];
                    if ($this->userModel->AddnewUser($data)) {
                        $response['message']= "User Has Successfully Added.!";
                        $response['status'] = true;
                    }else {
                        $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                        $response['status1'] = false;
                    }     
                }
            ob_end_clean();
            echo json_encode($response);
            }
        }
    }

    public function Application(){
         if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $appsql = $this->userModel->sqlcategorylist();
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'page_title'=>'Application Page',
                'apps'=>$appsql
            ];
            $this->view('Admin/Apps', $data);
        }
    }

    public function addApp(){
         if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                    $jsonString = file_get_contents("php://input");
                    $response = array();
                    //You can either use this or json_decode function
                    $phpObject = json_decode($jsonString);
                    $Appname =  $phpObject->{'Appname'};
                    if ($Appname == "") {
                    $response['message']="The  field is required.";
                    $response['status1'] = false;
                    }elseif (!empty($Appname)) {
                    $data = 
                    [
                        'Appname'=>$Appname,
                    ];
                    if ($this->userModel->AddApplModel($data)) {
                        $response['message']= "User Has Successfully Added.!";
                        $response['status'] = true;
                    }else {
                        $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                        $response['status1'] = false;
                    }     
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    public function addFact(){
         if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                //You can either use this or json_decode function
                $phpObject = json_decode($jsonString);
                $Factname =  $phpObject->{'Factname'};
                $catid =$phpObject->{'catid'};
                $catid = array_filter($catid);
                if (empty($catid)) {
                $response['message']="The  field is required.";
                $response['status1'] = false;
                }
                if ($Factname == "") {
                $response['message']="The  field is required.";
                $response['status2'] = false;
                }elseif (!empty($Factname) && !empty($catid)) {
                    $data = ['vim'=>$catid];
                    $vim = $data['vim'];
                    $Appid = implode(',', $vim);
                    if ($this->userModel->AddFactModel($Factname, $Appid)) {
                        $response['message']= "New Faculty Has Been Successfully Added.!";
                        $response['status'] = true;
                    }else {
                        $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                        $response['status1'] = false;
                    }     
                }
            ob_end_clean();
            echo json_encode($response);
            }
        }
    }

    public function addDep(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                    $jsonString = file_get_contents("php://input");
                    $response = array();
                    //You can either use this or json_decode function
                    $phpObject = json_decode($jsonString);
                    $ftyname =  $phpObject->{'FtyName'};
                    $Depname =  $phpObject->{'Depname'};
                
                    if ($ftyname == "") {
                        $response['message']="The  field is required.";
                        $response['status1'] = false;
                    }
                    if ($Depname == "") {
                        $response['message']="The  field is required.";
                        $response['status2'] = false;
                    }
                    elseif (!empty($ftyname) && !empty($Depname)){
                        $data = 
                        [
                            'FtyName'=>$ftyname,
                            'Depname'=>$Depname,
                        ];
                        if ($this->userModel->AddDepModel($data)) {
                            $response['message']= "New Department Successfully Added.!";
                            $response['status'] = true;
                        }else {
                            $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                            $response['status1'] = false;
                        }     
                    }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }

    public function IsEditApp(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                //You can either use this or json_decode function
                $phpObject = json_decode($jsonString);
                $Appname =  $phpObject->{'Appname'};
                $id =  $phpObject->{'id'};
                if ($Appname == "") {
                    $response['message']="The  field is required.";
                    $response['status1'] = false;
                }
                elseif (!empty($Appname)) {
                    $data = ['Appname'=>$Appname, 'id'=>$id];
                if ($this->userModel->isEditApp($data)) {
                    $response['message']= "Successfully Updated.!";
                    $response['status'] = true;
                }else {
                    $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                    $response['status1'] = false;
                }     
            }
            ob_end_clean();
            echo json_encode($response);
        }
        }
    }

    public function IsEditFact(){
       if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                //You can either use this or json_decode function
                $phpObject = json_decode($jsonString);
                $Depname =  $phpObject->{'Depname'};
                $App =  $phpObject->{'App'};
                $id =  $phpObject->{'id'};
                if ($App == "") {
                $response['message']="The  field is required.";
                $response['status1'] = false;
                }
                if ($Depname == "") {
                $response['message']="The  field is required.";
                $response['status2'] = false;
                }
                
                elseif (!empty($Depname) && !empty($App) ) {
                    $App= implode(',', $App);
                    $data = ['App'=>$App, 'Depname'=>$Depname, 'id'=>$id];
                if ($this->userModel->isEditFact($data)) {
                    $response['message']= "Successfully Updated.!";
                    $response['status'] = true;
                }else {
                    $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                    $response['status1'] = false;
                }     
            }
            ob_end_clean();
            echo json_encode($response);
        }
    }
    }

     public function IsEditDep(){
         if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                //You can either use this or json_decode function
                $phpObject = json_decode($jsonString);
                $Depname =  $phpObject->{'Depname'};
                $id =  $phpObject->{'id'};
                $faculty =  $phpObject->{'faculty'};
                if (empty(array_filter($faculty))) {
                $response['message']="The  field is required.";
                $response['status1'] = false;
                }
                if ($Depname == "") {
                $response['message']="The  field is required.";
                $response['status2'] = false;
                }
                elseif (!empty($faculty) && !empty($Depname)) {
                $faculty = $faculty[0];
                $data = ['Depname'=>$Depname, 'id'=>$id, 'Fid'=>$faculty];
                if ($this->userModel->IsEditDep($data)) {
                    $response['message'] = "Successfully Updated.!";
                    $response['status']  = true;
                }else {
                    $response['message'] = "Sorry.. Something Went Wrong On The Data Processing..!";
                    $response['status1'] = false;
                }     
            }
            ob_end_clean();
            echo json_encode($response);
        }
    }
    }
    
 
    public function faculties(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $ftsql = $this->userModel->facultiessSql();
            @$App = @$this->userModel->FetchDataAsMenuBar();
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'page_title'=>'Faculties',
                'facultylist'=>$ftsql,
                'App'=>$App
            ];
            
            $this->view("Admin/Faculties", $data);
        }
    }

    public function Department(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $dp = $this->userModel->AdminSQLfetchDepartment();
            @$throwprogram = @$this->userModel->facultiessSql();
            $data =
            [
                'settings'=>$this->_AppSettings(),
                'page_title'=>'Department',
                'dp'=>$dp,
                'App'=>@$throwprogram
            ];
            $this->view('Admin/Department', $data);
        }
    }


    public function mioprer(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                //You can either use this or json_decode function
                $phpObject = json_decode($jsonString);

                $id =  $phpObject->{'id'};
                $fname = $phpObject->{'fname'};
                $lname =  $phpObject->{'lname'}; 
                $email =  $phpObject->{'email'}; 
                $gender =  $phpObject->{'gender'};
                $DOB =  $phpObject->{'DOB'};
                $tel =  $phpObject->{'tel'}; 
                $address =  $phpObject->{'address'}; 

                if ($fname == "") {
                $response['message']="The  field is required.";
                $response['status1'] = false;
                }
                if ($lname == "") {
                $response['message']="The  field is required.";
                $response['status2'] = false;
                }
                if ($email == "") {
                $response['message']="The  field is required.";
                $response['status3'] = false;
                }
                if ($gender == "") {
                $response['message']="The  field is required.";
                $response['status4'] = false;
                }
                if ($DOB == "") {
                $response['message']="The  field is required.";
                $response['status5'] = false;
                }
                if ($tel == "") {
                $response['message']="The  field is required.";
                $response['status6'] = false;
                }           
                if ($address == "") {
                $response['message']="The  field is required.";
                $response['status7'] = false;
                }
                elseif (!empty($fname) && !empty($lname) && !empty($email) && !empty($gender) && !empty($DOB) && !empty($tel) && !empty($address)) {
                $data = [
                    'id'=>$id,
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'email'=>$email,
                    'gender'=>$gender,
                    'DOB'=>$DOB,
                    'mobile'=>$tel,
                    'address'=>$address
                ];
                if ($this->userModel->UpdateparentModel($data)) {
                    $response['message']= "Successfully Update.!";
                    $response['status'] = true;
                }else {
                    $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                    $response['status1'] = false;
                }     
            }
            ob_end_clean();
            echo json_encode($response);
        }
}
    }

    public function Courses(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $get_all_courses = $this->_getting_data_display->get_all_courses();
            $Dept = $this->userModel->AdminSQLfetchDepartment();
            $class = $this->userModel->fetchClass();
            $semester = $this->userModel->fetchsemeter();
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'page_title'=>'Course',
                'cr'=>$get_all_courses,
                'dep'=>$Dept,
                'class'=>$class,
                'smt'=>$semester
            ];
            $this->view('Admin/Courses', $data);
        }
    }

    public function addcourse(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else{
            if(!isLoggedInAdmin()){
                header('location:' . ROOT . 'Administration/Default');
            }else {
                if(validata_api_request_header()){
                    ob_start();
                    $jsonString = file_get_contents("php://input");
                    $response = array();
                    //You can either use this or json_decode function
                    $phpObject = json_decode($jsonString);

                    $departmemtid =  $phpObject->{'departmemtid'};
                    $classid = $phpObject->{'classid'};
                    $semester =  $phpObject->{'semester'}; 
                    $courscode =  $phpObject->{'courscode'}; 
                    $coursname =  $phpObject->{'coursname'};
                    $CoursesUnit =  $phpObject->{'CoursesUnit'};
                    $CourseStatus =  $phpObject->{'CourseStatus'}; 

                    if ($departmemtid == "") {
                        $response['message']="The  field is required.";
                        $response['status1'] = false;
                    }
                    if ($classid == "") {
                        $response['message']="The  field is required.";
                        $response['status2'] = false;
                    }
                    if ($semester == "") {
                        $response['message']="The  field is required.";
                        $response['status3'] = false;
                    }
                    if ($courscode == "") {
                        $response['message']="The  field is required.";
                        $response['status4'] = false;
                    }
                    if ($coursname == "") {
                        $response['message']="The  field is required.";
                        $response['status5'] = false;
                    }
                    if ($CoursesUnit == "") {
                        $response['message']="The  field is required.";
                        $response['status6'] = false;
                    }           
                    if ($CourseStatus == "") {
                        $response['message']="The  field is required.";
                        $response['status7'] = false;
                    }
                    elseif (!empty($departmemtid) && !empty($classid) && !empty($semester) && !empty($courscode)  && !empty($coursname) && !empty($CoursesUnit) && !empty($CourseStatus)) {
                        $data = [
                            'settings'=>$this->_AppSettings(),
                            'departmemtid'=>$departmemtid,
                            'classid'=>$classid,
                            'semester'=>$semester,
                            'courscode'=>$courscode,
                            'coursname'=>$coursname,
                            'CoursesUnit'=>$CoursesUnit,
                            'CourseStatus'=>$CourseStatus
                        ];
                        if ($this->userModel->AddCourseModel($data)) {
                            $response['message']= "Successfully Added.!";
                            $response['status'] = true;
                        }else {
                            $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                            $response['status1'] = false;
                        }     
                    }
                    ob_end_clean();
                    echo json_encode($response);
                }
            }
        }
    }

     public function isEditCourse(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                //You can either use this or json_decode function
                $phpObject = json_decode($jsonString);

                $id =  $phpObject->{'id'};
                $departmemtid =  $phpObject->{'departmemtid'};
                $classid = $phpObject->{'classid'};
                $semester =  $phpObject->{'semester'}; 
                $courscode =  $phpObject->{'courscode'}; 
                $coursname =  $phpObject->{'coursname'};
                $CoursesUnit =  $phpObject->{'CoursesUnit'};
                $CourseStatus =  $phpObject->{'CourseStatus'}; 

                if ($departmemtid == "") {
                    $response['message']="The  field is required.";
                    $response['status1'] = false;
                }
                if ($classid == "") {
                    $response['message']="The  field is required.";
                    $response['status2'] = false;
                }
                if ($semester == "") {
                    $response['message']="The  field is required.";
                    $response['status3'] = false;
                }
                if ($courscode == "") {
                    $response['message']="The  field is required.";
                    $response['status4'] = false;
                }
                if ($coursname == "") {
                    $response['message']="The  field is required.";
                    $response['status5'] = false;
                }
                if ($CoursesUnit == "") {
                    $response['message']="The  field is required.";
                    $response['status6'] = false;
                }           
                if ($CourseStatus == "") {
                    $response['message']="The  field is required.";
                    $response['status7'] = false;
                }
                elseif (!empty($departmemtid) && !empty($classid) && !empty($semester) && !empty($courscode)  && !empty($coursname) && !empty($CoursesUnit) && !empty($CourseStatus)) {
                    $data = [
                        'id'=>trim(filter_var((int)$id, FILTER_SANITIZE_NUMBER_INT)),
                        'departmemtid'=>trim(filter_var((int)$departmemtid, FILTER_SANITIZE_NUMBER_INT)),
                        'classid'=>trim(filter_var((int)$classid, FILTER_SANITIZE_NUMBER_INT)),
                        'semester'=>trim(filter_var((int)$semester, FILTER_SANITIZE_NUMBER_INT)),
                        'courscode'=>trim(filter_var($courscode, FILTER_SANITIZE_STRING)),
                        'coursname'=>trim(filter_var($coursname, FILTER_SANITIZE_STRING)),
                        'CoursesUnit'=>trim(filter_var($CoursesUnit, FILTER_SANITIZE_STRING)),
                        'CourseStatus'=>trim(filter_var($CourseStatus, FILTER_SANITIZE_STRING)),
                    ];
                    if ($this->userModel->EditCourseModel($data)) {
                        $response['message']= "Successfully Updated.!";
                        $response['status'] = true;
                    }else {
                        $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                        $response['status1'] = false;
                    }     
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }        
    }

    public function courses_subjects(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $getAll_subjects=$this->_getting_data_display->get_all_courses_subjects();
            $get_all_courses = $this->_getting_data_display->get_all_courses();
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'page_title'=>'Courses Subjects',
                'subject_data'=>((!empty($getAll_subjects))?$getAll_subjects:''),
                'courses_data'=>$get_all_courses,
            ];
            $this->view('Admin/courses_subjects', $data);
        }
    }
    public function isCore($url){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         }else {
            $urlParts = explode('/', $url); 
            // Set Controller 
            $controller = !empty($urlParts[0])? $urlParts[0] : ROOT.'Admin/Courses';
            $controllerName = $controller;
            $id= trim(filter_var((int)$controllerName, FILTER_SANITIZE_NUMBER_INT)); 
            $getCourseData = $this->userModel->getCourseData($id);
            // department id need to be validated
            $departmemtid = $getCourseData->DepartmentID;
            // class id need to be validated 
            $ClassID = $getCourseData->ClassID;
            // semester id need to be validated 
            $SemesterID = $getCourseData->SemesterID;

            $CourseCode = $getCourseData->CourseCode;
            $CourseTitle = $getCourseData->CourseTitle;
            $CourseUnit = $getCourseData->CourseUnit;
            $CourseStatus = $getCourseData->CourseStatus;
          
            if (isset($departmemtid)) {
                $id = $departmemtid;
                $getDepartmentData = $this->userModel->isEditDepartment($id);
                $depid = $getDepartmentData->DepartmentID;
                $depname = $getDepartmentData->DepartmentName;
            }
            if (isset($ClassID)) {
                $id =  $ClassID;
                $getclassData = $this->userModel->getClassData($id);
                $className = $getclassData->Title;
            }
            if (isset($SemesterID) && $SemesterID != 0) {
                $id = $SemesterID;
                $getSemester = $this->userModel->SQLSemesterID($id);
                $smtid =$getSemester->SemesterID;
                $smtname =$getSemester->Title;
            }
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'id'=>$controllerName,
                // department
                'depid'=>$depid,
                'depname'=>$depname,
                // class
                'classid'=>$ClassID,
                'className'=>$className,
                // Course
                'CourseCode'=>$CourseCode,
                'CourseTitle'=>$CourseTitle,
                'CourseUnit'=>$CourseUnit,
                'CourseStatus'=>$CourseStatus,
                // semester
                'semID'=>((isset($smtid))?$smtid:'0'),
                'semName'=>((isset($smtname))?$smtname:'No Semester'),
            ];
            
            $this->view('Admin/edit/CourseEdit', $data);
         }
    }
    
    public function editclass(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        else {
            $id = trim(filter_var((int)$_POST['id'], FILTER_SANITIZE_NUMBER_INT));
            $getEditableData =  $this->userModel->EditClassData($id);
            $Classname = $getEditableData->Title;
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'Classname'=>$Classname,
                'id'=>$id,
            ];
            $this->view('Admin/modal/editClass', $data);
        }
    }
    public function Class(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $getClassSqlModel = $this->userModel->ClassModel();
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'class'=>$getClassSqlModel,
            ];
            $this->view('Admin/Class', $data);
        }
    }
    public function addClass(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else{
            if(!isLoggedInAdmin()){
                header('location:' . ROOT . 'Administration/Default');
            }else {
                if(validata_api_request_header()){
                    ob_start();
                    $jsonString = file_get_contents("php://input");
                    $response = array();
                    //You can either use this or json_decode function
                    $phpObject = json_decode($jsonString);
                    $Classname =  $phpObject->{'Classname'};
                    if ($Classname == "") {
                        $response['message']="The  field is required.";
                        $response['status1'] = false;
                    }elseif (!empty($Classname) ) {
                        $data = 
                        [
                            'Classname'=>trim(filter_var($Classname, FILTER_SANITIZE_STRING)),
                        ];
                    if ($this->userModel->AddClassModel($data)) {
                            $response['message']= "Successfully Added..!";
                            $response['status'] = true;
                        }else {
                            $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                            $response['status1'] = false;
                        }     
                    }
                    ob_end_clean();
                    echo json_encode($response);
                }
            }
        }
    }
    public function saveEditClass(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else{
            if(!isLoggedInAdmin()){
                header('location:' . ROOT . 'Administration/Default');
            }else {
                if(validata_api_request_header()){
                    ob_start();
                    $jsonString = file_get_contents("php://input");
                    $response = array();
                    //You can either use this or json_decode function
                    $phpObject = json_decode($jsonString);

                    $id =  $phpObject->{'id'};
                    $Classname =  $phpObject->{'Classname'};
                    if ($Classname == "") {
                        $response['message']="The  field is required.";
                        $response['status1'] = false;
                    }elseif (!empty($Classname) ) {
                        $data = 
                        [
                            'id'=>trim(filter_var((int)$id, FILTER_SANITIZE_NUMBER_INT)),
                            'Classname'=>trim(filter_var($Classname, FILTER_SANITIZE_STRING)),
                        ];
                    if ($this->userModel->UpdateClassModel($data)) {
                            $response['message']= "Successfully Updated.!";
                            $response['status'] = true;
                        }else {
                            $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                            $response['status1'] = false;
                        }     
                    }
                    ob_end_clean();
                    echo json_encode($response);
                }
            }
        }
    }

    public function DeleteClass(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else{
            if(!isLoggedInAdmin()){
                header('location:' . ROOT . 'Administration/Default');
            }else {
                if(validata_api_request_header()){
                    ob_start();
                    $jsonString = file_get_contents("php://input");
                    $response = array();
                    $phpObject = json_decode($jsonString);
                    $getData=$phpObject->{'id'};
                    $newJsonString = json_encode($phpObject);
                    $id = $getData;
                    //Return json message to the GUI
                    if($this->userModel->DeleteClass($id)){
                        $response['status'] = 200;
                        $response['message']= 'Successfully deleted.';
                    }
                    ob_end_clean();
                    echo json_encode($response);
                }
            }
        }
    }

    public function Semester(){
         if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied','settings'=>$this->_AppSettings(),];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $getSemesterSqlModel = $this->userModel->fetchsemeter();
            $getClassSqlModel = $this->userModel->ClassModel();
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'semester'=>$getSemesterSqlModel,
                'class'=>$getClassSqlModel,
            ];
            $this->view('Admin/Semester', $data);
        }
    }

     public function Deletesemester(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
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
        $id = $getData;
        //Return json message to the GUI
        if($this->userModel->DeleteSemester($id)){
            $response['status'] = 200;
            $response['message']= 'Successfully deleted.';
        }
        ob_end_clean();
        echo json_encode($response);
    }

    public function RenderSemesterAdd(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'id'};
                $newJsonString = json_encode($phpObject);
                $___ApplicationType = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
                if(!empty($___ApplicationType) && (is_numeric($___ApplicationType))){
                    $id = $___ApplicationType;
                    $crf= $this->userModel->SQLSemester($id);
                    if ($crf) {
                        $response['Status'] = '200'; 
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
        }
    }

    public function AddSemester(){
       if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);

                $ClassVal = $phpObject->{'ClassVal'};
                $Classname1 = $phpObject->{'Classname1'};
                $Classname2 = $phpObject->{'Classname2'};
                $CombinedData = $phpObject->{'CombinedData'};

                $newJsonString = json_encode($phpObject);
                
                if ($ClassVal == "") {
                    $response['message']="The  field is required.";
                    $response['status1'] = false;
                }
                if ($Classname1 == "") {
                    $response['message']="The  field is required.";
                    $response['status2'] = false;
                }
                if ($Classname2 == "") {
                    $response['message']="The  field is required.";
                    $response['status3'] = false;
                }
                if ($CombinedData == "") {
                    $response['message']="The  field is required.";
                    $response['status4'] = false;
                }elseif (!empty($CombinedData) && !empty($ClassVal)) {
                    if ($Classname2 =='FIRST SEMESTER') {
                        $parent = 1;
                    }elseif ($Classname2 =='SECOND SEMESTER') {
                        $parent = 2;
                    }
                    $data = 
                    [
                        'classid'=>$ClassVal,
                        'title'=>$CombinedData,
                        'parent'=>$parent
                    ];
                    $countRow=$this->userModel->checksemester($ClassVal);
                    if ($countRow ==2 || $countRow > 2) {
                        $response['status'] = false;
                        $response['message']= 'This Class Can Not Have More Than 2 Semester..!';
                    }else {
                        if($this->userModel->createnewsemester($data)) {
                            $response['status'] = true;
                            $response['message']= 'A New Semester Has Successfully Added.!';
                        }
                    }
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
 
    public function resetDATA(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $action = $_GET['action'];

                if ($action== 'get_classes') {
                    $getClassSqlModel = $this->userModel->ClassModel();
                    if ($getClassSqlModel) {
                        $response['data']= $getClassSqlModel;
                    }else {
                        $response['data']='No Data Found';
                    }
                }
                if ($action == 'isSaveEdit') {

                    $id = $phpObject->{'id'};
                    $Parent = $phpObject->{'Parent'};
                    $ClassVal = $phpObject->{'ClassVal'};
                    $Classname1 = $phpObject->{'Classname1'};
                    $Classname2 = $phpObject->{'Classname2'};
                    $CombinedData = $phpObject->{'CombinedData'};

                    $newJsonString = json_encode($phpObject);

                    if ($ClassVal == "") {
                        $response['message']="The  field is required.";
                        $response['status1'] = false;
                    }
                    if ($Classname1 == "") {
                        $response['message']="The  field is required.";
                        $response['status2'] = false;
                    }
                    if ($Classname2 == "") {
                        $response['message']="The  field is required.";
                        $response['status3'] = false;
                    }
                    if ($CombinedData == "") {
                        $response['message']="The  field is required.";
                        $response['status4'] = false;
                    }elseif (!empty($CombinedData) && !empty($ClassVal)) {
                        if ($Classname2 =='FIRST SEMESTER') {
                            $dparent = 1;
                        }elseif ($Classname2 =='SECOND SEMESTER') {
                            $dparent = 2;
                        }
                        $data = 
                        [
                            'id'=>(int)$id,
                            'Parent'=>$dparent,
                            'classid'=>$ClassVal,
                            'title'=>$CombinedData,
                            'parent'=>$parent
                        ];
                        $countRow=$this->userModel->checksemester($ClassVal);
                        if ($countRow ==2 || $countRow > 2) {
                            $response['status'] = false;
                            $response['message']= 'This Class Can Not Have More Than 2 Semester..!';
                        }else {
                            if($this->userModel->EditSemester($data)) {
                                $response['status'] = true;
                                $response['message']= 'A New Semester Has Successfully Added.!';
                            }
                        }
                    }
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    public function isSemes($url){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            $urlParts = explode('/', $url); 
            // Set Controller 
            $controller = !empty($urlParts[0])? $urlParts[0] : ROOT.'Admin/Semester';
            $controllerName = $controller;
            
            $id= trim(filter_var((int)$controllerName, FILTER_SANITIZE_NUMBER_INT));
            $editId = $id;
            $semesterSql= $this->userModel->GetSemesterData($id);
            $id = $semesterSql->ClassID;
            $class = $this->userModel->getClassData($id);
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'class'=>$class,
                'id'=>$editId,
                'semesterdata'=>$semesterSql,
            ];
            $this->view('Admin/edit/editSemester', $data);
        }
    }

    public function exam(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $getExamset = $this->userModel->getExamData();
            $data = 
            [
                'settings'=>$this->_AppSettings(),
                'page_title'=>'Exam view',
                'exam'=>(!empty($getExamset)) ? $getExamset : '',
            ];
            $this->view('Admin/exam', $data);
        }
    }

    public function record(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            $url=implode('',$_REQUEST);
            $urlParts = explode('/', $url);
            if (!isset($urlParts[2]) || empty($urlParts[2])) {
               echo "<script>
                        alert('Invalid URL Request.!');
                        window.location.replace('". ROOT ."Admin/Students');
                    </script>";
            }else {
                // Set Controller ? 
                $controller = (((!empty($urlParts[2])) ? $urlParts[2] : ROOT.'Admin/Students'));
                $controllerName = $controller;
                $id= trim(filter_var((int)$controllerName, FILTER_SANITIZE_NUMBER_INT));
                $id = $id;
                $getData = $this->userModel->Viewstd($id);
    
                 $collections=
                [
                    'settings'=>$this->_AppSettings(),
                    'page_title'=>'Student Performance | Record',
                    'id'=>$id,
                    'f_id'=>$getData->Faculty_id,
                    'd_id'=>$getData->Department_id,
                    'c_id'=>$getData->Class,
                    's_id'=>$getData->semester,
                    'con_id'=>$getData->Conid
                ];
                
                $get_student_record = $this->userModel->getStudentRecord($collections);
                $get_student_semester= $this->userModel->isFetchSemester();
                $get_student_class= $this->userModel->ClassModel();
                $data=
                [
                    'settings'=>$this->_AppSettings(),
                    'page_title'=>'Student Performance | Record',
                    'data'=>$get_student_record,
                    'sme'=>$get_student_semester,
                    'cls'=>$get_student_class,
                    'id'=>$id,
                ];
                $this->view('Admin/student_record', $data);
            }
           
        }
    }

    public function data(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $action = $_GET['action'];
            if ($action =='view_exam') {
                $id = trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING));
                $getexamData = $this->userModel->getExamSettingData($id);
                if (!empty($getexamData)) {
                    $data=
                    ['data'=>$getexamData];
                    $this->view('Admin/modal/exam_modal', $data);
                }
            }
            if ($action == 'change_status') {
                 if(isset($_GET['status'])){
                    // Sanitize POST data
                    $status = $_GET['status'];
                    $id= (int)$_GET['id'];
                    $data = 
                        [
                            'settings'=>$this->_AppSettings(),
                            'page_title'=>'Application Page',
                            'id'=>$id,
                            'status'=>$status
                        ];
                        if ($this->userModel->saveCategoryStatusChanges($data)){
                            //Redirect to the page
                            header('location:'.ROOT.'Admin/Application' );
                        } else {
                            die('Sorry..! Something went wrong');
                        }
                    }
            }
            if ($action =='get_record') {
              if(!isLoggedInAdmin()){
                    header('location:' . ROOT . 'Administration/Default');
                }else {
                    if(validata_api_request_header()){
                        ob_start();
                        $jsonString = file_get_contents("php://input");
                        $response = array();
                        $phpObject = json_decode($jsonString);
                        $depid=$phpObject->{'department'};
                        $Classid=$phpObject->{'class'};
                        $semsterid=$phpObject->{'semester'};
                        $newJsonString = json_encode($phpObject);
                        $get_student_course = $this->userModel->get_student_record($depid, $Classid, $semsterid);
                        if ($get_student_course) {
                            $response['status']=200;
                            $response['data']=$get_student_course;
                        }else {
                            $response['status']=400;
                            $response['message']='Sorry..! Student Has\'t Performan Any Task Yet.';
                        }
                    }
                    ob_end_clean();
                    echo json_encode($response);
                }
            }
        }
    }

    public function settings(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            if (!isset($_GET['action'])) {
                header('location:' . ROOT . 'Admin/settings?action=role');
            }
            $isSettings_Data = $this->_settings_model->_isGetLogo();
            //get all table in database

            $_isget_Tb=$this->_tbl_model->_isget_allTable();
            $data=['settings'=>$this->_AppSettings(), 'page_title'=>'Settings', 'tb'=>$_isget_Tb, 'settingsdata'=>$isSettings_Data];
            $this->view('Admin/Settings', $data);
        }
    }

    public function _isvalidatetb(){
        if(AuthCheck() == false){
            $data= ['settings'=>$this->_AppSettings(),'page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $url=implode('',$_REQUEST);
            $urlParts = explode('/', $url);
            if (!isset($urlParts[2]) || empty($urlParts[2])) {
               echo "<script>
                        alert('Invalid URL Request.!');
                        window.location.replace('". ROOT ."Admin/settings');
                    </script>";
            }else {
                // Set Controller ? 
                $controller = (((!empty($urlParts[2])) ? $urlParts[2] : ROOT.'Admin/settings'));
                $controllerName = $controller;
                $table= trim(filter_var($controllerName, FILTER_SANITIZE_STRING));
                $action = $urlParts[3];
                if($this->_tbl_model->_isprocess_tb($table, $action)){
                    echo "<script> alert('Table successfully ".$action.".!'); window.location.replace('". ROOT ."Admin/settings');</script>";
                }else{
                    return "Failed to Process Table";
                }
                
            }
        }
    }

    public function analysis(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $data=[
                'settings'=>$this->_AppSettings(),
                'page_title'=>'View Data Anaylsis',
            ];
            $this->view('Admin/Analysis/data', $data);
        }
    }

    public function _indexchart(){
        if(AuthCheck() == false){
            $data= ['settings'=>$this->_AppSettings(), 'page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            if(isset($_POST["action"]))
            {
                if($_POST["action"] == 'fetch')
                { 
                    $_show_chart_display=$this->_chat_module->_chart();
                    echo json_encode($_show_chart_display);
                }
            }
        }
    }

    public function sendComplain(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
           if(!isLoggedInAdmin()){
                header('location:' . ROOT . 'Administration/Default');
            }else {
                if(validata_api_request_header()){
                    ob_start();
                    $jsonString = file_get_contents("php://input");
                    $response = array();
                    $phpObject = json_decode($jsonString);
                    $message=$phpObject->{'msg'};

                    $newJsonString = json_encode($phpObject);
                
                    if (!empty($message)) {
                        $response['status']=200;
                        $response['message']='Your Complains has been sent to MidTech company successfully..!';
                    }else {
                        $response['status']=400;
                        $response['message']='Sorry..! Message could not be send..!';
                    }
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }


    public function Action(){
       if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $action =$_GET['action'];
            if ($action='change_logo') {
             
                $response = array();
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                if (isset($_FILES['file']['name']) != ''){
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
                    $uploadName = uniqid().'.'.$fileExt;
                    
                    $uploadPath =  'logo/'.trim(filter_var('_newLogo'.date("Y-m-d"), FILTER_SANITIZE_STRING)).'/'.$uploadName; 
                    $dbpath     =  'logo/'.trim(filter_var('_newLogo'.date("Y-m-d"), FILTER_SANITIZE_STRING)).'/'.$uploadName;
                    $folder =  'logo/'.trim(filter_var('_newLogo'.date("Y-m-d"), FILTER_SANITIZE_STRING));
                    if ($fileSize > 90000000000000) {
                        $response['status'] = 300;
                        $response['errormsg'] = '<b>ERROR:</b>Your file was larger than 50kb in file size.';
                    }elseif ($fileSize < 90000000000000 ) {
                        
                        if(!file_exists($folder)){
                            mkdir($folder,077,true);
                        }
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
                        if ($this->_settings_model->__saveLogoChanges($uploadPath)) {
                            $response['status'] = 200;
                            $response['message'] = 'Application Logo Has Successfully Updated.!';
                        } 
                    }
                     ob_end_clean();
                    echo json_encode($response);
                }
            }
        }
  }


  public function ischange_school_name(){
    if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $schoolname=$phpObject->{'_name'};

                $newJsonString = json_encode($phpObject);

                if ($this->_settings_model->__saveTitleChanges($schoolname)) {
                    $response['status']=200;
                    $response['message']='School name has been successfully changed.!';
                }else {
                    $response['status']=400;
                    $response['message']='Sorry..! Couldn\'t proccess changes.!';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
    
    public function _backup_db(){
    if(AuthCheck() == false){
        $data= ['settings'=>$this->_AppSettings(),'page_title' => 'Access Denied'];
        $this->view('Error404', $data);
        dnd('');
    }else{
        // Backup database and send it to user via email
        if($this->_backup_model->_backupDb()){
            redirect('/dashboard');
            
        }
    }
  }


   public function addSubject(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            if(validata_api_request_header()){
                $jsonString = file_get_contents("php://input");
                $response = array();
                //You can either use this or json_decode function
                $phpObject = json_decode($jsonString);
                $course =  $phpObject->{'course'};
                $courseid =  $phpObject->{'courseid'};
                $coursecode =  $phpObject->{'course_code'};
                $subject =  $phpObject->{'subject'};
            
                if ($course == "") {
                    $response['message']="The  field is required.";
                    $response['status1'] = false;
                }
                if ($subject == "") {
                    $response['message']="The  field is required.";
                    $response['status2'] = false;
                }
                elseif (!empty($course) && !empty($subject)){
                    
                    if ($this->_adding_data->addcourse($courseid,$subject,$course, $coursecode)) {
                        $response['message']= "New subject successfully added.!";
                        $response['status'] = true;
                    }else {
                        $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                        $response['status1'] = false;
                    }     
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }

    
    public function edit_subject(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            $url=implode('',$_REQUEST);
            $urlParts = explode('/', $url);
            if (!isset($urlParts[2]) || empty($urlParts[2])){
                echo "<script>
                            alert('Invalid URL Request.!');
                            window.location.replace('". ROOT ."Admin/courses_subjects');
                        </script>";
            }else if(is_numeric($urlParts[2])==false){
                    echo "<script>
                        alert('Invalid Subject ID Sent..!');
                        window.location.replace('". ROOT ."Admin/courses_subjects');
                    </script>";
            }else{
                // Set Controller ? 
                $controller = (((!empty($urlParts[2])) ? $urlParts[2] : ROOT.'Admin/courses_subjects'));
                $controllerName = $controller;
                $id=  strip_tags(trim((filter_var($controllerName, FILTER_SANITIZE_NUMBER_INT))));

                $isget_department = $this->_getting_data_display->get_edit_subject($id);
                //dnd($isget_department);
                if ($isget_department) {
                    $data = 
                    [
                        'settings'=>$this->_AppSettings(),
                        'page_title'=>'Edit Subject',
                        'Dep'=>$isget_department,
                    ];
                    $this->view('Admin/edit/edit_course_subject', $data);
                }else{
                    echo "<script>
                        alert('The department does not exist anymore..!');
                        window.location.replace('". ROOT ."Admin/courses_subjects');
                    </script>";
                }
            }
         }
    }

    
   public function save_edit_subject(){
        if(AuthCheck() == false){
            $data= ['page_title' => 'Access Denied'];
            $this->view('Error404', $data);
           dnd('');
        }else{
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                //You can either use this or json_decode function
                $phpObject = json_decode($jsonString);
                $edit_id =  $phpObject->{'id'};
                $course =  $phpObject->{'course'};
                $courseid =  $phpObject->{'courseid'};
                $coursecode =  $phpObject->{'course_code'};
                $subject =  $phpObject->{'subject'};
            
                if ($course == "") {
                    $response['message']="The  field is required.";
                    $response['status1'] = false;
                }
                if ($subject == "") {
                    $response['message']="The  field is required.";
                    $response['status2'] = false;
                }
                elseif (!empty($course) && !empty($subject)){
                    if ($this->_editing_data->edit_course($edit_id, $courseid,$subject,$course, $coursecode)) {
                        $response['message']= "Subject successfully updated.!";
                        $response['status'] = true;
                    }else {
                        $response['message']="Sorry.. Something Went Wrong On The Data Processing..!";
                        $response['status1'] = false;
                    }     
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }

     public function delete_subject(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }else {
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $getData=$phpObject->{'DataId'};
                $newJsonString = json_encode($phpObject);
                $id = $getData;
                //Return json message to the GUI
                if($this->_deleting_data->delete_subject($id)){
                    $response['status'] = 200;
                    $response['message']= 'Successfully deleted.';
                }
                ob_end_clean();
                echo json_encode($response);
            }
        }
    }
}