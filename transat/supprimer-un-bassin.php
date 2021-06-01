<?php ob_start();
session_start();
$title = "Supprimer un bassin";
//Accès seulement si authentifié 
if (isset($_SESSION['logged_in']['login']) !== TRUE) {
    // Redirige vers la page d'accueil (ou login.php) si pas authentifié
    $serveur = $_SERVER['HTTP_HOST'];
    $chemin = rtrim(dirname(htmlspecialchars($_SERVER['PHP_SELF'])), '/\\');
    $page = 'login.php';
    header("Location: http://$serveur$chemin/$page");
}
// contenu de la page privée
?>
<article class="art-main">
        <h1>La truite arc-en-ciel</h1>
        <tr>
    <td>Bassin du Héron</td>
    <td>
        <form method="POST" action="deletebassin.php">
            <input type="hidden" name="idbassin" value="2">
            <input type="submit" value="Supprimer">
        </form>
    </td>
</tr>
        </article>
    </section>
<?php $contenu = ob_get_clean();
    require_once "Modeles/template.php";
?>