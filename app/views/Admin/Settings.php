<?php include_once 'components/HeaderLinks.php';?> 	
<link href="<?=ASSETS?>RequirementJs/select2.min.css" rel="stylesheet" />
<script src="<?=ASSETS?>RequirementJs/select2.min.js"></script>
<!-- Must Load First -->
<script src="<?=ASSETS?>admin/assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/select2/js/select2.full.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>		
<link href="<?=ASSETS?>plugins/summernote/summernote.css" rel="stylesheet">
<script src="<?=ASSETS?>plugins/summernote/summernote.min.js"></script>
<style>
    #flexgrid{
        display:flex;
    }
     @media only screen and (max-width: 600px) {
        #flexgrid {
            display:grid;
            justify-items: center;
        }
    }
    .__logo{
        max-width: 100%;
        max-height: auto;
        position: relative;
        vertical-align: middle;
        left: 50%;
        transform: translate(-50%);
        height: 200px;
        width: 200px;
        object-fit:cover;
    }
</style>
</head>
<body class="hold-transition skin-yellow sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<?php include_once 'components/HeaderLogo.php';?> 		
			<?php include_once 'components/Nav.php';?> 		
		</header>
		<!-- Sidebar -->
                <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <?php include_once 'components/SideBarHeader.php';?> 		
                <?php include_once 'components/SideBar.php';?>
            </section>
            <!-- /.sidebar -->
        </aside>
	<!-- /.sidebar -->
	
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Administrative <small>Settings </small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Admin</li>
					<li class="active">Settings</li>
				</ol>
			</section>
						<!-- Main content -->
			<section class="content container-fluid">
                <div class="box">
                    <div class="box-header with-border">
                       <h3 class="box-title"><?=((isset($_GET['action']) && $_GET['action']==="tb")? 'Display All Database Tables we are connected': 'Default Menu')?></h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <!-- if get view table is clicked -->
                        <?php if (($_GET['action']=='tb')):?>
                            <?php include_once 'components/SettingsButton.php';?>
                        <form action="" method="post" id="idm" class="mt-5">
                            <table class="w-100 table js-basic-example dataTable table-striped table-bordered table-hover" id="myTable" >
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Table Name</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
				        <tbody>
                           <?php $i = 0?>
                            <?php
                                if ($data['tb'] || !empty($data['tb']))
                                    foreach ($data['tb'] as $tables): ?>
                            <?php 
                                $id = '';
                                if ($tables > 0) $i ++;
                            ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><a href="javasript:void(0)"><?=$tables['Tables_in_midtechserver']?></a></td>
                                <td>
                                    <div class="dropdown" style="position: relative;display: inline-block;color:#000;">
                                        <button type="button" class="btn btn-flat btn-danger btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">Action<i class="fa fa-caret-down" aria-hidden="true" style="width:20px"></i><span class="sr-only">Toggle Dropdown</span></button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="color:#000;position: absolute;background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);padding: 12px 16px;z-index: 1;">
                                            <a class="dropdown-item" href="_isvalidatetb/<?=$tables['Tables_in_midtechserver']?>/truncate">
                                                <i class="fa fa-eraser text-danger" aria-hidden="true">&nbsp;&nbsp;</i>Truncate
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="delete_exam dropdown-item" href="_isvalidatetb/<?=$tables['Tables_in_midtechserver']?>/drop">
                                                <span class="fa fa-trash text-danger">&nbsp;&nbsp;</span> Drop
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach?>
                        </tbody>
                    </table>
                </form>
                <?php elseif(($_GET['action']=='report')):?>
                    <?php include_once 'components/SettingsButton.php';?>
                    <?php include_once 'components/ReportProblem.php';?>

                <?php elseif(($_GET['action']=='privacy')):?>
                    <?php include_once 'components/SettingsButton.php';?>
                    <?php include_once 'components/SettingsUpdate.php';?>

                <?php elseif(($_GET['action']=='role' || $_GET['action']=='report' || $_GET['action']=='support' || $_GET['action']=='tb' || $_GET['action']=='privacy')): ?>
                    <?php include_once 'components/SettingsButton.php';?>
                
                <?php endif;?>
            </div>
        </div>
    </section>
<!-- /.content -->
</div>
            
<?php include_once 'components/Footer.php'; ?>
<?php include_once 'components/Inc.php'; ?>
</body>
</html>