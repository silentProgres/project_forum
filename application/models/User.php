<?php

class User extends CI_Model{
    function getUser(){
        return $this->db->get('user');
    }

    function findUser($username){
        $this->db->where('username',$username);
        $this->db->or_where('email',$username);
        return $this->db->get('user');
    }
}