<div class="container-fluid col-lg-8">
    <h1>Ajout d'un produit</h1>
    <div class="container-fluid col-lg-12" >
        <?php echo form_open(); ?>
        <label for="pro_cat_id">Nom catégorie</label>
        <select class="form-control col_8" name="pro_cat_id" id="pro_cat_id">
            <?php
            foreach ($liste_categories as $row1)
            {

                echo"<option value=".$row1->cat_id.">".$row1->cat_nom."</option>";

            }
            ?>
        </select>
        <div class="form-group">
            <label for="pro_ref" >Réference produit</label><input type="text" class="form-control" name="pro_ref" id="pro_ref">
            <div class="text-danger">
                <?php echo form_error('pro_ref'); ?>
            </div>
            <label for="pro_libelle">Libéllé produit</label><input type="text" class="form-control" name="pro_libelle" id="pro_libelle">
            <div class="text-danger">
            <?php echo form_error('pro_libelle'); ?>
            </div>
                <label for="pro_description">Description produit</label><input type="text" class="form-control" name="pro_description" id="pro_description">
            <label for="pro_prix">Prix</label><input type="text" class="form-control" name="pro_prix" id="pro_prix">
            <div class="text-danger">
            <?php echo form_error('pro_prix'); ?>
            </div>
                <label for="pro_stock">Quantité en stock</label><input type="number" class="form-control" name="pro_stock" id="pro_stock">
            <div class="text-danger">
            <?php echo form_error('pro_stock'); ?>
            </div>
                <label for="pro_couleur">Couleur Produit</label><input type="text" class="form-control" name="pro_couleur" id="pro_couleur">

            <label for="pro_photo">Extension de la photo :</label>
            <select class="form-control" name="pro_photo" id="pro_photo">
                <option>jpg</option>
                <option>png</option>
                <option>gif</option>
            </select>
        </div>
        Produit bloqué&nbsp&nbsp
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="pro_bloque"><input class="form-check-input" type="radio" name="pro_bloque" id="pro_bloque1" value=1>bloque</label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="pro_bloque"><input class="form-check-input" type="radio" name="pro_bloque" id="pro_bloque2" value=0>Non bloque</label>
        </div>

        <br>
        <br>
        <label for="fichier">Photo :&nbsp&nbsp</label>
        <br>

        <input type="file" name="fichier">
        <br>
        <br>

        <div class="d-flex justify-content-center" name = actionProduit>
            <button class="btn btn-primary" type="submit" name="submit" value="1" >Envoyer</button>
            <a href="<?php echo base_url();?>index.php/Produits/liste" class="btn btn-success ml-1" type="button" id="efface">Annuler</a>
        </div>
    </div>
</div>

