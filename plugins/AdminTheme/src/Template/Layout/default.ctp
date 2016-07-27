<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title><?= $this->name ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <?= $this->fetch('meta'); ?>

    <?= $this->Html->css([
        'bootstrap.min.css',
        'animate.min.css', // Animation library for notifications
        'light-bootstrap-dashboard.css', //Light Bootstrap Table core CSS
        'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', // fonts and icons
        'http://fonts.googleapis.com/css?family=Roboto:400,700,300',
        'custom.css'
    ]); ?>

    <?= $this->fetch('css'); ?>
</head>
<body>
<div class="wrapper">
    <?= $this->element('sidebar'); ?>
    <div class="main-panel">
        <?= $this->element('topbar'); ?>
        <?= $this->fetch('content'); ?>
        <?= $this->element('footer'); ?>
    </div>
</div>
</body>

<?= $this->Html->script([
    'jquery-1.10.2.js',
    'bootstrap.min.js',
    'bootstrap-checkbox-radio-switch.js', // Checkbox, Radio & Switch Plugins
    'chartist.min.js', // Charts Plugin
    'bootstrap-notify.js', // Notifications Plugin
    'light-bootstrap-dashboard.js', // Light Bootstrap Table Core javascript and methods for Demo purpose
]); ?>

<?= $this->fetch('script'); ?>

</html>
