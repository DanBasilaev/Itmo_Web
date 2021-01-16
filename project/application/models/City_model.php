<?php

class city_model extends CI_Model {

    /**
     * City_model constructor.
     */
    public function __construct()
    {
        $this->load->database();
    }

    public function getCity($slug = false){

        if ($slug === false){
            $query = $this->db
                ->get('city');

            return $query->result_array();
        }
        $query = $this->db
            ->get_where('city', array('slug' => $slug));

        return $query->row_array();
    }
}