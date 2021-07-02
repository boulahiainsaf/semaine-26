<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class produitsModel extends CI_Model
{
    public function ListeProduit()
        {
            // Charge la librairie 'database'
            $this->load->database();

            // Exécute la requête
            $produits = $this->db->query("SELECT * FROM produits ");

            // Récupération des résultats
            $aListe = $produits->result();
            return $aListe;
        }

    public function ProduitsDet($id){
        $this->load->helper('form', 'url');
        // Charge la librairie 'database'
        // Charge la librairie 'database'
        $this->load->database();

        // Exécute la requête
        $results = $this->db->query("SELECT * FROM produits JOIN categories ON produits.pro_cat_id=categories.cat_id  where pro_id =".$id);

        // Récupération des résultats
        $aListe = $results->result();
        return $aListe;
    }

    public function  insertProduits($data){
        $this->db->insert('produits', $data);
    }

    public function  deleteProduits($id){

        $this->db->where('pro_id', $id);
        $this->db->delete('produits');
    }

    public function  modifProduit($id,$data){
        $this->db->where('pro_id', $id);
        $this->db->update('produits', $data);
    }
}

