<?php

class My_Controller extends CI_Controller{

    /**
     * My_Controller constructor.
     */
    public function __construct()
    {
        parent:: __construct();

        $this->data['title'] = "Киномонстр";

        $this->load->model('rating_model');
        $this->data['rating'] = $this->rating_model->getRating(3);
    }
}
