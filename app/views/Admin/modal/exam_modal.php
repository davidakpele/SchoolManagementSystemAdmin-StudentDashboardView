<?php ob_start(); ?>
<link href="<?=ASSETS?>RequirementJs/select2.min.css" rel="stylesheet" />
<script src="<?=ASSETS?>RequirementJs/select2.min.js"></script>
<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal();">
                                <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title text-center">Full Details</h4>
                        </div>
                        <div class="modal-body">
                           <div class="row"> 
                                <div class="col-md-6">
                                    <label for="">Department</label>
                                    [<?=$data['data']['departmentname']?>]
                                </div>
                                <div class="col-md-6">
                                    <label for="">Classes</label>
                                    [<?=$data['data']['Classname']?>]
                                </div>
                                <div class="col-md-6">
                                    <label for="">Semester</label>
                                    [<?=$data['data']['Semestername']?>]
                                </div>
                                <div class="col-md-6">
                                    <label for="">Course</label>
                                    [<?=$data['data']['Coursename']?>]
                                </div>
                                <div class="col-md-6">
                                    <label for="">StartTime</label>
                                    [<?=$data['data']['startTime']?>]
                                </div>
                                <div class="col-md-6">
                                    <label for="">EndTime</label>
                                    [<?=$data['data']['endTime']?>]
                                </div>
                                <div class="col-md-6">
                                    <label for="">Due-Date</label>
                                   [<?=pretty_date($data['data']['duedate'])?> ]
                                </div>
                                <div class="col-md-6">
                                    <label for="">Duration</label>
                                    [<?=$data['data']['duration']?>]
                                </div>
                                <div class="col-md-6">
                                    <label for="">Total Questions</label>
                                    [<?=$data['data']['total']?>]
                                </div>
                                <div class="col-md-6">
                                    <label for="">Created Date</label>
                                    [<?=pretty_date($data['data']['date'])?>]
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" onclick="closeModal();">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    isEditData = ()=>{
        let id = $('#id').val();
        let name = $('#isEditData').val();
        let data = {'Appname':name, 'id':id};
        let stringify = JSON.stringify(data);
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            dataType: 'JSON',
            contentType: "application/json; charset=utf-8",
            data: stringify, // our data object
            url: base_url + 'Admin/IsEditApp', // the url where we want to POST
            processData: false,
            encode: true,
            crossOrigin: true,
            async: true,
            crossDomain: true,
            headers: {
                'Access-Control-Allow-Methods': '*',
                "Access-Control-Allow-Credentials": true,
                "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                "Access-Control-Allow-Origin": "*",
                "Control-Allow-Origin": "*",
                "cache-control": "no-cache",
                'Content-Type': 'application/json'
            },
        }).then((response) => {
            if (response.status == true) {
                $(".invalid").removeClass('has-error');
                $('.help-block').hide();
                $('#appname').val("");
                Swal({
                    "title": "Successful",
                    "text": response.message,
                    "type": "success"
                });
                setTimeout(() => {
                    window.location.reload(true);
                }, 1000);
            } else {
                if (response.status1 == false) {
                    $(".invalid").addClass('has-error');
                    $('#isEditData').focus();
                    $('.help-block1').show().html(response.message);
                } else {
                    $(".invalid").removeClass('has-error');
                    $('.help-block1').hide();
                }
                return false;
            }
        }).fail((xhr, error) => {
            Swal({
                "title": "Error",
                "text": response.message,
                "type": "error"
            });
        });
    }
 closeModal = () =>{
	jQuery('#modal').modal('hide');
	setTimeout(() => {
		jQuery('#modal').remove();
		jQuery('.modal-backdrop').remove();
	}, 0);
}
</script>
<?php echo ob_get_clean(); ?>