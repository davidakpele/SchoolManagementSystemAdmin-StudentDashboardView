<?php $this->view("include/Sinclude/header",$data); ?>
  <!-- main content start -->
<div class="main-content">
  <!-- content -->
  <div class="container-fluid content-top-gap">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <div class="lw-dv1">
        <h1>Hi <span class="text-primary"><?=$_SESSION['globalname']?></span>, Welcome back</h1>
        <p>Clean & featured dashboard.</p>
      </div>
       <div class="lw-dv1 pull-right" style="top:130px; position:absolute; right:0; margin-right:66px">
         <button id="fgroupingdropdown" type="button" class="btn btn-outline-primary dropdown-toggle pull" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Grouping drop-down menu">
          <i class="icon fa fa-th  fa-fw "></i>
          <span class="d-sm-inline-block" data-active-item-text="">
            Settings
          </span>
        </button>
       <ul class="dropdown-menu" role="menu" data-show-active-item="" data-skip-active-class="true" aria-labelledby="fgroupingdropdown">
          <li>
            <a class="dropdown-item  btn btn-primary" href="<?=ROOT?>Student/ExamCenter/" data-filter="sort" data-pref="lastaccessed" data-value="ul.timeaccess desc" aria-label="Sort courses by last accessed date" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem">
              <i class="icon fa fa-pencil fa-fw " style="color:blue"></i>Examination
            </a>
          </li>
          <li>
            <a class="dropdown-item btn btn-primary" href="<?=ROOT?>Student/CStudent/" data-filter="sort" data-pref="title" data-value="fullname" aria-label="Sort courses by course name" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem" aria-current="true">
              <i class="icon fa fa-cog fa-fw " style="color:blue"></i>Reset Password
            </a>
          </li>
        </ul>
      </div>
    </div>
  <div class="row">
    <div class="col-md-9">
      <div class="statistics">
        <div class="course__Section">
          <h5 class="card-title d-inline">COURSE OVERVIEW</h5><br/><br/>
          <div data-region="filter" class="d-flex align-items-center flex-wrap" aria-label="Course overview controls">
            <div class="dropdown mb-1 mr-auto">
                <button id="groupingdropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Grouping drop-down menu">
                    <i class="icon fa fa-filter fa-fw "></i>
                    <span class="d-sm-inline-block" data-active-item-text="">
                        All (except removed from view)
                    </span>
                </button>
                <ul class="dropdown-menu" role="menu" data-show-active-item="" data-skip-active-class="true" data-active-item-text="" aria-labelledby="groupingdropdown">
                  <li class="dropdown-divider" role="presentation">
                    <span class="filler">&nbsp;</span>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="all" data-pref="all" aria-label="Show all courses except courses removed from view" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem" aria-current="true">
                      All (except removed from view)
                    </a>
                  </li>
                  <li class="dropdown-divider" role="presentation">
                      <span class="filler">&nbsp;</span>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="inprogress" data-pref="inprogress" aria-label="Show courses in progress" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem">
                    In progress
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="future" data-pref="future" aria-label="Show future courses" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem">
                    Future
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="past" data-pref="past" aria-label="Show past courses" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem">
                    Past
                    </a>
                  </li>
                  <li class="dropdown-divider" role="presentation">
                    <span class="filler">&nbsp;</span>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="favourites" data-pref="favourites" aria-label="Show starred courses" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem">
                      Starred
                    </a>
                  </li>
                  <li class="dropdown-divider" role="presentation">
                    <span class="filler">&nbsp;</span>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" data-filter="grouping" data-value="hidden" data-pref="hidden" aria-label="Show courses removed from view" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem">
                      Removed from view
                    </a>
                  </li>
                </ul>
            </div>
            <div class="mb-1 mr-1 d-flex align-items-center">
              <div class="dropdown">
                  <button id="sortingdropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Sorting drop-down menu">
                      <i class="icon fa fa-sort-amount-asc fa-fw "></i>
                      <span class="d-sm-inline-block" data-active-item-text="">
                          Course name
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
          <div class="dropdown mb-1">
            <button id="displaydropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Display drop-down menu">
              <i class="icon fa fa-th fa-fw "></i>
              <span class="d-sm-inline-block" data-active-item-text="">
              Card
              </span>
            </button>
            <ul class="dropdown-menu" role="menu" data-show-active-item="" data-skip-active-class="true" aria-labelledby="displaydropdown">
              <li>
                <a class="dropdown-item" href="#" data-display-option="display" data-value="card" data-pref="card" aria-label="Switch to card view" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem" aria-current="true">
                Card
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#" data-display-option="display" data-value="list" data-pref="list" aria-label="Switch to list view" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem">
                List
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#" data-display-option="display" data-value="summary" data-pref="summary" aria-label="Switch to summary view" aria-controls="courses-view-6283de8d29ced6283de8cf34be6" role="menuitem">
                  Summary
                </a>
              </li>
            </ul>
          </div> 
        </div>
        <!-- Course Div -->
        <div class="course__section">
         
        </div>
    </div>
  </div>
