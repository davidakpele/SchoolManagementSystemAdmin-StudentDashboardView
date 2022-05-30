<?php ob_start(); ?>
<div class="modal fada" id="EventModal" tabindex="-1" role="dialog" aria-labelledby="___AppointmentProfessorModal" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" style="border:3px solid red">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title w-100" style="color:#000; font-weight:400">Tutor Marked Assignment 1 (TMA) Closes</h4>
                <span class="pull-right" onclick="closeModal();" style="color:gray"><i class="fa fa-remove" ></i></span>
            </div>
		    <!-- Modal body -->
            <div class="modal-body" id="togglebody">
            <!-- Display a bootstrap tabs form -->
                <div class="page-content page-container" id="page-content">
                    <div class="f-1">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-xs-10 col-lg-10">
                                <div class="row" style="font-size:20px; display:flex">
                                    <div class="col-md-1">
                                       <i class="fa fa-clock"></i>
                                    </div>
                                     <div class="col-md-11">
                                       <span class="s-time">Saturday, 4 June, 11:59 PM</span>
                                    </div>
                                    <div class="col-md-1">
                                       <i class="fa fa-calendar"></i>
                                    </div>
                                     <div class="col-md-11">
                                        <span class="s-time">Course event</span>
                                    </div>
                                    <div class="col-md-1">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                     <div class="col-md-11">
                                        <span class="s-time">Click on Attempt TMA Now to begin the TMA</span>
                                    </div>
                                    <div class="col-md-1">
                                        <i class="fa fa-home"></i>
                                    </div>
                                     <div class="col-md-11">
                                       <span class="s-time">Fundamentals of Peace Studies and C (GST202_22) </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="modal-footer flex" style="display:flex">
              <a href="#">Go to activity</a>
          </div>
        </div>
	</div>
</div>
<script>
closeModal = () =>{
	jQuery('#EventModal').modal('hide');
	setTimeout(() => {
		jQuery('#EventModal').remove();
		jQuery('.modal-backdrop').remove();
	}, 300);
}
</script>
<?php echo ob_get_clean(); ?>