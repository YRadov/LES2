<?php
defined('LES') or die('Access denied');

session_start();
//unset ($_SESSION); session_destroy();

// подключение модели
require_once MODEL;

// подключение библиотеки функций
require_once FUNCTIONS;


//НАЧАЛО ДОБАВЛЕНИЯ БРЕВНА В БД
if($_POST['partia'])
{

    $new_log = [];
    $new_log = $_POST;
    //добавляем бревно в БД
    $add = addLog($new_log);

    //получение данных партии из бд и отправка приложению
    //getPartiaLogs($container_num);

    if($add) $message = "Данные приняты на сервере";
    else $message = "Данные не сохранены. Попробуйте еще раз.";

    $res = [];
    $res = [
        "message" => $message,
        "partia"  => $_SESSION['partia'],
    ];
    echo json_encode($res);
    exit;

}//КОНЕЦ ДОБАВЛЕНИЯ БРЕВНА В БД

//print_arr($_SERVER);

if($_SERVER['REQUEST_URI'] == '/admin')
    require_once 'admin.php';
else
    require_once 'index.html';