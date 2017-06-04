<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->model('reply_model');
        $this->load->library('user_agent');
    }

    public function index()
    {
        $this->load->template($this->session, 'post/index');
    }

    public function watch($postId)
    {
        $data['post'] = $this->post_model->getPost($postId);
        $data['reply'] = $this->reply_model->getReplyByPost($postId);
        $this->load->template($this->session, 'post/index', $data);
    }

    public function reply($postId){
        $this->reply_model->newReply($this->input->post('content'), $postId, $this->session->id);
        if ($this->agent->is_referral())
        {
            redirect($this->agent->referrer());
        }
    }
}
