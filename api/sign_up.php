<?php
require_once("../db/maria_db.php");

$username = $_POST['username'];
$password = $_POST['password'];

$result = sign_up($username, $password);

if(strcmp($result, "Fail") === 0){
    echo '{"result" : "fail"}';
}
else{
    if(count($result) !== 1){
        echo '{"result" : "fail"}';
    }
    else{
        $_SESSION['id'] = $result['id'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['profile_img_url'] = $result['profile_img_url'];
        echo '{"result" : "success"}';
    }
}
?>