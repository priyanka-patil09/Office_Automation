<?php
  class Login_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  

      public function insert($model)
      {
        return $this->db->insert('login',$model);
      } 
     
      
      
}