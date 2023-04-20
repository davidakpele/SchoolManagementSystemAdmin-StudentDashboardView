<?php $this->view("include/LogandReg",$data);?>
 <body>
    <div id="head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="<?=ROOT?>"><img src="<?=ASSETS?>img/product/1.png"  style="max-width:55px;"/></a>
                </div><!--end col div here -->
            </div><!-- end row here -->
        </div><!-- close container -->
    </div>
    <!--- Start Body -->
<div class="container reg__container">
 <p class="fs-4 fw-bold m-0 mt-4 h3 text-center Reg__header" style="font-size:24px">Student Registration Form</p>
    <div class="container" style="margin-top:10px;background:#FFF; border-radius: 5px; max-width:1500px; margin:0 auto;padding: 25px;" id="App1">
        <div class="row"> 
            <div id="error" class="error error-ico" style="display:none"></div>
            <div id="messagediv" class="success success-ico" style="display:none"></div>
            <form method="POST" class="form-group" autocomplete="off" id="AppRegistration" action="javascript:void(0)">
                <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0 "> 
                    <div class="col-md-4">
                        <label for="Application Type">Application Type:</label>
                        <select class="form-control" name="Application__Type" id="Application__Type">
                            <option selected="" value="">--Select--</option>
                            <?php foreach ($data['DisplayCateogries'] as $stmt): ?>
                            <option id="<?=$stmt['Category__ID']?>" value="<?=$stmt['Category__ID']?>"> <?=$stmt['Category__name']?> </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="Faculty Type">Faculty:</label>
                        <select name="Faculty__Type" id="Faculty__Type" class="form-control">
                            <option value=""  selected="">--select--</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="Department Type">Department:</label>
                        <select name="Department__Type" id="Department__Type" class="form-control">
                            <option value=""  selected="">--select--</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="Program">Program:</label>
                        <select id="Program" name="Program__Type" id="Program__Type" class="form-control" >
                            <option selected="selected" value="">--Select--</option>
                        </select> 
                    </div>
                    <div class="col-md-4"> 
                        <label for="NIN">NIN:</label>
                        <input name="myInput_DRS" class="form-control" id="nin" maxlength="11"  min="0" max="1000000000009999" step="1" onKeyPress="if(this.value.length==11) return false;" type="number" value="<?=((isset($_POST['NIN']))?$_POST['NIN']: '');?>" placeholder="NIN:"  autocomplete="off" />
                    </div>
                    <div class="col-md-4 EntryDevparent"> 
                        <div class="EntryDevchild">
                            <label for="Entry Level">Entry Level:</label>
                            <select class="form-control" name="Entrylevel" id="EtyLevel" value="<?=((isset($_POST['Entrylevel']))?$_POST['Entrylevel']: '');?>">
                                <option selected="selected" value="">--Select--</option>
                                <?php foreach($data['StmtEntrylevel'] as $StmtEntry):?>
                                <option value="<?=$StmtEntry['Entry__level__Name'];?>"><?=$StmtEntry['Entry__level__Name'];?></option>
                                    <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0 "> <br/>
                    <p class="gap9"><span class="">Personal Details</span></p>
                    <div class="col-md-6"> 
                        <lable for="Surname">Surname:*</lable>
                        <input type="text" class="form-control" id="surname" value="<?=((isset($_POST['Surname']))?$_POST['Surname']: '');?>" name="Surname"  placeholder="Surname:">
                    </div>
                    <div class="col-md-6"> 
                        <lable for="Other name">Other Name*</lable>
                        <input type="text" id="othername" class="form-control" value="<?=((isset($_POST['othername']))?$_POST['othername']: '');?>" name="othername" placeholder="Other Name" autocomplete="off" />
                    </div>
                    <div class="col-md-6"> 
                        <lable for="Date__of__birth">Date Of Birth*</lable>
                        <input type="date" class="form-control" id="Date__of__birth" value="<?=((isset($_POST['Date__of__birth']))?$_POST['Date__of__birth']: '');?>" name="Date__of__birth" placeholder="Date Of Birth:"  autocomplete="off" />
                    </div>
                    <div class="col-md-6"> 
                        <lable for="">Gender*</lable>
                        <select id="gender" class="form-control" placeholder="Gender" value="<?=((isset($_POST['gender']))?$_POST['gender']: '');?>" name="gender" autocomplete="off" />
                            <option selected="selected" value="">--Select--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-12"> 
                        <lable for="">Email*</lable>
                        <input type="email" class="form-control" id="email" name="email" value="<?=((isset($_POST['email']))?$_POST['email']: '');?>" placeholder="Email:"  autocomplete="off" />
                    </div>
                    <div class="col-md-6"> 
                        <lable for="">Relationship Status*</lable>
                        <select  id="relationship" name="relationship" value="<?=((isset($_POST['relationship']))?$_POST['relationship']: '');?>" class="form-control" autocomplete="off">
                            <option selected="selected" value="">--Select--</option>
                            <option value="Divored">Divored</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Complicated">Complicated</option>
                        </select>
                    </div>
                    <div class="col-md-6"> 
                        <lable for="Telephone">Tel*</lable>
                        <input type="tel" class="form-control" id="mobile" name="telephone" value="<?=((isset($_POST['telephone']))?$_POST['telephone']: '');?>" placeholder="+(234) 8032 4552 09"  autocomplete="off" />
                    </div>
                    <div class="col-sm-12 col-md-12 col-xs-12  col-gray-dark">
                        <button class="btn btn-primary submit_btn" value="Signup" type="submit" style="width: 50%">Register Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?=ASSETS?>important__stylesheet__file/maskfile.js" type="text/javascript"></script>
<?php $this->view("include/LogandRegFooter",$data); ?>