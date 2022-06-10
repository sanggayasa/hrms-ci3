<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model{
    public function verification($username, $password)
    {   
        // var_dump($username, $password);
         
         $this->db->where('username', $username);
         $this->db->where('password', $password);
         $query = $this->db->get('user');
         return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }
}