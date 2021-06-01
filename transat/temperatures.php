<?php ob_start();
session_start();
$title = "Les bassins de la pisciculture du Web";

//Connexion à la base de données par le fichier confg
require_once "BDD/BDDConfig.php";
$idBassin = 0;
$nomBassin = "Bassin inconnu";

$idok = isset($_GET['idbassin']);
$nomok = isset($_GET['nombassin']);

if (($idok == true) && ($nomok == true)){
    $idBassin = intval(htmlspecialchars($_GET['idbassin']));
    $nomBassin = htmlspecialchars($_GET['nombassin']);
}
try {
    $objBdd = new PDO("mysql:host=$bddserver;
    dbname=$bddname;
    charset=utf8", $bddlogin, $bddpass);

$listeTemperatures = $objBdd->prepare("SELECT * FROM temperature 
                    WHERE idBassin = :id 
                    ORDER BY date DESC");
$listeTemperatures->bindParam(':id', $idBassin, PDO::PARAM_INT);
$listeTemperatures->execute();

  } catch (Exception $prmE) {
      //on èvite de faire apparaitre le nom d'utilisateur
    //die('Erreur : ' . $prmE->getMessage());
    die('Erreur de connexion à la BDD');
  }
  
?>

<article class="art-main">
    <h1>Les températures de : <?php echo $_GET['nombassin']; ?></h1>
    <table class="tableTemperature">    
    <thead>

        <tr>
        <th>Dates :</th>
        <th>temperatures :</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($listeTemperatures as $temperature) {?>
        <tr>
            <td><?php echo $temperature['date']; ?></td>
            <td><?php echo $temperature['temp']; ?> °C</td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
</article>

<?php
// déconnexion de la base de données
$objBdd = null;

$contenu = ob_get_clean(); 
require_once "Modeles/template.php";
?>