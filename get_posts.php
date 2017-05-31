<?php
require_once("maria_db.php");

$type = $_POST['type']; // 0 : post_id, 1 : movie_name, director_name, 2: location_name, 3: distance, 4: all posts

$result;
if($type === 0){
    $result = get_post($_POST['post_id']);
}
else if($type === 1){
    $result = get_posts_by_moive_name($_POST['movie_name'], $_POST['director_name']);
}
else if($type === 2){
    $result = get_posts_by_location_name($_POST['location_name']);
}
else if($type === 3){
    $result = get_posts_by_boundary($_POST['lat'], $_POST['lng'], $_POST['distance']);
}
else{
    $result = get_all_posts();
}
echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>