<?php

function search_movie($movie_name){
    $client_id = "vfB2ILfkGdh1vk2DgPG5";
    $client_secret = "OTfkB6_Z2n";
    $encText = urlencode($movie_name);
    $url = "https://openapi.naver.com/v1/search/movie.json?query=".$encText; // json 결과
    $is_post = false;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, $is_post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $headers = array();
    $headers[] = "X-Naver-Client-Id: ".$client_id;
    $headers[] = "X-Naver-Client-Secret: ".$client_secret;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($status_code == 200) {
      return $response;
    } 
    else {
      return "Error 내용:".$response;
    }
}


?>