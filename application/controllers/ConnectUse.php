<?php
// application/controllers/ConnectUse.php

defined('BASEPATH') OR exit('No direct script access allowed');

class ConnectUse extends CI_Controller
{

    public function verefconnexion()
    {

        $this->load->helper('form', 'url');


        $this->load->library('form_validation');

        $this->form_validation->set_rules("login", "Référence", "required", array("required" => "Le %s doit être obligatoire."));
        $this->form_validation->set_rules("password", "Nom du produit", "required", array("required" => "Le %s doit être obligatoire."));

        if($this->form_validation->run()){
            $login=$this->input->post('login');
            $password=$this->input->post('password');
            $this->load->model('usersModel');
            $bListe = $this->usersModel->user($login);
            $auser["user"]=$bListe;
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            var_dump($auser);
            if ($auser!=null){
                if(password_verify($password, $auser['user']->us_password)){

                }else

            }
        }else{
            $this->load->view('haed');
            $this->load->view('connexion');
            $this->load->view('footer');
        }
    }
    public function PageConnect()
    {
        $this->load->helper('form', 'url');
        $this->load->view('haed');
        $this->load->view('connexion');
        $this->load->view('footer');

    }


    public function Contactt()
    {
        $this->load->view('haed');
        $this->load->view('contact');
        $this->load->view('footer');

    }

    public function acceuil()
    {
        $this->load->view('haed');
        $this->load->view('acceuil');
        $this->load->view('footer');

    }


    public function Connect_us()
    {
        $us_nom = $this->input->post('login');
        $us_password = $this->input->post('password');
        $this->load->model('ConnectModel');
        $bListe = $this->ConnectModel->Connect($us_nom);
        $bView['liste_categories'] = $bListe;
        $this->session->set_userdata('us_nom', "$us_nom");
        $this->session->set_userdata('password', "$us_password");
    }

    public function deconnect()
    {
        $this->load->view('haed');
        $this->load->view('deconnect');
        $this->load->view('footer');

    }



    public function inscri()
    {
        $this->load->view('haed');
        $this->load->view('inscription');
        $this->load->view('footer');

    }


}