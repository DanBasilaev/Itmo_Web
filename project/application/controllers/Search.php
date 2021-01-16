<?php

defined('BASEPATH') OR exit('No direc script access allowed');

class Search extends My_Controller{

    /**
     * Search constructor.
     */
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Search_model');
    }
    public function index(){
        $this->data['title'] ="Поиск";
        $this->data['search_result_city'] = array();
        $this->data['search_result_sight'] = array();

        if ($this->input->get('search_field')){
            $this->data['search_result_city'] = $this->Search_model->search_city($this->input->get('search_field'));
            $this->data['search_result_sight'] = $this->Search_model->search_sight($this->input->get('search_field'));
        }


        $this->load->view('templates/header', $this->data);
        $this->load->view('search', $this->data);
        $this->load->view('templates/footer');
    }
}