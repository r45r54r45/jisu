<?
require_once("../db/maria_db.php");

$user_id = $_POST['user_id'];
$post_id = $_POST['post_id'];
$content = $_POST['content'];

$result = make_reply($user_id, $post_id, $content);

if(strcmp($result, "Success") === 0){
    header("Location: ");
}
else{
    ?>
    <script>alert("댓글 달기 실패"); history.go(-1);</script>
    <?
}
?>