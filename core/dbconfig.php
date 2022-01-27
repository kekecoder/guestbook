<?php

try {
  $server = 'remotemysql.com';
  $dbname = '6V3DUWFCoy';
  $user = '6V3DUWFCoy';
  $pass = 'G4ZOUl2GLh';

    $pdo = new PDO("mysql:host=$server; dbname=$username; charset=utf8mb4;", $password, $db);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    print "connected successfully";
} catch (Error $e) {
    print "An Exception has occured " . $e->getMessage();
    print "Something went wrong, please try again later.";
}


