
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
    <meta name="theme-color" content="#c9190c" />
    <meta name="robots" content="index,follow" />
    <meta htttp-equiv="Cache-control" content="no-cache" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="msapplication-TileColor" content="#c9190c" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="Mercy College Unversity Student Portal" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <!-- Google Font: Source Sans Pro -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
     <link href="<?=ASSETS?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS?>Exam/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=ASSETS?>Exam/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- DataTables -->
    <link rel="stylesheet" href="<?=ASSETS?>Exam/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>Exam/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>Exam/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>Exam/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=ASSETS?>Exam/css/adminlte.css">
    <link rel="stylesheet" href="<?=ASSETS?>Exam/css/custom.css">
    <!-- <link rel="stylesheet" href="<?=ASSETS?>Exam/css/styles.css"> -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=ASSETS?>Exam/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?=ASSETS?>Exam/plugins/summernote/summernote-bs4.min.css">
     <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?=ASSETS?>Exam/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
     <!-- jQuery -->
    <script src="<?=ASSETS?>Exam/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?=ASSETS?>Exam/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?=ASSETS?>Exam/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?=ASSETS?>Exam/plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = '<?=ROOT?>';
        var timestamp='<?=(!empty($data['examTime']->duration)?$data['examTime']->duration:'')?>';
    </script>
    <script src="<?=ASSETS?>Exam/js/script.js"></script>
    <link rel="stylesheet" href="<?=ASSETS?>students/css/examiStyle.css">
  </head>
