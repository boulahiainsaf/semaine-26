echo '<label for="pro_prix">prix :</label>';
echo '<input type="text" class="form-control" name="pro_prix" value="' . $row1->pro_prix . '"disabled="disabled" >';
echo '<label for="pro_couleur">Couleur :</label>';
echo '<input type="text" class="form-control" name="pro_couleur" value="' . $row1->pro_couleur . '"disabled="disabled" >';
echo '<label for="pro_d_ajout">Date d ajout :</label>';
echo '<input type="date" class="form-control" name="pro_d_ajout" value="' . $row1->pro_d_ajout . '"disabled="disabled" >';
echo '<label for="pro_d_modif">Date de modification :</label>';
echo '<input type="text" class="form-control" name="pro_d_modif" value="' . $row1->pro_d_modif . '"disabled="disabled" >';
echo '<label for="pro_bloque">Produit bloqué ? :<br/>';
