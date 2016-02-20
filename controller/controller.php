<?php
defined('LES') or die('Access denied');

session_start();
//unset ($_SESSION); session_destroy();

// подключение модели
require_once MODEL;

// подключение библиотеки функций
require_once FUNCTIONS;

if($_POST['log_num'])
{
    $num = $_POST['log_num'];
    $_SESSION['data'][$num] = [
        'len'=>$_POST['log_len'],
        'diam'=>$_POST['log_diam'],
        'val'=>$_POST['log_val']
    ];

    $_SESSION['last_name'] = '';
    $_SESSION['container'] = '';

    $num = $_POST['log_num'];
    $diam = $_POST['log_diam'];
    $val = $_POST['log_val'];
    $len = $_POST['log_val'];


    $message = "Данные приняты на сервере";
    $res = [];
    $res = [
        "message" => $message,
    ];
    echo json_encode($res);
    exit;
}

require_once 'index.html';