<body>
    <div id="head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="<?=ROOT?>Student/Dashboard">
                        <div class="float-left">
                            <span>
                                <img src="<?=ASSETS?>img/product/1.png" class="img-responsive center" style="max-width:55px;" alt="logo" />
                            </span>
                        </div>
                    </a>
                </div>
                <!--end col div here -->
                <br class="clear" />
            </div><!-- end row here -->
        </div><!-- close container -->
    </div>
    <div class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-header" style="background:#26173b">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="timestamp text-center" style="color:#cac8cc;">
                                    <i class="fa fa-clock-o" aria-hidden="true" style="background:#fff"></i>
                                    <div class="time" style="font-size:20px;">
                                        <span><strong id="timer"></strong></span>
                                    </div>
                                    <span style="color:#cac8cc; font-size:13px; font-weight:500; text-align:center">TIME LEFT IN THIS ASSIGNMENT SESSION</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="container-text" >
                                    <div class="" id="question1-list">
                                    <?php
                                    $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                    $parts = explode('/', $url);
                                    $new_url = $parts[0].'/'.$parts[1].'/'.$parts[2].'/'.$parts[3].'/'.$parts[4].'/'.$parts[5].'/'.$parts[6];
                                    $eid=strip_tags(trim((string)filter_var($parts[6], FILTER_SANITIZE_STRING), true));
                                    if(isset($eid)):
                                     $qin = 1;
                                        if (!empty($data['examcontroller'])):
                                            foreach ($data['examcontroller'] as $key ):?>
                                            <div class="question1-item py-4 <?= ($qin != 1) ? "d-none" : '';?>">
                                            <?= $no = $qin ++; ?>
                                                <div class="text-center" style="position: absolute;bottom: 0;color:#fff">
                                                    <b><span id="bincount"><?=(($no == 1)?$no : $no)?><span>
                                                    /<?=$data['isCount']?> Questions attempted</b>
                                                </div>
                                            </div>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                    <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php if(isset($eid)): 
            $this->db = new Database;;?>
        <section class="mt-5 py-3">
            <div class="container">
                <form action="<?=ROOT?>Student/ExamResult?no=<?=$data['isCount']?>" method="POST" id="form">
                    <input type="hidden" name="courseid"  value= "<?= ($data['examTime']->Course) ? $data['examTime']->Course : '' ;?>" />
                    <input type="hidden" name="exam_id"  value= "<?= ($data['examTime']->eid) ? $data['examTime']->eid : '' ;?>" />
                    <input type="hidden" name="student_id"  value= "<?= ($_SESSION['student__Id']) ? $_SESSION['student__Id'] : '' ;?>" />
                    <div class="card card-outline card-navy shadow rounded-0">
                        <div class="card-header"><?php $qi = 1;?></div>
                        <div class="card-body" >
                            <div class="container-fluid">
                                <div class="" id="question-list">
                                    <?php $this->db = new Database;?>
                                    <?php  
                                    if (!empty($data['examcontroller']))
                                    foreach ($data['examcontroller'] as $key ):?>
                                        <?php 
                                        $qns=$key['question'];
                                        $qid=$key['questionid'];
                                        ?>
                                    
                                    <div class="question-item py-4 <?=(($qi) != 1 ? "d-none" : '') ?>">
                                        <div class="d-flex align-items-top mb-3">
                                            <div class="col-auto">
                                                <?= $no = $qi ++; ?>.
                                            </div>
                                            <div class="col-auto flex-shrink-1 flex-grow-1">
                                                <div class="question_text"><p><?=@$key['question'];?></p></div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="text-muted"><b>[<?=@$key['point'];?>pts]</b></span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="text-muted"><b><?=(($no == 1)?$no : $no)?>/<?=$data['isCount']?></b></span>
                                                <input type="hidden" name="total" value="<?=$data['isCount']?>">
                                            </div>
                                        </div>
                                         <!-- OPTIONS -->
                                       <div class="mx-3">
                                            <div class="row mb-2">
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control quiz-input position-relative"> 
                                                            <label class="font-weight-normal">
                                                                <span class="quiz-option-number">A</span>
                                                                <input type="radio" id="<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>" name="<?=$no?>[<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>]" value="<?=htmlspecialchars($key['opt1'])?>" >
                                                                <span>&nbsp;&nbsp;&nbsp;<?=htmlspecialchars($key['opt1'])?></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control quiz-input">
                                                            <label class="font-weight-normal">
                                                                <span class="quiz-option-number">B</span>
                                                                <input type="radio" id="<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>" name="<?=$no?>[<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>]" value="<?=htmlspecialchars($key['opt2'])?>" >
                                                               <span>&nbsp;&nbsp;&nbsp;<?=htmlspecialchars($key['opt2'])?></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control quiz-input">
                                                            <label class="font-weight-normal">
                                                                <span class="quiz-option-number">C</span>
                                                                <input type="radio" id="<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>" name="<?=$no?>[<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>]" value="<?=htmlspecialchars($key['opt3'])?>" >
                                                               <span>&nbsp;&nbsp;&nbsp;<?=htmlspecialchars($key['opt3'])?></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control quiz-input">
                                                            <label class="font-weight-normal">
                                                                <span class="quiz-option-number">D</span>
                                                                <input type="radio" id="<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>" name="<?=$no?>[<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>]" value="<?=htmlspecialchars($key['opt4'])?>" >
                                                               <span>&nbsp;&nbsp;&nbsp;<?=htmlspecialchars($key['opt4'])?></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                   
                                <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-contron-between w-100">
                                <div class="col-6">
                                    <button class="btn btn-sm btn-flat d-none" type="button" id="prev" style="width:140px">Back</button>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn btn-sm btn-flat" type="button" id="next" style="width:140px">Next</button>
                                    <button class="btn btn-sm btn-flat d-none" type="button" id="review"  style="width:140px">Review</button>
                                    <button class="btn btn-sm btn-flat d-none smb" name="click" id="submit"  style="width:150px">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
   <?php endif;?>
