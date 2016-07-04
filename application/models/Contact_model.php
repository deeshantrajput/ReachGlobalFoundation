<?php

class Contact_model extends CI_Model {

     function __construct() {
        parent::__construct();
    }

    function form_insert($data) 
    {
        $this->db->insert('contact', $data);
    }
     function Sponsor_Child($data) 
    {
        $this->db->insert('Sponsor', $data);
    }

}
