<?php
defined('LES') or die('Access denied');
//**********************************************************************************
/**
 * Пример использования MySQLi
 */
//$res = $mysqli->query("SELECT 'choices to please everybody.' AS _msg FROM DUAL");
//$row = $res->fetch_assoc();
//echo $row['_msg'];
/**
 * Подготовленные запросы
 */
//$sql = "INSERT INTO users(name, email, age) VALUES(?, ?, ?)";
//// Уважаемый сервер, вот запрос - разбери его
//$stmt = mysqli_prepare($link, $sql);
//// Уважаемый сервер, вот параметры для запроса
//mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $age);
//// А теперь, исполни подготовленный запрос с переданными
//параметрами
//mysqli_stmt_execute($stmt);
//mysqli_stmt_close($stmt);
//$query = "INSERT INTO yuradov_orders (`customer_id`, `date`,`total_sum`, `dostavka_id`, `coment`)
//                VALUES ($customer_id, NOW(),$total_sum, $dostavka_id, '$coment')";
//**********************************************************************************

//Запись нового бревна в БД
function addLog($log)
{
    $employer = 'Радов';
    $container_num = 1234567;
    $container_line = 'MAERSK';
    $container_gross_wt = 32500;
    $container_tare_wt = 3880;
    $container_pay = 28620;

    $_SESSION['partia'] = $log['partia'];
    $_SESSION['last_name'] = '';
    $_SESSION['container'] = '';

    return true;
}
//**********************************************************************************