</div> 
<script>
   
    $('document').ready(function (){
        var iss= document.getElementById('bincount');
       
    })
    $(function(){
        $('#next').click(function(){
            var eq = $('#question1-list .question1-item:visible').index()
            var total = $('#question1-list .question1-item').length
            var next = eq + 1
            if(next <= (total-1)){
                $('#question1-list .question1-item:visible').addClass('d-none')
                $('#question1-list .question1-item').eq(next).removeClass('d-none')
                if(eq == 0){
                    $('#prev').removeClass('d-none')
                }
                if(next == (total - 1)){
                    $('#next').addClass('d-none')
                    $('#review').removeClass('d-none')
                }
            }
        })
        $('#prev').click(function(){
            var eq = $('#question1-list .question1-item:visible').index()
            var total = $('#question1-list .question1-item').length
            var prev = eq - 1
            if(prev <= (total-1)){
                $('#question1-list .question1-item:visible').addClass('d-none')
                $('#question1-list .question1-item').eq(prev).removeClass('d-none')
                if(eq == 0){
                    $('#prev').removeClass('d-none')
                }
                if(prev == 0){
                    $('#prev').addClass('d-none')
                }
                if(prev < (total-1)){
                    $('#review').addClass('d-none')
                    $('#next').removeClass('d-none')
                }
            }
        })




        $('#next').click(function(){
            var eq = $('#question-list .question-item:visible').index()
            var total = $('#question-list .question-item').length
            var next = eq + 1
            if(next <= (total-1)){
                $('#question-list .question-item:visible').addClass('d-none')
                $('#question-list .question-item').eq(next).removeClass('d-none')
                if(eq == 0){
                    $('#prev').removeClass('d-none')
                }
                if(next == (total - 1)){
                    $('#next').addClass('d-none')
                    $('#review').removeClass('d-none')
                }
            }
        })
        $('#prev').click(function(){
            var eq = $('#question-list .question-item:visible').index()
            var total = $('#question-list .question-item').length
            var prev = eq - 1
            if(prev <= (total-1)){
                $('#question-list .question-item:visible').addClass('d-none')
                $('#question-list .question-item').eq(prev).removeClass('d-none')
                if(eq == 0){
                    $('#prev').removeClass('d-none')
                }
                if(prev == 0){
                    $('#prev').addClass('d-none')
                }
                if(prev < (total-1)){
                    $('#review').addClass('d-none')
                    $('#next').removeClass('d-none')
                }
            }
        })
        $('#review').click(function(){
            $('#prev, #next, #review').addClass('d-none')
            $('#submit').removeClass('d-none')
            $('#question-list .question-item').removeClass('d-none')
        })
    })
        tm=window.setInterval('disp()',1000);
        var pi= document.getElementById('timer').innerHTML=timestamp;
        disp();
        function disp() {

            var presentTime = document.getElementById('timer').innerHTML;
            var timeArray = presentTime.split(/[:]+/);
            var h = timeArray[0];
            var m = timeArray[1];
            var s = timeArray[2] - 1;
            if (s < 10 && s >= 0) {
                s = "0" + s;
            } // add zero in front of numbers < 10
            if (s < 0) {
                s = "59";
            }
            if(m==59){
                h=h-1
            }
            if(s==59){
                m=m-1
            }
            if (m ==0 && h !=0) {
                h=h-1  
            }else{
                if (h==0) {
                    h='00';
                }
                if (m==0) {
                   m='00'; 
                }
                if(s==0){
                    s='00';
                }
                if (s==0 && m==0 && h==0) {
                    console.log('Stop');
                    window.clearInterval(tm);
                     document.getElementById("form").submit.click();
                }
            }
            document.getElementById('timer').innerHTML = h + ":"+ m + ":" + s;
        }
</script>
   <script src="<?=ASSETS?>Exam/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?=ASSETS?>Exam/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?=ASSETS?>Exam/plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="<?=ASSETS?>Exam/plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="<?=ASSETS?>Exam/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?=ASSETS?>Exam/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?=ASSETS?>Exam/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?=ASSETS?>Exam/plugins/moment/moment.min.js"></script>
    <script src="<?=ASSETS?>Exam/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?=ASSETS?>Exam/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?=ASSETS?>Exam/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?=ASSETS?>Exam/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=ASSETS?>Exam/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?=ASSETS?>Exam/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=ASSETS?>Exam/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    </body>
    </html>