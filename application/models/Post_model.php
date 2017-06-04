<?php



class Post_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getPostsByMovie($movie_id)
    {
        return $this->db->get_where('post', ['movie_id' => $movie_id])->result_array();
    }
    public function getPostsByLoc($lat, $lng)
    {
        $this->db->select('post.id as post_id, post.*, movie.*');
        $this->db->join('movie', 'movie.id = post.movie_id');
        return $this->db->get_where('post', 'distance('.$lat.', '.$lng.', post.lat, post.lng) < 100')->result_array();
    }
    public function getPost($post_id)
    {
        $this->db->select('post.*, post.id as post_id, user.username, movie.*');
        $this->db->join('user', 'user.id = post.user_id');
        $this->db->join('movie', 'movie.id = post.movie_id');
        return $this->db->get_where('post', ['post.id' => $post_id])->result_array()[0];
    }
    public function addPost($user_id, $post_img_url, $lat, $lng, $location_name, $movie_id, $title, $content){
        $this->db->insert('post', [
            'user_id' => $user_id,
            'content' => $content,
            'movie_id' => $movie_id,
            'post_img_url' => $post_img_url,
            'lat' => $lat,
            'lng'=>$lng,
            'location_name' => $location_name,
            'title' => $title
        ]);
        return $this->db->insert_id();
    }
}
