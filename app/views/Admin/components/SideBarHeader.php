<div class="user-panel">
    <div class="pull-left image">
        <img src="<?=ASSETS?>admin/assets/dist/img/usersys-min.png" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p><?=((isLoggedInAdmin())?'Administrator': 'No User');?></p>
        <small><?=((isset($_SESSION['adminExmail']))?'Admin':'')?></small>
    </div>
</div>