<?php
class Login_model extends CI_Model{
    //cek nip dan password dosen
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM users WHERE idrole='$idrole' ");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_operator($username,$password){
        $query=$this->db->query("SELECT * FROM users WHERE idrole='$idrole' ");
        return $query;
    }
 
}