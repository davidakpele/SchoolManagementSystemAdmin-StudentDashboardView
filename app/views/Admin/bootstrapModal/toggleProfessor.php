<?php ob_start(); ?>
    <link href="<?=ASSETS?>RequirementJs/select2.min.css" rel="stylesheet" />
    <script src="<?=ASSETS?>RequirementJs/select2.min.js"></script>
	<script> 
    $(document).ready(function ($) {
        $("#Application__Type").change(function () {
            let ___ApplicationType = $("#Application__Type").val().trim();
            const JavascriptHook = { "DataId": ___ApplicationType };
            let StringData = JSON.stringify(JavascriptHook);
            const Url = '<?=ROOT?>PagesController/RenderRequirementData/'; // the url where we want to POST
            $.ajax({
                type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON',//the type of data we are sending is json
                contentType: "application/json; charset=utf-8",
                data: StringData,// our data object
                url: Url,//the post destination
                processData: false,//false because the preprocessor are not trigger
                encode: true,//turn on json encoding
                crossOrigin: true,// true because we are sending data with ajax as json format to php
                async: true, //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
                crossDomain: true, //just in case we host the site
                headers: 
                    {
                        'Access-Control-Allow-Methods': '*',
                        "Access-Control-Allow-Credentials": true,
                        "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                        "Access-Control-Allow-Origin": "*",
                        "Control-Allow-Origin": "*",
                        "cache-control": "no-cache",
                        'Content-Type': 'application/json'
                    },
            }).done(function (Cat) {
                Respone = Cat.result;
                $('#Department__Type').empty();
                Respone.forEach(function (CallRecieve){
                    $('#Department__Type').append('<option value="' + CallRecieve.Child_id + '">' + CallRecieve.Child_name + '</option>')
                });
            }).fail((xhr, status, error) => {
                console.log('Oops...', 'Something went wrong with ajax !', 'error');
            });
        });
    });

    // Add New for existing User
     $(document).ready(function ($) {
        $("#NewApplication__Type").change(function () {
            let ___ApplicationType = $("#NewApplication__Type").val().trim();
            const JavascriptHook = { "DataId": ___ApplicationType };
            let StringData = JSON.stringify(JavascriptHook);
            const Url = '<?=ROOT?>PagesController/RenderRequirementData/'; // the url where we want to POST
            $.ajax({
                type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON',//the type of data we are sending is json
                contentType: "application/json; charset=utf-8",
                data: StringData,// our data object
                url: Url,//the post destination
                processData: false,//false because the preprocessor are not trigger
                encode: true,//turn on json encoding
                crossOrigin: true,// true because we are sending data with ajax as json format to php
                async: true, //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
                crossDomain: true, //just in case we host the site
                headers: 
                    {
                        'Access-Control-Allow-Methods': '*',
                        "Access-Control-Allow-Credentials": true,
                        "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                        "Access-Control-Allow-Origin": "*",
                        "Control-Allow-Origin": "*",
                        "cache-control": "no-cache",
                        'Content-Type': 'application/json'
                    },
            }).done(function (Cat) {
                Respone = Cat.result;
                $('#NewDepartment__Type').empty();
                Respone.forEach(function (CallRecieve){
                    $('#NewDepartment__Type').append('<option value="' + CallRecieve.Child_id + '">' + CallRecieve.Child_name + '</option>')
                });
            }).fail((xhr, status, error) => {
                console.log('Oops...', 'Something went wrong with ajax !', 'error');
            });
        });
    });
	</script>
