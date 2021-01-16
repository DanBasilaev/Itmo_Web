<?php
class Experience_model extends CI_Model {

    /**
     * Experience_model constructor.
     */
    public function __construct()
    {
        $this->load->database();
    }

    public function getComments(){
        $query = $this->db
            ->get('comments');
        return $query->result_array();
    }

}