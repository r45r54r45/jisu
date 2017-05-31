<?php
require_once("../config/session.php");
require_once("../db/maria_db.php");
require_once("../api/api_function.php");
?>
<html>

<head>
    <title>TEST
    </title>
    <style>
        nav {
            height: 50px;
            background: #4bf;
        }
    </style>
</head>
<body>
<nav>
    header
    <?php
    if (!isset($_SESSION['id'])) {
        ?>
        <span>USER IS NOT LOGINED</span>
        <?php
    }
    ?>
</nav>