<div class="modal fada" id="___AppointmentProfessorModal" tabindex="-1" role="dialog" aria-labelledby="___AppointmentProfessorModal" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
    <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title  w-100 text-center" style="color:#73879C; font-weight:600">
      <?php 
      if ($data['checkingexistence']){?>
        Our Designated Professor
      <?php }else {?>
        Appointmenting Professor To A Department
      <?php } ?>
      </h4>
    </div>
		<!-- Modal body -->
    <div class="modal-body" id="togglebody">
      <?php 
      if ($data['checkingexistence']){?>
       <!-- Display a bootstrap tabs form -->
      <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-sm-12">
                    <div class="b-b b-theme nav-active-theme mb-3">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-home" aria-hidden="true"></i>Default</a></li>
                            <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-plus" aria-hidden="true"></i>Add More Courses</a></li>
                            <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-window-close" aria-hidden="true"></i>Dismissed from Department</a></li>
                        </ul>
                    </div>
                    <div class="tab-content mb-4">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                         <p id="show_message" style="padding:10px"></p>
                          <p id="error" style="padding:10px"></p>
                            <form class="form-group" method="POST" action="javascript:void(0)" id="toggleAppointmeVal">
                                <div class="col-md-12">
                                  <label for="Appointment" style="color:#73879C;">Professor ID:*</label>
                                  <!-- we've turn the id into NIN For security reasons -->
                                  <input type="text" name="User_id" id="User_id" value="<?=$data['id'];?>" class="form-control" style="display:none"/>
                                  <input type="text" name="nin" id="nin" value="<?=$data['n'];?>" class="form-control" style="display:none"/>
                                  <input type="text" value="<?=$data['id']?>" class="form-control" disabled="disabled"/>
                                </div>
                                <div class="col-md-12">
                                  <label for="Surname" style="color:#73879C;">Full Name:*</label>
                                  <input type="text" name="__sname" id="__sname" value="<?=$data['sname'];?>" class="form-control" disabled="disabled"/ >
                                </div>
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label for="Faculty" style="color:#73879C;">Faculty:</label>
                                    <select name="Application__Type" disabled id="Application__Type" class="form-control trf" >
                                       <?php if (isset($data['ftyname'])):?>
                                        <option selected="selected" id="v1"><?=((isset($data['ftyname']))?$data['ftyname'] :'')?></option>
                                      <?php else:?>
                                        <option value="" selected="selected" style="display:none">--select--</option>
                                        <?php foreach ($data['DisplayCateogries'] as $stmt): ?>
                                        <option id="<?=$stmt['Category__ID']?>" value="<?=$stmt['Category__ID']?>"> <?=$stmt['Category__name']?> </option>
                                      <?php endforeach;?>
                                      <?php endif; ?>
                                  </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">	
                                  <label for="Department Type" style="color:#73879C;">Department:</label>
                                  <select name="Department__Type" disabled id="Department__Type" class="form-control" multiple="multiple">
                                      <?php foreach ($data['Department'] as $i):?>
                                        <option value="<?=$i['Child_id']?>" selected="selected" ><?=$i['Child_name']?></option>
                                      <?php endforeach;?>
                                  </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">	
                                  <label for="Designation Type" style="color:#73879C;">Designation:</label>
                                  <select name="Designation" disabled id="Designation" class="form-control"  >
                                  <?php if (isset($data['designation'])):?>
                                    <option selected="selected" id="v2"><?=((isset($data['designation']))?$data['designation'] :'')?></option>
                                      <?php else: ?>
                                    <option value="" selected="selected" style="display:none">--select--</option>
                                    <option value="Full Time" >Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Remotely">Remotely</option>
                                      <?php endif; ?>
                                  </select>
                                </div>
                              </div>
                                <!-- Modal footer -->
                                <div class="clearfix"></div>
                                  <div class="modal-footer flex" style="display:flex">
                                    <button type="button" class="btn btn-default btn-sm" onclick="closeModal();"><i class="fa fa-remove"></i>Close</button>
                                    <button type="button" class="btn btn-primary btn-sm" id="kv" name="SubmitAppoint" onclick="enable()">Deactivite Disabled</button>
                                  </div>
                              </form>
                            </div>
                        <!-- Add tab -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <p id="Newshow_message" style="padding:10px"></p>
                          <p id="Newerror" style="padding:10px"></p>
                             <form class="form-group" method="POST" action="javascript:void(0)" id="NewtoggleAppointmeVal">
                                <div class="col-md-12">
                                  <input type="text" name="newnin" id="newnin" value="<?=$data['n'];?>" class="form-control" style="display:none"/>
                                  <input type="text" name="NewUser_id" id="NewUser_id" value="<?=$data['id'];?>" class="form-control" style="display:none"/>
                                </div>
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label for="Faculty" style="color:#73879C;">Faculty:</label>
                                    <select name="NewApplication__Type" id="NewApplication__Type" class="form-control" >
                                        <option selected="selected" disabled="">--select--</option>
                                        <option value="" selected="selected" style="display:none">--select--</option>
                                        <?php foreach ($data['DisplayCateogries'] as $stmt): ?>
                                        <option id="<?=$stmt['Category__ID']?>" value="<?=$stmt['Category__ID']?>"> <?=$stmt['Category__name']?> </option>
                                      <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">	
                                  <label for="Department Type" style="color:#73879C;">Department:</label>
                                  <select style="width:100%" name="NewDepartment__Type" id="NewDepartment__Type" class="form-control">
                                      <option value="" selected="" ></option>
                                  </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">	
                                  <label for="Designation Type" style="color:#73879C;">Designation:</label>
                                  <select name="NewDesignation" id="NewDesignation" class="form-control"  >
                                    <option selected="selected" disabled="">--select--</option>
                                    <option value="" selected="selected" style="display:none">--select--</option>
                                    <option value="Full Time" >Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Remotely">Remotely</option>
                                  </select>
                                </div>
                              </div>
                                <!-- Modal footer -->
                                <div class="clearfix"></div>
                                  <div class="modal-footer flex" style="display:flex">
                                    <button type="button" class="btn btn-default btn-sm" onclick="closeModal();"><i class="fa fa-remove"></i>Close</button>
                                    <button type="submit" class="btn btn-primary btn-sm"  name="SubmitAppoint">Save Appointment</button>
                              </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                          <button type="submit" class="btn btn-danger btn-sm w-100"  name="designateProfessor">Dismissed From Management Role</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <?php }else {?>
       <!-- display the bootstrap basic form  -->
      <p id="show_message" style="padding:10px"></p>
      <p id="error" style="padding:10px"></p>
      <form class="form-group" method="POST" action="javascript:void(0)" id="toggleAppointmeVal">
          <div class="col-md-12">
            <label for="Appointment" style="color:#73879C;">Professor ID:*</label>
            <input type="text" name="User_id" id="User_id" value="<?=$data['id'];?>" class="form-control" style="display:none"/>
            <input type="text" name="nin" id="nin" value="<?=$data['n'];?>" class="form-control" style="display:none"/>
            <input type="text" value="<?=$data['id']?>" class="form-control" disabled="disabled"/>
          </div>
          <div class="col-md-12">
            <label for="Surname" style="color:#73879C;">Full Name:*</label>
            <input type="text" name="__sname" id="__sname" value="<?=$data['sname'];?>" class="form-control" disabled="disabled"/ >
          </div>
          <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12">
              <label for="Faculty" style="color:#73879C;">Faculty:</label>
              <select name="Application__Type" id="Application__Type" class="form-control" >
                  <option selected="selected" disabled="">--select--</option>
                  <option value="" selected="selected" style="display:none">--select--</option>
                  <?php foreach ($data['DisplayCateogries'] as $stmt): ?>
                  <option id="<?=$stmt['Category__ID']?>" value="<?=$stmt['Category__ID']?>"> <?=$stmt['Category__name']?> </option>
                <?php endforeach;?>
            </select>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">	
            <label for="Department Type" style="color:#73879C;">Department:</label>
             <select name="Department__Type" id="Department__Type" class="form-control" multiple="multiple">
                <?php foreach ($data['Department'] as $i):?>
                  <option value="<?=$i['Child_id']?>" selected="" ><?=$i['Child_name']?></option>
                <?php endforeach;?>
            </select>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">	
            <label for="Designation Type" style="color:#73879C;">Designation:</label>
            <select name="Designation" id="Designation" class="form-control"  >
              <option selected="selected" disabled="">--select--</option>
              <option value="" selected="selected" style="display:none">--select--</option>
              <option value="Full Time" >Full Time</option>
              <option value="Part Time">Part Time</option>
              <option value="Contract">Contract</option>
              <option value="Remotely">Remotely</option>
            </select>
          </div>
        </div>
          <div class="clearfix"></div>
            <div class="modal-footer flex" style="display:flex">
              <button type="button" class="btn btn-default btn-sm" onclick="closeModal();"><i class="fa fa-remove"></i>Close</button>
              <button type="submit" class="btn btn-primary btn-sm"  name="SubmitAppoint">Save Appointment</button>
          </div>
        </form>
        <?php } ?>
      </div>
    </div>
	</div>
