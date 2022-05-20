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
      <h1>Hi <span class="text-primary"><?=$_SESSION['globalname']?></span>, Welcome back</h1>
      <p>Clean & featured dashboard.</p>
    </div>
  <div class="row">
    <div class="col-md-9">
      <div class="statistics">
        <div class="col-xl-12 pr-xl-2">
          <div class="row">
            <div class="col-sm-3 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-primary number">29.75 M</h3>
                <p class="stat-text">Total Users</p>
              </div>
            </div>
            <div class="col-sm-3 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-eye"> </i>
                <h3 class="text-secondary number">51.25 K</h3>
                <p class="stat-text">Daily Visitors</p>
              </div>
            </div>
            <div class="col-sm-3 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cloud-download"> </i>
                <h3 class="text-success number">166 M</h3>
                <p class="stat-text">Downloads</p>
              </div>
            </div>
            <div class="col-sm-3 pl-sm-2 statistics-grid">
              <a href="<?=ROOT?>Student/Examcenter"><div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-book"> </i>
                <h3 class="text-danger number">1,250k</h3>
                <p class="stat-text">View Exam</p>
              </div></a>
            </div>
          </div>
        </div>
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
        
    </div>
  </div>
<!-- Here you have your courses roll in -->
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
            <div class="user ">
              <a href="#" title="59 secs">
                <img src="<?=ASSETS?>img/f2" class="userpicture defaultuserpic" width="16" height="16" alt="">
                <span>USMAN Dahiru Sagiru</span>
                <span style="margin-left:20px">(MCU211100157)</span>
              </a>
            </div>
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
              <a href="#">Tutor Marked Assignment 1<small>(TMA1) Close Saturday, 4 June, 11:59 PM</small></a>
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
  