<!-- Here you have your courses roll in -->
  <div class="courses__display__section" lang="EN-US">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="deckroll" >
              <div class="breaker"style="">
                <div class="f1-img" lang="EN-US">
                  <img src="<?=ASSETS?>img/gallery/cia.jpg" alt="" srcset="" class="img-responsive" />
                </div>
                <div class="img__bottom" >
                  <div class="card-body course-info-container" id="course-info-container-3917-16">
                    <div class="d-flex align-items-start">
                        <div class="w-100">
                            <div class="text-muted muted">
                              <span class="sr-only">Course category</span>
                              <span class="categoryname text-truncate">Faculty of Sciences 2022</span>
                            </div>
                            <a href="#" class="coursename text-truncate">
                              <span id="favorite-icon-3917-16" data-region="favourite-icon" data-course-id="3917">
                                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                                      <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                                      <span class="sr-only">Course is starred</span>
                                  </span>
                              </span>
                              <span class="sr-only">Course name </span>Computer Hardware (CIT210_22)
                          </a>
                        </div>
                        <div class="ml-auto dropdown">
                          <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                              <span class="sr-only">Actions for current course Computer Hardware (CIT210_22)</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="3917" aria-controls="favorite-icon-3917-16">Star this course
                              <div class="sr-only">Star for Computer Hardware (CIT210_22)</div>
                            </a>
                            <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="3917" aria-controls="favorite-icon-3917-16">Unstar this course
                                <div class="sr-only">Remove star for Computer Hardware (CIT210_22) </div>
                            </a>
                            <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="3917" aria-controls="favorite-icon-3917-16">Restore to view
                              <div class="sr-only">Restore Computer Hardware (CIT210_22) to view</div>
                            </a>
                            <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="3917" aria-controls="favorite-icon-3917-16">Remove from view
                              <div class="sr-only">Remove Computer Hardware (CIT210_22) from view</div>
                            </a>
                          </div>
                        </div>          
                      </div>
                    </div>
                  </div>
                <div class="button_element">
                  <div class="summary-icons">
                    <a class="btn btn-default link-participants" href="#" id="yui_3_17_2_1_1653303534067_283" >
                        <i class="icon fa icon-people fa-fw " title="Participants" aria-label="Participants"></i>
                    </a>
                    <a class="btn btn-default link-grades" href="#" id="yui_3_17_2_1_1653303534067_286">
                        <i class="icon fa icon-book-open fa-fw " title="Grades" aria-label="Grades"></i>
                    </a>
                    <a class="btn btn-default link-badges" href="#" id="yui_3_17_2_1_1653303534067_289">
                        <i class="icon fa icon-badge fa-fw " title="Badges" aria-label="Badges"></i>
                    </a>
                    <a class="btn btn-default link-course" href="#" id="yui_3_17_2_1_1653303534067_292">
                        <i class="icon fa fa-arrow-right fa-fw " title="Click to enter this course" aria-label="Click to enter this course"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Second Course -->
             <div class="breaker">
                <div class="f1-img" lang="EN-US">
                  <img src="<?=ASSETS?>img/gallery/cia.jpg" alt="" srcset="" class="img-responsive" />
                </div>
                <div class="img__bottom" >
                  <div class="card-body course-info-container" id="course-info-container-3917-16">
                    <div class="d-flex align-items-start">
                        <div class="w-100">
                            <div class="text-muted muted">
                              <span class="sr-only">Course category</span>
                              <span class="categoryname text-truncate">Faculty of Sciences 2022</span>
                            </div>
                            <a href="#" class="coursename text-truncate">
                              <span id="favorite-icon-3917-16" data-region="favourite-icon" data-course-id="3917">
                                  <span class="text-primary hidden" data-region="is-favourite" aria-hidden="true">
                                      <i class="icon fa fa-star fa-fw " title="Starred course" aria-label="Starred course"></i>
                                      <span class="sr-only">Course is starred</span>
                                  </span>
                              </span>
                              <span class="sr-only">Course name </span>Computer Hardware (CIT210_22)
                          </a>
                        </div>
                        <div class="ml-auto dropdown">
                          <button class="btn btn-link btn-icon icon-size-3 coursemenubtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon fa fa-ellipsis-h fa-fw " aria-hidden="true"></i>
                              <span class="sr-only">Actions for current course Computer Hardware (CIT210_22)</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item " href="#" data-action="add-favourite" data-course-id="3917" aria-controls="favorite-icon-3917-16">Star this course
                              <div class="sr-only">Star for Computer Hardware (CIT210_22)</div>
                            </a>
                            <a class="dropdown-item hidden" href="#" data-action="remove-favourite" data-course-id="3917" aria-controls="favorite-icon-3917-16">Unstar this course
                                <div class="sr-only">Remove star for Computer Hardware (CIT210_22) </div>
                            </a>
                            <a class="dropdown-item hidden" href="#" data-action="show-course" data-course-id="3917" aria-controls="favorite-icon-3917-16">Restore to view
                              <div class="sr-only">Restore Computer Hardware (CIT210_22) to view</div>
                            </a>
                            <a class="dropdown-item " href="#" data-action="hide-course" data-course-id="3917" aria-controls="favorite-icon-3917-16">Remove from view
                              <div class="sr-only">Remove Computer Hardware (CIT210_22) from view</div>
                            </a>
                          </div>
                        </div>          
                      </div>
                    </div>
                  </div>
                <div class="button_element">
                  <div class="summary-icons">
                    <a class="btn btn-default link-participants" href="#" id="yui_3_17_2_1_1653303534067_283" >
                        <i class="icon fa icon-people fa-fw " title="Participants" aria-label="Participants"></i>
                    </a>
                    <a class="btn btn-default link-grades" href="#" id="yui_3_17_2_1_1653303534067_286">
                        <i class="icon fa icon-book-open fa-fw " title="Grades" aria-label="Grades"></i>
                    </a>
                    <a class="btn btn-default link-badges" href="#" id="yui_3_17_2_1_1653303534067_289">
                        <i class="icon fa icon-badge fa-fw " title="Badges" aria-label="Badges"></i>
                    </a>
                    <a class="btn btn-default link-course" href="#" id="yui_3_17_2_1_1653303534067_292">
                        <i class="icon fa fa-arrow-right fa-fw " title="Click to enter this course" aria-label="Click to enter this course"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Close second course -->
          </div>
        </div>
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
              <a href="<?=$rvalue['student__Id']?>" title="<?=$rvalue['student__Id']?>" style="display:flex">
                <img src="<?=ASSETS?>img/f2" class="userpicture defaultuserpic" width="20" height="20" alt="<?=$rvalue['Surname'].' '.$rvalue['othername']; $rvalue['student__Id']?>">
                <span style="margin-left:5px;"><?=$rvalue['Surname'].' '.$rvalue['othername']?><span class="active__online__std"></span></span>
                <span style="margin-left:15px; margin-top:4px;font-size:12px">(<?=$rvalue['Roll__No'];?>)</span>
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
  