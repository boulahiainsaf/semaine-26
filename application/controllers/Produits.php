<?php
// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller
{
//fonction pour afficher tous les produits :
    public function liste()
    {
        $this->load->model('ProduitsModel');
        $aListe = $this->ProduitsModel->ListeProduit();


        // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue
        $aView["liste_produits"] = $aListe;

        // Appel de la vue avec transmission du tableau
        $this->load->view('haed');
        $this->load->view('Liste', $aView);
        $this->load->view('footer');
    }

    //fonction pour afficher detail de produit:

    public function Detail()
    {
        $idd = $this->uri->segment(3);
        $this->load->model('ProduitsModel');
        $detP = $this->ProduitsModel->ProduitsDet($idd);
        $deVew["Produit_detail"] = $detP;
        $this->load->view('haed');
        $this->load->view('details', $deVew);
        $this->load->view('footer');
    }

//afficher un message de confirmation de supreddion
    public function verefDel()
    {
        $idd = $this->uri->segment(3);
        $this->load->model('ProduitsModel');
        $bpro = $this->ProduitsModel->ProduitsDet($idd);
        $apro['Det_pro'] = $bpro;

        $this->load->view('haed');
        $this->load->view('deletpro', $apro);
    }

    public function Deletepro()
    {
        $this->load->database();
        $idd = $this->uri->segment(3);
        $this->load->model('ProduitsModel');
        $bpro = $this->ProduitsModel->deleteProduits($idd);


        redirect("produits/liste");
    }


    public function Add()
    {
        $this->load->helper('form', 'url');
        $this->load->model('categoriesModel');
        $bListe = $this->categoriesModel->categoriepro();
        $bView['liste_categories'] = $bListe;
        $this->load->library('form_validation');
        if ($this->input->post())
        { // 2ème appel de la page: traitement du formulaire

            $data = $this->input->post();
            // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
            $this->form_validation->set_rules("pro_ref", "Référence", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("pro_libelle", "Nom du produit", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("pro_prix", "le prix du produit", "required|regex_match[/^\d+[.,]\d+$/]", array("required" => "Le %s doit être obligatoire et ne contient pas des lettres."));
            $this->form_validation->set_rules("pro_stock", "Quantité en stock", "required", array("required" => "Le %s doit être obligatoire."));

            if ($this->form_validation->run() == FALSE) { // Echec de la validation, on réaffiche la vue formulaire
                $this->load->view('haed');
                $this->load->view('Aajouter', $bView);
            } else { // La validation a réussi, nos valeurs sont bonnes, on peut insérer en base
                unset($data["fichier"]);
                unset($data["submit"]);
                $data["pro_d_ajout"] = date("Y-m-d");
                $this->load->model('ProduitsModel');
                $bListe = $this->ProduitsModel->insertProduits($data);
                redirect("produits/liste");
            }
        } else { // 1er appel de la page: affichage du formulaire
            $this->load->view('haed');
            $this->load->view('Aajouter',$bView);
            $this->load->view('footer');
        }

    }

    public function formModif()
    {
        $idd = $this->uri->segment(3);
        $this->load->model('ProduitsModel');
        $detP = $this->ProduitsModel->ProduitsDet($idd);
        $aView["Produit_detail"] = $detP;

        $this->load->model('categoriesModel');
        $aListe = $this->categoriesModel->categoriePro();
        $aView['liste_categories'] = $aListe;

        $this->load->view('haed');
        $this->load->view('update',$aView);
        $this->load->view('footer');
    }

    public  function  ModifPro()
    {
        $this->load->helper('form', 'url');
        $this->load->database();
        $idd = $this->uri->segment(3);
        $this->load->model('ProduitsModel');
        $bListe = $this->ProduitsModel->ProduitsDet($idd);
        $bpro['Produit_detail'] = $bListe;

        $this->load->model('categoriesModel');
        $aListe = $this->categoriesModel->categoriePro();
        $aView['liste_categories'] = $aListe;
        $this->load->library('form_validation');
        $data = $this->input->post();
        if ($this->input->post())
        { // 2ème appel de la page: traitement du formulaire

            $data = $this->input->post();
            // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
            $this->form_validation->set_rules("pro_ref", "Référence", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("pro_libelle", "Nom du produit", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("pro_prix", "le prix du produit", "required|regex_match[/^\d+[.,]\d+$/]", array("required" => "Le %s doit être obligatoire et ne contient pas des lettres."));
            $this->form_validation->set_rules("pro_stock", "Quantité en stock", "required", array("required" => "Le %s doit être obligatoire."));

            if ($this->form_validation->run() == FALSE) { // Echec de la validation, on réaffiche la vue formulaire
                $this->load->view('haed');
                $this->load->view('update', $aView);
            } else { // La validation a réussi, nos valeurs sont bonnes, on peut insérer en base
                unset($data["fichier"]);
                unset($data["submit"]);
                $data["pro_d_modif"] = date("Y-m-d H:i:s");
                $this->load->model('ProduitsModel');
                $bListe = $this->ProduitsModel->modifProduit($idd, $data);
                redirect("produits/liste");
            }
        }
            else
                { // 1er appel de la page: affichage du formulaire
                    var_dump($data);

}
    }
}