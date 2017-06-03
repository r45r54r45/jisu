<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends CI_Controller
{
    public function index()
    {
        $this->load->template($this->session, 'movie/index');
    }
}
