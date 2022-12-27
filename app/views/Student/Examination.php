
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
    <meta name="description" content="Mercy College University Online Examination Student Portal." />
    <!-- Google Font: Source Sans Pro -->
     <link href="<?=ASSETS?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS?>Exam/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
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
        var bimro = "<?=$data['examTime']->time?>";
    </script>
    <script src="<?=ASSETS?>Exam/js/script.js"></script>
    <style>
    html,
    body {height: 100%;width: 100%;}
    .badge {color: #fff;background-color: #008bc6;font-size: 13px;border-radius: 12px 12px 12px}
    .badge {display: inline-block;padding: 0.35em 0.65em;font-weight: 700;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;}
    #main-header{position:relative;background: rgb(0,0,0)!important;background: radial-gradient(circle, rgba(0,0,0,0.48503151260504207) 22%, rgba(0,0,0,0.39539565826330536) 49%, rgba(0,212,255,0) 100%)!important;height:70vh;}
 </style> <!-- Font Awesome -->
  
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" 
        id="topNavBar" style="background:#008bc6; max-height:50px">
        <div class="container px-4 px-lg-5 ">
            <button class="navbar-toggler btn btn-sm" type="button" 
                    data-toggle="collapse" data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?=ROOT?>Student/Dashboard/">
                <span>
                    <img src="<?=ASSETS?>img/product/1.png" 
                        class="img-responsive center" 
                        style="max-width:40px;"/>
                </span>
            </a>
            <div class="collapse navbar-collapse" 
                id="navbarSupportedContent">
                <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link " aria-current="page" href="./">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="../Examination?Page=Started">Exams</a></li>
                    <li class="nav-item"><a class="nav-link " href="./?p=about">About Us</a></li>
                </ul> -->
                <!-- <div class="d-flex align-items-center">
                </div> -->
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if(isset($_GET['eid'])): 
            $this->db = new Database;;?>
        <section class="mt-5 py-3">
         <div class="h5 card-title" ><?= ($data['examTime']->title) ? $data['examTime']->title : '' ;?> Examination</div>
            <div class="container">
                <form action="<?=ROOT?>Student/ExamResult?no=<?=$data['isCount']?>" method="POST" id="form">
                    <input type="hidden" name="courseid"  value= "<?= ($data['examTime']->Course) ? $data['examTime']->Course : '' ;?>" />
                    <input type="hidden" name="exam_id"  value= "<?= ($data['examTime']->eid) ? $data['examTime']->eid : '' ;?>" />
                    <div class="card card-outline card-navy shadow rounded-0" style="margin-top:70px">
                        <div class="card-header">
                        <?php $qi = 1;?>
                            <center>
                                <div class="time" style="float:right;font-size:20px;">Examination Time :
                                    <span id="timer"></span>
                                </div><br/>
                            </center>
                        </div>
                        <div class="card-body" >
                            <div class="container-fluid">
                                <div class="" id="question-list">
                                    <?php $this->db = new Database;?>
                                    <?php  foreach ($data['examcontroller'] as $key ):?>
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
                                         
                                       <div class="mx-3">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control"> 
                                                            <label class="font-weight-normal">
                                                                <input type="radio" name="<?=(($no == 1)?$no : $no)?>" value="<?=htmlspecialchars($key['opt1'])?>" >
                                                                <?=htmlspecialchars($key['opt1'])?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control">
                                                            <label class="font-weight-normal">
                                                                <input type="radio" name="<?=(($no == 1)?$no : $no)?>" value="<?=htmlspecialchars($key['opt2'])?>">
                                                                <?=htmlspecialchars($key['opt2'])?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control">
                                                            <label class="font-weight-normal">
                                                                <input type="radio" name="<?=(($no == 1)?$no : $no)?>" value="<?=htmlspecialchars($key['opt3'])?>" >
                                                                <?=htmlspecialchars($key['opt3'])?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control">
                                                            <label class="font-weight-normal">
                                                                <input type="radio" name="<?=(($no == 1)?$no : $no)?>" value="<?=htmlspecialchars($key['opt4'])?>" >
                                                                <?=htmlspecialchars($key['opt4'])?>
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
    $(function(){
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
    <!-- overlayScrollbars -->
    <!-- <script src="<?=ASSETS?>Exam/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="<?=ASSETS?>js/adminlte.js"></script>
    <div class="daterangepicker ltr show-ranges opensright">
    </body>
    </html>