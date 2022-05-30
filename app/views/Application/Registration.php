<?php $this->view("include/LogandReg",$data);
include_once 'include.file/migrate.php';
?>

<body style="background:#f0f2f5;">
    <div id="head">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="float-left"> 
                    <a href="<?=ROOT?>"><img src="<?=ASSETS?>img/product/1.png" class="img-responsive center" style="max-width:45px;"/> </a>
                </div>
            </div><!--end col div here -->
            <br class="clear" />
            </div><!-- end row here -->
        </div><!-- close container -->
    </div>
<div class="container reg__container">
 <p class="fs-4 fw-bold m-0 mt-4 h3 text-center Reg__header" style="font-size:24px">Student Registration Form</p>
    <div class="container" style="margin-top:10px;background:#FFF; border-radius: 5px; max-width:990px; margin:0 auto;padding: 25px;" id="App1">
        <div class="row ">  
            <div id="messagediv" class="success success-ico" style="display:none"></div>
            <form method="POST" class="form-group" autocomplete="off" id="AppRegistration" action="javascript:void(0)"/>
                <div class="CyberSecurityResponVal">
                    <div id="error" class="error error-ico" style="display:none"></div>
                    <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
                    <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
                    <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTUyNDQ3MTU1NQ9kFgQCAQ8WAh4HVmlzaWJsZWgWAgIBDxYCHgRUZXh0ZWQCAw9kFgQCAw8QDxYGHg1EYXRhVGV4dEZpZWxkBRNBcHBsaWNhdGlvblR5cGVOYW1lHg5EYXRhVmFsdWVGaWVsZAURQXBwbGljYXRpb25UeXBlSUQeC18hRGF0YUJvdW5kZ2QQFQ4ADFBvc3RncmFkdWF0ZRxTY2hvb2wgb2YgRm91bmRhdGlvbiBTdHVkaWVzA0lDRQ1VbmRlcmdyYWR1YXRlNUh1bWFuIFJlc291cmNlcyBEZXZlbG9wbWVudCBDZW50cmUgRGlwbG9tYSBQcm9ncmFtbWVzG0Rpc3RhbmNlIExlYXJuaW5nIEluc3RpdHV0ZQ5JQ0UgKFNhbmR3aWNoKQ1VbmRlcmdyYWR1YXRlAAEtA0lNUyNVbml2ZXJzaXR5IG9mIExhZ29zIEJ1c2luZXNzIFNjaG9vbDZVbml2ZXJzaXR5IG9mIExhZ29zIEJ1c2luZXNzIFNjaG9vbCAoU2hvcnQgUHJvZ3JhbW1lcykVDgAMUG9zdGdyYWR1YXRlCkZvdW5kYXRpb24DSUNFDVVuZGVyZ3JhZHVhdGUESFJEQwNETEkPSUNFIChFRFVDQVRJT04pDVVuZGVyZ3JhZHVhdGUAAS0DSU1TBFVMQlMHVUxCUy1TUBQrAw5nZ2dnZ2dnZ2dnZ2dnZxYBZmQCBQ8QZGQWAGRk2/T7ZMkY7ntGcd/botvxcKAzneuyj4BSIpLHIhWxR58=" />
                </div> 
                    <input type="text" id="___NewStudentIdNo" name="student__id" class="form-control" value="<?=$Plugin_New_ID;?>" style="display:none" />
                    <input type="text" name="RollNo" id="EnrollmentNumber" value="<?=$randomNumber;?>" style="display:none;"/>
                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0 "> 
                            <div class="col-md-6">
                                <label for="Application Type">Application Type:</label>
                                    <select class="form-control" name="Application__Type" id="Application__Type">
                                        <option selected="" value="">--Select--</option>
                                        <?php foreach ($data['DisplayCateogries'] as $stmt): ?>
                                            <option id="<?=$stmt['Category__ID']?>" value="<?=$stmt['Category__ID']?>"> <?=$stmt['Category__name']?> </option>
                                        <?php endforeach;?>
                                        </select>
                                <span class="inValidFeedBack"><?=$data['ApplicationType__Error']; ?></span>
                            </div>
                            <div class="col-md-6">
                                <label for="Department Type">Department:</label>
                                <select name="Department__Type" id="Department__Type" class="form-control">
                                    <option value=""  selected="">--select--</option>
                                </select>
                                <span class="inValidFeedBack"><?=$data['Department__TypeError']; ?></span>
                            </div>
                            <div class="col-md-4">
                                <label for="NIN">Program:</label>
                                <input list="programlist" id="Program" name="Program__Type" value="<?=((isset($_POST['Program__Type']))?$_POST['Program__Type']: '');?>" id="Program__Type" class="form-control" />
                                <datalist id="programlist">
                                     <option selected="selected"  disabled="" value="">
                                    <?php foreach ($data['throw'] as $min): ?>
                                        <option value="<?=$min['Program__name']?> ">
                                    <?php endforeach;?>
                            </datalist> 
                                <span class="text-center inValidFeedBack"><?=$data['Program__TypeError']; ?></span>
                            </div>
                            <div class="col-md-4"> 
                                <label for="NIN">NIN:</label>
                                <input type="text" class="form-control" id="nin" name="NIN" value="<?=((isset($_POST['NIN']))?$_POST['NIN']: '');?>" placeholder="NIN:"  autocomplete="off">
                                <span  class="inValidFeedBack"><?=$data['NINError']; ?></span>
                            </div>
                            <div class="col-md-4"> 
                                <label for="Entry Level">Entry Level:</label>
                                <input list="EntrylevelList" class="form-control" name="Entrylevel" id="EtyLevel" value="<?=((isset($_POST['Entrylevel']))?$_POST['Entrylevel']: '');?>">
                                    <datalist id="EntrylevelList">
                                        <?php foreach($data['StmtEntrylevel'] as $StmtEntry):?>
                                        <option value="<?=$StmtEntry['Entry__level__Name'];?>">
                                            <?php endforeach;?>
                                    </datalist>
                                <span  class="inValidFeedBack"><?=$data['EntrylevelError']?></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0 "> <br/>
                            <p class="gap9"><span class="">Personal Details</span></p>
                            <div class="col-md-6"> 
                                <lable for="Surname">Surname:*</lable>
                                <input type="text" class="form-control" id="surname" value="<?=((isset($_POST['Surname']))?$_POST['Surname']: '');?>" name="Surname"  placeholder="Surname:">
                                <span  class="inValidFeedBack"><?=$data['SurnameError']; ?></span>
                            </div>
                            <div class="col-md-6"> 
                                <lable for="Other name">Other Name*</lable>
                                <input type="text" id="othername" class="form-control" value="<?=((isset($_POST['othername']))?$_POST['othername']: '');?>" name="othername" placeholder="Other Name" autocomplete="off" />
                                <span  class="inValidFeedBack"><?=$data['othernameError']; ?></span>
                            </div>
                            <div class="col-md-6"> 
                                <lable for="Date__of__birth">Date Of Birth*</lable>
                                <input type="date" class="form-control" id="Date__of__birth" value="<?=((isset($_POST['Date__of__birth']))?$_POST['Date__of__birth']: '');?>" name="Date__of__birth" placeholder="Date Of Birth:"  autocomplete="off" />
                                <span  class="inValidFeedBack"><?=$data['Date__of__birthError']; ?></span>
                            </div>
                            <div class="col-md-6"> 
                                <lable for="">Gender*</lable>
                                <input list="GenderList" id="gender" class="form-control" placeholder="Gender" value="<?=((isset($_POST['gender']))?$_POST['gender']: '');?>" name="gender" autocomplete="off" />
                                <datalist id="GenderList">
                                    <option value="Male">
                                    <option value="Female">
                            </datalist>
                                <span  class="inValidFeedBack"><?=$data['genderError']; ?></span>
                            </div>
                            <div class="col-md-12"> 
                                <lable for="">Email*</lable>
                                <input type="email" class="form-control" id="email" name="email" value="<?=((isset($_POST['email']))?$_POST['email']: '');?>" placeholder="Email:"  autocomplete="off" />
                                <span  class="inValidFeedBack"><?=$data['emailError']; ?></span>
                            </div>
                            <div class="col-md-6"> 
                                <lable for="">Relationship Status*</lable>
                                <input list="relationshiplist" id="relationship" name="relationship" value="<?=((isset($_POST['relationship']))?$_POST['relationship']: '');?>" class="form-control" autocomplete="off">
                                <datalist id="relationshiplist">
                                    <option value="Divored">Divored
                                    <option value="Single">Single
                                    <option value="Married">Married
                                    <option value="Complicated">Complicated
                                </datalist>
                                <span  class="inValidFeedBack"><?=$data['relationshipError']; ?></span>
                            </div>
                            <div class="col-md-6"> 
                                <lable for="Telephone">Tel*</lable>
                                <input type="tel" class="form-control" id="mobile" name="telephone" value="<?=((isset($_POST['telephone']))?$_POST['telephone']: '');?>" placeholder="+(234) 8032 4552 09"  autocomplete="off" />
                                <span  class="inValidFeedBack"><?=$data['telephoneError']; ?></span>
                            </div>
                            <div class="col-md-12"> 
                                <label for="Session">Session:</label>
                                    <input list="sessionList" class="form-control" name="session" id="session" value="<?=((isset($_GET['Edit']))?trim(filter_var($Hat)) : trim(filter_var($_POST['session'], FILTER_SANITIZE_STRING)))?>">
                                    <datalist id="sessionList">
                                        <?php foreach ($data['StmtSession'] as $session): ?>
                                        <option value="<?=$session['session'];?>">
                                    <?php endforeach;?>
                                </datalist>
                                <span  class="inValidFeedBack"><?=$data['sessionError']; ?></span>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12  col-gray-dark">
                                <button class="btn btn-primary submit_btn" value="Signup" type="submit" style="width: 50%">Register Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          
<script src="<?=ASSETS?>important__stylesheet__file/maskfile.js" type="text/javascript"></script>
<?php $this->view("include/LogandRegFooter",$data); ?>