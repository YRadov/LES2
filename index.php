<?php
header("Content-Type: text/html; charset=utf-8");

// запрет прямого обращения
define('LES', TRUE);

// подключение файла конфигурации
require_once 'config.php';

// подключение контроллера
require_once CONTROLLER;
