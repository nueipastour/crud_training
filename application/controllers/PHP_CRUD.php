<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PHP_CRUD extends CI_Controller {

    public function index()
    {
        $this->load->view('phpcrud');
    }
}