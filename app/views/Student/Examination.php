
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
        var bimro = "<?=date(''.$data['examTime']->hour.':'.$data['examTime']->minute)?>";
    </script>
    <script src="<?=ASSETS?>Exam/js/script.js"></script>
    <style>
        html,
        body {height: 100%;width: 100%;}
        #head {padding: 1%;border-bottom: 1px solid #EEE;position: static;top: 0px;left: 0px;z-index: 99;background: #008bc6;margin-bottom: 10px;}
        .badge {color: #fff;background-color: #008bc6;font-size: 13px;border-radius: 12px 12px 12px}
        .badge {display: inline-block;padding: 0.35em 0.65em;font-weight: 700;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;}
        #main-header{position:relative;background: rgb(0,0,0)!important;background: radial-gradient(circle, rgba(0,0,0,0.48503151260504207) 22%, rgba(0,0,0,0.39539565826330536) 49%, rgba(0,212,255,0) 100%)!important;height:70vh;}
 </style> 
  
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
                                <!-- <div class="title">
                                    <div class="h5 card-title" style="color:#fff">Taking <b style="text-decoration:underline"><?= ($data['examTime']->title) ? $data['examTime']->title : '' ;?></b> Exam</div> 
                                </div> -->
                            </div>
                            <div class="col-md-4">
                                <div class="timestamp text-center" style="color:#cac8cc;">
                                    <i class="fa fa-clock-o" aria-hidden="true" style="background:#fff"></i>
                                    <div class="time" style="font-size:20px;"><span id="timer"></span></div>
                                    <span style="color:#cac8cc; font-size:13px; font-weight:500; text-align:center">TIME LEFT IN THIS ASSIGNMENT SESSION</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="progress" style=" width: 90%; position: absolute;top:0;bottom: 0;left: 0;right: 0;margin: auto;">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                                <div class="container-text" >
                                    <div class="" id="question1-list">
                                    <?php
                                    if(isset($_GET['eid'])):
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
        <?php if(isset($_GET['eid'])): 
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
                                                <span class="text-muted"><b>[15pts.]</b></span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="text-muted"><b><?=(($no == 1)?$no : $no)?>/<?=$data['isCount']?></b></span>
                                                <input type="hidden" name="total" value="<?=$data['isCount']?>">
                                            </div>
                                        </div>
                                         <!-- OPTIONS -->
                                       <div class="mx-3">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control "> 
                                                            <label class="font-weight-normal" style="right: 0;margin: auto;background-color: rgba(0, 0, 0, 0.03);border:1px solid rgba(0, 0, 0, 0.03); border-radius:5px; width:100%; height:100%; ">
                                                                <div class="sel" style="margin-left:5px;margin-top:10px;margin-bottom:10px; font-size:18px; display:flex">
                                                                    <input type="radio" id="<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>" name="<?=$no?>[<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>]" value="<?=htmlspecialchars($key['opt1'])?>" >
                                                                    &nbsp;&nbsp;|&nbsp;&nbsp;<?=htmlspecialchars($key['opt1'])?>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control">
                                                            <label class="font-weight-normal" style="right: 0;margin: auto;background-color: rgba(0, 0, 0, 0.03);border:1px solid rgba(0, 0, 0, 0.03); border-radius:5px; width:100%; height:100%;">
                                                                <div class="sel" style="margin-left:5px;margin-top:10px;margin-bottom:10px; font-size:18px; display:flex">    
                                                                    <input type="radio" id="<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>" name="<?=$no?>[<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>]" value="<?=htmlspecialchars($key['opt2'])?>">
                                                                    &nbsp;&nbsp;|&nbsp;&nbsp;<?=htmlspecialchars($key['opt2'])?>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control">
                                                            <label class="font-weight-normal" style="right: 0;margin: auto;background-color: rgba(0, 0, 0, 0.03);border:1px solid rgba(0, 0, 0, 0.03); border-radius:5px; width:100%; height:100%; ">
                                                                <div class="sel" style="margin-left:5px;margin-top:10px;margin-bottom:10px; font-size:18px; display:flex">        
                                                                    <input type="radio" id="<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>" name="<?=$no?>[<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>]" value="<?=htmlspecialchars($key['opt3'])?>" >
                                                                    &nbsp;&nbsp;|&nbsp;&nbsp;<?=htmlspecialchars($key['opt3'])?>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control">
                                                            <label class="font-weight-normal" style="right: 0;margin: auto;background-color: rgba(0, 0, 0, 0.03);border:1px solid rgba(0, 0, 0, 0.03); border-radius:5px; width:100%; height:100%; ">
                                                                <div class="sel" style="margin-left:5px;margin-top:10px;margin-bottom:10px; font-size:18px; display:flex">        
                                                                    <input type="radio" id="<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>" name="<?=$no?>[<?=((!empty($key['questionid']))?$key['questionid'] : $no)?>]" value="<?=htmlspecialchars($key['opt4'])?>" >
                                                                    &nbsp;&nbsp;|&nbsp;&nbsp;<?=htmlspecialchars($key['opt4'])?>
                                                                </div>
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
                                    <button class="btn btn-primary btn-sm btn-flat d-none" type="button" id="prev">Back</button>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn btn-primary btn-sm btn-flat" type="button" id="next">Next</button>
                                    <button class="btn btn-primary btn-sm btn-flat d-none" type="button" id="review">Review</button>
                                    <button class="btn btn-primary btn-sm btn-flat d-none" name="click" id="submit">Submit</button>
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
       console.log(iss);
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
   window.onload =  startTimer();
    // timer set
        document.getElementById('timer').innerHTML = bimro;
        //03 + ":" + 00 ;
        function startTimer() {
            var presentTime = document.getElementById('timer').innerHTML;
            var timeArray = presentTime.split(/[:]+/);
            var m = timeArray[0];
            var s = checkSecond((timeArray[1] - 1));
            if(s==59){m=m-1}
            if(m==0 && s==0){document.getElementById("form").submit.click();}
            document.getElementById('timer').innerHTML = m + ":" + s;
            setTimeout(startTimer, 1000);
        }
        function checkSecond(sec) {
            if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
            if (sec < 0) {sec = "59"};
            return sec;
            if(sec == 0 && m == 0){ alert('stop it')};
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