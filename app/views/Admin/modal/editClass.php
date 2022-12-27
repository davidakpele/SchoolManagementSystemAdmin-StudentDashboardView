<?php ob_start(); ?>
    <link href="<?=ASSETS?>RequirementJs/select2.min.css" rel="stylesheet" />
    <script src="<?=ASSETS?>RequirementJs/select2.min.js"></script>
        <div class="modal fade" id="EditClassModal" tabindex="-1" role="dialog" aria-labelledby="EditClassModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Edit Class Data</h4>
                        <button type="button" class="close" onclick="closeModal();">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <form method="post" class="form-group" autocomplete="off">
                                <div class="col-md-12 invalid1">
                                    <label for="Classname">Class Name:* </label>
                                    <input type="text" id="DataName" data-id="<?=$data['id']?>" value="<?=$data['Classname'] = $data['Classname'] ? $data['Classname'] : '' ;?>" class="form-control"  />
                                    <small class="help-block1"></small>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="closeModal();" style="margin-top:30px;">Close</button>
                            <button type="submit" class="btn btn-primary" onclick="submit();" style="margin-top:30px;margin-right:20px">Save Data</button>
                        </div>
                    </div>
                </div>
            </div>

<?php echo ob_get_clean(); ?>
<script>
 closeModal = () =>{
	jQuery('#EditClassModal').modal('hide');
	setTimeout(() => {
		jQuery('#EditClassModal').remove();
		jQuery('.modal-backdrop').remove();
	}, 0);
}

submit = () => {
    let id = $('#DataName').attr('data-id');
    let Classname = $('#DataName').val();
    let data = {'id':id, 'Classname': Classname};
    let stringify = JSON.stringify(data);
    $.ajax({
        type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
        dataType: 'JSON',
        contentType: "application/json; charset=utf-8",
        data: stringify, // our data object
        url: base_url+'Admin/saveEditClass', // the url where we want to POST
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
            $('#Classname').val("");
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
                $(".invalid1").addClass('has-error');
                $('#Classname').focus();
                $('.help-block1').show().html(response.message);
            } else {
                $(".invalid1").removeClass('has-error');
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
</script>