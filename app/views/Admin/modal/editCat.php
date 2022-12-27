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
                            <h4 class="modal-title text-center">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <form action="javascript:void(e)" method="post" autocomplete="off">
                            <input type="hidden" value="<?=$data['app']->Category__ID?>" id="id" class="form-control">
                                <div class="form-group invalid">
                                    <label for="appname">Application Name: </label>
                                    <input type="text" data-id="<?=$data['app']->Category__ID?>" value="<?=$data['app']->Category__name?>" id="isEditData" class="form-control">
                                    <small class="help-block1"></small>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" onclick="closeModal();">Close</button>
                            <button type="submit" class="btn btn-primary" onclick="isEditData();">Save Data</button>
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