<?php

class rating_model extends CI_Model {

    /**
     * rating_model constructor.
     */
    public function __construct()
    {
        $this->load->database();
    }

    public function getRating($limit){
        $query = $this->db
            ->limit($limit)
            ->get('rating');

        return $query->result_array();
    }
}