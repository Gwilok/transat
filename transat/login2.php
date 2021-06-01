<?php ob_start();
session_start();
$title = "Connexion";
?>
<article class="art-main">
    <h1>Connexion</h1>
    <hr>
    <p>Veuillez vous authentifier : </p>
    <br>
    <form method="POST" action="login_action.php">
        <input type="text" name="login" placeholder="Saisissez votre login..." required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <input type="submit" value="Se connecter">
    </form>
</article>
                    
                </section>
<?php $contenu = ob_get_clean();
require_once "Modeles/template.php";
?>