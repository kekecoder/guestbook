<?php

try {
  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"], true);
  //$char = 'charset=utf8mb4';

$pdo = new PDO($server, $username, $password, $db);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    print "connected successfully";
} catch (Error $e) {
    print "An Exception has occured " . $e->getMessage() . '<br>';
    print "Something went wrong, please try again later.";
}



