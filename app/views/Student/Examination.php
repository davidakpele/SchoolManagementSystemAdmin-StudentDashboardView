<?php $this->view("include/St_header",$data); ?>
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
        <?php if(isset($_GET['id'])): ?>
        <section class="mt-5 py-3">
         <div class="h5 card-title" ><?=$data['examName']?> Examination</div>
            <div class="container">
                <form action="<?=ROOT?>Student/ExamResult" method="POST" id="form">
                    <input type="hidden" name="exam_id"  value= "2" />
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
                                    <?php  foreach ($data['examcontroller'] as $key ):?>
                                    <div class="question-item py-4 <?=(($qi) != 1 ? "d-none" : '') ?>">
                                        <div class="d-flex align-items-top mb-3">
                                            <div class="col-auto">
                                                <?= $no = $qi ++; ?>.
                                            </div>
                                            <div class="col-auto flex-shrink-1 flex-grow-1">
                                                <div class="question_text"><p><?=@$key['question'];?></p></div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="text-muted"><b><?=(($no == 1)?$no : $no)?>/<?=$data['isCount']?></b></span>
                                            </div>
                                        </div>
                                        <div class="mx-3">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control custom-radio">
                                                             <input class="custom-control-input" type="<?=$key['Ansbutton']?>" 
                                                                name="<?=$no?>"
                                                                value="<?=$key['option 1'];?>" 
                                                                id="<?=$key['option 1'];?>" >
                                                                <label for="<?=$key['option 1'];?>" class="custom-control-label font-weight-normal">
                                                                    <?=$key['option 1']; ?>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" type="<?=$key['Ansbutton']?>" 
                                                                name="<?= $no;?>"
                                                                value="<?=$key['option 2'];?>" 
                                                                id="<?= $key['option 2'];?>">
                                                                 <label for="<?= $key['option 2'];?>" class="custom-control-label font-weight-normal">
                                                                    <?=$key['option 2'];?>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <div class="custom-control custom-radio">
                                                             <input class="custom-control-input" type="<?=$key['Ansbutton']?>" 
                                                                name="<?=$no;?>"
                                                                value="<?=$key['option 3'];?>" 
                                                                id="<?= $key['option 3'];?>">
                                                                <label for="<?= $key['option 3'];?>" class="custom-control-label font-weight-normal">
                                                                    <?= $key['option 3'];?>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <div class="custom-control custom-radio">
                                                             <input class="custom-control-input" 
                                                                    type="<?=$key['Ansbutton']?>" 
                                                                name="<?= $no;?>"
                                                                value="<?=$key['option 4'];?>" 
                                                                id="<?=$key['option 4'];?>">
                                                                <label for="<?=$key['option 4'];?>" 
                                                                        class="custom-control-label font-weight-normal">
                                                                    <?=$key['option 4'];?>
                                                                </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
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
    <?php else: ?>
        <div class="key" style="width:60%; height:60%; margin:15% auto">
        <div class="header">
            <h3 class="text-center" style="text-decoration:underline">Examination Dashboard</h3>
        </div>
        <div class="select___Exam col-md-12">
            <div class="col-md-12">
                <form method="POST" action="<?=ROOT?>Student/Examination?id=<?=$data['examid']?>" class="form-group">
                    <label for="__SelectExam">Select Exam:*</label>
                    <select value="<?=((isset(($_POST['__ExamTable']))?$_POST['__ExamTable']: ''))?>" 
                    name="__ExamTable" id="Select__Exam__Id" class="form-control" 
                    onchange="this.form.submit()">
                        <option disabled="disabled" selected="selected" >--Select--</option>
                        <option value="Computer Science">Computer Science</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div> 
<script>
    $(function(){
        $('#next').click(function(){
            var eq = $('#question-list .question-item:visible').index()
            var total = $('#question-list .question-item').length
            var next = eq + 1
            if(next <= (total-1)){
                $('#question-list .question-item:visible').addClass('d-none')
                console.log($('#question-list .question-item').eq(next))
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
            console.log()
            if(prev <= (total-1)){
                $('#question-list .question-item:visible').addClass('d-none')
                console.log($('#question-list .question-item').eq(prev))
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
        document.getElementById('timer').innerHTML = '<?=$data['Starting__time']?>';
        //03 + ":" + 00 ;
        function startTimer() {
            let presentTime = document.getElementById('timer').innerHTML;
            let timeArray = presentTime.split(/[:]+/);
            let m = timeArray[0];
            let s = checkSecond((timeArray[1] - 1));
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
    </body>
    </html>