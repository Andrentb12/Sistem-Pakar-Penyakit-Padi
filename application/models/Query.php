<?php

class Query extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function _func($query){
        $query = $this->db->query($query);
        if($this->db->error()['code']!=""){
            return ($this->db->error());
        }
        return $query->result_array();

    }
    function _proc($query){
        $query = $this->db->query($query);
        if ($this->db->error()['code']!=""){
            return false;
        }
        return true;
    }
}
?>