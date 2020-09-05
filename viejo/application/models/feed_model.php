<?php
class Feed_model extends CI_Model { 

  public function construct() {
        parent::__construct();
    }
 
    public function get_feeds() {
    	
        $query = $this->db->get('topic');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        }
    }



}