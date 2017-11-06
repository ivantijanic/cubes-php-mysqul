<?php


$link = mysqli_connect('127.0.0.1', 'cubes', 'cubes', 'cubesphp');

if ($link === FALSE){
    die ('MySQL Error: ' . mysqli_connect_error());
}

