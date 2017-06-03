<?php
require_once("../db/maria_db.php");
require_once("../config/session.php");

$username = $_POST['username'];
$password = $_POST['password'];

$result = log_in($username, $password);
$result = json_decode($result, true);

if(count($result) !== 3){
    if(count($result) === 2){
        echo '{"result" : "fail", "error" : "'.$result[1].'"}';
    }
    else{
        echo '{"result" : "fail", "error" : "Username이나 Password가 잘못되었습니다"}';
    }
}
else{
    $_SESSION['id'] = $result['id'];
    $_SESSION['username'] = $result['username'];
    $_SESSION['profile_img_url'] = $result['profile_img_url'];
    echo '{"result" : "success"}';
}
?>