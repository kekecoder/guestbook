<?php

try {
    $pdo = new PDO('mysql:host=us-cdbr-east-05.cleardb.net; port=3306; dbname=heroku_dc3cd6ea7276ac9?reconnect=true; charset=utf8mb4;', 'b442a4f3a7b6b1', 'f8c1776a');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    print "connected successfully";
} catch (Error $e) {
    //print "An Exception has occured " . $e->getMessage();
    print "Something went wrong, please try again later.";
}


