<?php ob_start();
session_start();
$title = "Classements 2007";
//Connexion à la base de données par le fichier confg
require_once "BDD/BDDConfig.php";
try {
    //chaîne de co à la bdd
    //$objBdd = new PDO("mysql:host=localhost;dbname=bddtruites;charset=utf8", "bts", "snir");
    $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);
    
    //on récupère les données de la bdd
    $listeClassesBateau = $objBdd->query("select idClasse, nomClasse, dateDepart from classebateau");

  } catch (Exception $prmE) {
      //on èvite de faire apparaitre le nom d'utilisateur
    //die('Erreur : ' . $prmE->getMessage());
    die('Erreur de connexion à la BDD');
  }
?>
    <h1>Classements 2007</h1>
    <p>
        <strong>
            Les classements sont établis par classe de bateaux. Une classe de bateau correspond à un
            type de coque et une longueur maximale de coque.
        </strong>
    </p>
    <h2>Affichez les résultats par classe de bateaux</h2>
    
    <ul class="art-list-items">
        <?php // -----------------------on ouvre le fetch , parcourir, la bdd
        foreach ($listeClassesBateau as $classebateau) {
        ?>
        <li><a href="liste-bateaux.php?idClasse=<?php echo $classebateau['idClasse']; ?>"></a><?php echo $classebateau['nomClasse']; ?></li>
        <?php
        } //--------------------------fin du while fetch de bdd
        $listeClassesBateau->closeCursor(); //libère les ressources de la bdd
        ?>    
    </ul>
    <img src="images/CrepesWhaou.jpg" alt="Bateau Multi50 Crèpes Whaou"/>
<?php
// déconnexion de la base de données
$objBdd = null;

$contenu = ob_get_clean(); 
require_once "Modeles/template.php";
?>>