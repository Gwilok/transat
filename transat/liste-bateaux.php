<?php ob_start();
session_start();
$title = "Classements ORMA";
?>
                    <h1>Classements ORMA</h1>
                    <p>
                        <strong>
                            Les bateaux de la classe ORMA sont des voiliers multicoque dont la longueur est de 60 pieds.
                        </strong>
                    </p>
                    <h2>Classement à l'arrivée</h2>
                    <ul class="art-list-items">
                        <li>1 - Groupama (<a href="detail-bateaux.html">détails bateau et skipper</a>)</li>
                        <li>2 - Gitana 11 (<a href="#">détails bateau et skipper</a>)</li>
                        <li>3 - Banque Populaire (<a href="#">détails bateau et skipper</a>)</li>
                        <li>4 - Brossard (<a href="#">détails bateau et skipper</a>)</li>
                        <li>5 - Sopra (<a href="#">détails bateau et skipper</a>)</li>
                    </ul>
                    <img src="images/groupama.jpg" alt="Bateau Groupama">
<?php $contenu = ob_get_clean();
    require_once "Modeles/template.php";
?>