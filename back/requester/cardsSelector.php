<?php
/**
 * require all need file
 */
$config = require_once 'back/configs/dataBaseConfig.php';
require_once 'back/classes/DataBase.php';
$db = new back\classes\DataBase($config['dataBaseConfig']);
/**
 * select all card for product
 */

$selectAllCard = $db->query("SELECT * FROM products_info");
