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
                <span>Program</span>
            </a>
        </li>
        <li class="">
            <a href="<?=ROOT?>Admin/Faculties">
                <i class="fa fa-bars"></i>
                <span>Faculties</span>
            </a>
        </li>
        <li class="">
            <a href="<?=ROOT?>Admin/Department">
                <i class="fa fa-bars"></i>
                <span>Departments</span>
            </a>
        </li>
        <li class="">
            <a href="<?=ROOT?>Admin/Professors">
                <i class="fa fa-bars"></i>
                <span>Lecturers</span>
            </a>
        </li>
        <li class="">
            <a href="<?=ROOT?>Admin/Students">
                <i class="fa fa-bars"></i>
                <span>Students</span>
            </a>
        </li>
        <li class="">
            <a href="<?php echo ROOT.'Admin/Class'?>">
                <i class="fa fa-bars"></i>
                <span>Classes</span>
            </a>
        </li>
        <li class="">
            <a href="<?php echo ROOT.'Admin/Semester'?>">
                <i class="fa fa-bars"></i>
                <span>Semesters</span>
            </a>
        </li>
        <li class="">
            <a href="<?php echo ROOT.'Admin/Courses'?>">
                <i class="fa fa-bars"></i>
                <span>Courses</span>
            </a>
        </li>
        <li class="">
            <a href="<?php echo ROOT.'Admin/courses_subjects'?>">
                <i class="fa fa-bars"></i>
                <span>Subjects</span>
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
