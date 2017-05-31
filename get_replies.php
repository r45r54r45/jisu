<?php
require_once("maria_db.php");

$post_id = $_POST['post_id'];

$result = get_replies($post_id);

echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>