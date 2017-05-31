<?
require_once("../db/maria_db.php");

$user_id = $_POST['user_id'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$location_name = $_POST['location_name'];
$movie_name = $_POST['movie_name'];
$director_name = $_POST['director_name'];
$title = $_POST['title'];
$content = $_POST['content'];

$post_id = make_post($user_id, $lat, $lng, $location_name, $movie_name, $director_name, $title, $content);

$dir = "../post_images/$post_id"; // 파일 업로드 경로
$files = reArrayFiles($_FILES['image']); // 파일 배열 정리
$oldmask = umask(0); // 잠깐 umask 변경
mkdir($dir, 0777);
umask($oldmask); // umask 원래로 복구
if(is_dir($dir)){
    if(strpos( $files[0]['type'], 'image' ) === false){
        //이미지 파일이 아니면 넘어감
        continue;
    }

    //임시파일을 경로로 이동시키고 경로를 배열에 저장함
    //파일 이름은 uniqid함수를 통해 임의로 생성
    $uniqid = uniqid("image_");
    $ext = pathinfo($files[0]['name'], PATHINFO_EXTENSION);
    move_uploaded_file($files[0]['tmp_name'], "$dir/$uniqid.$ext");
    update_post_image($post_id, "$root_directory/post_images/$post_id/$uniqid.$ext");
    header("Location: ");
}
else{
    ?>
    <script>alert("파일 업로드 실패 : 경로 생성 불가"); history.go(-1);</script>
    <?
}

function reArrayFiles(&$file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}
?>