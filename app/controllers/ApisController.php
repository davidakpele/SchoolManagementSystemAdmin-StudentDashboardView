<?php
    
Class ApisController extends Controller {
    /**
     * 
     * Class PageController
     * @var false|mixed
     * Author: David AkpELE <akpeledavid@hotmail.com>
     * FROM: MidTech Private Limited
     * @package category 
     */ 
    private $model;
    public function __construct() {
       @$this->model = @$this->loadModel('Apis');
    }
    public function RenderCategory(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: *");
        header("Content-Type: application/json");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
            dnd('Connection Failed.!');
        }else{
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response = array();
            $phpObject = json_decode($jsonString);
            $getData=$phpObject->{'DataId'};
            $newJsonString = json_encode($phpObject);
            $___ApplicationType = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
            if(!empty($___ApplicationType) && (is_numeric($___ApplicationType))){
                if ($___ApplicationType ==1) {
                    $msg = 'Distance Learning Institute ';
                }elseif ($___ApplicationType ==2) {
                    $msg = 'Postgraduate ';
                }elseif ($___ApplicationType ==3) {
                    $msg = 'Undergraduate ';
                }
                if ($___ApplicationType==1 || $___ApplicationType==2 || $___ApplicationType==3) {
                    $crf= $this->model->FetchApplication($___ApplicationType);
                    if ($crf) {
                        try {
                            $response['Status'] = false; 
                            $response['message'] = 'Application for '. $msg .' has been closed.';
                        } catch (\Throwable $th) {
                            //throw $th;
                        }
                        
                    }else {
                        $response['Status'] = 2001; 
                        $response['message'] = 'Available';
                    }
                }
            }else { 
                header('location:' . ROOT . 'DeniedAccess');
            }
        ob_end_clean();
        echo json_encode($response); 
        } 
    }
    public function RenderRequirementData(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: *");
        header("Content-Type: application/json");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        
        if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
            dnd('Connection Failed.!');
        }else{
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response = array();
            $phpObject = json_decode($jsonString);
            $getData=$phpObject->{'DataId'};
            $newJsonString = json_encode($phpObject);
            $___ApplicationType = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
            if(!empty($___ApplicationType) && (is_numeric($___ApplicationType))){
                if ($___ApplicationType ==   1 || $___ApplicationType == 2 || $___ApplicationType ==   3) {
                    $crf= $this->model->selectSublistRequirementView($___ApplicationType);
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
    }
    public function fetchDepartment(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: *");
        header("Content-Type: application/json");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
            dnd('Connection Failed.!');
        }else{
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response = array();
            $phpObject = json_decode($jsonString);
            $getData=$phpObject->{'DataId'};
            $newJsonString = json_encode($phpObject);
            $id = strip_tags(trim(filter_var((int)$getData, FILTER_VALIDATE_INT)));
            if(!empty($id) && (is_numeric($id))){
                $crf= $this->model->selectDeps($id);
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
    }
    public function RenderProgrammeList(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: *");
        header("Content-Type: application/json");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        
        if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
            dnd('Connection Failed');
        }else{
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response= array();
            $phpObject = json_decode($jsonString);
            $getData=$phpObject->{'RestAPIDataId'};
            $getprogramid=$phpObject->{'ProgramId'};
            $newJsonString = json_encode($phpObject);
            $pid = strip_tags(trim(filter_var((int)$getprogramid, FILTER_VALIDATE_INT)));
            $id = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
            if(!empty($pid) && (is_numeric($pid))){
                $returnSql = $this->model->RenderProgrammeListSQL($id);
                if (!empty($returnSql)) {
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
    }
    public function RenderDepartmentList(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: *");
        header("Content-Type: application/json");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        
        if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
            dnd('Connection Failed');
        }else{
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response= array();
            $phpObject = json_decode($jsonString);
            $FacultyID=$phpObject->{'FacultyID'};
            $newJsonString = json_encode($phpObject);
            $id = strip_tags(trim(filter_var((int)$FacultyID, FILTER_VALIDATE_INT)));
            if(!empty($FacultyID) && (is_numeric($FacultyID))){
                $returnSql = $this->model->selectDepartment($id);
                if (!empty($returnSql)) {
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
    }
    public function RenderFaculty(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: *");
        header("Content-Type: application/json");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        
        if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
            dnd('Connection Failed');
        }else{
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response = array();
            $phpObject = json_decode($jsonString);
            $getData=$phpObject->{'DataId'};
            $newJsonString = json_encode($phpObject);
            $___ApplicationType = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
            if(!empty($___ApplicationType) && (is_numeric($___ApplicationType))){
                if ($___ApplicationType ==   1 || $___ApplicationType == 2 || $___ApplicationType == 3) {
                    $crf= $this->model->selectFaculties($___ApplicationType);
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
    }
    public function RenderProgram(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: *");
        header("Content-Type: application/json");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        
        if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
            dnd('Connection Failed');
        }else{
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response = array();
            $phpObject = json_decode($jsonString);
            $getData=$phpObject->{'DataId'};
            $newJsonString = json_encode($phpObject);
            $id = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
            if(!empty($id) && (is_numeric($id))){
                if ($id ==   1 || $id == 2 || $id == 3) {
                    $crf= $this->model->selectProgram($id);
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
    }
    public function RenderClass(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: *");
        header("Content-Type: application/json");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        
        if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
            dnd('Connection Failed');
        }else{
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response = array();
            $phpObject = json_decode($jsonString);
            $getData=$phpObject->{'DataId'};
            $newJsonString = json_encode($phpObject);
            $id = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
            if(!empty($id) && (is_numeric($id))){
                if ($id ==   1 || $id == 2 || $id == 3) {
                    $classresult= $this->model->selectClass();
                    if ($classresult) {
                        $response['Status'] = '2001'; 
                        $response['result'] = $classresult;
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
    }
    public function RenderSemester(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: *");
        header("Content-Type: application/json");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        
        if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
            dnd('Connection Failed');
        }else{
            ob_start();
            $jsonString = file_get_contents("php://input");
            $response = array();
            $phpObject = json_decode($jsonString);
            $getData=$phpObject->{'DataId'};
            $newJsonString = json_encode($phpObject);
            $id = strip_tags(trim(filter_var((int)$getData, FILTER_SANITIZE_STRING)));
            if(!empty($id) && (is_numeric($id))){
                $bio= $this->model->selectSemester($id);
                if ($bio) {
                    $response['Status'] = '2001'; 
                    $response['result'] = $bio;
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
    public function output_json($data, $encode = true)
	{
		if ($encode) $data = json_encode($data);
		    echo json_encode($data);
	}
    public function data()
	{
        if(!isLoggedInAdmin()){header('location:' . ROOT . 'Administration/Default');}
        $search = $_POST['search']['value'];
        if (!empty($search) || $search !="") {
            $this->output_json($this->model->getSearchData($search), false);
        }else {
            $this->output_json($this->model->getDataKelas(), false);
        }
        
	}
}