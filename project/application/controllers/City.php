<?php

defined('BASEPATH') OR exit('No direc script access allowed');

class City extends My_Controller{

    /**
     * City constructor.
     */
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('city_model');
    }

    public function city(){

        $this->data['title'] ="Города";
        $this->data['city_data'] = $this->city_model->getCity(false);


        $this->load->view('templates/header', $this->data);
        $this->load->view('city/city', $this->data);
        $this->load->view('templates/footer');
    }

    public function view($slug = null){


        $city_slug = $this->city_model->getCity($slug);

        if (empty($city_slug)){
            show_404();
        }

        $this->data['title'] =$city_slug['tittle'];
        $this->data['description'] =$city_slug['description'];
        $this->data['img'] =$city_slug['poster'];


        $this->load->view('templates/header', $this->data);
        $this->load->view('city/view', $this->data);
        $this->load->view('templates/footer');
    }
}