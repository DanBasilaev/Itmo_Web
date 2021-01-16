<?php

defined('BASEPATH') OR exit('No direc script access allowed');

class Sights extends My_Controller{

    /**
     * Sights constructor.
     */
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Sights_model');
    }

    public function sights(){

        $this->data['title'] ="Города";
        $this->data['sights_data'] = $this->Sights_model->getSight(false);


        $this->load->view('templates/header', $this->data);
        $this->load->view('sights/sights', $this->data);
        $this->load->view('templates/footer');
    }

    public function view($slug = null){

        $sights_slug = $this->Sights_model->getSight($slug);

        if (empty($sights_slug)){
            show_404();
        }

        $this->data['title'] =$sights_slug['tittle'];
        $this->data['description'] =$sights_slug['description'];
        $this->data['img'] =$sights_slug['poster'];
        $this->data['adres'] =$sights_slug['adres'];
        $this->data['map'] =$sights_slug['map'];


        $this->load->view('templates/header', $this->data);
        $this->load->view('sights/view', $this->data);
        $this->load->view('templates/footer');
    }
}