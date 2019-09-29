<?php
$config = require_once 'back/configs/dataBaseConfig.php';
require_once 'back/classes/DataBase.php';
$db = new back\classes\DataBase($config['dataBaseConfig']);

$selectForFurniture = $db->query("SELECT * FROM products_info WHERE type='​Furniture'");
$selectForBook = $db->query("SELECT * FROM products_info WHERE type='book'");
$selectForDvd = $db->query("SELECT * FROM products_info WHERE type='DVDdisc'");