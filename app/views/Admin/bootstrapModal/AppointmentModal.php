<?php ob_start(); ?>
	<script src="<?=ASSETS?>assets/plugins/jquery/jquery-3.6.0.js"></script>
	<script src="<?=ASSETS?>assets/plugins/jquery/bootstrap.min.js"></script>
	<script> 
         $(document).ready(($)=>{
            $("#Faculty__Type").change(()=>{
              let facultyID = $("#Faculty__Type").val().trim();
              $.ajax({
                url: '<?=ROOT?>Respond/',
                method: 'POST',
                data:$(this).serialize(),
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
                data: '___ApplicationSender=' + facultyID
              }).done((books)=>{
                  books = JSON.parse(books);
                  $('#Department__Type').empty();
                  books.forEach((book)=>{
                      $('#Department__Type').append('<option value="' + book.Product__id +'">' + book.Child__faculty__name + '</option>')
                  })
              })
            });
        });
	</script>
<div class="modal fada" id="___AppointmentProfessorModal" tabindex="-1" role="dialog" aria-labelledby="___AppointmentProfessorModal" aria-hidden="true">
	<div class="modal-dialog modal-xs">
		<div class="modal-content">
    <!-- Modal Header -->
		<div class="modal-header">
			<h6 class="modal-title text-center" style="color:#73879C; font-size:12px; font-weight:600">Appointmenting Professor To A Department</h6>
      <button type="button" class="btn btn-default btn-sm pull-right" onclick="closeModal();">&times;</button>
      <div id="show_message" class="alert alert-success" style="display:none">Successfully Appointed.</div>
      <span class="inValidFeedBack"><?=$data['errorMessage']?></span>
      <div id="error" class="alert alert-danger" style="display:none"><i class="fa fa-info-circle" ></i></div>
		</div>
		<!-- Modal body -->
		<div class="modal-body">
			<form class="form-group" method="POST" action="javascript:void(0)" id="ajax-form">
				<div class="col-md-12">
          <label for="Appointment" style="color:#73879C;">Professor ID:*</label>
          <input type="text" name="User_id" id="User_id" value="<?=$data['id'];?>" class="form-control" style="display:none"/>
          <span class="inValidFeedBack"><?=$data['User_idError']?></span>
          <input type="text" value="<?=$data['id']?>" class="form-control" disabled="disabled"/>
				</div>
        <div class="col-md-12">
          <label for="Surname" style="color:#73879C;">Surname:*</label>
          <input type="text" name="__sname" id="__sname" value="<?=$data['sname'];?>" class="form-control" disabled="disabled"/ >
				</div>
        <div class="col-md-12">
          <label for="middle name" style="color:#73879C;">Middle Name:*</label>
          <input type="text" name="__mname" id="__mname" value="<?=$data['mname'];?>" class="form-control" disabled="disabled"/>
				</div>
        <div class="col-md-12">
          <label for="other name" style="color:#73879C;">Last Name:*</label>
          <input type="text" name="__oname" id="__oname" value="<?=$data['Oname'];?>" class="form-control" disabled="disabled"/>
				</div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <label for="Faculty" style="color:#73879C;">Faculty:</label>
          <select name="Faculty__Type" id="Faculty__Type" class="form-control" >
            <option value="" selected="selected" style="display:none" >--select--</option>
            <option value=""  disabled="" >--select--</option>
            <?php foreach ($data['DisplayCateogries'] as $stmt): ?>
              <option id="<?=$stmt['Faculty__ID']?>" value="<?=$stmt['Faculty__ID']?>"> <?=$stmt['Faculty__name']?> </option>
            <?php endforeach; ?>
          </select>
          <span class="inValidFeedBack"><?=$data['Faculty__TypeError']; ?></span>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">	
          <label for="Department Type" style="color:#73879C;">Department:</label>
          <select name="Department__Type" id="Department__Type" class="form-control"  >
            <option value="" selected="" >--select--</option>
          </select>
          <span class="inValidFeedBack"><?=$data['Department__TypeError']; ?></span>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">	
          <label for="Designation Type" style="color:#73879C;">Designation:</label>
          <select name="Designation" id="Designation" class="form-control"  >
            <option value="" selected="" >--select--</option>
            <option value="Full Time" >Full Time</option>
            <option value="Part Time">Part Time</option>
            <option value="Contract">Contract</option>
            <option value="Remotely">Remotely</option>
          </select>
          <span class="inValidFeedBack"><?=$data['DesignationError']; ?></span>
        </div>
		    <!-- Modal footer -->
        <div class="clearfix"></div>
          <div class="modal-footer flex">
            <button type="button" class="btn btn-default btn-sm" onclick="closeModal();"><i class="fa fa-remove"></i>Close</button>
            <button type="submit" class="btn btn-primary btn-sm" name="SubmitAppoint">Save Appointment</button>
          </div>
      </form>
      </div>
		</div>
	</div>
</div>
<script>
function closeModal(){
	jQuery('#___AppointmentProfessorModal').modal('hide');
	setTimeout(() => {
		jQuery('#___AppointmentProfessorModal').remove();
		jQuery('.modal-backdrop').remove();
	}, 300);
}
</script>
<?php echo ob_get_clean(); ?>

<script>
$(document).ready(($)=> {
    //hide messages
    $("#error").hide();
    $("#show_message").hide();
    //on submit
    $('#ajax-form').submit((e)=> {
        e.preventDefault();
        $("#error").hide();
        //validate the input now
        let Faculty= $("select#Faculty__Type").val().trim();
        if (Faculty == "") {
            $("select#Faculty__Type").css('border-color','red');
            $("#error").fadeIn().text("Select Faculty You are appointing this Professor To.");
            $("select#Faculty__Type").focus();
            return false;
        }else{$("select#Faculty__Type").css('border-color','green');}
        let Department= $("select#Department__Type").val().trim();
        if (Department == "") {
            $("select#Department__Type").css('border-color','red');
            $("#error").fadeIn().text("Select Department You are appointing this Professor To.");
            $("select#Department__Type").focus();
            return false;
        }else{$("select#Department__Type").css('border-color','green');}
        let Designation= $("select#Designation").val().trim();
        if (Designation == "") {
            $("select#Designation").css('border-color','red');
            $("#error").fadeIn().text("Select Professor Designation.");
            $("select#Designation").focus();
            return false;
        }else{$("select#Designation").css('border-color','green');}
        $.ajax({
            type: 'POST',
            url: "<?=ROOT .'Admin/AcctAppointment'?>",
            data: $('#ajax-form').serialize(), //get all form field valus in serilize form 
            success: (response)=> {
                $("#show_message").fadeIn();
                $("#ajax-form").fadeOut();
            },
            error:(jqXHR, textStatus, errorThrown) =>{
              console.log(textStatus, errorThrown);
          }
        });
    });
    return false;
});
</script>