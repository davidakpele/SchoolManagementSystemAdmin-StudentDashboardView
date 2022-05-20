<?php $this->view("include/St_header",$data); ?>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="topNavBar" style="background:#008bc6; max-height:50px">
        <div class="container px-4 px-lg-5 ">
            <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?=ROOT?>Student/Dashboard/">
                <span>
                    <img src="<?=ASSETS?>img/product/1.png" class="img-responsive center" style="max-width:40px;"/>
                </span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Home</a></li>
                </ul>
                <div class="d-flex align-items-center" >
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item listMenu">
                            <a href="#" class="DropdownList" >Manager</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?=ROOT?>Student/Performance">
                                       Student Performance 
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=ROOT?>Student/Record">
                                        Exam Record
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=ROOT?>Student/Attendance">
                                        Attendance
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=ROOT?>Student/Test">
                                        Test Record
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=ROOT?>Student/Project">
                                        Project 
                                    </a>
                                </li>
                            </ul>
                        </li>
                      <li class="nav-item listMenu">
                            <a href="#" class="DropdownList" ><?=$_SESSION['globalname']?></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?=ROOT?>Student/UserProfile">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=ROOT?>Student/Settings">
                                        Settings & Privacy
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=ROOT?>PageController/LogoutStudent">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </nav>
<style>
    #exam-list:empty:after{content:"No exams listed yet.";color:'#000';text-align:center;}
    .exam-item{cursor: pointer;transition:transform .2s ease-in;}
    .exam-item:hover{transform:scale(.95);}
</style>
<section class="content py-5 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12 mb-4">
                <div class="input-group input-group-sm shadow">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Search</span>
                    </div>
                    <input type="search" id="search" placeholder="Search here..." class="form-control form-control-sm">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="exam-list">
            <a class="col-lg-4 col-md-6 col-sm-12 exam-item text-reset text-decoration-none" 
                href="javascript:void(0)" data-id="<?=$data['Id']?>" data-code="<?=$data['Id']?>">
                <div class="callout border-primary rounded-0 shadow-0">
                    <small><span class="text-muted">202202-00001</span></small>
                    <h4 class="w-100 truncate-1" title='<?=$data['examName']?>'><b>Examination</b></h4>
                    <small><span class="text-muted"><?=$data['examName']?></span></small>
                    <p class="m-0 truncate-3 text-muted">Suspendisse eget arcu iaculis, blandit erat aliquet, scelerisque risus. Cras consectetur purus vitae sagittis varius. Sed vitae felis dolor. Duis eu congue diam. Vestibulum consequat erat et lacinia dictum. Cras eu sollicitudin justo. Vivamus congue enim et arcu sagittis, vitae tempus mi ullamcorper. Aenean sed justo eget ante mollis vehicula mattis vel orci. Duis eu est mi.</p>
                </div>
            </a>
        </div>
        <div id="noData" class="d-none text-center" style="color:black; font-weight:bolder; font-size:25px">No Result Found.</div>
    </div>
</div>
</section>
    <div class="modal fade" id="uni_modal" role='dialog'>
        <div class="modal-dialog   rounded-0 modal-md modal-dialog-centered" role="document">
            <div class="modal-content  rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
<?php $this->view("include/St_footer",$data); ?>
