<?php
class Admin extends Controller {
// Import PHPMailer classes into the global namespace  

    /**
     * My New Server email password: dRi^8%c*$9i-
     * @var false|mixed
     * Author: David AkpELE
     * FROM: MidTech Private Limited
     */

    private $userModel;
    public function __construct() {
        $this->userModel = $this->loadModel('User');
    }
    //To Creating Other web page, You just need to create a method
    public function index() {
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         }
        $countStudent = $this->userModel->studentDataCount();
        $CountProfessors= $this->userModel->LecturalDataCount();
        $countAccountant = $this->userModel->AccountDataCount();
        $data = 
        [
            'page_title' => 'Administrative Dashboard ',
            'count'=> $countStudent,
            'lt'=>$CountProfessors,
            'ReadOnly'=> $countAccountant
        ];
        $this->view('Admin/index', $data);
    }

// Admin all profile methodjhgouihpigfiyfougy98
    public function Professors(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         }
        $stmt = $this->userModel->lectural();
        $data = 
        [
            'page_title' => 'PROFESSOR TABLE',
            'All'=> $stmt
        ];
        if(isset($_GET['featured'])){
			// Sanitize POST data
            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
            $Professor__id = $_GET['Professor__id'];
            $featured= (int)$_GET['featured'];
           $data = 
            [
                'page_title'=> 'PROFESSOR TABLE LIST',
                'ft'=> $stmt1,
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
         
        if(isset($_POST['___AddNewProfessor']) && !empty($_FILES)){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
              // var_dump($_FILES);
                $photo = $_FILES['Profile__Picture'];
                $name = $photo['name'];
                $nameArray = explode('.', $name);
                $fileName = $nameArray[0];
                $fileExt = $nameArray[1];
                $mime = explode('/', $photo['type']);
                $mimeType = $mime[0];
                $mimeExt = $mime[1];
                $tmpLoc = $photo['tmp_name'];   
                $fileSize = $photo['size']; 
                $allowed = array('jpg', 'jpeg', 'png');
                $uploadName = md5(microtime()).'.'.$fileExt;
                $uploadPath = 'Professors/'.trim(filter_var($_POST['Professor__id'], FILTER_SANITIZE_STRING)).'/'.$uploadName; 
                $dbpath = 'Professors/'.trim(filter_var($_POST['Professor__id'], FILTER_SANITIZE_STRING)).'/'.$uploadName;
                $folder = 'Professors/'.trim(filter_var($_POST['Professor__id'], FILTER_SANITIZE_STRING));
                $arr['Profile__Picture'] = $uploadPath;
            $data = 
                    [
                    'page_title'=> 'ADD NEW PROFESSOR',
                    'Professor__id'=>trim(filter_var($_POST['Professor__id'], FILTER_SANITIZE_STRING)),
                    'Professor__idError'=> '',
                    'Surname'=>trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING)),
                    'SurnameError'=>'',
                    'Middle__name'=>trim(filter_var($_POST['Middle__name'], FILTER_SANITIZE_STRING)),
                    'Middle__nameError'=>'',
                    'Othername'=> trim(filter_var($_POST['Othername'], FILTER_SANITIZE_STRING)),
                    'OthernameError'=>'',
                    'Accesscode'=> trim(filter_var($_POST['Accesscode'], FILTER_SANITIZE_STRING)),
                    'AccesscodeError'=>'',
                    'Password'=>strip_tags(trim(filter_var($_POST['Password'], FILTER_SANITIZE_STRING))),
                    'PasswordError'=>'',
                    'Email'=>strip_tags(trim(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL))),
                    'EmailError'=>'',

                    'featured'=>'1',
                    'featuredError'=>'',
                    'Telephone_No'=>trim(filter_var($_POST['Telephone_No'], FILTER_SANITIZE_STRING)),
                    'Telephone_NoError'=>'',
                    'Date_of_Birth'=>trim(filter_var($_POST['Date_of_Birth'], FILTER_SANITIZE_STRING)),
                    'Date_of_BirthError'=>'',
                    'Place__of__birth'=>trim(filter_var($_POST['Place__of__birth'], FILTER_SANITIZE_STRING)),
                    'Place__of__birthError'=>'',
                    'Gender'=>trim(filter_var($_POST['Gender'], FILTER_SANITIZE_STRING)),
                    'GenderError'=>'',
                    'Relationship_sts'=>trim(filter_var($_POST['Relationship_sts'], FILTER_SANITIZE_STRING)),
                    'Relationship_stsError'=>'',
                    'Civil_status'=>trim(filter_var($_POST['Civil_status'], FILTER_SANITIZE_STRING)),
                    'Civil_statusError'=>'',
                    'Citizenship'=>trim(filter_var($_POST['Citizenship'], FILTER_SANITIZE_STRING)),
                    'CitizenshipError'=>'',
                    'NIN'=>strip_tags(trim(filter_var($_POST['NIN'], FILTER_SANITIZE_STRING))),
                    'NINError'=>'',
                    'Height'=>trim(filter_var($_POST['Height'], FILTER_SANITIZE_STRING)),
                    'HeightError'=>'',
                    'Weight'=>trim(filter_var($_POST['Weight'], FILTER_SANITIZE_STRING)),
                    'WeightError'=>'',
                    'Blood_Type'=>trim(filter_var($_POST['Blood_Type'], FILTER_SANITIZE_STRING)),
                    'Blood_TypeError'=>'',
                    'Religion'=>trim(filter_var($_POST['Religion'], FILTER_SANITIZE_STRING)),
                    'ReligionError'=>'',
                    'Qualification'=>trim(filter_var($_POST['Qualification'], FILTER_SANITIZE_STRING)),
                    'QualificationError'=>'',
                    'Profile__Picture'=>$uploadPath,
                    'Profile__PictureError'=>'',
                    'Address'=>trim(filter_var($_POST['Address'], FILTER_SANITIZE_STRING)),
                    'AddressError'=>'',
                ];
            
            if(empty($data['Professor__id'])){
                $data['Professor__idError']= 'Please provide the New Professor ID.';
            }
            if(empty($data['Surname'])){
                $data['SurnameError']= 'Please provide the surname of the Professor..';
            }
            if(empty($data['Middle__name'])){
               $data['Middle__nameError'] = "Enter Professor Middle Name.";
            }
            if(empty($data['Othername'])){
                $data['OthernameError']= 'Please provide the Accountatnt Last  Name.';
            }
            if(empty($data['Accesscode'])){
                $data['AccesscodeError']= 'Please provide the Accountatnt ACCESS CODE.';
            }
             if(empty($data['Password'])){
               $data['PasswordError'] = "Set Password for the Professor.";
            }
            if(empty($data['Email'])){
                $data['EmailError']= 'Please Enter The Professor Email Address.';
            }elseif (!filter_var($data['Email'], FILTER_VALIDATE_EMAIL)) {
                    $data['EmailError'] = 'Please Enter The Correct Format.';
                } else {
                    //Check if email exists.
                    if ($this->userModel->findProfessorByEmail($data['Email'])) {
                    $data['EmailError'] = 'Email Is Already Taken By Another User.';
                    }
                }
            if(empty($data['featured'])){
                $data['featuredError']= 'Grant Access to this Professor..';
            }
            if(empty($data['Telephone_No'])){
                $data['Telephone_NoError']= 'Enter the Professor Telephone Number.';
            }
             if(empty($data['Date_of_Birth'])){
               $data['Date_of_BirthError'] = "Enter the Professor Date of birth.";
            }
            if(empty($data['Place__of__birth'])){
                $data['Place__of__birthError']= 'Enter The Professor Place of birth.';
            }
            if(empty($data['Gender'])){
                $data['GenderError']= 'Please Select Professor Gender.';
            }
            if(empty($data['Relationship_sts'])){
                $data['Relationship_stsError']= 'Select the Professor Relationship Status..';
            }
            if(empty($data['Civil_status'])){
                $data['Civil_statusError']= 'Enter the Professor Civil status.';
            }
             if(empty($data['Citizenship'])){
               $data['CitizenshipError'] = "Enter the Professor Nationality";
            }
            if(empty($data['NIN'])){
                $data['NINError']= 'Please Enter The Professor NIN Number.';
            }
            if(empty($data['Height'])){
                $data['HeightError']= 'Please Select Professor Height. !!Important';
            }
            if(empty($data['Weight'])){
                $data['WeightError']= 'Please Select Professor Weight. !!Important';
            }
            if(empty($data['Blood_Type'])){
                $data['Blood_TypeError']= 'Please Select Professor Blood Type.';
            }
            if(empty($data['Religion'])){
                $data['ReligionError'] = 'Please Select Professor Religion.';
            }
            if(empty($data['Qualification'])){
                $data['QualificationError'] = 'Please Select his/her Qualification.';
            }
            if(empty($data['Profile__Picture'])){
                $data['Profile__PictureError']= 'Please Select Professor Profile Picture';
            }
            if(empty($data['Address'])){
                $data['AddressError']= 'Please Enter Professor Address.';
            }
            if (!in_array($fileExt, $allowed)) { 
                 $data['Profile__PictureError']= 'Please Select Professor Profile Picture & MUST be image';
                }
            if ($fileExt != $mimeExt && ($mimeExt == 'jpg' && $fileExt != 'jpeg')) {
                    $data['Profile__PictureError']= "File extention doesn't match the file required";
            }
            if($fileSize > 12000000){
                $data['Profile__PictureError']= 'The file must be under 10mb';
            }else{
                if(empty($data['Professor__idError'])&& empty($data['SurnameError'])
                    && empty($data['Middle__nameError'])&& empty($data['OthernameError'])
                    && empty($data['AccesscodeError'])&& empty($data['PasswordError'])
                    && empty($data['EmailError'])&& empty($data['featuredError'])
                    && empty($data['Date_of_BirthError'])&& empty($data['Telephone_NoError'])
                    && empty($data['Place__of__birthError'])&& empty($data['Relationship_stsError'])
                    && empty($data['Civil_statusError'])&& empty($data['CitizenshipError'])
                    && empty($data['HeightError'])&& empty($data['NINError'])&& empty($data['ReligionError'])
                    && empty($data['WeightError'])&& empty($data['Blood_TypeError'])
                    && empty($data['Profile__PictureError'])&& empty($data['AddressError'])
                    && empty($data['QualificationError'])){
                        if(!file_exists($folder)){
                            mkdir($folder,077,true);
                        }
                    move_uploaded_file($tmpLoc,$dbpath);
                     //hashing professor password
                    $data['Password'] = password_hash($data['Password'], PASSWORD_ARGON2ID);
                    if($this->userModel->AddProfessor($data)){
                        // Redirect the page
                        header('location:' . ROOT . 'Admin/Professors');
                    }else{
                        die('Something went wrong');
                    }
                }
            }
         }  

           if(isset($_POST['__EditProfessor'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
               // var_dump($_FILES);
                $photo = $_FILES['Profile__Picture'];
                $name = $photo['name'];
                $nameArray = explode('.', $name);
                $fileName = $nameArray[0];
                $fileExt = $nameArray[1];
                $mime = explode('/', $photo['type']);
                $mimeType = $mime[0];
                $mimeExt = $mime[1];
                $tmpLoc = $photo['tmp_name'];   
                $fileSize = $photo['size']; 
                $allowed = array('jpg', 'jpeg', 'png');
                $uploadName = md5(microtime()).'.'.$fileExt;
                $uploadPath = 'Professors/'.trim(filter_var($_POST['Professor__id'], FILTER_SANITIZE_STRING)).'/'.$uploadName; 
                $dbpath     = 'Professors/'.trim(filter_var($_POST['Professor__id'], FILTER_SANITIZE_STRING)).'/'.$uploadName;
                $folder = 'Professors/'.trim(filter_var($_POST['Professor__id'], FILTER_SANITIZE_STRING));
                $arr['Profile__Picture'] = $uploadPath;
            $data = 
            [
                'page_title'=> 'Edit PROFESSOR DATA',
                'Professor__id'=>trim(filter_var($_POST['Professor__id'], FILTER_SANITIZE_STRING)),
                'Professor__idError'=>'',
                'Surname'=>trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING)),
                'SurnameError'=>'',
                'Middle__name'=>trim(filter_var($_POST['Middle__name'], FILTER_SANITIZE_STRING)),
                'Middle__nameError'=>'',
                'Othername'=> trim(filter_var($_POST['Othername'], FILTER_SANITIZE_STRING)),
                'OthernameError'=>'',
                'Accesscode'=> trim(filter_var($_POST['Accesscode'], FILTER_SANITIZE_STRING)),
                'AccesscodeError'=>'',
                'Email'=>trim(filter_var($_POST['Email'], FILTER_SANITIZE_STRING)),
                'EmailError'=>'',
                'Telephone_No'=>trim(filter_var($_POST['Telephone_No'], FILTER_SANITIZE_STRING)),
                'Telephone_NoError'=>'',
                'Date_of_Birth'=>trim(filter_var($_POST['Date_of_Birth'], FILTER_SANITIZE_STRING)),
                'Date_of_BirthError'=>'',
                'Place__of__birth'=>trim(filter_var($_POST['Place__of__birth'], FILTER_SANITIZE_STRING)),
                'Place__of__birthError'=>'',
                'Gender'=>trim(filter_var($_POST['Gender'], FILTER_SANITIZE_STRING)),
                'GenderError'=>'',
                'Relationship_sts'=>trim(filter_var($_POST['Relationship_sts'], FILTER_SANITIZE_STRING)),
                'Relationship_stsError'=>'',
                'Civil_status'=>trim(filter_var($_POST['Civil_status'], FILTER_SANITIZE_STRING)),
                'Civil_statusError'=>'',
                'Citizenship'=>trim(filter_var($_POST['Citizenship'], FILTER_SANITIZE_STRING)),
                'CitizenshipError'=>'',
                'NIN'=>trim(filter_var($_POST['NIN'], FILTER_SANITIZE_STRING)),
                'NINError'=>'',
                'Height'=>trim(filter_var($_POST['Height'], FILTER_SANITIZE_STRING)),
                'HeightError'=>'',
                'Weight'=>trim(filter_var($_POST['Weight'], FILTER_SANITIZE_STRING)),
                'WeightError'=>'',
                'Blood_Type'=>trim(filter_var($_POST['Blood_Type'], FILTER_SANITIZE_STRING)),
                'Blood_TypeError'=>'',
                'Religion'=>trim(filter_var($_POST['Qualification'], FILTER_SANITIZE_STRING)),
                'ReligionError'=>'',
                'Qualification'=>trim(filter_var($_POST['Qualification'], FILTER_SANITIZE_STRING)),
                'QualificationError'=>'',
                'Profile__Picture'=>$uploadPath,
                'Profile__PictureError'=>'',
                'Address'=>trim(filter_var($_POST['Address'], FILTER_SANITIZE_STRING)),
                'AddressError'=>'',
            ];
            if(empty($data['Professor__id'])){
                $data['Professor__idError']= 'Please provide the New Professor ID.';
            }
            if(empty($data['Surname'])){
                $data['SurnameError']= 'Please provide the surname of the Professor..';
            }
            if(empty($data['Middle__name'])){
               $data['Middle__nameError'] = "Enter Professor Middle Name.";
            }
            if(empty($data['Othername'])){
                $data['OthernameError']= 'Please provide the Accountatnt Last  Name.';
            }
            if(empty($data['Accesscode'])){
                $data['AccesscodeError']= 'Please provide the Accountatnt ACCESS CODE.';
            }
            if(empty($data['Email'])){
                $data['EmailError']= 'Please Enter The Professor Email Address.';
            }elseif (!filter_var($data['Email'], FILTER_VALIDATE_EMAIL)) {
                    $data['EmailError'] = 'Please Enter The Correct Format.';
                }
            if(empty($data['Telephone_No'])){
                $data['Telephone_NoError']= 'Enter the Professor Telephone Number.';
            }
            if(empty($data['Date_of_Birth'])){
               $data['Date_of_BirthError'] = "Enter the Professor Date of birth.";
            }
            if(empty($data['Place__of__birth'])){
                $data['Place__of__birthError']= 'Enter The Professor Place of birth.';
            }
            if(empty($data['Gender'])){
                $data['GenderError']= 'Please Select Professor Gender.';
            }
            if(empty($data['Relationship_sts'])){
                $data['Relationship_stsError']= 'Select the Professor Relationship Status..';
            }
            if(empty($data['Civil_status'])){
                $data['Civil_statusError']= 'Enter the Professor Civil status.';
            }
             if(empty($data['Citizenship'])){
               $data['CitizenshipError'] = "Enter the Professor Nationality";
            }
            if(empty($data['NIN'])){
                $data['NINError']= 'Please Enter The Professor NIN Number.';
            }
            if(empty($data['Height'])){
                $data['HeightError']= 'Please Select Professor Height. !!Important';
            }
            if(empty($data['Weight'])){
                $data['WeightError']= 'Please Select Professor Weight. !!Important';
            }
            if(empty($data['Blood_Type'])){
                $data['Blood_TypeError']= 'Please Select Professor Blood Type.';
            }
            if(empty($data['Religion'])){
                $data['ReligionError'] = 'Please Select Professor Religion.';
            }
            if(empty($data['Qualification'])){
                $data['QualificationError'] = 'Please Select his/her Qualification.';
            }
            if(empty($data['Profile__Picture'])){
                $data['Profile__PictureError']= 'Please Select Professor Profile Picture';
            }
            if(empty($data['Address'])){
                $data['AddressError']= 'Please Enter Professor Address.';
            }
            if (!in_array($fileExt, $allowed)) {
                 $data['Profile__PictureError']= 'Please Select Professor Profile Picture & MUST be image';
                }
            if ($fileExt != $mimeExt && ($mimeExt == 'jpg' && $fileExt != 'jpeg')) {
                    $data['Profile__PictureError']= "File extention doesn't match the file required";
            }
            if($fileSize > 12000000){
                $data['Profile__PictureError']= 'The file must be under 10mb';
            }
            else{
                if(empty($data['Professor__idError'])&& empty($data['SurnameError'])
                    && empty($data['Middle__nameError'])&& empty($data['OthernameError'])
                    && empty($data['AccesscodeError'])&& empty($data['EmailError'])
                    && empty($data['Date_of_BirthError'])&& empty($data['Telephone_NoError'])
                    && empty($data['Place__of__birthError'])
                    && empty($data['Relationship_stsError'])&& empty($data['Civil_statusError'])
                    && empty($data['CitizenshipError'])&& empty($data['NINError'])
                    && empty($data['HeightError'])&& empty($data['WeightError'])
                    && empty($data['Blood_TypeError']) && empty($data['AddressError'])
                    && empty($data['Profile__PictureError'])){
                    if(!file_exists($folder)){
                        mkdir($folder,077,true);
                    }
                    move_uploaded_file($tmpLoc,$dbpath);
                    if($this->userModel->EditProfessor($data)){
                        // Redirect the page
                        header('location:' . ROOT . 'Admin/Professors');
                    }else{
                        die('Something went wrong');
                    }
                }
            }
         } 
         //  This right here will fetch data from the database to the UI
         if(isset($_GET['Edit'])){
            $Edit__id = trim(filter_var($_GET['Edit'], FILTER_SANITIZE_STRING));
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
                $Wat= $row->Weight;$Bty=$row->Blood_Type;$QCT=$row->Qualification;$photo=$row->Profile__Picture;
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
            $id = trim(filter_var((int)$_GET['View'], FILTER_SANITIZE_STRING));
            $id = $_GET['View'];
            $fetchSingleUser = $this->userModel->loadingProfData($id);
            if(!$fetchSingleUser == true){
                echo "<script>alert('Invalid ID Given..! Pleasee You are not authorised to Access this User. Contact Super Admin.');
                    window.location.replace('".ROOT."Admin/Professors/');
                </script>";
               // header('location:' . ROOT. 'Admin/Professors/');
            }
            if($fetchSingleUser == true){
                $returnIdS=$fetchSingleUser->Professor__id;$fname = $fetchSingleUser->Surname;$lname = $fetchSingleUser->Othername;$mname=$fetchSingleUser->Middle__name;$Ascode=$fetchSingleUser->Accesscode;$email=$fetchSingleUser->Email;$ftd=$fetchSingleUser->featured;$tel=$fetchSingleUser->Telephone_No;$DoB=$fetchSingleUser->Date_of_Birth;$PoD=$fetchSingleUser->Place__of__birth;$gn= $fetchSingleUser->Gender;$relatx=$fetchSingleUser->Relationship_sts;$Cst=$fetchSingleUser->Civil_status;$Ctz= $fetchSingleUser->Citizenship;$nin=$fetchSingleUser->NIN;$Hat=$fetchSingleUser->Height;$Wat= $fetchSingleUser->Weight;$QCT =$fetchSingleUser->Qualification;$Religion =$fetchSingleUser->Religion;$Bty=$fetchSingleUser->Blood_Type;$photo=$fetchSingleUser->Profile__Picture;$Add=$fetchSingleUser->Address;
                $patch = $fname .' '.$lname;
                $data = 
                [
                    'page_title'=>'View '.$patch.' Personal Data Sheet - PROFILE',
                    'returnIdS'=>$returnIdS,'sname'=>$fname,'Oname'=>$lname,'mname'=>$mname,'Ascode'=>$Ascode,'email'=>$email,'ftd'=>$ftd,'tel'=>$tel,'DoB'=>$DoB,'PoD'=>$PoD,'gn'=>$gn,'relatx'=>$relatx,'Cst'=>$Cst,'Ctz'=>$Ctz,'nin'=>$nin,'Hat'=>$Hat,'Wat'=>$Wat,'QCT'=>$QCT,'Religion'=>$Religion,'Bty'=>$Bty,'photo'=>$photo,'Add'=>$Add,
                ];
            }else{
                die('Something went wrong on the Server.');   
            }
        }
        if(isset($_GET['delete_image']) && isset($_GET['Edit'])){
                $Edit__id = trim(filter_var($_GET['Edit'], FILTER_SANITIZE_STRING));
                $Edit__id = $_GET['Edit'];
                $Edit__id = (int)$_GET['Edit'];
                $post = $this->userModel->findUserByApp($Edit__id);
                if(!$post == true){
                    header('location:' . ROOT. 'Admin/Professors');
                }
                $photo = $post->Profile__Picture;
                $image_url = PATHROOT.$photo;
                if($post == true){
                    if(is_file($photo)){
                        unlink($photo);
                    }
                    $deletePhotoPATH = $this->userModel->DTProfressorPhotoURL($Edit__id);
                    if($deletePhotoPATH ==true){
                        header('location:' . ROOT. 'Admin/Professors?Edit='.$Edit__id);
                    }
                }else{
                    die('Something went Wrong...!');
                }
            }
         
        $this->view('Admin/Professors', $data);
    }
    // View professor profile 
    public function ProfessorsProfile($SSD){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST)){
            $id = trim(filter_var((int)$SSD, FILTER_SANITIZE_STRING));
            $fetchSingleUser = $this->userModel->loadingProfData($id);
                if($fetchSingleUser == true){
                    $returnIdS=$fetchSingleUser->Professor__id;$fname = $fetchSingleUser->Surname;$lname = $fetchSingleUser->Othername;$mname=$fetchSingleUser->Middle__name;$Ascode=$fetchSingleUser->Accesscode;$email=$fetchSingleUser->Email;$ftd=$fetchSingleUser->featured;$tel=$fetchSingleUser->Telephone_No;$DoB=$fetchSingleUser->Date_of_Birth;$PoD=$fetchSingleUser->Place__of__birth;$gn= $fetchSingleUser->Gender;$relatx=$fetchSingleUser->Relationship_sts;$Cst=$fetchSingleUser->Civil_status;$Ctz= $fetchSingleUser->Citizenship;$nin=$fetchSingleUser->NIN;$Hat=$fetchSingleUser->Height;$Wat= $fetchSingleUser->Weight;$QCT =$fetchSingleUser->Qualification;$Religion =$fetchSingleUser->Religion;$Bty=$fetchSingleUser->Blood_Type;$photo=$fetchSingleUser->Profile__Picture;$Add=$fetchSingleUser->Address;
                    $patch = $fname .' '.$lname;
                    $data = 
                    [
                        'page_title'=>'View '.$patch.' Personal Data Sheet - PROFILE',
                        'returnIdS'=>$returnIdS,'fname'=>$fname,'lname'=>$lname,'mname'=>$mname,'Ascode'=>$Ascode,'email'=>$email,'ftd'=>$ftd,'tel'=>$tel,'DoB'=>$DoB,'PoD'=>$PoD,'gn'=>$gn,'relatx'=>$relatx,'Cst'=>$Cst,'Ctz'=>$Ctz,'nin'=>$nin,'Hat'=>$Hat,'Wat'=>$Wat,'QCT'=>$QCT,'Religion'=>$Religion,'Bty'=>$Bty,'photo'=>$photo,'Add'=>$Add,
                    ];
                    var_dump($data);
                }else if(!$fetchSingleUser == true){
                        header('location:' . ROOT . 'Admin/Professors/');
                    }else{
                    die('Something went wrong on the Server.');   
                }
            }
        }
        $this->view('Admin/bootstrapModal/ProfessorsProfile', $data);
    }

    public function MailToProfessor(){
        if(isset($_POST['contactFrmSubmit'])
            && !empty($_POST['SenderName'])  
            && !empty($_POST['SenderMail'])  
            && !empty($_POST['RecipientName']) 
            && !empty($_POST['email']) 
            && !empty($_POST['Subject']) 
            && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) 
            && !empty($_POST['message'])){
          
            $mail = new PHPMailer;
         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          // Submitted form data
        $sEnDermail = strip_tags(trim($_POST["email"], FILTER_SANITIZE_EMAIL));
        $rEcIpIenTmAIL = strip_tags(trim($_POST["SenderMail"], FILTER_SANITIZE_EMAIL));
        $Sendername = str_replace(array("\r","\n"),array(" "," "),$sEnDermail);
        $Recipientmailto = str_replace(array("\r","\n"),array(" "," "),$rEcIpIenTmAIL);
        $uself = 0;
        // Set the information received from the form as short variables 
        $headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
        $BaseCon = 'Mercy College School Management System Software';
        $data = 
        [
            'SenderName'=> strip_tags(trim(filter_var($_POST['SenderName'], FILTER_SANITIZE_STRING))),
            'SenderMail'=> strip_tags(trim(filter_var($_POST['SenderMail'], FILTER_SANITIZE_EMAIL))),
            'email'=> strip_tags(trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL))),
            'RecipientName'=> trim(filter_var($_POST['RecipientName'], FILTER_SANITIZE_STRING)),
            'Subject'=> strip_tags(trim(filter_var($_POST['Subject'], FILTER_SANITIZE_STRING))),
            'message'=> strip_tags(trim(filter_var($_POST['message'], FILTER_SANITIZE_STRING))),
        ]; 
        if(empty($data['SenderName']) 
        || empty($data['SenderMail']) 
        || empty($data['email']) 
        || empty($data['RecipientName']) 
        || empty($data['Subject']) 
        || empty($data['message'])){
            header('Location:' . ROOT . 'Admin/Professors/');
            exit();
        }
            // SMTP configuration
            $mail->Charset = "utf-8";
            $mail->IsSMTP();
             // enable SMTP authentication
            $mail->STMPAuth=true;
            //disabled debug 
            $mail->SMTPDebug=0;
            // sets GMAIL as the SMTP server
            $mail->Host='smtp.gmail.com';
              // set the SMTP port for the GMAIL server
            $mail->Port= '465';
            //Set mail Security level
            $Mail->STMPSecure='ssl';
            // GMAIL username
            $mail->Username=$data['SenderMail'];
             // GMAIL password
            $mail->Password= '12345';
            // Sender info 
            $mail->FromName=$data['SenderName'];
            $mail->setFrom($From = "From: " .$data['SenderName'], "<small><".$data['SenderMail']."></small>");
            $mail->addReplyTo("<small><".$data['SenderMail']."></small>", $data['SenderName']); 
            // Add a recipient 
            $mail->AddAddress($To = "To: " .$data['email'], "<small><".$data['RecipientName']."></small>"); 
            // Email subject 
            $mail->Subject = 'Subject';
            // Set email format to HTML 
            $mail->IsHTML(true);
            // Email body content 
            $mailContent = ' 
                <h2>Send HTML Email using SMTP Server in PHP</h2> 
                <p>It is a test email by MidTech, sent via SMTP server with PHPMailer using PHP.</p> 
                <p>Read the tutorial and download this script from <a href="https://www.midtech.com/">MidTech</a>.</p>'; 
            $mail->Body = $mailContent;
            // Send email 
            if(!$mail->send()){ 
                echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
            }else{ 
                echo 'Message has been sent.'; 
            }
            // Processing the mailer function
            $messageproper =
              // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n".
            "This message was sent from:\n" .
            "$BaseCon\n" .
            "------------------------------------------------------------\n" .
            // Set the sender  name appending his/her email address.
            $From = "From: " .$data['SenderName'] + " <small><".$data['SenderMail']."></small>\n".
            // Set the recipient Name appending his/her email address.
            $To = $data['RecipientName'] + " <small><".$data['email']."></small>\n".
            // Set the subject 
            $subject= 'Subject: '.$data['Subject']."\n".
            "------------------------- MESSAGE -------------------------\n\n".
            // Set the body of the email you're sending
            $Body__content = 'Message: '.$data['message']."\n".
            "\n\n------------------------------------------------------------\n";
            $SendingMail = mail($messageproper);
            // if the mail went through as SUCCESS. then also insert all data into the database so we can notify and count notifications on the dashboard.
            // like how many messages comes in, from & when.
            if($SendingMail == true){
                // SQL METHOD TO INSERT DATA INTO THE DATABASE
                if($SQL /**If the SQL is successfully executed which is TRUE */ ){
                    // The redirect or prompt success message
                }else {
                    // throw error message that->  it SQL who fail to insert. just to be specific on where you have a promblem.
                }
            }else {
               echo "Mail Error - >".$mail->ErrorInfo;
            }
        }
    }
    //Admin Delete method for lectural
    public function delete($Lectural___ID){
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
    
    public function Event(){
         if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         }  
        $data = [
                    'page_title' => 'Create and View Event Table'
                ];
                $this->view('Admin/Event', $data);
    }
    // Admin display All students data
    public function Students(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         } 
        $DF = $this->userModel->findAllData();
        $DC = $this->userModel->SelectSpecial__ID();
        $stmt__demo2= $this->userModel->GetusersfunArray();
        $throwprogram = $this->userModel->SelectProgram();
        $throwSession= $this->userModel->Selectsession();
        $throwEntrylevel = $this->userModel->SelectEntryLevel();
        $stmt1 = $this->userModel->student__tb();
        $data = [
                    'page_title' => 'All Student Data',
                    'select' => $stmt1,
                    'DisplayFaculty' => $DF, 'DisplayCateogries' => $DC,
                    'stmt' => $stmt__demo2,'throw' => $throwprogram, 
                    'StmtEntrylevel' => $throwEntrylevel, 'StmtSession' => $throwSession
                ];

        $this->view('Admin/Students', $data);
    }

    // Edit student by amdin
    
    public function edit_student($student__Id){
        if(!isLoggedInAdmin())
        {
            header('location:' . ROOT . 'Administration/Default');
        } 
        // First fetch the specific student from student table by his Id, 
        $statement= $this->userModel->findStudentById($student__Id);
        // Now we couldnt access Application Type. so what we could do is to use our statement variable to fetch out the Application Id FROM student table and Send to Category Table so we can return a STRING not Int 
        // This means instead of getting Application__Type = 1 or 2 or 3, we used the id to match the Category id on Category table to return the name like: Postgraduate or Undergraduate
        $Application__Type= $statement->Application__Type;
        // Now we are sending The Application__Type to the category table
        // Fetch for category id
        // If Match ? then it will return the Name instead of the id
        $check = $this->userModel->fetchApp($Application__Type);

        // Now that we all we need to match the two table together. we can now search student DATA FROM CATEGORY TABLE AND STUDENT TABLE
        $Category__ID = $check->Category__ID;
        // We need to call out out Category id and match it Facuty id and return the faculty name
        $posts = $this->userModel->ConvertStudentApplicationType($student__Id,  $Category__ID, $Application__Type);
        // Retrieving the faculty id as interger and sending it to faculty table and return to the faculty name
        $Faculty__ID = $posts->Faculty__Type;
        //Retriving the Department ID as interger and sending it to Department table and return the department name
        $Department__Type = $posts->Department__Type;
        // sending to Now
        $returnFtyid = $this->userModel->ReturnFty($Faculty__ID, $Department__Type);

        if(!$statement == true){
            header('location:' . ROOT . 'Admin/Students/');
        }
        $data = 
        [
            'page_title'=> 'Edit Student Details',
            'con'=> $posts,
            'Max'=> $returnFtyid,'student__Id' => '','student__IdError'=> '','Surname' => '','SurnameError' => '','othername' => '','othernameError'=> '','email' => '','emailError'=> '','Date__of__birth'=> '','Date__of__birthError'=> '','relationship'=>'','relationshipError'=>'','telephone'=> '','telephoneError'=>'','gender'=>'','genderError'=>'','Error1'=>'',
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
			// Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = 
        [
            'page_title'=> 'Edit Student Details', 'con'=> $posts,'Max'=> $returnFtyid,
            'student__Id' => trim(filter_var($_POST['student__Id'], FILTER_SANITIZE_STRING)),
            'student__IdError'=> '',
            'Surname' => trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING)),
            'SurnameError' => '',
            'othername' => trim(filter_var($_POST['othername'], FILTER_SANITIZE_STRING)),
            'OthernameError'=> '',
            'email' => trim(filter_var($_POST['email'], FILTER_SANITIZE_STRING)),
            'emailError'=> '',
            'Date__of__birth'=> trim(filter_var($_POST['Date__of__birth'], FILTER_SANITIZE_STRING)),
            'Date__of__birthError'=> '',
            'relationship'=> trim(filter_var($_POST['relationship'], FILTER_SANITIZE_STRING)),
            'relationshipError'=>'',
            'telephone'=> trim(filter_var($_POST['telephone'], FILTER_SANITIZE_STRING)),
            'telephoneError'=>'',
            'gender'=> trim(filter_var($_POST['gender'], FILTER_SANITIZE_STRING)),
            'genderError'=>'',
            'Error1'=>'',
        ];
        
         if(empty($data['student__Id'])){
                $data['student__IdError'] = 'Required*';
            }
            if($data['student__Id'] != $this->userModel->findStudentById($student__Id)->student__Id){
                header('location: ' . ROOT . 'Admin/Students/' );
            }
            if(empty($data['Surname'])){
                $data['SurnameError'] = 'Please Enter The Student Surname*';
            }if($data['Surname'] == $this->userModel->findStudentById($student__Id)->Surname && $data['othername'] == $this->userModel->findStudentById($student__Id)->othername ){
                 $data['Error1'] = 'Both Surname and Othername are still the same Please make a change on the surname*';
            }
            if(empty($data['othername'])){
                $data['othernameError'] = 'Please Enter The Student Othername.';
            }
            if(empty($data['email'])){
                $data['emailError'] = 'Please Enter The Student Email.';
            }
            if(empty($data['Date__of__birth'])){
                $data['Date__of__birthError'] = 'Please Select The Student Date of birth.';
            }
            if(empty($data['relationship'])){
                $data['relationshipError'] = 'Please Select The Student Relationship Status.';
            }
            if(empty($data['telephone'])){
                $data['telephoneError'] = 'Please Enter The Student Mobile Number.';
            }
             if(empty($data['gender'])){
                $data['genderError'] = 'Please Select The Student Gender.';
            }
            if(empty($data['Error1']) && empty($dat['student__IdError']) && empty($data['SurnameError'])&& empty($data['othernameError'])&& empty($data['emailError'])&& empty($data['Date__of__birthError'])&& empty($data['relationshipError'])&& empty($data['telephoneError'])&& empty($data['genderError'])){
                    // Sending everything to our SQL QUERY TO validate and update the student data, if everything goes well as we expected then it will redirect to Admin/All_student/ page else the die() globle function will throw execption error message that something went wrong
            if ($this->userModel->updateStudentData($data)){
                    //Redirect to the add_professor page
                header('location: ' . ROOT . 'Admin/Students/' );
                } else {
                    die('Sorry..! Something went wrong');
                }
            }
        }
        $this->view('Admin/edit_student', $data);
    }
    
    // Delete student from the database by Admin
    public function DeleteStudent(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);
        $getData=$phpObject->{'DeleteId'};
        $newJsonString = json_encode($phpObject);
        $id = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
        if($id == true){
            //Return json message to the GUI
            if($this->userModel->deletestudent($id)){
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

    public function AdminUpdatePassword(){
        if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
        }
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);

        $Sendid=$phpObject->{'AdminId'};
        $OldPass=$phpObject->{'AdminOldPassword'};
        $NewPasswordRequestPost=$phpObject->{'NewPassword'};
         
        $newJsonString = json_encode($phpObject);
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
    
    public function ResetPassword(){
         if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');} 
        $data = ['page_title'=> 'Change :: Password'];
        $this->view('Admin/ResetPassword', $data);
    }
    // View Accountant 
    public function Accountant(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');} 
        $stmt1 = $this->userModel->CheckAccountantBanned();
        $data = 
        [
            'page_title'=> 'ACCOUNTANT TABLE LIST',
            'ft'=> $stmt1,
        ];
         if(isset($_GET['featured'])){
			// Sanitize POST data
            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
            $Accountant__id = $_GET['Accountant__id'];
            $featured= (int)$_GET['featured'];
           $data = 
            [
                'page_title'=> 'ACCOUNTANT TABLE LIST',
                'Surname'=>'',
                'SurnameError'=>'',
                'ft'=> $stmt1,
                'Accountant__id'=> $Accountant__id,
                'featured'=> $featured
            ];
             if ($this->userModel->GrantAccess($Accountant__id, $featured)){
                //Redirect to the page
                header('location: ' . ROOT . 'Admin/Accountant' );
            } else {
                    die('Sorry..! Something went wrong');
            }
         }

         if(isset($_POST['__EditAccountant'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $photo = $_FILES['Profile__Picture'];
                $name = $photo['name'];
                $nameArray = explode('.', $name);
                $fileName = $nameArray[0];
                $fileExt = $nameArray[1];
                $mime = explode('/', $photo['type']);
                $mimeType = $mime[0];
                $mimeExt = $mime[1];
                $tmpLoc = $photo['tmp_name'];   
                $fileSize = $photo['size']; 
                $allowed = array('jpg', 'jpeg', 'png');
                $uploadName = md5(microtime()).'.'.$fileExt;
                $uploadPath = 'Accountant/'.trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING)).'/'.$uploadName; 
                $dbpath = 'Accountant/'.trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING)).'/'.$uploadName;
                $folder = 'Accountant/'.trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING));
                $arr['Profile__Picture'] = $uploadPath;

             $data= 
             [
                'page_title'=>'Edit Accountant Data',
                'Accountant__id'=>trim(filter_var($_POST['Accountant__id'], FILTER_SANITIZE_STRING)),
                'Accountant__idError'=>'',
                'Surname'=>trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING)),
                'SurnameError'=>'',
                'Middle__name'=>trim(filter_var($_POST['Middle__name'], FILTER_SANITIZE_STRING)),
                'Middle__nameError'=>'',
                'Othername'=> trim(filter_var($_POST['Othername'], FILTER_SANITIZE_STRING)),
                'OthernameError'=>'',
                'Accesscode'=> trim(filter_var($_POST['Accesscode'], FILTER_SANITIZE_STRING)),
                'AccesscodeError'=>'',
                'Email'=>trim(filter_var($_POST['Email'], FILTER_SANITIZE_STRING)),
                'EmailError'=>'',
                'Telephone_No'=>trim(filter_var($_POST['Telephone_No'], FILTER_SANITIZE_STRING)),
                'Telephone_NoError'=>'',
                'Date_of_Birth'=>trim(filter_var($_POST['Date_of_Birth'], FILTER_SANITIZE_STRING)),
                'Date_of_BirthError'=>'',
                'Place__of__birth'=>trim(filter_var($_POST['Place__of__birth'], FILTER_SANITIZE_STRING)),
                'Place__of__birthError'=>'',
                'Gender'=>trim(filter_var($_POST['Gender'], FILTER_SANITIZE_STRING)),
                'GenderError'=>'',
                'Relationship_sts'=>trim(filter_var($_POST['Relationship_sts'], FILTER_SANITIZE_STRING)),
                'Relationship_stsError'=>'',
                'Civil_status'=>trim(filter_var($_POST['Civil_status'], FILTER_SANITIZE_STRING)),
                'Civil_statusError'=>'',
                'Citizenship'=>trim(filter_var($_POST['Citizenship'], FILTER_SANITIZE_STRING)),
                'CitizenshipError'=>'',
                'NIN'=> trim(filter_var($_POST['NIN'], FILTER_SANITIZE_STRING)),
                'NINError'=>'',
                'Height'=>trim(filter_var($_POST['Height'], FILTER_SANITIZE_STRING)),
                'HeightError'=>'',
                'Weight'=>trim(filter_var($_POST['Weight'], FILTER_SANITIZE_STRING)),
                'WeightError'=>'',
                'Blood_Type'=>trim(filter_var($_POST['Blood_Type'], FILTER_SANITIZE_STRING)),
                'Blood_TypeError'=>'',
                'Religion'=>trim(filter_var($_POST['Religion'], FILTER_SANITIZE_STRING)),
                'ReligionError'=>'',
                'Qualification'=>trim(filter_var($_POST['Qualification'], FILTER_SANITIZE_STRING)),
                'QualificationError'=>'',
                'Address'=>trim(filter_var($_POST['Address'], FILTER_SANITIZE_STRING)),
                'AddressError'=>'',
                'Profile__Picture'=> $uploadPath,
                'Profile__PictureError'=>'',
             ];
            if(empty($data['Accountant__id'])){
                $data['Accountant__idError']= 'Please provide the New Accountant ID.';
            }
            if(empty($data['Surname'])){
                $data['SurnameError']= 'Please provide the surname of the accountant..';
            }
            if(empty($data['Middle__name'])){
               $data['Middle__nameError'] = "Enter Accountant Middle Name.";
            }
            if(empty($data['Othername'])){
                $data['OthernameError']= 'Please provide the Accountatnt Last  Name.';
            }
            if(empty($data['Accesscode'])){
                $data['AccesscodeError']= 'Please provide the Accountatnt ACCESS CODE.';
            }
            if(empty($data['Email'])){
                $data['EmailError']= 'Please Enter The Accountant Email Address.';
            }elseif (!filter_var($data['Email'], FILTER_VALIDATE_EMAIL)) {
                $data['EmailError'] = 'Please Enter The Correct Format.';
                } 
            if(empty($data['Telephone_No'])){
                $data['Telephone_NoError']= 'Enter the Accountatnt Telephone Number.';
            }
             if(empty($data['Date_of_Birth'])){
               $data['Date_of_BirthError'] = "Enter the Accountatn Date of birth.";
            }
            if(empty($data['Place__of__birth'])){
                $data['Place__of__birthError']= 'Enter The Accountant Place of birth.';
            }
            if(empty($data['Gender'])){
                $data['GenderError']= 'Please Select Accountant Gender.';
            }
            if(empty($data['Relationship_sts'])){
                $data['Relationship_stsError']= 'Select the Accountant Relationship Status..';
            }
            if(empty($data['Civil_status'])){
                $data['Civil_statusError']= 'Enter the Accountant Civil status.';
            }
             if(empty($data['Citizenship'])){
               $data['CitizenshipError'] = "Enter the Accountant Nationality";
            }
            if(empty($data['NIN'])){
                $data['NINError']= 'Please Enter The Accountant NIN Number.';
            }
            if(empty($data['Height'])){
                $data['HeightError']= 'Please Select Accountant Height. !!Important';
            }
            if(empty($data['Weight'])){
                $data['WeightError']= 'Please Select Accountant Weight. !!Important';
            }
             if(empty($data['Blood_Type'])){
                $data['Blood_TypeError']= 'Please Select Accountant Blood Type.';
            }
            if(empty($data['Religion'])){
                $data['ReligionError'] = 'Please Select Accountant Religion.';
            }
            if(empty($data['Qualification'])){
                $data['QualificationError'] = 'Please Select his/her Qualification.';
            }
            if(empty($data['Address'])){
                $data['AddressError']= 'Please Enter Accountant Address.';
            }
            if(empty($data['Profile__Picture'])){
                $data['Profile__PictureError']= 'Please Select Accountant Profile Picture';
            }
            if (!in_array($fileExt, $allowed)) {
                $data['Profile__PictureError']= 'Please Select Accountant Profile Picture & MUST be image';
                }
            if ($fileExt != $mimeExt && ($mimeExt == 'jpg' && $fileExt != 'jpeg')) {
                $data['Profile__PictureError']= "File extention doesn't match the file required";
            }
            if($fileSize > 15000000){
                $data['Profile__PictureError']= 'The file must be under 15mb';
            }
            else{
                if(empty($data['Accountant__idError'])&& empty($data['SurnameError'])&& empty($data['Middle__nameError'])
                && empty($data['OthernameError'])&& empty($data['AccesscodeError'])&& empty($data['EmailError'])
                && empty($data['featuredError'])&& empty($data['Date_of_BirthError'])&& empty($data['Telephone_NoError'])
                && empty($data['Place__of__birthError'])&& empty($data['Relationship_stsError'])
                && empty($data['Civil_statusError'])&& empty($data['CitizenshipError'])&& empty($data['NINError'])
                && empty($data['HeightError']) && empty($data['WeightError'])
                && empty($data['Blood_TypeError'])&& empty($data['AddressError'])
                && empty( $data['Profile__PictureError'])){
                if(!file_exists($folder)){
                    mkdir($folder,077,true);
                    }else {
                        move_uploaded_file($tmpLoc,$dbpath);
                        if($this->userModel->UpdateAccountant($data)){
                            // Redirect the page
                            header('location:' . ROOT . 'Admin/Accountant');
                        }else{
                            die('Something went wrong');
                        }
                    }
                }
            }
         }
        //  This right here will fetch data from the database to the UI
         if(isset($_GET['Edit'])){
            $Edit__id = trim(filter_var($_GET['Edit'], FILTER_SANITIZE_STRING));
            $Edit__id = $_GET['Edit'];
            $Edit__id = (int)$_GET['Edit'];
             $fetchUser=$this->userModel->findIserByApp($Edit__id);
             if($fetchUser == true){
                //  Fetching values from database
                $id=$fetchUser->Accountant__id;$sname=$fetchUser->Surname;$mname=$fetchUser->Middle__name;
                $Oname=$fetchUser->Othername;$Ascode=$fetchUser->Accesscode;$email=$fetchUser->Email;
                $ftd=$fetchUser->featured;$tel=$fetchUser->Telephone_No;$DoB=$fetchUser->Date_of_Birth;
                $PoD=$fetchUser->Place__of__birth;$gn= $fetchUser->Gender;
                $relatx=$fetchUser->Relationship_sts;$Cst=$fetchUser->Civil_status;$Ctz= $fetchUser->Citizenship;
                $nin=$fetchUser->NIN;$Hat=$fetchUser->Height;$Wat= $fetchUser->Weight;
                $QCT =$fetchUser->Qualification;$Religion =$fetchUser->Religion;$Bty=$fetchUser->Blood_Type;
                $photo=$fetchUser->Profile__Picture;$Add=$fetchUser->Address;
                $Saved_image = (($photo != '')?$photo : '');
                // Assign each one to data array so we can pass in data to our page.
                $data =
                    [
                        'page_title'=>'Edit Accountant Data',
                        'SavephotoError'=>'',
                        'id'=>$id,'sname'=>$sname,'mname'=>$mname,'Oname'=>$Oname,
                        'Ascode'=> $Ascode,'email'=>$email,'ftd'=>$ftd,
                        'tel'=>$tel,'DoB'=>$DoB,'PoD'=>$PoD,'gn'=>$gn,
                        'relatx'=>$relatx,'Cst'=>$Cst,
                        'Ctz'=>$Ctz,'nin'=>$nin,'Hat'=>$Hat,
                        'Wat'=>$Wat,'QCT'=>$QCT, 'Religion'=>$Religion, 
                        'Bty'=>$Bty,'photo'=>$photo,'Add'=>$Add,
                        'Saved_image'=>$Saved_image,
                    ];
                if(isset($_POST['__EditAccountant']) && !empty($data['Saved_image'])){
                   $data['SavephotoError']= 'You must delete or replace this photo before you make a successful Edit'; 
                }elseif (isset($_POST['__EditAccountant']) && empty($_FILES)) {
                    echo "<script>alert('File is empty')</script>";
                }
            //if the Edit ID is wrong or doesnt match with any database id then the page will redirect
             }else {
                 header('location:' . ROOT. 'Admin/Accountant');
             }
         }
         if(isset($_GET['delete_image']) && isset($_GET['Edit'])){
            $Edit__id = trim(filter_var($_GET['Edit'], FILTER_SANITIZE_STRING));
            $Edit__id = $_GET['Edit'];
            $Edit__id = (int)$_GET['Edit'];
            $post = $this->userModel->findIserByApp($Edit__id);
            if(!$post == true){
                header('location:' . ROOT. 'Admin/Accountant');
            }
            $photo = $post->Profile__Picture;
            $image_url = PATHROOT.$photo;
            if($post == true){
                if(is_file($photo)){
                    unlink($photo);
                }
                $deletePhotoPATH = $this->userModel->DTAccountantPhotoURL($Edit__id);
                if($deletePhotoPATH ==true){
                    header('location:' . ROOT. 'Admin/Accountant?Edit='.$Edit__id);
                }
            }else{
                die('Something went Wrong...!');
            }
         }
         if(isset($_POST['___AddNewAccountant']) && !empty($_FILES)){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
              // var_dump($_FILES);
                $photo = $_FILES['Profile__Picture'];
                $name = $photo['name'];
                $nameArray = explode('.', $name);
                $fileName = $nameArray[0];
                $fileExt = $nameArray[1];
                $mime = explode('/', $photo['type']);
                $mimeType = $mime[0];
                $mimeExt = $mime[1];
                $tmpLoc = $photo['tmp_name'];   
                $fileSize = $photo['size']; 
                $allowed = array('jpg', 'jpeg', 'png');
                $uploadName = md5(microtime()).'.'.$fileExt;
                $uploadPath = 'Accountant/'.trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING)).'/'.$uploadName; 
                $dbpath = 'Accountant/'.trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING)).'/'.$uploadName;
                $folder = 'Accountant/'.trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING));
                $arr['Profile__Picture'] = $uploadPath;
            $data = 
            [
                'page_title'=> 'ADD NEW ACCOUNTANT',
                'Accountant__id'=>trim(filter_var($_POST['Accountant__id'], FILTER_SANITIZE_STRING)),
                'Accountant__idError'=>'',
                'Surname'=>trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING)),
                'SurnameError'=>'',
                'Middle__name'=>trim(filter_var($_POST['Middle__name'], FILTER_SANITIZE_STRING)),
                'Middle__nameError'=>'',
                'Othername'=> trim(filter_var($_POST['Othername'], FILTER_SANITIZE_STRING)),
                'OthernameError'=>'',
                'Accesscode'=> trim(filter_var($_POST['Accesscode'], FILTER_SANITIZE_STRING)),
                'AccesscodeError'=>'',
                'Password'=>trim(filter_var($_POST['Password'], FILTER_SANITIZE_STRING)),
                'PasswordError'=>'',
                'Email'=>trim(filter_var($_POST['Email'], FILTER_SANITIZE_STRING)),
                'EmailError'=>'',
                'featured'=>'1',
                'featuredError'=>'',
                'Telephone_No'=>trim(filter_var($_POST['Telephone_No'], FILTER_SANITIZE_STRING)),
                'Telephone_NoError'=>'',
                'Date_of_Birth'=>trim(filter_var($_POST['Date_of_Birth'], FILTER_SANITIZE_STRING)),
                'Date_of_BirthError'=>'',
                'Place__of__birth'=>trim(filter_var($_POST['Place__of__birth'], FILTER_SANITIZE_STRING)),
                'Place__of__birthError'=>'',
                'Gender'=>trim(filter_var($_POST['Gender'], FILTER_SANITIZE_STRING)),
                'GenderError'=>'',
                'Relationship_sts'=>trim(filter_var($_POST['Relationship_sts'], FILTER_SANITIZE_STRING)),
                'Relationship_stsError'=>'',
                'Civil_status'=>trim(filter_var($_POST['Civil_status'], FILTER_SANITIZE_STRING)),
                'Civil_statusError'=>'',
                'Citizenship'=>trim(filter_var($_POST['Citizenship'], FILTER_SANITIZE_STRING)),
                'CitizenshipError'=>'',
                'NIN'=>trim(filter_var($_POST['NIN'], FILTER_SANITIZE_STRING)),
                'NINError'=>'',
                'Height'=>trim(filter_var($_POST['Height'], FILTER_SANITIZE_STRING)),
                'HeightError'=>'',
                'Weight'=>trim(filter_var($_POST['Weight'], FILTER_SANITIZE_STRING)),
                'WeightError'=>'',
                'Blood_Type'=>trim(filter_var($_POST['Blood_Type'], FILTER_SANITIZE_STRING)),
                'Blood_TypeError'=>'',
                'Religion'=>trim(filter_var($_POST['Religion'], FILTER_SANITIZE_STRING)),
                'ReligionError'=>'',
                'Qualification'=>trim(filter_var($_POST['Qualification'], FILTER_SANITIZE_STRING)),
                'QualificationError'=>'',
                'Profile__Picture'=>$uploadPath,
                'Profile__PictureError'=>'',
                'Address'=>trim(filter_var($_POST['Address'], FILTER_SANITIZE_STRING)),
                'AddressError'=>'',
            ];
            if(empty($data['Accountant__id'])){
                $data['Accountant__idError']= 'Please provide the New Accountant ID.';
            }
            if(empty($data['Surname'])){
                $data['SurnameError']= 'Please provide the surname of the accountant..';
            }
            if(empty($data['Middle__name'])){
               $data['Middle__nameError'] = "Enter Accountant Middle Name.";
            }
            if(empty($data['Othername'])){
                $data['OthernameError']= 'Please provide the Accountatnt Last  Name.';
            }
            if(empty($data['Accesscode'])){
                $data['AccesscodeError']= 'Please provide the Accountatnt ACCESS CODE.';
            }
             if(empty($data['Password'])){
               $data['PasswordError'] = "Set Password for the Accountant.";
            }
            if(empty($data['Email'])){
                $data['EmailError']= 'Please Enter The Accountant Email Address.';
            }elseif (!filter_var($data['Email'], FILTER_VALIDATE_EMAIL)) {
                    $data['EmailError'] = 'Please Enter The Correct Format.';
                } else {
                    //Check if email exists.
                    if ($this->userModel->findAccountantByEmail($data['Email'])) {
                    $data['EmailError'] = 'Email Is Already Taken By Another User.';
                    }
                }
            if(empty($data['featured'])){
                $data['featuredError']= 'Grant Access to this Accountant..';
            }
            if(empty($data['Telephone_No'])){
                $data['Telephone_NoError']= 'Enter the Accountatnt Telephone Number.';
            }
             if(empty($data['Date_of_Birth'])){
               $data['Date_of_BirthError'] = "Enter the Accountatn Date of birth.";
            }
            if(empty($data['Place__of__birth'])){
                $data['Place__of__birthError']= 'Enter The Accountant Place of birth.';
            }
            if(empty($data['Gender'])){
                $data['GenderError']= 'Please Select Accountant Gender.';
            }
            if(empty($data['Relationship_sts'])){
                $data['Relationship_stsError']= 'Select the Accountant Relationship Status..';
            }
            if(empty($data['Civil_status'])){
                $data['Civil_statusError']= 'Enter the Accountant Civil status.';
            }
             if(empty($data['Citizenship'])){
               $data['CitizenshipError'] = "Enter the Accountant Nationality";
            }
            if(empty($data['NIN'])){
                $data['NINError']= 'Please Enter The Accountant NIN Number.';
            }
            if(empty($data['Height'])){
                $data['HeightError']= 'Please Select Accountant Height. !!Important';
            }
            if(empty($data['Weight'])){
                $data['WeightError']= 'Please Select Accountant Weight. !!Important';
            }
            if(empty($data['Blood_Type'])){
                $data['Blood_TypeError']= 'Please Select Accountant Blood Type.';
            }
            if(empty($data['Religion'])){
                $data['ReligionError'] = 'Please Select Professor Religion.';
            }
            if(empty($data['Qualification'])){
                $data['QualificationError'] = 'Please Select his/her Qualification.';
            }
            if(empty($data['Profile__Picture'])){
                $data['Profile__PictureError']= 'Please Select Accountant Profile Picture';
            }
            if(empty($data['Address'])){
                $data['AddressError']= 'Please Enter Accountant Address.';
            }
            if (!in_array($fileExt, $allowed)) {
                 $data['Profile__PictureError']= 'Please Select Accountant Profile Picture & MUST be image';
                }
            if ($fileExt != $mimeExt && ($mimeExt == 'jpg' && $fileExt != 'jpeg')) {
                    $data['Profile__PictureError']= "File extention doesn't match the file required";
            }
            if($fileSize > 1000000){
                $data['Profile__PictureError']= 'The file must be under 10mb';
            }else{
                if(empty($data['Accountant__idError'])&& empty($data['SurnameError'])
                && empty($data['Middle__nameError'])&& empty($data['OthernameError'])
                && empty($data['AccesscodeError'])&& empty($data['PasswordError'])
                && empty($data['EmailError'])&& empty($data['featuredError'])
                && empty($data['Date_of_BirthError'])&& empty($data['Telephone_NoError'])
                && empty($data['Place__of__birthError'])
                && empty($data['Relationship_stsError'])&& empty($data['Civil_statusError'])
                && empty($data['CitizenshipError'])&& empty($data['NINError'])
                && empty($data['HeightError'])
                && empty($data['WeightError'])&& empty($data['Blood_TypeError'])
                && empty($data['ReligionError'])&& empty($data['QualificationError'])
                && empty($data['Profile__PictureError'])&& empty($data['AddressError'])){
                    if(!file_exists($folder)){
                        mkdir($folder,077,true);
                    }
                    move_uploaded_file($tmpLoc,$dbpath);
                     //hashing professor password
                    // The following algorithms are currently supported when using this function:
                    // PASSWORD_DEFAULT --60 lenght
                    // PASSWORD_BCRYPT -- 60 lenght
                    // PASSWORD_ARGON2I --97 length
                    // PASSWORD_ARGON2ID --97 length
                    $data['Password'] = password_hash($data['Password'], PASSWORD_ARGON2ID);
                    if($this->userModel->AddAccountant($data)){
                        // Redirect the page
                        header('location:' . ROOT . 'Admin/Accountant');
                    }else{
                        die('Something went wrong');
                    }
                }
            }
         }
        $this->view('Admin/Accountant',$data);
    } 

 // Delete Accountant By Admin
    public function deleteProfessor(){
         if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         }
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
        $id = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
        if($id ==true){
            //Return json message to the GUI
            if($this->userModel->deleteUserProfessor($id)){
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

    // Delete Accountant By Admin
    public function deleteAccountant(){
         if(!isLoggedInAdmin()){
            header('location:' . ROOT . 'Administration/Default');
         }
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
    // Declearing AppointmentModal toggle
    public function AppointmentModal(){
        $id = trim(filter_var($_POST['SSD'], FILTER_SANITIZE_STRING));
        $runcheck = $this->userModel->returndata($id);
        $DC= $this->userModel->GetusersfunArray();
        if($runcheck == true){
           	$i = $runcheck->Accountant__id;
            $sname=$runcheck->Surname;
            $mname = $runcheck->Middle__name;
            $Oname=$runcheck->Othername;
            $e= $runcheck->Email;
        }
        $data= 
        [
            'id'=>$i,
            'User_idError'=>'',
            'sname'=>$sname,
            'mname'=>$mname,
            'Oname'=>$Oname,
            'e'=>$e,
            'DisplayCateogries'=>$DC
        ];
        
        $this->view('Admin/bootstrapModal/AppointmentModal', $data);
    }

    public function AccountantProfileModal(){
        $this->view('Admin/bootstrapModal/AccountantProfileModal');
    }

    public function LoadPrintProfile(){
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
                        'page_title'=>'View '.$patch.' Profile',
                    ];
                }
                else
                {
                    die('Something went wrong on the Server.'); 
                }
            }
        }
        $this->view('Admin/bootstrapModal/LoadPrintProfile', $data);
    }

    public function AcctAppointment(){
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
                if (!isset($_POST["User_id"]) || !isset($_POST["Faculty__Type"]) || !isset($_POST["Department__Type"]) || !isset($_POST["Designation"])) {
                    $output = json_encode(array('type' => 'error', 'text' => 'Input fields are empty!'));
                    die($output);
                }
                $data = 
                [
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
        header("Access-Control-Allow-Origin: *"); 
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
       ob_start();
        $jsonString = file_get_contents("php://input");
        $arr_data = explode("=",$jsonString);
        $response = array();
        $i = json_decode($jsonString);

        $id=$i->{'ID'};
        $nin=$i->{'Nin'};
        $Designation=$i->{'DesignationID'};
        $Department=$i->{'DepartmentID'};
        $Faculty=$i->{'FacultyID'}; 
        $newJsonString = json_encode($i);

        $ValidID = strip_tags(trim(filter_var($id, FILTER_SANITIZE_STRING)));
        $Validfty = strip_tags(trim(filter_var($Faculty, FILTER_SANITIZE_STRING)));
        $ValidDsg = strip_tags(trim(filter_var($Designation, FILTER_SANITIZE_STRING)));

        $data = 
            [
                'nin'=>$nin,
                'user'=>$ValidID,
                'Role'=>'3',
                'TheFaculty'=>$Validfty,
                'TheDepartment'=>$Department,
                'TheDesignation'=>$ValidDsg,
            ];
        
        $sid = $data['user'];
        $nin = $data['nin'];
        $fty = $data['TheFaculty'];
        $Dty = $data['TheDepartment'];
        $Dsg = $data['TheDesignation'];
        $role = strip_tags(trim(filter_var((int)$data['Role'], FILTER_SANITIZE_STRING)));
       $pt = $this->userModel->validatechecking($sid);
        if($pt == true){
            // update statement
            $instructor= implode(',', $Dty);
            $insertData1 = $this->userModel->isUpdate($sid, $nin, $fty, $role, $instructor, $Dsg);
            if($insertData1){
                $response['status'] =  '200OK';
            }else {
                $response['message']= 'Sorry..! Something went wrong on the process.';
            }
        }else {
            // Insert New
            $instructor= implode(',', $Dty);
            $insertData2 = $this->userModel->AppointProfessor($sid, $nin,  $role, $fty,$instructor, $Dsg);
            if($insertData2){
                $response['status'] =  '200OK';
            }else {
                $response['message']= 'Sorry..! Something went wrong on the process.';
            }
        }
        ob_end_clean();
        echo json_encode($response);
    }
    // Declearing AppointmentModal toggle
    public function toggleProfessor(){
        $id = trim(filter_var($_POST['SSD'], FILTER_SANITIZE_STRING));
        $pthrow = $this->userModel->ReturnInvalidData($id);
        if($pthrow){
            
            $existUserID = $pthrow->ID;
            $existFacultyid =$pthrow->Faculty__ref__id;
            $d= $pthrow->Designation;
            $f = $this->userModel->ReturnFaculty($existFacultyid);
            if ($f) {
                foreach ($f as $k) {
                    $n = $k['Category__name'];
                }
            }
            $existDepartmentId= $pthrow->Base;
            $searchForValue = ',';
                if (strpos($existDepartmentId, $searchForValue) !== false) {
                // Here is Multiple department 
                    $existDesignation = $pthrow->Designation;
                    $fetchdata = $this->userModel->ReadOnly($existDepartmentId);
                //$vs = $this->namespacemodel->categoryfetch();
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
        }else{
            echo "FAIL";
        }
        $data= 
        [
            'id'=>$i,
            'Department'=>$fetchdata,
            'n'=>$nin,
            'ftyname'=>$n,
            'designation'=>$d,
            'checkingexistence'=>$pthrow,
            'User_idError'=>'',
            'sname'=>$xname,
            'e'=>$e,
            'DisplayCateogries'=>$DC
        ];
        
        $this->view('Admin/bootstrapModal/toggleProfessor', $data);
    }

    public function UpdateAppointment(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        
        $jsonString = file_get_contents("php://input");
        $response = array();
        $decodeValue = json_decode($jsonString);

        $id=$decodeValue->{'ID'};
        $nin=$decodeValue->{'Nin'};
        $Designation=$decodeValue->{'DesignationID'};
        $Department=$decodeValue->{'DepartmentID'};
        $Faculty=$decodeValue->{'FacultyID'}; 
        $newJsonString = json_encode($decodeValue);

        $ValidID = strip_tags(trim(filter_var($id, FILTER_SANITIZE_STRING)));
        $Validfty = strip_tags(trim(filter_var($Faculty, FILTER_SANITIZE_STRING)));
        $ValidDsg = strip_tags(trim(filter_var($Designation, FILTER_SANITIZE_STRING)));
        $role = '3';
        // update statement
        $implodeDepartment= implode(',', $Department);
        $insertData1 = $this->userModel->isUpdate($id, $nin, $Faculty, $role, $implodeDepartment, $Designation);
        if($insertData1 == true){
            $response['status'] = '200';
        }else {
            $response['status'] = 'error';
            $response['message']= 'Invalid Data Sent. ';
        }
        ob_end_clean();
        echo json_encode($response);
    }
    public function CollectionAPIs(){
        if(!isLoggedInAdmin()){
                header('location:' . ROOT . 'Administration/Default');
            }
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
    public function deleteCategory(){
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Methods: POST");
            header("Access-Control-Max-Age: 3600");
            header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response = array();
            // $test = utf8_encode($_POST['dataString']);You can either use this or json_decode function
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
    // Setting Course Category 
    public function Category(){
        $fetchdata =$this->userModel->FetchDataAsMenuBar();
        foreach ($fetchdata as $i) {
           $pr = (int)$i['Parent'];
           $param = $this->userModel->com($pr);
              $data = 
                [
                    'title'=>'Category Options',
                    'catch'=>$fetchdata,
                    'fetchparent'=>$param
                ];

        }
        $this->view('Admin/bootstrapModal/Category', $data);
    }

    public function parent(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $username=filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $check =$this->userModel->tryone($username, $password);
            if($check){
                $i = $check->role_id;
                echo $i;
            }else {
                echo "failed";
            }

        }
        $this->view('Admin/bootstrapModal/parent');
    }
    
    public function Departments(){
        $data =
        [
            'page_title'=>'Department Table',
        ];
        $this->view('Admin/Departments', $data);
    }

    public function Profile(){
        $data = 
        [
            'page_title'=>'Admin :: Profile',
        ];
        $this->view('Admin/Profile', $data);
    }
}