<form action="valid.php" method="POST" enctype="multipart/form-data">
    <h6>* ces zones sont obligatoires</h6>
    <h2>Vos coordonnées</h2>
    <div class="form-group">
        <label for="Nom">Nom* :</label>
        <input class="form-control form-control-sm" type="text" name="Nom" id="Nom" value= "<?php if(isset($_POST["Nom"])){echo $_POST["Nom"];} ?>" >
        <div class="text-danger">

        </div>
        <label for="prenom">prénom* :</label>
        <input class="form-control form-control-sm" type="text" name="prenom" id="prenom" value= "<?php if(isset($_POST["prenom"])){echo $_POST["prenom"];} ?>" >
        <div class="text-danger">

        </div>
        <label from="mail">Email* :</label>
        <input class="form-control form-control-sm" type="text" name="mail" id="mail" value= "<?php if(isset($_POST["mail"])){echo $_POST["mail"];} ?>" >
        <div class="text-danger">

        </div>
    </div>
    <label from="login">login* :</label>
    <input class="form-control form-control-sm" type="text" name="login" id="login" value= "<?php if(isset($_POST["login"])){echo $_POST["login"];} ?>" >
    <div class="text-danger">

    </div>
    <label for="password">mots de passe* :</label>
    <input class="form-control form-control-sm" type="password" name="mPass" id="mPass" value= "<?php if(isset($_POST["mPass"])){echo $_POST["mPass"];} ?>" >
    <div class="text-danger">

    </div>
    </div>
    <label for="password2">mots de passe* :</label>
    <input class="form-control form-control-sm" type="password" name="mPass2" id="mPass2" value= "<?php if(isset($_POST["mPass2"])){echo $_POST["mPass2"];} ?>" >
    <div class="text-danger">

    </div>
    <div>
        <input type="submit" class="btn btn-dark btn-outline-primary" value="envoyer">
        <input type="reset" class="btn btn-dark btn-outline-primary" value="Annuler">
    </div>
</form>