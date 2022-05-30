<?php ob_start(); ?>
<div class="modal fade" id="EmailComposermodalForm" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" onclick="closeModal();"  class="btn btn-default btn-xs pull-right" data-dismiss="modal"><i class="fa fa-remove"></i></button>
                <h4 class="modal-title" id="myModalLabel">New Message</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="ModalstatusMsg"></p>
                <form role="form" method="POST" action="javascript:void(0)" id="ComposeBoxForm">
                    <div class="form-group" style="display:none">
                        <label for="inputSenderName">SenderName:</label>
                        <input type="text" class="form-control" value="<?=$data['SenderName']?>" id="SenderName" />
                        <input type="text" class="form-control" value="<?=$data['SenderiD']?>" id="SenderID" />
                        <input type="text" class="form-control" value="<?=$data['EmailID']?>" id="EmailID" />
						<input type="text" class="form-control" value="<?=$data['targetID']?>" id="targetid" />
                    </div>
                    <div class="form-group" style="display:none">
                        <label for="inputFrom">From:</label>
                        <input type="email" class="form-control" value="<?=$data['SenderEmail']?>" id="SenderMail" placeholder="From:" />
                    </div>
                    <div class="form-group" style="display:none">
                        <label for="inputFrom">Recipient Name:</label>
                        <input type="text" class="form-control" value="<?=$data['RecipicientName']?>" id="RecipientName" placeholder="From:" />
                    </div>
                    <div class="form-group">
                        <label for="inputTo">To:</label>
                        <input type="email" class="form-control" value="<?=$data['ToSendMail']?>" id="inputEmail" placeholder="Recipients" />
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Subject:</label>
                        <input type="text" class="form-control" id="inputSubject" placeholder="Subject" />
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message:</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Message" cols="0" rows="3" ></textarea>
                    </div>
                <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" onclick="closeModal();" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-remove"></i>Close</button>
                        <button type="submit" class="btn btn-primary btn-sm submitBtn" >Send Email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo ob_get_clean(); ?>
<script type="text/javascript">
    closeModal = () =>{
        jQuery('#EmailComposermodalForm').modal('hide');
        setTimeout(() => {
            jQuery('#EmailComposermodalForm').remove();
            jQuery('.modal-backdrop').remove();
        }, 300);
    }
    // Validate modal data 
$(document).ready(($)=>{
    //hide messages 
    $(".ModalstatusMsg").hide();
	//on submit
    $('#ComposeBoxForm').submit(function (e) {
        e.preventDefault();
        $(".ModalstatusMsg").hide();
		 //validate the input now
		let reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		let SenderName = $('#SenderName').val();
		let SenderID = $('#SenderID').val();
		let EmailID = $('#EmailID').val();
		let targetid = $('#targetid').val();
		if (SenderName.trim() == "") {
            $(".ModalstatusMsg").fadeIn().html("<span style='color:red;'>Please Enter Your Name As The Sender.</span> ");
            $("#SenderName").focus()
            return false;
        }
		let RecipientName = $('#RecipientName').val();
		if(RecipientName.trim() == ""){
			$(".ModalstatusMsg").fadeIn().html("<span style='color:red;'>Please Enter Recipient Name.</span> ");
            $("#RecipientName").focus()
			return false;
		}
		let SenderMail = $('#SenderMail').val();
		if (SenderMail.trim() == "") {
            $(".ModalstatusMsg").fadeIn().html("<span style='color:red;'>Please Enter Your Email Address As The Sender..</span> ");
            $("#SenderMail").focus();
            return false;
        }else if(SenderMail.trim() != '' && !reg.test(SenderMail)){
			$(".ModalstatusMsg").fadeIn().html('<span style="color:red;">Invalid Email Provided.</span>');
			$('#SenderMail').focus();
			return false;
		}
		let email = $('#inputEmail').val();
		if (email.trim() == "") {
            $(".ModalstatusMsg").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;<b>Please Enter Your Recipient.</b></div>');
            $("#inputEmail").focus();
            return false;
        }else if(email.trim() != '' && !reg.test(email)){
			$(".ModalstatusMsg").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;<b>Invalid Email Provided.</span></div>');
			$('#inputEmail').focus();
			return false;
		}
		let subject = $('#inputSubject').val();
		if(subject.trim() == '' ){
			$('.ModalstatusMsg').fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;<b>Please Enter The Subject.</span></div>');
			$('#inputSubject').focus();
			return false;
		}
		let message = $('#inputMessage').val();
		if(message.trim() == '' ){
			$('.ModalstatusMsg').fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;<b>Please Enter Your Message.</b></div>');
			$('#inputMessage').focus();
			return false;
		}else{
			const fulldata = {'SenderID':SenderID, 'EmailID':EmailID, 'targetid':targetid, 'SenderName': SenderName, 'SenderMail':SenderMail, 'Email':email, 'RecipientName':RecipientName, 'subject':subject, 'message':message};
			let data = JSON.stringify(fulldata);
			$.ajax({
				type 		 : 'POST',// define the type of HTTP verb we want to use (POST for our form)
				dataType     : 'JSON',
				contentType  : "application/json; charset=utf-8",
				data         : data,// our data object
				url          : '<?=ROOT .'Admin/MailToProfessor';?>', // the url where we want to POST
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
			}).done((response)=>{
				if(response.status == 200){
					Swal.fire('Deleted!', response.message, response.status);
					setTimeout(function(){
					window.location.reload(1);
					}, 2000);
				}else{
					Swal.fire({
						position: "bottom-end",
						icon: 'error',
						title: 'Oops...',
						text: 'Failed to delete, Some problem occurred.!',
						color: '#716add',
						background: '#fff',
						backdrop: `rgba(0,0,123,0.4)`,
						timer: 2500,
					});
				}
			}).fail((xhr, status, error)=>{
				Swal.fire('Oops...', 'Something went wrong with ajax !', 'error');
			});
		}
	});
});
</script>