<?php $this->view("include/Sinclude/header",$data); ?>
  <!-- //header-ends -->
  <!-- main content start -->
<div class="main-content" style="background: #e9ecef;">
<div id="Divloader" style="display:none">
    <div class="loading">
        <div align="center" style="position: absolute; margin-top: 63px; text-align: center; font-size: 18px; font-family: sans-serif; font-weight: 550; color: #fafafd;">Loading...</div>
    </div>
</div>
  <!-- content -->
  <div class="container-fluid content-top-gap">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="<?=ROOT?>Student/Dashboard/Default">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
      </ol>
    </nav>
      <div class="welcome-msg pt-3 pb-4 text-center">
        <span style="color:#fff;font-weight:600; font-size: 1.7rem;font-family: Arial,Verdana,Helvetica,sans-serif;line-height: 1.2;color: #000;">
        <?=$_SESSION['globalname']?> (Available Exams)
        </span>
      </div>
    <div class="container" id="formcontainer" style="margin-top:10px;background:#FFF; border-radius: 5px; max-width:1000px; margin:0 auto;padding: 25px;" id="App1">
        <div id="successmessagediv" class="success-ico" style="display:none"></div>
        <div id="error" class="error-ico errormsg" style="display:none;padding-left:20px"></div>
        <form method="POST" class="form-group" autocomplete="off" action="javascript:void(0)" id="changeStudentPassword">
           <table
				class="table js-basic-example dataTable table-striped table-bordered table-hover"
				id="myTable" >
				<thead>
					<tr style="background:#21495c">
						<th colspan="8">
							<strong>Student Examination Port View</strong>
							<strong class="text-center" style="float:center; color:#fff;"> Mercy College</strong>
						</th>
					</tr>
					<tr style="background:#ceede8;">
            <td><b>S.N.</b></td>
            <td><b>Course</b></td>
            <td><b>Total Question</b></td>
            <td><b>Time</b></td>
            <td></td>
					</tr>
				</thead>
				<tbody>
					<tr>
            <?php 
            $c =0;
            $this->Router = new Database;
            $examid = $data['eid'];
            $id = $_SESSION['student__Id'];
            $array = [];
            if (!empty($data['exam'])):?>
              <?php foreach ($data['exam'] as $row):?>
              <?php 
                $c++;
                $examid = $row['eid'];
                $eid = $row['eid'];
                $Coursecode = $row['Course'];
                $totalQuest = $row['total'];
                $time= $row['time'];
                ?>
                <tr>
                  <td><?=((isset($c))?$c:'')?></td>
                  <td><?=((isset($Coursecode))?$Coursecode: '')?></td>
                  <td><?=((isset($totalQuest))?$totalQuest: '')?></td>
                  <td><?=((isset($time))?date("h:i A", strtotime($time)): '')?></td>
                  <td>
                      <?php 
                        $this->Router->query("SELECT * FROM monitor WHERE examid =:examid AND studentid=:id AND examstatus=1");
                        $this->Router->bind(':examid', $examid);
                        $this->Router->bind(':id', $id);
                        $stmt = $this->Router->resultSet();
                        ?>
                        <?php foreach ($stmt as $e){
                            $array = $e['examid'];
                            }
                          ?>
                            <?php if ($array == $eid):?>
                                <button type="reset" class="btn btn-success btn-sm">Taken Already</button>
                                <a href="check_result?action=result&eid=<?php echo $examid;?>&user=<?=$_SESSION['student__Id']?>" class="btn btn-secondary btn-sm">View Result</a>
                                <?php else: ?>
                                <a href="Examination?q=start&step=2&eid=<?=$eid?>&n=1&t=<?=$totalQuest?>" class="btn btn-success text-center" style="background:#2db44a;">
                                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;
                                  <span class="title1"><b>Commence Exam</b>
                                  </span>
                                </a>
                              <?php endif;?>
                            <?php endforeach;?>
                       
                      </td>
                      </tr>
                
                <?php endif;?>
              </div>
              </tr>
				</tbody>
			</table>
        </form>
    <!-- //modals -->
  </div>
  <!-- //content -->
</div>
<!-- main content end-->
</section>
  <!--footer section start-->
<footer class="dashboard">
  <p>&copy 2020 Collective. All Rights Reserved | Design by <a href="https://www.midtech.digital/" target="_blank" class="text-primary">MidTech Digital.</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
$(document).ready(($)=> {
  $("#error").hide();
  $("#successmessagediv").hide();
  $("#Divloader").hide();
        //on submit
  $('#changeStudentPassword').submit((e)=> {
      e.preventDefault();
      $("#error").hide();
      $("#successmessagediv").hide();
    //validate the input now
      let id = $("input#stdid").val();
      let oldpass = $("input#oldpassword").val();
      if (oldpass == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Enter Your Current Password.!</span>");
        $("input#oldpassword").focus();
        return false;
      }
      let newpass = $("input#newpassword").val();
      if (newpass == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Your New Password.!</span>");
        $("input#newpassword").focus();
        return false;
      }
      if (newpass.length < 8) {
        $("#error").fadeIn().html("<span style='margin-left:42px; font-size:14px'>Password is too weak..it should be at least 8-12 characters</span>");
        $("input#newpassword").focus();
        return false;
      }
      let confirmpass = $("input#confirmpassword").val();
      if (confirmpass == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Enter The New Password (Again)</span>");
        $("input#confirmpassword").focus();
        return false;
      } 
     if(newpass != confirmpass){
        $("#error").fadeIn().html("<span style='margin-left:42px;'><b>Sorry..!</b> The two new password doesn't match</span>");
        $("input#confirmpassword").focus();
        return false;
     }
    const data = {"studentid":id, "oldpassword": oldpass, "newpassword":newpass, "confirmpassword":confirmpass };
    let RouteUserDateToPhp = JSON.stringify(data);
     $.ajax({
        type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
        dataType: 'JSON',
        contentType: "application/json; charset=utf-8",
        data: RouteUserDateToPhp,// our data object
        url: "<?=ROOT?>PagesController/CStudentProcessing",// the url where we want to POST
        processData: false,
        encode: true,
        crossOrigin: true,
        async: true,
        crossDomain: true,
        headers: {
                    'Access-Control-Allow-Methods': '*',
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache",
                    'Content-Type': 'application/json'
                },
    }).then((response) => {
        if(response.status == 200){
            const loading = document.querySelector('.loading');
            $("#successmessagediv").fadeIn().html(response.Successmessage);
            $("#Divloader").show();
            setTimeout(() => {
              loading.style.opacity = "0";
              window.location.reload(1);
              }, 2000);
        }else{
            $("#error").fadeIn().html(response.message);
        }
    }).fail((xhr, error) => {
        $("#error").fadeIn().text('Oops...Server is down! error');
    });

  });
});
// upload script 
$(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.mypicture').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
// end upload script 
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="<?=ASSETS?>important__stylesheet__file/stdfile/jquery-3.3.1.min.js"></script>
<script src="<?=ASSETS?>important__stylesheet__file/stdfile/jquery-1.10.2.min.js"></script>

<script src="<?=ASSETS?>important__stylesheet__file/stdfile/jquery.nicescroll.js"></script>
<script src="<?=ASSETS?>important__stylesheet__file/stdfile/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="<?=ASSETS?>important__stylesheet__file/stdfile/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="<?=ASSETS?>important__stylesheet__file/stdfile/bootstrap.min.js"></script>

</body>

</html>
  