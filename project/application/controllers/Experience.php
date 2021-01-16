<?php

defined('BASEPATH') OR exit('No direc script access allowed');

class Experience extends My_Controller{

    /**
     * Experience constructor.
     */
    public function __construct()
    {
        parent:: __construct();
    }
    public function index(){
        $this->data['title'] ="Впечатления";
        $this->load->model('Experience_model');
        $this->data['comments'] = $this->Experience_model->getComments();

        $this->load->view('templates/header', $this->data);
        $this->load->view('experience', $this->data);
        $this->load->view('templates/footer');
    }
}