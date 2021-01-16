<?php

class Sights_model extends CI_Model {

    /**
     * Sights_model constructor.
     */
    public function __construct()
    {
        $this->load->database();
    }

    public function getSight($slug = false){

        if ($slug === false){
            $query = $this->db
                ->get('rating');

            return $query->result_array();
        }
        $query = $this->db
            ->get_where('rating', array('slug' => $slug));

        return $query->row_array();
    }
}