<?php
require_once("../config/session.php");
require_once("../db/maria_db.php");
require_once("../api/api_function.php");
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0"/>
    <title>Movit</title>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/materialize.min.css" media="screen, projection"/>
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">Logo</a>

 
        <ul class="right hide-on-med-and-down">
            <li>  
      
                <a class="chip" href="">
                <img src="/background1.jpg" alt="profile">Jane Doe
                </a>
            </li>
            <li>
                <a href="#">Logout</a>
            </li>


     

        </ul>

        <!-- Mobile Side Nav-->

        <ul id="nav-mobile" class="side-nav">
            <li><div class="userView">
                <div class="background">
                    <img src="/background2.jpg">
                </div>
      
                <a href="#!user"><img class="circle" src="/background1.jpg"></a>
                <a href="#!name"><span class="white-text name">John Doe</span></a>
                <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div></li>
    
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>


            <li>
                <!-- LogOut Button -->
                <a class="waves-effect waves-light btn" href="#">LogOut</a>
            </li>
        </ul>
        




        <a href="#" data-activates = "nav-mobile" class="button-collapse"><i class = "material-icons">menu</i></a>
    </div>
</nav>


