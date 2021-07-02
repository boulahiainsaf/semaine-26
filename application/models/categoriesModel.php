<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class categoriesModel extends CI_Model
{
    public function categoriepro(){
        $this->load->database();
        // Chargement de la librairie form_validation
        $results1 = $this->db->query("SELECT * FROM categories");
        $bListe = $results1->result();

        return $bListe;
    }
}
