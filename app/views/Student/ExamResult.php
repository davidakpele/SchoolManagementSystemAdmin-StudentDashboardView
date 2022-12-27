<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="theme-color" content="#c9190c">
<meta name="robots" content="index,follow">
<link rel="shortcut icon" href="<?=ASSETS?>icons/favicon.ico">
<meta htttp-equiv="Cache-control" content="no-cache">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="msapplication-TileColor" content="#c9190c">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Mercy College School Management System Software." /> 
<link href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/structure.css" />
<link type="text/css" rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/responsive.css" />
<link rel="shortcut icon" href="images/favicon.ico" />
<title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
<link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css"/>
<script type="text/javascript" src="<?=ASSETS?>js/jquery2.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
<style>
#link{text-decoration:none}
  body{font-family: "Poppins", sans-serif;-webkit-font-smoothing: antialiased;background-color: #f2f2f2;color: #494949;text-rendering: optimizeLegibility !important;letter-spacing: 0.5px;overflow-x: hidden;}
    .page-title-div {background: #fff;padding: 7px;}
    .main-page {width: 100%;}
    #exampl{margin-top:36px;}
    .datalist{white-space: pre-line;}
    .datalist{font-size:13px;}
</style>
</head>
<body>
<div id="head">
    <div class="container">
        <div class="row">
            <div class="col-12">
	            <a href="<?=ROOT?>">
                    <div class="float-left"> 
                        <span style="display:flex">
                            <img src="<?=ASSETS?>img/product/1.png" class="img-responsive center" style="max-width:55px;"/>
                        </span>
                    </div>
                </a>
            </div><!--end col div here -->
            <div class="float-right">
                <div class="horizontal-list">
                <ul>

                </ul>
                </div>
            </div>
            <br class="clear" />
        </div><!-- end row here -->
    </div><!-- close container -->
</div>
<div class="main-wrapper">
    <div class="content-wrapper">
        <div class="content-container">
            <div class="main-page">
                <section class="section" id="exampl">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <img src="<?=ASSETS?>img/product/1.png" class="img-responsive center" style="max-width:70px; display: block;  margin-left: auto; margin-right: auto;">
                                            <h3 align="center">Student Result</h3>
                                            <hr />
                                            <span class="datalist"><b>Student Name: </b><?=$_SESSION['globalname']?></span><br/>
                                            <span class="datalist"><b>Student Roll ID: </b><?=$_SESSION['Reference']?></span><br/>
                                            <span class="datalist"><b>Student Class:</b> Fourth(C)</span>
                                        </div>
                                        <div class="panel-body p-20" style="overflow-x:auto;">
                                            <table class="table table-hover table-bordered" border="1" width="100%">
                                                <thead>
                                                    <tr style="text-align: center">
                                                        <th style="text-align: center">#</th>
                                                        <th style="text-align: center"> Department/Course</th>
                                                        <th style="text-align: center">Program</th>
                                                        <th style="text-align: center">Questions Answered:</th>
                                                        <th style="text-align: center">Marks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" style="text-align: center"><?=$data['StdIdentity'];?></th>
                                                        <td style="text-align: center"><?=$data['DepartmentName']?></td>
                                                        <td style="text-align: center"><?=$data['Category']?></td>
                                                        <td style="text-align: center"><?=$data['ActualScore']?></td>
                                                        <td style="text-align: center">100</td>
                                                    </tr> 
                                                    <tr>
                                                        <th scope="row" colspan="3"></th>           
                                                        <td style="text-align: center"><b>Grade:</b></td>
                                                        <td style="text-align: center"><?=$data['GradeResponse']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" colspan="3">Total Mark(s)</th>           
                                                        <td style="text-align: center"><b></b></td>
                                                        <td style="text-align: center"><?= $data['DisplayResult'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" align="center">
                                                            <i class="fa fa-print fa-2x pull-left btn btn-primary btn-xs" aria-hidden="true" style="cursor:pointer" OnClick="printinfo(this.value)" ></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>     
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
    <script>
        function printinfo(strid) {
            let prtContent = document.getElementById("exampl");
            let WinPrint = window.open('', '', 'left=0,top=0,width=800,height=500,toolbar=0,scrollbars=0,status=0');
            WinPrint.document.write(prtContent.innerHTML);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
           //WinPrint.close();
        }
    </script>
    </body>
</html>