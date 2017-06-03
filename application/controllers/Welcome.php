<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        $this->load->template($this->session, $this->session->logined ? 'index/logined_index_page' : 'index/not_logined_index_page');
    }
}
