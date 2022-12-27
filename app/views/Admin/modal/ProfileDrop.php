<div class="dropdown d-flex">
    <a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
        <span class="avatar" style="background-image: url(<?=ASSETS?>assets/img/dp.jpg)"></span> <?=((isLoggedInAdmin())?'Administrator': 'No user');?>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="<?=ROOT?>Admin/Profile"><i class="dropdown-icon fe fe-user"></i> Profile</a>
        <a class="dropdown-item" href="<?=ROOT?>Admin/Setting"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
        <a class="dropdown-item" href="#">
            <span class="float-right">
                <span class="badge badge-primary">6</span>
            </span>
            <i class="dropdown-icon fe fe-mail"></i> Inbox
        </a>
        <a class="dropdown-item" href="javascript:void(0)">
            <i class="dropdown-icon fe fe-send"></i> Message
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?=ROOT?>PagesController/Logout">
            <i class="dropdown-icon fe fe-log-out"></i> Sign out
        </a>
    </div>
</div>