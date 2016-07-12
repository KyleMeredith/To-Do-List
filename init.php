<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO("mysql:dbname=to do;host=127.0.0.1", "root");

if(!isset($_SESSION['user_id'])){
    die('You are not signed in.');
}
