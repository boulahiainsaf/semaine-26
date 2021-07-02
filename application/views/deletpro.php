<?php
foreach ($Det_pro as $row) {
    echo '

<div class="d-flex justify-content-center">
    <img src="' . base_url() . 'assets/images/' . $row->pro_id . '.' . $row->pro_photo . '"width="300"/><br>
</div >
<h1 class="d-flex justify-content-center" >Ëtes vous sûr de vouloir supprimer</h1>
<h1 class="d-flex justify-content-center" ><div classe="">"' . $row->pro_libelle . '</div>de la base de donnéés?</h1>
<from>
    <div class="d-flex justify-content-center" name = actionProduit>
        <button class="btn btn-secondary "><a class="nav-link"  href="'.site_url().'/ConnectUse/Acceuil">Annuler</a></button>
        <button class="btn btn-danger"><a class="nav-link"  href="'.site_url().'/Produits/Deletepro/'.$row->pro_id.'">Supprimer</a></button>
    </div><br/>';
}


