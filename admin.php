<?php
session_start();
print_arr($_SESSION);

$employer = 'Радов';
$container_num = 'MRKU 1234567';
$container_line = 'MAERSK';
$container_gross_wt = 32500;
$container_tare_wt = 3880;
$container_pay = 28620;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>АДМИН</title>
    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="img/el.jpg" />
    <link rel="icon" type="image/x-icon" href="img/el.jpg" />
    <!-- [favicon] end -->


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/drova.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1>АДМИН-ПАНЕЛЬ<h1>
<h3>Данные загрузки<h3>
<?php if($container_num):?>
   <h4 style="color: white">
       Контейнер № <?=$container_num;?>
   </h4>
   <h4 style="color: white">
       Линия: <?=$container_line;?>
   </h4>
   <h4 style="color: white">
       Максимальный вес:        <?=$container_gross_wt;?> кг<br>
       Вес пустого контейнера:  <?=$container_tare_wt;?> кг<br>
       Максимальный вес груза:  <?=$container_pay;?> кг
   </h4>
   <h4 style="color: white">
       Грузил: <?=$employer;?>
   </h4>
<?php endif;?>


<table class="table table-res table-striped table-bordered">
    <tr class="tab-header">
        <th style="text-align: center;">№</th>
        <th style="text-align: center;">L</th>
        <th style="text-align: center;">D</th>
        <th style="text-align: center;">V</th>
        <th style="text-align: center;">Общий V</th>
    </tr>

    <?php
        $i = count($_SESSION['data']);
        if($i > 0):
        //$temp_arr = array_reverse($_SESSION['data']);
        $temp_arr = $_SESSION['data'];
        $totalV = 0;
        foreach($temp_arr as $data):?>
    <tr>
        <td><?=$i--;?></td>
        <td><?=$data['len'];?></td>
        <td><?=$data['diam'];?></td>
        <td><?=$data['val'];?></td>
        <td><?=$totalV += $data['val'];?></td>
    </tr>
    <?php endforeach; endif;?>

</table>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/drova.js"></script>
    <script>


    </script>

</body>
</html>