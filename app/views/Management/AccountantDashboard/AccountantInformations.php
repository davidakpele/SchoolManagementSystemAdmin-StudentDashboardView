<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- icons -->
	<link href="<?=ASSETS?>fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=ASSETS?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=ASSETS?>fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="<?=ASSETS?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- full calendar -->
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach ($data['runStatment'] as $key): ?>
                <?=$key['Surname'];?><br/>
                <?=$key['Middel__name'];?><br/>
                <?=$key['Othername'];?><br />
                <?=$key['Email'];?><br />
                <?=$key['Telephone_No'];?><br />
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>