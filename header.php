<?php
require_once("session.php");
require_once("maria_db.php");
require_once("api_function.php");

if(!isset($_SESSION['id'])){
    header("Location: main.php");
    die();
}
?>