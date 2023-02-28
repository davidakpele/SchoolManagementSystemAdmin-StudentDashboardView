<?php $this->view("include/Sinclude/header",$data); ?>
  <!-- main content start -->
  <style>
    .course_img {
      height:250px
    }
  </style>
<div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item active" aria-current="page" style="font-size:30px; font-weight:600; color:#000">Dashboard</li>
      </ol>
    </nav>
   
    <div class="welcome-msg pt-3 pb-4">
      <div class="lw-dv1 pull-right" style="top:130px; position:absolute; right:0; margin-right:66px">
        <button id="fgroupingdropdown" type="button" class="btn btn-outline-primary dropdown-toggle pull" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Grouping drop-down menu">
        <i class="icon fa fa-th  fa-fw "></i>
        <span class="d-sm-inline-block" data-active-item-text="">Settings</span>
      </button>
       <ul class="dropdown-menu" role="menu" data-show-active-item="" data-skip-active-class="true" aria-labelledby="fgroupingdropdown">
        <li><a class="dropdown-item  btn btn-primary" href="<?=ROOT?>Student/AuthExamination" data-filter="sort" data-pref="lastaccessed" data-value="ul.timeaccess desc" aria-label="Sort courses by last accessed date" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem"><i class="icon fa fa-pencil fa-fw " style="color:blue"></i>Examination</a></li>
        <li><a class="dropdown-item btn btn-primary" href="<?=ROOT?>Student/change_password/" data-filter="sort" data-pref="title" data-value="fullname" aria-label="Sort courses by course name" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem" aria-current="true"><i class="icon fa fa-cog fa-fw " style="color:blue"></i>Reset Password</a></li>
      </ul>
      </div>
    </div>
     <span class="card-title d-inline ml-5 ">COURSE OVERVIEW</span>
    <div class="row">
      <div class="col-md-9">
       <!-- Here you have your courses roll in -->
        <div class="courses__display__section" lang="EN-US" >
          <div class="container">
            <div class="row">

            <!-- Start -->
              <?php
                 //define total number of results you want per page  
              $results_per_page = 6;    
              $this->DB = new Database;
              $id = $_SESSION['Department'];
              $Classid = $_SESSION['Classid'];
              $semsterid = $_SESSION['semsterid'];
              $this->DB->query("SELECT * FROM courses WHERE ClassID =:Classid AND DepartmentID = :id AND SemesterID =:semsterid");
              $this->DB->bind(':id', $id);
              $this->DB->bind(':Classid', $Classid);
              $this->DB->bind(':semsterid', $semsterid);
              $stmt = $this->DB->resultSet();
              if (!empty($stmt)):
                $number_of_result  = $this->DB->rowCount();
                $num_results_on_page = 10;
                 //determine the total number of pages available  
                $number_of_page = ceil ($number_of_result / $results_per_page); 
                
                // Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
                $page = isset($_GET['Page']) && is_numeric($_GET['Page']) ? $_GET['Page'] : 1;
                  //determine the sql LIMIT starting number for the results on the displaying page  
                  $page_first_result = ($page-1) * $results_per_page;  
                  //retrieve the selected results from database
                  $this->DB->query("SELECT * FROM courses WHERE ClassID =:Classid AND DepartmentID = :id AND SemesterID =:semsterid 
                  LIMIT :page_first_result,:results_per_page");
                  $this->DB->bind(':id', $id);
                  $this->DB->bind(':Classid', $Classid);
                  $this->DB->bind(':semsterid', $semsterid);
                  $this->DB->bind(':page_first_result', $page_first_result);
                  $this->DB->bind(':results_per_page', $results_per_page);
                  $result = $this->DB->resultSet();
              ?>
              <div class="container-fluid">
                <div class="card">
                  <div class="row">
                  <?php foreach ($result as $ue): ?>
                  <div class="col-md-4">
                    <div class="container mt-1 mb-5 d-flex justify-content-center align-items-center" >
                      <div class="card">
                        <div class="inner-card" style=" background: #fff;padding: 10px;border-radius: 5px; max-width:280px"> 
                          <img src="<?=ASSETS?>img/4qXhMAM.jpg" class="img-thumbnail course_img rounded">
                          <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                              <h5><?=($ue['CourseTitle']) ? $ue['CourseTitle'] : '' ;?></h5> 
                              <span class="heart" style="cursor: pointer;height: 35px;width: 35px;font-size: 13px;display: flex;justify-content: center;align-items: center;color: #beb4aa;border-radius: 50%;background-color: #eee"><i class="fa fa-heart"></i></span>
                          </div>
                          <div class="mt-2 px-2"> 
                            <small>Course Code:* &nbsp;| <u><?=($ue['CourseCode']) ? $ue['CourseCode'] : '' ;?></u></small> 
                          </div>
                          <div class="px-2">
                              <h6>Course Unit | <span class="pull-right btn btn-secondary btn-sm"><?=($ue['CourseUnit']) ? $ue['CourseUnit'] : '' ;?></span></h6>
                          </div>
                          <div class="px-2 mt-3">
                            <a href="../ReadMore?Search=<?=($ue['CourseID']) ? $ue['CourseID'] : '' ;?>&search=1"><button class="btn btn-outline-primary px-3">Read More</button> </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach;?>
                </div>
              </div>
              <div class="pagination">
              <?php if (ceil($number_of_result / $num_results_on_page) > 0): ?>
                <ul class="pagination">
                  <?php if ($page > 1): ?>
                  <li class="prev"><a href="?Page=<?=$page-1 ?>">Prev</a></li>
                  <?php endif; ?>

                  <?php if ($page > 3): ?>
                  <li class="start"><a href="?Page=1">1</a></li>
                  <li class="dots">...</li>
                  <?php endif; ?>
                  <?php if ($page-2 > 0): ?><li class="page"><a href="?Page=<?=$page-2 ?>"><?=$page-2 ?></a></li><?php endif; ?>
                  <?php if ($page-1 > 0): ?><li class="page"><a href="?Page=<?=$page-1 ?>"><?=$page-1 ?></a></li><?php endif; ?>
                  <li class="currentpage"><a href="?Page=<?=$page ?>"><?=$page?></a></li>
                  <?php if ($page+1 < ceil($number_of_result / $num_results_on_page)+1): ?><li class="page"><a href="?Page=<?=$page+1 ?>"><?=$page+1 ?></a></li><?php endif; ?>
                  <?php if ($page+2 < ceil($number_of_result / $num_results_on_page)+1): ?><li class="page"><a href="?Page=<?=$page+2 ?>"><?=$page+2 ?></a></li><?php endif; ?>
                  <?php if ($page < ceil($number_of_result / $num_results_on_page)-2): ?>
                  <li class="dots">...</li>
                  <li class="end"><a href="?Page=<?=ceil($number_of_result / $num_results_on_page) ?>"><?=ceil($number_of_result / $num_results_on_page) ?></a></li>
                  <?php endif; ?>
                  <?php if ($page < ceil($number_of_result / $num_results_on_page)): ?>
                  <li class="next"><a href="?Page=<?=$page+1 ?>">Next</a></li>
                  <?php endif; ?>
                </ul>
                <?php endif; ?>   
              </div>  
              </div>
          <?php endif;?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="subp__side_menu" style="padding:20px" id="side_menu">
        <h6>LIBRARY RESOURCES</h6>
        <h6>LIBRARY AVAILABLE ELECTRONIC RESOURCES</h6>
        <table>
          <thead>
            <tr>
              <th scope="col">Resources</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a href="#" target="_blank">
                  <strong>JSTOR&nbsp; www.jstor.org/</strong>
                </a>
                <br><strong>Username</strong>:&nbsp;
                <span lang="EN-US">MCULIBRARY01<br>
                  <strong>Password:&nbsp;
                    <strong>
                      <span lang="EN-US">Learning1</span></strong>
                  </strong>
                </span>
                <br>
            </td>
            </tr>
            <tr>
              <td>
                <a href="#" target="_blank"><strong>JSTOR&nbsp; www.jstor.org/</strong></a>
                <br><strong>Username</strong>:&nbsp;
                <span lang="EN-US">MCULIBRARY02<br>
                  <strong>Password:&nbsp;
                    <strong>
                      <span lang="EN-US">Learning2</span></strong>
                  </strong>
                </span>
                <br>
              </td>
            </tr>
            <tr>
              <td>
                <a href="#" target="_blank">
                <strong>JSTOR&nbsp; www.jstor.org/</strong></a><br>
                <strong>Username</strong>:&nbsp;
                <span lang="EN-US">MCULIBRARY03<br>
                  <strong>Password:&nbsp;<strong>
                  <span lang="EN-US">Learning3</span>
                </span><br>
              </td>
            </tr>
            </tbody>
          </table>
      </div>
      <div class="sec_div_flock" style="padding-top:20px">
        <h6>TIMELINE</h6>
        <div id="sec_m">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon fa fa-sort-amount-asc fa-fw " id="yui_3_17_2_1_1652775199957_324"></i>
              <span class="sr-only" data-active-item-text="">Sort by dates</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item btn btn-primary" href="#">Action</a>
              <a class="dropdown-item btn btn-primary" href="#">Another action</a>
              <a class="dropdown-item btn btn-primary" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown">
            <button id="sortingdropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Sorting drop-down menu">
                <i class="icon fa fa-clock-o fa-fw "></i>
                <span class="d-sm-inline-block" data-active-item-text="">
                    Time Frame
                </span>
            </button>
            <ul class="dropdown-menu" role="menu" data-show-active-item="" data-skip-active-class="true" aria-labelledby="sortingdropdown">
              <li>
                <a class="dropdown-item" href="#" data-filter="sort" data-pref="title" data-value="fullname" aria-label="Sort courses by course name" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem" aria-current="true">
                  Course name
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#" data-filter="sort" data-pref="lastaccessed" data-value="ul.timeaccess desc" aria-label="Sort courses by last accessed date" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem">
                  Last accessed
                </a>
              </li>
            </ul>
        </div>
        </div>
        <span class="border-bottom"></span>
        <div class="text-xs-center text-center mt-3" data-region="empty-message">
          <img src="<?=ASSETS?>img/activities" alt="" style="height: 70px; width: 70px">
          <p class="text-muted mt-1">No upcoming activities due</p>
        </div>
      </div>
      <div class="third__sec">
        <div class="card-body p-3" id="yui_3_17_2_1_1652775199957_330">
          <h6 id="instance-2333704-header" class="card-title d-inline" style="font-weight:600">Latest badges</h6>
          <div class="card-text content mt-2">
            You have no badges to display
            <div class="footer"></div>
          </div>
        </div>
         <div class="card-body p-3" id="Useronline">
          <h6 id="instance-2333704-header" class="card-title d-inline" style="font-weight:600">ONLINE USERS</h6>
          <div class="card-text content mt-2">
          <?php  foreach ($data['online'] as $rvalue):?>
            <div class="user">
              <a href="../AuthUser?Search=<?=($rvalue['student__Id']) ? $rvalue['student__Id'] : '' ;?>" title="<?=($rvalue['student__Id']) ? $rvalue['student__Id'] : '' ;?>" style="display:flex">
                <img src="<?=ASSETS?>img/f2" class="userpicture defaultuserpic" width="20" height="20" alt="<?=$rvalue['Surname'].' '.$rvalue['othername']; $rvalue['student__Id']?>">
                <span style="margin-left:5px;"><?=$rvalue['Surname'].' '.$rvalue['othername']?><span class="active__online__std" style="margin-top:5px"></span></span>
              </a>
            </div>
            <?php endforeach;?>
            <div class="footer"></div>
          </div>
        </div>
         <div class="card-body p-3" id="yui_3_17_2_1_1652775199957_330">
          <h6 id="instance-2333704-header" class="card-title d-inline" style="font-weight:600">PRIVATE FILES</h6>
          <div class="card-text content mt-2">
           No files available
            <div class="footer"><br/>
            <a href="#">Manage private files...</a>
            </div>
          </div>
        </div>
        <div class="card-body p-3" id="yui_3_17_2_1_1652775199957_330">
          <h6 id="instance-2333704-header" class="card-title d-inline" style="font-weight:600">UPCOMING EVENTS</h6>
          <div class="card-text content mt-2">
          <img class="icon " alt="Close window" title="Close window" src="<?=ASSETS?>img/icon">
            <a href="#" onclick="___CallViewEvent()">Tutor Marked Assignment 1<small>(TMA1) Close Saturday, 4 June, 11:59 PM</small></a>
          </div>
          <span class="border-bottom"></span>
        </div>
      </div>
  </div>
</div>
  
    <!-- statistics data -->
</div>
<!-- main content end-->
</section>
  <!--footer section start-->
<footer class="dashboard">
  <p>&copy 2020 Collective. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank"
      class="text-primary">W3layouts.</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script> 
 $(document).ready(function(){
    var maxLength = 35;
    $(".courseName").each(function(){
      var myStr = $(this).text();
      if($.trim(myStr).length > maxLength){
        var newStr = myStr.substring(0, maxLength);
        var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
        $(this).empty().html(newStr);
        $(this).append(' <a href="javascript:void(0);" class="read-more " style="width:auto; height:auto; font-size:12px">...</a>');
      }
    });
  });

function ___CallViewEvent(SSD){
		let data = {"SSD":SSD};
		jQuery.ajax({
			url: '<?=ROOT;?>PagesController/EventBox',
			method: "POST",
			data: data,
			crossDomain: true,
			dataType: 'html',
			crossOrigin: true,
			async: true,
			cache: false,
			processData: true,
			headers: {
						'Access-Control-Allow-Methods': '*',
						"Access-Control-Allow-Credentials": true,
						"Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
						"Access-Control-Allow-Origin": "*",
						"Control-Allow-Origin": "*",
						"cache-control": "no-cache"
					},
			success:(data)=>{
				$('body').append(data);
				$('#EventModal').modal('show');
			},
			error: ()=>{
				alert("Something went wrong..!");
			}
		});
	}
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
<script src="<?=ASSETS?>js/popper.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?=ASSETS?>important__stylesheet__file/stdfile/bootstrap.min.js"></script>

</body>

</html>
  