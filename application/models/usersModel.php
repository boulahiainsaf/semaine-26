<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class usersModel extends CI_Model
{
    public function user($login)
    {
        // Charge la librairie 'database'
        $this->load->database();

        // Exécute la requête
        $user = $this->db->query("SELECT us_login,us_password FROM users where us_login ='" . $login."'");

        // Récupération des résultats
        $auser = $user->result();
        return $auser;
    }
    }

