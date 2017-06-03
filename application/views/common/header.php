<?php
if ($logined) {
    ?>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0"/>
        <title>Movit</title>

        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/static/css/materialize.min.css" media="screen, projection"/>
        <link href="/static/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    </head>
    <body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li>

                    <a class="chip" href="">
                        <img src="/static/image/background1.jpg" alt="profile">Jane Doe
                    </a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>
            <!-- Mobile Side Nav-->
            <ul id="nav-mobile" class="side-nav">
                <li>
                    <div class="userView">
                        <div class="background">
                            <img src="/static/image/background2.jpg">
                        </div>
                        <a href="#!user"><img class="circle" src="<?php echo $userData->profile_img_url?>"></a>
                        <a href="#!name"><span class="white-text name"><?php echo $userData->username?></span></a>
                        <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                    </div>
                </li>
                <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                <li><a href="#!">Second Link</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="subheader">Subheader</a></li>
                <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
                <li>
                    <!-- LogOut Button -->
                    <a class="waves-effect waves-light btn" href="/api/logout">LogOut</a>
                </li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <?php
} else {
    ?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0"/>
        <title>Movit</title>

        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/static/css/materialize.min.css" media="screen, projection"/>
        <link href="/static/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <!-- Modal Structure (Log In) -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <div class="row">
                <form class="col s12" id="loginForm" action="/api/login" method="post">
                    <div class="row modal-form-row">
                        <div class="input-field col s12">
                            <input id="username" type="text" class="validate" name="username">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit"  form="loginForm" class="modal-action modal-close waves-effect waves-green btn-flat ">Log in</button>
        </div>
    </div>

    <?php
}
?>