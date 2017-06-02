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
              <!-- Modal Trigger -->
                <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Login</a>
            </li>
     

        </ul>

        <!-- Mobile Side Nav-->

        <ul id="nav-mobile" class="side-nav">
            <li>
                <!-- Modal Trigger -->
                <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Login</a>
            </li>
        </ul>
        




        <a href="#" data-activates = "nav-mobile" class="button-collapse"><i class = "material-icons">menu</i></a>
    </div>
</nav>

<!-- Modal Structure (Log In) -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Modal Header</h4>
                <div class="row">
                    <form class = "col s12">
                        <div class="row modal-form-row">
                            <div class="input-field col s12">
                                <input id = "username" type="text" class="validate">
                                <label for="username">Username</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>

                            </div>

                        </div>
               
                        

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Log in</a>
            </div>
        </div>


<!-- Modal Structure (Sign Up)-->

        <div id="modal2" class="modal modal-fixed-footer">
            <div class = "modal-content">
                <h4>Sign Up</h4>
                <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
      
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col s12">
                            This is an inline input field:
                        <div class="input-field inline">
                            <input id="email" type="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>

            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Sign up</a>
            </div>
        </div>

    

