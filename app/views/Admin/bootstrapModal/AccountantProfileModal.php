<?php
$this->DB = new Database;
$id = trim(filter_var($_POST['SSD'], FILTER_SANITIZE_STRING));
$this->DB->query('SELECT * FROM accountant WHERE Accountant__id = :id');
$this->DB->bind(':id', $id);
$row = $this->DB->single();
if(!empty($row)){
	$id=$row->Accountant__id;
	$sname=$row->Surname;
	$mname=$row->Middle__name;
	$Oname=$row->Othername;
	$Ascode=$row->Accesscode;
	$email=$row->Email;
	$ftd=$row->featured;
	$tel=$row->Telephone_No;
	$DoB=$row->Date_of_Birth;
	$PoD=$row->Place__of__birth;
	$gn= $row->Gender;
	$relatx=$row->Relationship_sts;
	$Cst=$row->Civil_status;
	$Ctz= $row->Citizenship;
	$nin=$row->NIN;
	$Hat=$row->Height;
	$Wat= $row->Weight;
	$QCT =$row->Qualification;
	$Religion =$row->Religion;
	$Bty=$row->Blood_Type;
	$photo=$row->Profile__Picture;
	$Add=$row->Address;

}else{
	return false;
}
?>
<?php ob_start(); ?>
	<script src="<?=ASSETS?>assets/plugins/jquery/jquery-3.6.0.js"></script>
	<script src="<?=ASSETS?>assets/plugins/jquery/bootstrap.min.js"></script>
<div class="modal fada" id="___ProfessorProfileModal" tabindex="-1" role="dialog" aria-labelledby="___ProfessorProfileModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<!-- Modal Header -->
		<div class="modal-header">
			<h4 class="modal-title text-center"><strong>DATA SHEET</strong></h4>
			<div class="col-md-12">
				<button type="button" class="btn btn-primary btn-sm pull-left" onclick="__TargetPrintProfile(<?=$id?>);"><i class="fa fa-print"></i>Print Data</button>
				<button type="button" class="btn btn-default btn-sm pull-right" onclick="closeModal();"><i class="fa fa-remove"></i></button>
			</div>
		</div>
		<!-- Modal body -->
		<div class="modal-body">
			<div class="x_panel">
				<div class="x_content col-md-12" >
					<div class="container-fluid" style="border: 2px solid">
						<div class="tab-content">
							<!-- Personal info tab -->
							<div id="pds" class="tab-pane fade in active">
								<div class="row">
									<div class="col-md-3">
										<small>CS FORM 212 (Revised 2021)</small>
									</div>
									<div class="row">
										<div class="col-md-12">
											<center><h2><strong>PERSONAL DATA SHEET</strong></h2></center>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										</div>
										<div class="col-md-4 pull-right">
											<strong>Accountant ID No: <span style="text-decoration: underline; margin-left:5px"><?=$id;?></span> </strong>
										</div>
									</div>
										<div class="pull-right">
											<center><b>PHOTO</b></center>
											<img src="<?=PATHROOT. $photo?>" class="img-responsive img-thumbnail" style="width:100%; height:13.9rem">
										</div>	
										<p><br><br/></p>							
									<table class="table table-bordered" style="margin-bottom: 0%;">
										<thead>
											<tr>
												<td colspan="4"><h5><strong>I. Personal Information</strong></h5></td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Surname</td>
												<td ><?= $sname?></td>
												<td>Middle Name</td>
												<td ><?= $mname?></td>
											</tr>
											<tr>
												<td>Other Name</td>
												<td><?=$Oname?></td>
												<td width="17%">Name Extension</td>
												<td><?= 'None'?></td>
											</tr>
											<tr>
												<td>Date of Birth</td>
												<td><?=$DoB?></td>
												<td rowspan="2">Residential Address</td>
												<td rowspan="2"><?=$Add ?></td>
											</tr>
											<tr>
												<td>Place of Birth</td>
												<td><?=$PoD?></td>
											</tr>
											<tr>
												<td>Sex</td>
												<td><?= $gn?></td>
												<td><div class="pull-right">Zip Code</div></td>
												<td><?= 'Not yet define' ?></td>
											</tr>
											<tr>
												<td>Civil Status</td>
												<td>
													<?= $Cst?>
												</td>
												<td>Telephone No.</td>
												<td><?=$tel ?></td>
											</tr>
											<tr>
												<td>Citizenship</td>
												<td><?=$Ctz ?></td>
												<td rowspan="2">Permanent Address</td>
												<td rowspan="2"><?= $Add ?></td>
											</tr>
											<tr>
												<td>Height</td>
												<td><?= $Hat?></td>
											</tr>
											<tr>
												<td>Weight</td>
												<td><?= $Wat?> kg</td>
												<td rowspan="2">Blood Type</td>
												<td rowspan="2">Type <?= $Bty?></td>
											</tr>
											<tr>
											</tr>
											<tr>
												<td colspan="3">Email Address</td>
												<td><?= $email ?></td>
											</tr>
										
											<tr>
												
												<td colspan="3">National Identification Number</td>
												<td><?=$nin ?></td>
											</tr>
										</tbody>
									</table>
									<table class="table table-bordered" style="margin-bottom: 0%;">
										<thead>
											<tr>
												<td colspan="4"><h5><strong>II. Family Background</strong></h5></td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td colspan="4" class="text-center bold">Father Details</td>
											</tr>
											<tr>
												<td>Surname</td>
												<td>--</td>
												<td>Middlename</td>
												<td>--</td>
											</tr>
											<tr>
												<td>Lastname</td>
												<td>--</td>
												<td >Email</td>
												<td>--</td>
											</tr>
											<tr>
												<td>Address</td>
												<td>--</td>
												<td>Mobile Number</td>
												<td>--</td>
											</tr>
											<tr>
												<td>Occupation</td>
												<td>--</td>
											</tr>
											<tr>
												<td colspan="4" class="text-center bold">Mother's Details</td>
											</tr>
											<tr>
												<td>Surname</td>
												<td>--</td>
												<td>Middlename</td>
												<td>--</td>
											</tr>
											<tr>
												<td>Lastname</td>
												<td>--</td>
												<td >Email</td>
												<td>--</td>
											</tr>
											<tr>
												<td>Address</td>
												<td>--</td>
												<td>Mobile Number</td>
												<td>--</td>
											</tr>
											<tr>
												<td>Occupation</td>
												<td>--</td>
											</tr>	
										</tbody>
									</table>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal footer -->
		<div class="clearfix"></div>
			<div class="modal-footer flex">
				<button type="button" class="btn btn-default btn-sm" onclick="closeModal();"><i class="fa fa-remove"></i>Close</button>
				<!-- <button type="submit" class="btn btn-primary btn-sm" onclick="window.print();">Print Profile</button> -->
			</div>
		</div>
	</div>
</div>
<script>
function __TargetPrintProfile(id){
	let data = {"id":id};
	window.open('Admin/LoadPrintProfile');
	jQuery.ajax({
		url: '<?=ROOT;?>Admin/LoadPrintProfile',
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
		success: (data)=>{
			$('body').append(data);
		},
		error: ()=>{
				console.log("Something went wrong..!");
			},		
	});
}
function closeModal(){
	jQuery('#___ProfessorProfileModal').modal('hide');
	setTimeout(() => {
		jQuery('#___ProfessorProfileModal').remove();
		jQuery('.modal-backdrop').remove();
	}, 100);
}
</script>
<?php echo ob_get_clean(); ?>