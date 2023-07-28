<?php 
    class AuthController extends Controller{
        /**
         * 
         * Class AuthController
         * @var false|mixed
         * Author: David AkpELE <akpeledavid@hotmail.com>
         * FROM: MidTech Private Limited
         * @package category 
         */ 
        private $AuthModel;
        public function __construct() {
            @$this->AuthModel = @$this->loadModel('Auth');
        }

        
        public function StudentLogin(){
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $PostUsername=$phpObject->{'Username'};
                $PostPassword=$phpObject->{'Password'};
                $newJsonString = json_encode($phpObject);
                if (empty($PostUsername) || $PostUsername =="") {
                    $response['errormessage']='Please Enter Your Matric Number Or Application Number';
                }else if (empty($PostPassword) || $PostPassword =="") {
                    $response['errormessage']= 'Please Enter Your Password';
                }else{
                    $StudentUsername = trim(filter_var($PostUsername, FILTER_SANITIZE_STRING));
                    $StudentPassword = trim(filter_var($PostPassword, FILTER_SANITIZE_STRING));
                    @$loggedInstudent = $this->AuthModel->studentLogin($StudentUsername, $StudentPassword);
                    if($loggedInstudent){
                        $response['status'] =  200;
                        $this->createstudentSession($loggedInstudent);
                    }else {
                        $response['message']= 'Username/Password Mismatch';
                    }
                }
            }
            ob_end_clean();
            echo json_encode($response);
        }

        public function RetrieveMatricNumber(){
           if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpOb = json_decode($jsonString);

                $ApplicatioNo = $phpOb->{'ApplicatioNo'};
                $StudentUsername = $phpOb->{'Surname'};
                $dbo = $phpOb->{'DateOfBirthBox'};
                $n = json_encode($phpOb);

                $App = strip_tags(trim(filter_var($ApplicatioNo, FILTER_SANITIZE_STRING)));
                $dbo = strip_tags(trim(filter_var($dbo, FILTER_SANITIZE_EMAIL)));
                $SUname = strip_tags(trim(filter_var($StudentUsername, FILTER_SANITIZE_STRING)));

                @$SearchMatricNumber = $this->AuthModel->SearchMatric($ApplicatioNo, $dbo, $SUname);
                if(!empty($SearchMatricNumber) && $SearchMatricNumber == true) {
                    $response['status'] = 200;
                    $response['message'] = '<span><b style="text-decoration:underline;">Congratulations.!!</b>'.$SearchMatricNumber->SUname."".$SearchMatricNumber->othername .' Your Data Was Found. <br/>Your Matric Number You Requested Has Been Sent Tou Your Email. <br/><span>Thanks.</span></span>';
                //Uncomment this if Testing this Application
                //   $response['status']=200;
                // 
                //   Now send User/Student his/her Matric Number that is found on the database
                    // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                        
                    // $header = "From:".$email."\r\n".
                    // "------------------------------------------------------------\n";
                    // $header .= "MIME-Version: 1.0\r\n";
                    // $header .= "Content-type: text/html\r\n";

                    // $to =  'midtech@gmail.com';
                    // $subject= "Official Data.\n".
                    // "------------------------- MESSAGE -------------------------\n\n".
                    // Set the body of the email you're sending
                    // $message = 'Email: '.$email."\n".
                    // $message = 'Surname: '.$SUname."\n".
                    // "\n\n------------------------------------------------------------\n";
                    // $retval = mail ($to,$subject,$message,$header);
                    
                    // if( $retval == true ) {
                        //if successful throw error as success message
                        // $response['status'] = 200;
                        // $response['message'] = 'Congratulation.!!'.$SearchMatricNumber->SUname."".$SearchMatricNumber->othername .' You Data Was Found. <br/> <span>Your Matric Number You Requested Has Been Sent Tou Your Email. <br/><br/>Thanks.</span>';
                        // redirect to Google main login page
                    // }else {
                        // $response['status'] = 200;
                        // Default error for not sending.
                    //     $response['message'] = "<b>Weak Network.</b> Please connect your device to a strong network.";
                    // }
                }else {
                    $response['message']= 'Student record not found';
                }
            }
            ob_end_clean();
            echo json_encode($response);
        }
        public function biup(){
            if(validata_api_request_header()){
                ob_start();
                $jsonString = file_get_contents("php://input");
                $response = array();
                $phpObject = json_decode($jsonString);
                $MatricNo=$phpObject->{'MatricNo'};
                $newJsonString = json_encode($phpObject);
                if(!empty($MatricNo)){
                    $isCheck = $this->AuthModel->isUserMatrichNumber($MatricNo);
                    if ($isCheck) {
                        $response['status'] = 200;
                        $response['result'] = true;
                    }else {
                        $response['status'] = false;
                        $response['message'] = 'Invalid Matric Number Or Application Number.';
                    }
                }else {
                    $response['status'] = 501;
                    $response['message'] = 'Please Enter Your Matric Number Or Application Number';
                }
            }
            ob_end_clean();
            echo json_encode($response); 
        }



        public function createstudentSession($data){
            @$Active_login = date("Y-m-d H:i:s");
            $id = $data->student__Id;
            //session_destroy();
            //dnd($_SESSION);
            $updatesqlTime = $this->AuthModel->updateStudentLoginTime($id, $Active_login);
            if ($updatesqlTime) {
                $authUser = $this->AuthModel->findSpecificStudent($id);
                $_SESSION['Reference'] = @$data->Roll__No;
                $_SESSION['student__Id'] = @$data->student__Id;
                $_SESSION['studEmail'] = $data->email;
                $_SESSION['Department'] = $authUser->Department_id;
                $_SESSION['Classid'] = $authUser->Class;
                $_SESSION['semsterid'] = $authUser->semester;
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
        }

    }