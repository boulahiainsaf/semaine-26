<form action="<?php echo base_url()?>index.php/ConnectUse/verefconnexion" method="POST" enctype="multipart/form-data">
    <h2>Déjà client ?</h2>
    <input class="form-control form-control-sm" type="text" name="login" id="login" placeholder="Login" >
    <span class="text-danger"><?php echo form_error('login')?></span>
    <p></p>
    <input class="form-control form-control-sm" type="password" name="password" id="password" placeholder="mots de passe" >
    <span class="text-danger"><?php echo form_error('password')?></span>
    <p></p>
    <div>
        <input type="submit" class="btn btn-dark btn-outline-primary" value="se connecter">
        <p></p>
    </div>
</form>
<p>Nouveau client ?</p>
<form action="<?php echo base_url()?>index.php/ConnectUse/inscri" method="POST" enctype="multipart/form-data">
    <input type="submit" class="btn btn-dark btn-outline-primary"   value="Créer un compte">
</form>