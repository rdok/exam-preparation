<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= $this->url('css/bootstrap.min.css') ?>">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <?php $this->render('_partials.navigation'); ?>

    <?php $this->render('_partials.notifications'); ?>

    <?php $this->content(); ?>
</div>

<script src="<?= $this->url('js/jquery-1.12.2.min.js') ?>"></script>
<script src="<?= $this->url('js/bootstrap.min.js') ?>"></script>
<script>
    $(document).ready(function () {
        $(".req").hide();
    });
</script>
</body>
</html>