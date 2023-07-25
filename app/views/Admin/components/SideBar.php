<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN MENU</li>
    <!-- Optionally, you can add icons to the links -->
        <li class="active">
            <a href="<?=ROOT?>Admin/dashboard">
                <i class="fa fa-dashboard"></i> 
                <span>Dashboard</span>
            </a>
        </li>
        <li class="">
            <a href="<?=ROOT?>Admin/Application">
                <i class="fa fa-bars"></i> 
                <span>Application</span>
            </a>
        </li>
        <li class="">
            <a href="<?=ROOT?>Admin/Faculties">
                <i class="fa fa-bars"></i>
                <span>Faculty</span>
            </a>
        </li>
        <li class="">
            <a href="<?=ROOT?>Admin/Department">
                <i class="fa fa-bars"></i>
                <span>Department</span>
            </a>
        </li>
        <li class="">
            <a href="<?=ROOT?>Admin/Professors">
                <i class="fa fa-bars"></i>
                <span>Lecturer</span>
            </a>
        </li>
        <li class="">
            <a href="<?=ROOT?>Admin/Students">
                <i class="fa fa-bars"></i>
                <span>Students</span>
            </a>
        </li>
        <li class="">
            <a href="<?php echo ROOT.'Admin/Courses'?>">
                <i class="fa fa-bars"></i>
                <span>Course-Table</span>
            </a>
        </li>
        <li class="">
            <a href="<?php echo ROOT.'Admin/Class'?>">
                <i class="fa fa-bars"></i>
                <span>Class-TableS</span>
            </a>
        </li>
        <li class="">
            <a href="<?php echo ROOT.'Admin/Semester'?>">
                <i class="fa fa-bars"></i>
                <span>Semester-Table</span>
            </a>
        </li>
           
        <li class="treeview ">
            <a href="#"><i class="fa fa-book"></i> <span>Manage Exam</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
                    <a href="<?=ROOT.'Admin/exam'?>">
                        <i class="fa fa-bars"></i>
                        Exam Settings
                    </a>
                </li>
                <li class="">
                    <a href="<?=ROOT.'Admin/payment_record'?>">
                        <i class="fa fa-bars"></i>
                        Student Payment Records
                    </a>
                </li>
            </ul>
        </li>
            <li class="header">ADMINISTRATOR</li>
                <li class="">
                    <a href="<?=ROOT?>Admin/users" rel="noopener noreferrer">
                        <i class="fa fa-users"></i> <span>User Management</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?=ROOT?>Admin/settings?action=role" rel="noopener noreferrer">
                        <i class="fa fa-cogs"></i> <span>Settings</span>
                    </a>
                </li>
            </li>
        </li>
    </ul>
