<div class="d-flex justify-content-center">
    <?php
    foreach ($Produit_detail as $row1)
    {
        if ($row1->pro_bloque==1) {
            $var= "checked";

        }else{
            $var="";
        }
        if ($row1->pro_bloque==0) {
            $var1= "checked";

        }else{
            $var1="";
        }

            echo'
             
            
            <form method="GET" class="container-fluid col-lg-10">
            <div class="d-flex justify-content-center"  >
            <img class="container-fluid col-lg-4" src="'. base_url().'assets/images/'.$row1->pro_id.'.'.$row1->pro_photo.'"width="50"/><br>
            </div>
            <label for="pro_ref">Référence :</label>
            <input type="text" class="form-control" name="pro_ref" value="' . $row1->pro_ref . '" disabled="disabled"  >
            <label for="cat_nom">Catégorie :</label>
            <input type="text" class="form-control" name="cat_nom" value="' . $row1->cat_nom . '"disabled="disabled" >
            <label for="pro_libelle">LIbellé :</label>
            <input type="text" class="form-control" name="pro_libelle" value="' . $row1->pro_libelle . '"disabled="disabled" >
            <label for="pro_libelle">Description:</label>
            <input type="text" class="form-control" name="pro_ref" value="' . $row1->pro_description . '"disabled="disabled" >
            <label for="pro_prix">prix :</label>
            <input type="text" class="form-control" name="pro_prix" value="' . $row1->pro_prix . '"disabled="disabled" >
            <label for="pro_couleur">Couleur :</label>
            <input type="text" class="form-control" name="pro_couleur" value="' . $row1->pro_couleur . '"disabled="disabled" >
            <label for="pro_d_ajout">Date d ajout :</label>
            <input type="date" class="form-control" name="pro_d_ajout" value="' . $row1->pro_d_ajout . '"disabled="disabled" >
            <label for="pro_d_modif">Date de modification :</label>
            <input type="text" class="form-control" name="pro_d_modif" value="' . $row1->pro_d_modif . '"disabled="disabled" >
            <label for="pro_bloque">Produit bloqué ? :<br/>
            <input type="radio" name="oui"' .$var.' disabled="disabled" >oui
            <input type="radio" name="non"'.$var1.' disabled="disabled" >non
            </label>

             <br><br>
                <div class="container" name = actionProduit>
                <button class="btn btn-secondary "><a class="nav-link" role="button" href="'.base_url().'index.php/Produits/verefDel/'.$row1->pro_id.'">Retour</a></button>
                <button class="btn btn-warning" ><a class="nav-link" href="'.base_url().'index.php/Produits/formModif/'.$row1->pro_id.'" >Modifier</a></button>
                <button class="btn btn-danger"><a class="nav-link"  href="'.base_url().'index.php/Produits/verefDel/'.$row1->pro_id.'">Supprimer</a></button>
            </div><br/>
    
            </form>
        ';
        }
       ?>
</div>
