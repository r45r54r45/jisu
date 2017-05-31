<?php
// 이페이지에서는 데이터베이스에 관한 모든 연산을 수행한다
ini_set('display_errors', 1);
error_reporting(E_ALL);

$root_directory = "https://movit-iz000.c9users.io";

function pdo_sql_connect(){
    $movit_host = 'movit.crwpu2cl615x.ap-northeast-2.rds.amazonaws.com';
    $movit_dbname = 'movit';
    $movit_dbuser = 'movit';
    $movit_dbpass = '123123123';
	$conn = new PDO('mysql:host='.$movit_host.';dbname='.$movit_dbname.';charset=utf8', $movit_dbuser, $movit_dbpass);
	return $conn;
}


//포스트 만드는 함수
function make_post($user_id, $lat, $lng, $location_name, $movie_name, $director_name, $title, $content){
    try{
        $conn = pdo_sql_connect();
        $query = "INSERT INTO post (user_id, lat, lng, location_name, movie_name, director_name title, content) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute(array($user_id, $lat, $lng, $location_name, $movie_name, $director_name, $title, $content));
        if($result){
            return $conn->lastInsertId();
        }
        else{
            return "Fail";
        }
    }
    catch(PDOException $e){
        return "Fail : ".$e;
    }
}

function update_post_image($post_id, $post_img_url){
    try{
        $conn = pdo_sql_connect();
        $query = "UPDATE post SET post_img_url = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute(array($post_img_url, $post_id));
        if($result){
            return "Success";
        }
        else{
            return "Fail";
        }
    }
    catch(PDOException $e){
        return "Fail : ".$e;
    }
}

//댓글 입력하는 함수
function make_reply($user_id, $post_id, $content){
    try{
        $conn = pdo_sql_connect();
        $query = "INSERT INTO reply (user_id, post_id, content) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute(array($user_id, $post_id, $content));
        if($result){
            return "Success";
        }
        else{
            return "Fail";
        }
    }
    catch(PDOException $e){
        return "Fail : ".$e;
    }
}

//포스트 아이디로 포스트 가져오는 함수
function get_post($post_id){
    try{
        $conn = pdo_sql_connect();
        $query = "SELECT * FROM post WHERE id = ?";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute(array($post_id));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        return "Fail : ".$e;
    }
}

//영화 이름으로 포스트 가져오는 함수
function get_posts_by_moive_name($movie_name, $director){
    try{
        $conn = pdo_sql_connect();
        $query = "SELECT * FROM post WHERE movie_name = ? AND director_name = ?";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute(array($movie_name, $director));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        return "Fail : ".$e;
    }
}

//장소 이름으로 포스트들 가져오는 함수
function get_posts_by_location_name($location_name){
    try{
        $conn = pdo_sql_connect();
        $query = "SELECT * FROM post WHERE location_name = ?";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute(array($location_name));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        return "Fail : ".$e;
    }
}

//반경 distance 안에 있는 포스트들 가져오는 함수
function get_posts_by_boundary($lat, $lng, $distance){
    try{
        $conn = pdo_sql_connect();
        $query = "SELECT *,	
        (6371*acos(cos(radians(37))*cos( radians(?)) * cos( radians(?) - radians(127) ) + sin( radians(37) ) * sin( radians(?)))) AS distance
                FROM post HAVING distance <= ? ORDER BY distance LIMIT 0, 5";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute(array($lat, $lng, $lat, $distance));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        return "Fail : ".$e;
    }
}

//모든 포스트들을 가져오는 함수
function get_all_posts(){
    try{
        $conn = pdo_sql_connect();
        $query = "SELECT * FROM post";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute(array());
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        return "Fail : ".$e;
    }
}

//댓글들 가져오는 함수
function get_replies($post_id){
    try{
        $conn = pdo_sql_connect();
        $query = "SELECT * FROM reply WHERE post_id = ?";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute(array($post_id));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        return "Fail : ".$e;
    }
}


?>
