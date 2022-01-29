<?php
ini_set('display_errors', 1);
try {
  $url = getenv('JAWSDB_MARIA_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');
    $pdo = new PDO("mysql:host=$hostname; dbname=$username;", $database, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    print "connected successfully";
} catch (Error $e) {
    print "An Exception has occured " . $e->getMessage();
    print "Something went wrong, please try again later.";
}



