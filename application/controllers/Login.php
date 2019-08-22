<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('user');
    }
    function index(){
        $this->load->view('login/index');
    }

    function cek_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = $this->user->findUser($username);
        if($data->num_rows() > 0){
            $user = $data->row();
            if(password_verify($password,$user->password)){
                $data_user = array(
                    'username'  => $user->username,
                    'role'      => $user->role,
                    'image'     => $user->image
                );
                 $this->session->set_userdata($data_user);
                 redirect('login/cek_session');
            }else{
                $this->session->set_flashdata('msg', 'Password Salah');
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('msg', 'username atau email tidak terdaftar');
           
        }
    }

    function cek_session(){
        if($this->session->userdata('role') === '1'){
            echo 'admin';
            //$this->load->view('');
        }else if($this->session->userdata('role') === '2'){
            echo 'member';
            //$this->load->view('');
        }else{
            redirect('login');
        }
    }

}
