<?php

$link = mysqli_connect('127.0.0.1', 'cubes', 'cubes', 'cubesphp');

if ($link === FALSE){
    die ('MySQL Error: ' . mysqli_connect_error());
}
//Ulazni parametar
$categoryId = $_GET['category_id'];

//

$query = "SELECT * FROM products WHERE category_id = '" . mysqli_real_escape_string($link, $categoryId) . "' ORDER BY price DESC";

die($query);

$result = mysqli_query($link, 'SELECT * FROM `products` WHERE category_id = ' . $categoryId . ' ORDER BY price DESC');

if ($result === FALSE){
    die('MySQL Error: ' . mysqli_error($link));
}



$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($products);
