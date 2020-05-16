<?php
session_start();
include_once('inc/header.php');
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    // Ici, l'utilisateur est connecté
    ?>
    <p>Bonjour <?= $_SESSION['user']['pseudo'] ?> <a class="btn btn-danger" href="deconnexion.php">Déconnexion</a></p>
<?php
}else{
    // Ici l'utilisateur n'est pas connecté
    ?>
    <a class="btn btn-primary mr-2" href="connexion.php">Connexion</a> <a class="btn btn-primary" href="inscription.php">Inscription</a>
<?php
}
?>
<div class="col-12 my-1">
    <div class="p-2" id="discussion">
    </div>
</div>
<div class="col-12 saisie">
    <div class="input-group">
        <input type="text" class="form-control" id="texte" placeholder="Entrez votre texte">
        <div class="input-group-append">
            <span class="input-group-text" id="valid"><i class="la la-check"></i></span>
        </div>
    </div>
</div>
<?php
include_once('inc/footer.php');
