<style>
    #uni_modal .modal-footer{
        display:none;
    }
</style>
<div class="container-fluid">
    <dl>
        <dt class="text-muted">Course Name:-</dt>
        <dd class="pl-3"><?=$data['examName']?></dd>
        <dt class="text-muted">Application Category:-</dt>
        <dd class="pl-3"><?=$data['ApplicationName']?></dd>
        <dt class="text-muted">Description</dt>
        <dd class="pl-3"><small>Suspendisse eget arcu iaculis, blandit erat aliquet, 
        scelerisque risus. Cras consectetur purus vitae sagittis varius. Sed vitae felis dolor. 
        Duis eu congue diam. Vestibulum consequat erat et lacinia dictum. Cras eu sollicitudin justo. 
        Vivamus congue enim et arcu sagittis, vitae tempus mi ullamcorper. 
        Aenean sed justo eget ante mollis vehicula mattis vel orci. Duis eu est mi.</small></dd>
        <dt class="text-muted">Total Number Of Exam</dt>
        <dd class="pl-3"><b><?=$data['isCount']?></b></dd><hr/>
        <dt class="text-muted">Total Score</dt>
        <dd class="pl-3">
            <span class="badge"><?=$data['isHighScore']?></span>
        </dd>
    </dl>
    <div class="clear-fix my-2"></div>
    <div class="text-right">
        <a class="btn btn-success border btn-flat btn-sm" 
            href="<?=ROOT?>Student/Examination?id=<?=$data['examid']?>" target="_blank">
            <i class="fa fa-external-link-alt"></i>Take Exam</a>
        <button class="btn btn-danger btn-flat btn-sm" type="button" data-dismiss="modal">
            <i class="fa fa-times"></i>Close
        </button>
    </div>
</div>