<?php ob_start();
session_start();
$title = "Les bassins de la pisciculture du Web";

//Connexion à la base de données par le fichier confg
require_once "BDD/BDDConfig.php";
try {
    //chaîne de co à la bdd
    //$objBdd = new PDO("mysql:host=localhost;dbname=bddtruites;charset=utf8", "bts", "snir");
    $objBdd = new PDO("mysql:host=$bddserver;dbname=$bddname;charset=utf8", $bddlogin, $bddpass);
    
    //on rajoutte le type d'erreur
    // $objBdd->setAttribute(PDO::ATTR_ERRMODE, 
    //           PDO::ERRMODE_EXCEPTION);      
    
    //on récupère les données de la bdd
    $listeBassins = $objBdd->query("select idBassin, nom, description, photo from bassin");



  } catch (Exception $prmE) {
      //on èvite de faire apparaitre le nom d'utilisateur
    //die('Erreur : ' . $prmE->getMessage());
    die('Erreur de connexion à la BDD');
  }
  
?>
<article class="art-main">
    <h1>Les bassins de la pisciculture du Web</h1>
    <h2>– dans un écrin de verdure</h2>
    <p>Nos truites danoises éclosent dans nos écloseries continentales, où elles passent les premiers
        mois de leur vie. L’environnement contrôlé de ces élevages nous permet d’assurer les meilleures
        conditions possibles pour leur culture. Quand elles ont environ deux ans, la plupart des truites
        sont transportées à nos élevages marins, dans les eaux côtières propres et limpides du Danemark.
    </p>

    <p>Elles y passent 7 à 8 mois, jusqu'à ce qu'elles remplissent parfaitement les conditions pour la
        récolte. Elles sont transportées vivantes et avec le plus grand soin dans de grands bateaux à
        viviers jusqu’à notre propre site de traitement situé à Aarøsund, dans le Jutland-du-Sud.</p>
</article>
<section class="content-sec">

    <?php // -----------------------on ouvre le fetch , parcourir, la bdd
    foreach ($listeBassins as $bassin) {
    ?>
        <article class="art-sec">
            <h2><?php echo $bassin['nom']; ?></h2>
            <img src="images/<?php echo $bassin['photo']; ?>" alt="<?php echo $bassin['nom']; ?>">
            <p><?php echo $bassin['description']; ?></p>
            <p><a href="temperatures.php?idbassin=<?php echo $bassin['idBassin']; ?>&nombassin=<?php echo $bassin['nom']; ?>">Voir les températures de ce bassin</a></p>
        </article>
    <?php
    } //--------------------------fin du while fetch de bdd
    $listeBassins->closeCursor(); //libère les ressources de la bdd
    ?>

</section>

<?php
// déconnexion de la base de données
$objBdd = null;

$contenu = ob_get_clean(); 
require_once "Modeles/template.php";
?>