</div>
<script>
 enable = (csrf) =>{
    // this here is to remove isabled from the field and enable to edit
    document.getElementById('Department__Type').disabled = false;
    document.getElementById('Designation').disabled = false;
    document.getElementById('Application__Type').disabled = false;
  
   <?php  if (isset($data['ftyname']) && isset($data['designation'])):?>
   // this is to change button element from 'Edit Designation' to  'Save new Designation'
    let curInnerHTML = document.getElementById('kv').innerHTML;
    curInnerHTML = curInnerHTML.replace(/Deactivite Disabled/g, "Save Appointment");
    document.getElementById("kv").innerHTML = curInnerHTML;
    //Getting the values
    let curInnerSelectValue = document.getElementById('v1').value;
    let keyvalueSet = document.getElementById('v2').value;
    let ApplicationKeySet = document.getElementById('Application__Type').value;
    let DesignationKeySet = document.getElementById('Designation').value;
    let DepartmentkeySet = document.getElementById('Department__Type').value;
    //accessing className
    let dy = document.getElementById('Application__Type');
    if(dy.classList.contains('trf')){
      dy.classList.remove('trf');
      dy.classList.add('___CsrfStac');
    }else{
      let select= document.getElementById('Department__Type').selectedOptions;
      let values = Array.from(select).map(({ value }) => value);
        if(ApplicationKeySet ==''){ 
          $("select#Application__Type").css('border-color','red');
          $("#error").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Faculty You are appointing this Professor To.</div>');
          $("select#Application__Type").focus();
          return false;
        }else if (values == '') {
            $("select#Department__Type").css('border-color','red');
            $("#error").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Department You are appointing this Professor To.</div>');
            $("select#Department__Type").focus();
            return false;
        }else if(DesignationKeySet ==''){
            $("select#Designation").css('border-color','red');
            $("#error").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Professor Designation.</div>');
            $("select#Designation").focus();
            return false;
        }else{
          $("#error").hide();
          $("select#Application__Type").css('border-color','green');
          $("select#Designation").css('border-color','green');
          $("select#Designation").css('border-color','green');
          let UserID= $("input#User_id").val().trim();
          let NiN= $("input#nin").val().trim();
          const Datavalues = {'ID': UserID, 'Nin':NiN, 'FacultyID': ApplicationKeySet, 'DepartmentID': values, 'DesignationID': DesignationKeySet };
          let pString = JSON.stringify(Datavalues);
          // Validate to Controller
          $.ajax({
            type         : 'POST',// define the type of HTTP verb we want to use (POST for our form)
            dataType     : 'JSON',
            contentType  : "application/json; charset=utf-8",
            data         : pString,// our data object
            url          : "<?=ROOT .'Admin/UpdateAppointment'?>", // the url where we want to POST
            processData  : false,
            encode       : true,
            crossOrigin  : true,
            async        : true,
            crossDomain  : true,
            headers		 : {
                  'Access-Control-Allow-Methods': '*',
                  "Access-Control-Allow-Credentials": true,
                  "Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                  "Access-Control-Allow-Origin": "*",
                  "Control-Allow-Origin": "*",
                  "cache-control": "no-cache",
                  'Content-Type': 'application/json'
                },
          }).then((response) => {
           $("#show_message").fadeIn().html(response.message, response.status);
          if(response.status == '200'){
            //$("#show_message").fadeIn();
            $("#togglebody").fadeOut();
            $("#___AppointmentProfessorModal").hide();
            $(".modal-content").fadeOut();
            // Display successfull message with sweetalert 
            Swal.fire({
              position: "bottom-end",
              icon: "success",
              title: "<h3>Successfully Updated!</h3>",
              showConfirmButton: false,
              timer: 1500,
            });
            jQuery('#___AppointmentProfessorModal').modal('hide');
            setTimeout(() => {
              jQuery('#___AppointmentProfessorModal').remove();
              jQuery('.modal-backdrop').remove();
            }, 200);
          }
        }).fail((xhr, error) => {
            Swal.fire({
            icon: "Error..!",
            title: "Sorry",
            text: "Fail To Update",
            timer: 1500,
          });
        console.log(error);
      });
     } 
      return false;
    }
    
   // $('#Designation').empty();
    // Setting a static DOM data
    const Respone = [{id:1, Name:'Distance Learning'},{id:2, Name:'Postgraduate'},{id:3, Name:'Undergraduate'}];
    const DesignationNode = [{name:'Full Time'},{name:'Part Time'},{name:'Contract'},{name:'Remotely'}];
    Respone.forEach((CallRecieve)=>{
      let run2 = $('#Application__Type').append('<option selected="" value="' + CallRecieve.id + '">' + CallRecieve.Name + '</option>');
      return false;
    });
    DesignationNode.forEach((x)=>{
       $('#Designation').append('<option selected="" value="' + x.name+ '">' + x.name + '</option>');
      return false;
    });
    curInnerSelectValue = curInnerSelectValue.replace(/<?=((isset($data['ftyname']))?$data['ftyname'] :'')?>/g, '');
    document.getElementById("v1").innerHTML = curInnerSelectValue;
    keyvalueSet = keyvalueSet.replace(/<?=((isset($data['designation']))?$data['designation'] :'')?>/g, '');
    document.getElementById("v2").innerHTML = keyvalueSet;
    
  <?php endif;?> 
}
closeModal = () =>{
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
    $('#toggleAppointmeVal').submit((e)=> {
        e.preventDefault();
        $("#error").hide();
        //validate the input now
        let Faculty= $("select#Application__Type").val().trim();
        if (Faculty == "") {
            $("select#Application__Type").css('border-color','red');
            $("#error").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Faculty You are appointing this Professor To.</div>');
            $("select#Application__Type").focus();
            return false;
        }else{$("select#Application__Type").css('border-color','green');}
        let Department= $("select#Department__Type").val();
        if (Department == "") {
            $("select#Department__Type").css('border-color','red');
            $("#error").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Department You are appointing this Professor To.</div>');
            $("select#Department__Type").focus();
            return false;
        }else{$("select#Department__Type").css('border-color','green');}
        let Designation= $("select#Designation").val().trim();
        if (Designation == "") {
            $("select#Designation").css('border-color','red');
            $("#error").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Professor Designation.</div>');
            $("select#Designation").focus();
            return false;
        }else{
          $("select#Designation").css('border-color','green');
        }
      let ProfID= $("input#User_id").val().trim();
      let ProfNiN= $("input#nin").val().trim();
      const max = {'ID': ProfID, 'Nin': ProfNiN, 'FacultyID': Faculty, 'DepartmentID': Department, 'DesignationID': Designation };
      let stringyifyData = JSON.stringify(max);
        $.ajax({
          type         : 'POST',// define the type of HTTP verb we want to use (POST for our form)
					dataType     : 'JSON',
					contentType  : "application/json; charset=utf-8",
					data         : stringyifyData,// our data object
					url          : "<?=ROOT .'Admin/ProfAppointment'?>", // the url where we want to POST
					processData  : false,
					encode       : true,
					crossOrigin  : true,
					async        : true,
					crossDomain  : true,
					headers		 : {
								'Access-Control-Allow-Methods': '*',
								"Access-Control-Allow-Credentials": true,
								"Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
								"Access-Control-Allow-Origin": "*",
								"Control-Allow-Origin": "*",
								"cache-control": "no-cache",
								'Content-Type': 'application/json'
							},
        }).then((response) => {
           $("#show_message").fadeIn().html(response.message, response.status);
          if(response.status == '200OK'){
            //$("#show_message").fadeIn();
            $("#togglebody").fadeOut();
            $("#___AppointmentProfessorModal").hide();
            $(".modal-content").fadeOut();
            // Display successfull message with sweetalert 
            Swal.fire({
              position: "bottom-end",
              icon: "success",
              title: "<h3>Successfully Appointed!</h3>",
              showConfirmButton: false,
              timer: 1500,
            });
            jQuery('#___AppointmentProfessorModal').modal('hide');
            setTimeout(() => {
              jQuery('#___AppointmentProfessorModal').remove();
              jQuery('.modal-backdrop').remove();
            }, 200);
          }
        }).fail((xhr, error) => {
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
            timer: 1500,
          });
        console.log(error);
      });
    });
    return false;
});
$(document).ready(($)=> {
  			// existing user add more department
     //hide messages
    $("#Newerror").hide();
    $("#Newshow_message").hide();
    //on submit
    $('#NewtoggleAppointmeVal').submit((e)=> {
        e.preventDefault();
        $("#Newerror").hide();
        //validate the input now
        let Faculty= $("select#NewApplication__Type").val().trim();
        if (Faculty == "") {
            $("select#NewApplication__Type").css('border-color','red');
            $("#Newerror").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Faculty You are appointing this Professor To.</div>');
            $("select#NewApplication__Type").focus();
            return false;
        }else{$("select#NewApplication__Type").css('border-color','green');}
        let Department= $("select#NewDepartment__Type").val();
        if (Department == "") {
            $("select#NewDepartment__Type").css('border-color','red');
            $("#Newerror").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Department You are appointing this Professor To.</div>');
            $("select#NewDepartment__Type").focus();
            return false;
        }else{$("select#NewDepartment__Type").css('border-color','green');}
        let Designation= $("select#NewDesignation").val().trim();
        if (Designation == "") {
            $("select#NewDesignation").css('border-color','red');
            $("#Newerror").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Professor Designation.</div>');
            $("select#NewDesignation").focus();
            return false;
        }else{
          $("select#NewDesignation").css('border-color','green');
        }
      let ProfID= $("input#NewUser_id").val().trim();
      let nin= $("input#Newnin").val().trim();
      const max = {'ID': ProfID, 'Nin':nin, 'FacultyID': Faculty, 'DepartmentID': Department, 'DesignationID': Designation };
      let stringyifyData = JSON.stringify(max);
      console.log(max);
        $.ajax({
          type         : 'POST',// define the type of HTTP verb we want to use (POST for our form)
					dataType     : 'JSON',
					contentType  : "application/json; charset=utf-8",
					data         : stringyifyData,// our data object
					url          : "<?=ROOT .'Admin/ProfAppointment'?>", // the url where we want to POST
					processData  : false,
					encode       : true,
					crossOrigin  : true,
					async        : true,
					crossDomain  : true,
					headers		 : {
								'Access-Control-Allow-Methods': '*',
								"Access-Control-Allow-Credentials": true,
								"Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
								"Access-Control-Allow-Origin": "*",
								"Control-Allow-Origin": "*",
								"cache-control": "no-cache",
								'Content-Type': 'application/json'
							},
        }).then((response) => {
           $("#Newshow_message").fadeIn().html(response.message, response.status);
          if(response.status == '200OK'){
            //$("#show_message").fadeIn();
            $("#togglebody").fadeOut();
            $("#___AppointmentProfessorModal").hide();
            $(".modal-content").fadeOut();
            // Display successfull message with sweetalert 
            Swal.fire({
              position: "bottom-end",
              icon: "success",
              title: "<h3>Successfully Appointed!</h3>",
              showConfirmButton: false,
              timer: 1500,
            });
            jQuery('#___AppointmentProfessorModal').modal('hide');
            setTimeout(() => {
              jQuery('#___AppointmentProfessorModal').remove();
              jQuery('.modal-backdrop').remove();
            }, 200);
          }
        }).fail((xhr, error) => {
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
            timer: 1500,
          });
        console.log(error);
      });
    });
    return false;
});
$(document).ready(function () {
//$("#Department__Type").empty();
		$("#Department__Type").select2({
			multiple: true,
		});
	});
  
  $(document).ready(function () {
    $("#NewDepartment__Type").empty();
		$("#NewDepartment__Type").select2({
			multiple: true,
		});
	});
</script>