<?php
defined('LES') or die('Access denied');

session_start();
//unset ($_SESSION); session_destroy();

// подключение модели
require_once MODEL;

// подключение библиотеки функций
require_once FUNCTIONS;

//НАЧАЛО ДАННЫЕ КОНТЕЙНЕРА В БД
/**
 * Все данные контейнера поместить в бд
 * (перед этим проверить, что он unique)
 * в приложение вернуть его id в базе
 * к каждому бревну добавлять id контейнера
 */
if($_POST['cont_data'])
{

}
//КОНЕЦ ДАННЫЕ КОНТЕЙНЕРА В БД


//НАЧАЛО ДОБАВЛЕНИЯ БРЕВНА В БД
if($_POST['partia'])
{

    $new_log = [];
    $new_log = $_POST;
    //добавляем бревно в БД
    $add = addLog($new_log);

    //получение данных партии из бд и отправка приложению
    //(сейчас данные находятся в сессии)
    //$partia = [];
    //$partia = getPartiaLogs($container_num);

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


//НАЧАЛО УДАЛЕНИЯ БРЕВНА ИЗ ТАБЛИЦЫ
if($_POST['del_one'])
{
    /**
     * удатить последний элемент из бд
     * согласно номера контейнера и даты
     * или номера загрузки
     */

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

}//КОНЕЦ УДАЛЕНИЯ БРЕВНА ИЗ ТАБЛИЦЫ


//print_arr($_SERVER);

if($_SERVER['REQUEST_URI'] == '/admin')
    require_once 'admin.php';
else
    require_once 'index.html';