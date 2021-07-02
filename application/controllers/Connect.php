<?php
// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Connect extends CI_Controller
{


//fonction pour afficher tous les produits :
    public function verefConnect()
    {

        $this->load->helper('form', 'url');

        $this->load->library('form_validation');
        session_start();

        $login = $this->session->set_userdata('login', $this->input->post('login'));
        $password = $this->session->set_userdata('password', $this->input->post('password'));
        $this->load->model('usersModel');
        $auser = $this->userssModel->user($login);
        $buser ['user'] = $auser;
        if (!empty($log) && !empty($password)) {
            echo ok;
        } else {
            echo no;
        }
    }
}