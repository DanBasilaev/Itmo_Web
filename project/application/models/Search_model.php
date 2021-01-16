<?php
class Search_model extends CI_Model {

    public function search_city($q){
        $array_search = array('tittle' => $q);

        $query = $this->db
            ->or_like($array_search)
            ->limit(50)
            ->get('city');


        return $query->result_array();
    }

    public function search_sight($q){
        $array_search = array('tittle' => $q);

        $query = $this->db
            ->or_like($array_search)
            ->limit(50)
            ->get('rating');


        return $query->result_array();
    }

}