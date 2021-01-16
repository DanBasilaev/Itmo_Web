<?php

defined('BASEPATH') OR exit('No direc script access allowed');

class Main extends My_Controller{

    /**
     * Main constructor.
     */
    public function __construct()
    {
        parent:: __construct();
    }
    public function index(){
        $this->data['title'] ="Главнaя страница";

        $this->load->view('templates/header', $this->data);
        $this->load->view('main/index', $this->data);
        $this->load->view('templates/footer');
    }
}