<?php
/**
 * crating array config which have all parameters for connecting
 * including class data
 * creating object and connecting to database automatic
 *
 */
$config = require_once '../configs/dataBaseConfig.php';
require_once '../classes/DataBase.php';
$db = new back\classes\DataBase($config['dataBaseConfig']);

/**
 * checks input to make safer
 * @param $input
 * @return mixed
 */

function secured($input)
{
    htmlspecialchars($input);
    strip_tags($input);
    htmlentities($input);
    return $input;
}


if (!empty($_POST['sku'])) {
    $sku= secured($_POST['sku']);
}

if (!empty($_POST['name'])) {
    $name= secured($_POST['name']);
}

if (!empty($_POST['price'])) {
    $Price= secured($_POST['price']);

}

if (!empty($_POST['typeSelect'])) {
    $typeSelect= secured($_POST['typeSelect']);
}

if ('DVDdisc' === $typeSelect) {
    $size= secured($_POST['size']);
}
if ('Book' === $typeSelect) {
    $wight= secured($_POST['weight']);
}
if ('​Furniture' === $typeSelect) {
    $height= secured($_POST['height']);
    $width= secured($_POST['width']);
    $length= secured($_POST['length']);
}

/**
 * sending query in db
 * (use class DataBase)
 * if we have not value its would be null
 */
$sent = $db->query("INSERT INTO products_info (sku, name, price, type, size, weight,height,width,length)
     VALUES (:sku, :name, :price,:type,:size,:weight,:height,:width,:length)",[
    'sku' => $sku,
    'name' => $name,
    'price' => $Price,
    'type' => $typeSelect,
    'size' => $size,
    'weight' => $wight,
    'height' => $height,
    'width' => $width,
    'length' => $length,
]);

