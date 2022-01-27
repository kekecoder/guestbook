<?php

try {
  $url = parse_url(getenv("mysql://b442a4f3a7b6b1:f8c1776a@us-cdbr-east-05.cleardb.net/heroku_dc3cd6ea7276ac9?reconnect=true"));
  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"], 1);
  //$char = 'charset=utf8mb4';

$pdo = new PDO($server, $username, $password, $db);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    print "connected successfully";
} catch (Error $e) {
    print "An Exception has occured " . $e->getMessage() . '<br>';
    print "Something went wrong, please try again later.";
}



