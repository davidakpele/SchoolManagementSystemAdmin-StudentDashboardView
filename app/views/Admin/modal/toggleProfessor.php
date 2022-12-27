<?php ob_start(); ?>
    <link href="<?=ASSETS?>RequirementJs/select2.min.css" rel="stylesheet" />
    <script src="<?=ASSETS?>RequirementJs/select2.min.js"></script>
	<script> 
    $(document).ready(function ($) {
        $("#Application__Type").change(function () {
            let ___ApplicationType = $("#Application__Type").val().trim();
            const JavascriptHook = { "DataId": ___ApplicationType };
            let StringData = JSON.stringify(JavascriptHook);
            const Url = '<?=ROOT?>PagesController/Render/'; // the url where we want to POST
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
                $('#FacultyID').empty();
                Respone.forEach(function (CallRecieve){
                  $('#FacultyID').append('<option value="' + CallRecieve.FacultyID + '">' + CallRecieve.FacultyName + '</option>')
                });
            }).fail((xhr, status, error) => {
                console.log('Oops...', 'Something went wrong with ajax !', 'error');
            });
        });
        $("#FacultyID").change(function () {
            let FacultyID = $("#FacultyID").val().trim();
            const JavascriptHook = { "id": FacultyID };
            let StringData = JSON.stringify(JavascriptHook);
            const Url = '<?=ROOT?>PagesController/RenderDep/'; // the url where we want to POST
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
                  $('#Department__Type').append('<option value="' + CallRecieve.DepartmentID + '">' + CallRecieve.DepartmentName + '</option>')
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center" id="exampleModalLabel">
          <?php 
          if ($data['checkingexistence']){?>
            Our Designated Professor
          <?php }else {?>
            Appointmenting Professor
         <?php } ?>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
        if ($data['checkingexistence']):?>
          <p id="show_message" style="padding:10px"></p>
          <p id="error" style="padding:10px"></p>
        <form class="form-group" method="POST" action="javascript:void(0)" id="toggleAppointmeVal">
            <div class="col-md-12">
              <!-- we've turn the id into NIN For security reasons -->
              <div class="none" style="display:none"> 
                <label for="Appointment" style="color:#73879C;">Professor ID:*</label>
                <input type="text" name="User_id" id="User_id" value="<?=$data['id'];?>" class="form-control"/>
                <input type="text" name="nin" id="nin" value="<?=$data['n'];?>" class="form-control" />
                <input type="text" value="<?=$data['id']?>" class="form-control" disabled="disabled"/>
              </div>
            </div>
            <div class="col-md-12">
              <label for="Surname" style="color:#73879C;">Full Name:*</label>
              <input type="text" name="__sname" id="__sname" value="<?=$data['sname'];?>" class="form-control" disabled="disabled"/ >
            </div>
            <div class="col-md-12">
                <label for="Faculty" style="color:#73879C;">Application:</label>
                <select name="Application__Type" disabled id="Application__Type" class="form-control trf select2" >
                  <option value="<?=($data['catid']) ? $data['catid'] : '' ;?>"><?=($data['catname']) ? $data['catname'] : '' ;?></option>
              </select>
            </div>
            <div class="col-md-12">
              <label for="Faculty" style="color:#73879C;">Faculty:</label>
              <select name="FacultyID" disabled id="FacultyID" class="form-control select2" >
                 <?php if (isset($data['ftyname'])):?>
                    <option selected="selected" value="<?=((isset($data['catid']))?$data['catid'] :'')?>" id="v1"><?=((isset($data['ftyname']))?$data['ftyname'] :'')?></option>
                  <?php else:?>
                    <option value="" selected="selected" style="display:none">--select--</option>
                    <?php foreach ($data['DisplayCateogries'] as $stmt): ?>
                    <option id="<?=$stmt['Category__ID']?>" value="<?=$stmt['Category__ID']?>"> <?=$stmt['Category__name']?> </option>
                  <?php endforeach;?>
                  <?php endif; ?>
              </select>
          </div>
            <div class="col-md-12">	
              <label for="Department Type" style="color:#73879C;">Department:</label>
              <select name="Department__Type" disabled id="Department__Type" class="form-control select2" multiple="multiple">
                  <?php foreach ($data['Department'] as $i):?>
                    <option value="<?=$i['DepartmentID']?>" selected="selected" ><?=$i['DepartmentName']?></option>
                  <?php endforeach;?>
              </select>
            </div>
            <div class="col-md-12">	
              <label for="Designation Type" style="color:#73879C;">Designation:</label>
              <select name="Designation" disabled id="Designation" class="form-control select2"  >
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
            <!-- Modal footer -->
            <div class="clearfix"></div>
            <br/>
              <div class="modal-footer flex" style="display:flex">
                <button type="button" class="btn btn-default btn-sm" onclick="closeModal();"><i class="fa fa-remove"></i>Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="kv" name="SubmitAppoint" onclick="enable()">Deactivite Disabled</button>
              </div>
          </form>   
          <center>
             <button type="submit" class="btn btn-danger btn-sm w-3" value="<?=$data['id'];?>" id="DismissedDesignation" name="designateProfessor">Dismissed From Management Role</button>
          </center>
         
        <?php else: ?>
           <!-- display the bootstrap basic form  -->
      <p id="show_message" style="padding:10px"></p>
      <p id="error" style="padding:10px"></p>
      <form class="form-group" method="POST" action="javascript:void(0)" id="toggleAppointmeVal">
          <div class="col-md-12" style="display:none">
            <label for="Appointment" style="color:#73879C;">Professor ID:*</label>
            <input type="text" name="User_id" id="User_id" value="<?=$data['id'];?>" class="form-control" style="display:none"/>
            <input type="text" name="nin" id="nin" value="<?=$data['n'];?>" class="form-control" style="display:none"/>
            <input type="text" value="<?=$data['id']?>" class="form-control" disabled="disabled"/>
          </div>
          <div class="col-md-12">
            <label for="Surname" style="color:#73879C;">Full Name:*</label>
            <input type="text" name="__sname" id="__sname" value="<?=$data['sname'];?>" class="form-control" disabled="disabled"/ >
          </div>
          <div class="col-md-12">
              <label for="Faculty" style="color:#73879C;">Application:</label>
              <select name="Application__Type" id="Application__Type" class="form-control select2" >
                  <option selected="selected" disabled="">--select--</option>
                  <option value="" selected="selected" style="display:none">--select--</option>
                  <?php foreach ($data['DisplayCateogries'] as $stmt): ?>
                  <option id="<?=$stmt['Category__ID']?>" value="<?=$stmt['Category__ID']?>"> <?=$stmt['Category__name']?> </option>
                <?php endforeach;?>
            </select>
          </div>
          <div class="col-md-12">
            <label for="Faculty" style="color:#73879C;">Faculty:</label>
            <select name="FacultyID" id="FacultyID" class="form-control select2" >
                <option selected="selected" disabled="disabled">--Empty--</option>
                <option value="" selected="selected" style="display:none"></option>
            </select>
          </div>
          <div class="col-md-12">	
            <label for="Department Type" style="color:#73879C;">Department:</label>
             <select name="Department__Type" id="Department__Type" class="form-control select2" multiple="multiple">
                <?php foreach ($data['Department'] as $i):?>
                  <option value="<?=$i['Child_id']?>" selected="" ><?=$i['Child_name']?></option>
                <?php endforeach;?>
            </select>
          </div>
          <div class="col-md-12">	
            <label for="Designation Type" style="color:#73879C;">Designation:</label>
            <select name="Designation" id="Designation" class="form-control select2"  >
              <option selected="selected" disabled="">--select--</option>
              <option value="" selected="selected" style="display:none">--select--</option>
              <option value="Full Time" >Full Time</option>
              <option value="Part Time">Part Time</option>
              <option value="Contract">Contract</option>
              <option value="Remotely">Remotely</option>
            </select>
          </div>
          <div class="clearfix"></div>
          <br/>
            <div class="modal-footer flex" style="display:flex">
              <button type="button" class="btn btn-default btn-sm" onclick="closeModal();"><i class="fa fa-remove"></i>Close</button>
              <button type="submit" class="btn btn-primary btn-sm"  name="SubmitAppoint">Save Appointment</button>
          </div>
        </form>
        <?php endif; ?>
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
    document.getElementById('FacultyID').disabled=false;
   <?php  if (isset($data['ftyname']) && isset($data['designation'])):?>
   // this is to change button element from 'Edit Designation' to  'Save new Designation'
    let curInnerHTML = document.getElementById('kv').innerHTML;
    curInnerHTML = curInnerHTML.replace(/Deactivite Disabled/g, "Save Changes");
    document.getElementById("kv").innerHTML = curInnerHTML;
    //Getting the values
    // let curInnerSelectValue = document.getElementById('v1').value;
    // let keyvalueSet = document.getElementById('v2').value;
    let ApplicationKeySet = document.getElementById('Application__Type').value;
    let FacultyID = document.getElementById('FacultyID').value;
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
          $("#error").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Application You are appointing this Professor To.</div>');
          $("select#Application__Type").focus();
          return false;
        }else if (FacultyID == '') {
            $("select#FacultyID").css('border-color','red');
            $("#error").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Faculty You are appointing this Professor To.</div>');
            $("select#FacultyID").focus();
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
          console.log('Application'+ApplicationKeySet);
          console.log('FacultyID'+FacultyID);
          const Datavalues = {'ID': UserID, 'Nin':NiN, 'Application':ApplicationKeySet, 'FacultyID':FacultyID, 'DepartmentID': values, 'DesignationID': DesignationKeySet };
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
              postion: "bottom-end",
              title: "Message",
              text: "Successfully Updated!",
              type: "success",
              showConfirmButton: false,
              timer: 1500,
                // using theN & done promise callback
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
    $('#Application__Type').empty();
    Respone.forEach((CallRecieve)=>{
      let run2 = $('#Application__Type').append('<option selected="" value="' + CallRecieve.id + '">' + CallRecieve.Name + '</option>');
      return false;
    });
    $('#Designation').empty();
    DesignationNode.forEach((x)=>{
       $('#Designation').append('<option selected="" value="' + x.name+ '">' + x.name + '</option>');
      return false;
    });
    // curInnerSelectValue = curInnerSelectValue.replace(/<?=((isset($data['ftyname']))?$data['ftyname'] :'')?>/g, '');
    // document.getElementById("v1").innerHTML = curInnerSelectValue;
    // keyvalueSet = keyvalueSet.replace(/<?=((isset($data['designation']))?$data['designation'] :'')?>/g, '');
    // document.getElementById("v2").innerHTML = keyvalueSet;
    
  <?php endif;?> 
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
        let App= $("select#Application__Type").val().trim();
        if (App == "") {
            $("select#Application__Type").css('border-color','red');
            $("#error").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select the application you want to appoint this Professor To.</div>');
            $("select#Application__Type").focus();
            return false;
        }else{$("select#Application__Type").css('border-color','green');}
        let Faculty= $("select#FacultyID").val().trim();
        if (Faculty == "") {
            $("select#FacultyID").css('border-color','red');
            $("#error").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;Select Faculty You are appointing this Professor To.</div>');
            $("select#FacultyID").focus();
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
      const max = {'ID': ProfID, 'Nin': ProfNiN, 'Application':App, 'FacultyID': Faculty, 'DepartmentID': Department, 'DesignationID': Designation };
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
              postion: "bottom-end",
              title: "Message",
              text: "Successfully Appointed!",
              type: "success",
              showConfirmButton: false,
              timer: 1500,
                // using theN & done promise callback
            });
           
            jQuery('#___AppointmentProfessorModal').modal('hide');
            setTimeout(() => {
              jQuery('#___AppointmentProfessorModal').remove();
              jQuery('.modal-backdrop').remove();
            }, 0);
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
              postion: "bottom-end",
              title: "Message",
              text: "Successfully Appointed!",
              type: "success",
              showConfirmButton: false,
              timer: 1500,
                // using theN & done promise callback
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
     $('#DismissedDesignation').click((e)=> {
       let id = $("#DismissedDesignation").val();
       const data = {'ID': id};
       
       let stringyifyData = JSON.stringify(data);
         $.ajax({
          type         : 'POST',// define the type of HTTP verb we want to use (POST for our form)
					dataType     : 'JSON',
					contentType  : "application/json; charset=utf-8",
					data         : stringyifyData,// our data object
					url          : "<?=ROOT .'Admin/DisMissedManagementRole'?>", // the url where we want to POST
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
          if(response.status == 200){
            $("#togglebody").fadeOut();
            $("#___AppointmentProfessorModal").hide();
            $(".modal-content").fadeOut();
            // Display successfull message with sweetalert 
            Swal.fire({
              postion: "bottom-end",
              title: "Message",
              text: "Successfully Dismissed From Management Role!",
              type: "success",
              showConfirmButton: false,
              timer: 1500,
                // using theN & done promise callback
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
      });
	  });
  });

  $(document).ready(function () {
    $("#NewDepartment__Type").empty();
		$("#NewDepartment__Type").select2({
			multiple: true,
		});
	});
 closeModal = () =>{
	jQuery('#___AppointmentProfessorModal').modal('hide');
	setTimeout(() => {
		jQuery('#___AppointmentProfessorModal').remove();
		jQuery('.modal-backdrop').remove();
	}, 0);
}
</script>