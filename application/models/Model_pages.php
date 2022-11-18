<?php 
class Model_pages extends CI_model{
    function pages(){
        return $this->db->query("SELECT * FROM `halamanstatis` where lower(replace(judul,' ','-'))='$ids'");
    }

    
}