
    <table class="table table-striped table-bordered container-fluid col-lg-8">
        <thead>
        <tr>
            <th scope="col">Photo</th>
            <th scope="col">ID</th>
            <th scope="col">Référence</th>
            <th scope="col">Libell&eacute;</th>
            <th scope="col">Prix</th>
            <th scope="col">Stock</th>
            <th scope="col">Couleur</th>
            <th scope="col">Ajout</th>
            <th scope="col">Modif</th>
            <th scope="col">Bloqué</th>
        </tr>
        </thead>
        <tbody>

      <?php
        foreach ($liste_produits as $row)
        {
               echo '<tr>';
               echo  '<th scope="row" class="table-warning">'.'<img src="'. base_url().'assets/images/'.$row->pro_id.'.'.$row->pro_photo.'"width="75">'.'</th>';
               echo'<td >'.$row->pro_id.'</td>';
                echo'<td >'.$row->pro_ref.'</td>';
               echo '<td class="table-warning">'.'<a class="nav-link" href="'.site_url().'/Produits/Detail'.'/'.$row->pro_id.'">'.$row->pro_libelle.'</a></td>';
                echo'<td >'.$row->pro_prix.'</td>';
                echo'<td>'.$row->pro_stock.'</td>';
                echo'<td>'.$row->pro_couleur.'</td>';
                echo'<td>'.$row->pro_d_ajout.'</td>';
                echo'<td>'.$row->pro_d_modif.'</td>';


                if ( $row -> pro_bloque > 0 ) {echo  "<th>"."BLOQUE" . "</th>" ;} else { echo "<th>" ."" . "</th>" ;}
            }
            ?>
            </tr>

        <a class="nav-link" href="<?php echo base_url();?>index.php/Produits/Add">Ajout</a>
        </tbody>
    </table>
    <footer>
        <ul class="nav bg-dark" style="margin:auto">
            <li class="nav-link text-muted">mention l&egrave;gale</li>
            <li class="nav-link text-muted">horaire</li>
            <li class="nav-link text-muted">plan du site</li>
        </ul>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>
</div>
</body>
</html>
