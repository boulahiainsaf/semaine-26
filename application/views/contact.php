<form action="validation1.php" method="POST" enctype="multipart/form-data">
    <h6>* ces zones sont obligatoires</h6>
    <h2>Vos coordonnées</h2>
    <div class="form-group">
        <label for="Nom">Nom*</label>
        <input class="form-control form-control-sm" type="text" name="Nom" id="Nom" value= "<?php if(isset($_POST["Nom"])){echo $_POST["Nom"];} ?>" >
    </div>
    <div class="text-danger">

    </div>
    <div class="form-group">
        <label for="prenom">Pr&egrave;nom*</label>
        <input class="form-control form-control-sm" type="text" name="prenom" id="prenom" placeholder="Veuillez saisir votre pr&egrave;nom" value= "<?php if(isset($_POST['prenom'])){echo $_POST['prenom'];} ?>">
    </div>
    <div class="text-danger">

    </div>
    <label for="Sex">Sexe*</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="Radios1" <?php if(isset($_POST['genre'])&& $_POST['genre'] == 'Feminin'){echo "checked";} ?> value="Feminin" >
        <label class="form-check-label" for="Radios1">
            F&eacute;minin
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="Radios2" <?php if(isset($_POST['genre'])&& $_POST['genre'] == 'Masculin'){echo "checked";} ?> value="Masculin" >
        <label class="form-check-label" for="Radios2">
            Masculin
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="Radios3"<?php if(isset($_POST['genre'])&& $_POST['genre'] == 'Neutre'){echo "checked";} ?> value="Neutre" >
        <label class="form-check-label" for="Radios3">
            Neutre
        </label>
    </div>
    <div class="text-danger">

    </div>
    <div>
        <label for="date">Date de naissance:</label>
        <input class="form-control " type="date" name="date" id="date" placeholder="jj/mum/aaaa"value="<?php if(isset($_POST['date'])){echo $_POST['date'];} ?>" >
    </div>
    <div class="text-danger">

    </div>
    <div>
        <label for="code">Code postal*</label>
        <input class="form-control " type="number" name="code" id="code" value="<?php if(isset($_POST['code'])){echo $_POST['code'];} ?>">
    </div>
    <div class="text-danger">

    </div>
    <div>
        <label for="inputAddress">Adresse</label>
        <input class="form-control" name="adresse" id="inputAddress" type="text">
    </div>
    <div>
        <label for="ville">ville</label>
        <input class="form-control form-control-sm" name="ville" id="ville" type="text">
    </div>
    <div class="form-group">
        <label for="courriel">Email*</label>
        <input type="Email" class="form-control" name="courriel" id="courriel" placeholder="dave.loper@afpa.com" value="<?php if(isset($_POST['courriel'])){echo $_POST['courriel'];} ?>">
    </div>
    <div class="text-danger">

    </div>
    <h2>Votre demande</h2>
    <label for="inputstate">Sujet*</label>
    <select class="form-control " id="inputstate" name="sujet"  value="<?php if(isset($_POST['sujet'])){echo $_POST['sujet'];} ?>" >
        <option selected>Veuillez s&eacute;l&eacute;ctionner un Sujet</option>
        <option value="Mes commandes"<?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="Mes commandes")){echo 'selected';}?>>Mes commandes</option>
        <option value="Question sur un produit"<?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="Question sur un produit")){echo 'selected';}?>>Question sur un produit</option>
        <option value="Réclamation"<?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="Réclamation")){echo 'selected';}?>>R&eacute;clamation</option>
        <option value="Autre"<?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="Autre")){echo 'selected';}?>>Autres</option>
    </select>
    <div class="text-danger">

    </div>
    <div class="form-group">
        <label for="text">Votre question*</label>
        <textarea class="form-control" id="text" rows="2" name="question"  value= "<?php if(isset($_POST["question"])){echo $_POST["question"];} ?>"></textarea>
    </div>
    <div class="text-danger">

    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="accepte">
        <label class="form-check-label">
            * J'accepte le traitement informatique de ce formulaire.
        </label>
    </div>
    <div class="text-danger">

    </div>

    <div>
        <input type="submit" class="btn btn-dark btn-outline-primary" value="envoyer">
        <input type="reset" class="btn btn-dark btn-outline-primary" value="Annuler">
    </div>
</form>
