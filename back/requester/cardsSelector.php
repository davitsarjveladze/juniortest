<?php
$config = require_once 'back/configs/dataBaseConfig.php';
require_once 'back/classes/DataBase.php';
$db = new back\classes\DataBase($config['dataBaseConfig']);

$selectAllCards = $db->query("SELECT * FROM products_info ");