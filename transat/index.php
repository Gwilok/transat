<?php ob_start();
session_start();
$title = "La pisciculture du Web";
?>
<h1>La Transat Jacques Vabre 2007</h1>
                    <img src="images/carte-1180-664.jpg" alt="Carte du trajet Le Havre - Salvador De Bahia">
                    <p>
                        <strong>
                            La Transat Jacques Vabre 2007 s’ouvre à la nouvelle classe des 40 pieds qui aligne trente
                            partants… Les monocoques Imoca sont en force avec 17 équipages ; 8 multicoques 50 pieds et 5
                            multicoques Orma complètent la flotte. Un record de participation avec 60 bateaux.
                        </strong>
                    </p>
                    <p> La Transat Jacques-Vabre 2007 est la huitième édition de la Transat Jacques-Vabre, aussi appelée
                        La Route du café. Le départ a été donné les 3 (pour les monocoques) et 4 novembre 2007 (pour les
                        multicoques) du Havre avec une arrivée à Salvador de Bahia au Brésil. Le directeur de course au
                        sein de la société Pen Duick qui à ce titre est responsable de la Transat Jacques-Vabre est Jean
                        Maurel depuis l'édition 2005 (il l'est aussi pour la Route du Rhum depuis l'édition 2006).
                    </p>
                    <img src="images/depart2007.jpg" alt="Bateau ORMA Groupama">

                    <h2>La course</h2>
                    <p>
                        Du côté des Class40, le match est intense pour le duo italien Giovanni Soldini-Pietro d’Ali qui
                        réalise un parcours sans faute devant Dominic Vittet et Thierry Chabagny.
                    </p>
                    <p>
                        Franck-Yves Escoffier s’impose une nouvelle fois avec Karine Fauconnier en Multi50.
                    </p>
                    <img src="images/vainqueur.jpg" alt="Michel Dejoyeaux à l'arrivée">
                    <p>
                        En Imoca, <strong>Michel Dejoyeaux secondé par Manu Le Borgne</strong> fait parler la poudre à
                        Salvador de Bahia
                        après avoir été pourchassé par Marc Guillemot et Charles Caudrelier qui arrivent à trois-quarts
                        d’heure derrière…La course a été extrêmement disputée avec pas moins de sept leaders successifs.
                    </p>
                    <img src="images/foncia.jpg" alt="Bateau IMOCA Foncia">
                    <p>
                        Franck Cammas claque sa troisième victoire sur la Transat Jacques Vabre en compagnie de Stève
                        Ravussin, avec un temps canon de dix jours.
                    </p>

                    <h2>Type de bateau</h2>
                    <img src="images/CrepesWhaou.jpg" alt="Bateau Multi50 Crèpes Whaou">
                    <p>Quatre types de bateaux sont admis à participer :</p>
                    <ul>
                        <li>Des voiliers multicoque dont la longueur est de 60 pieds soit 18,28 m. Ces bateaux doivent
                            répondre aux règles de la <strong>classe ORMA</strong>.</li>
                        <li>Des voiliers multicoque dont la longueur est de 50 pieds soit 15,24 m. Ces bateaux doivent
                            répondre aux règles de la <strong>classe Multi50</strong>.</li>
                        <li>Des voiliers monocoque dont la longueur est de 60 pieds soit 18,28 m. Ces bateaux doivent
                            répondre aux règles de la <strong>classe IMOCA</strong> 60 pieds.</li>
                        <li>Des voiliers monocoques dont la longueur est de 40 pieds soit 15,24 m. Ces bateaux doivent
                            répondre aux règles de la <strong>Class40</strong>.</li>
                    </ul>
                    <h2>Vainqueurs</h2>
                    <img src="images/Gitana11.jpg" alt="Bateau Gitana11">
                    <p>Monocoque 40 : Telecom Italia – Giovanni Soldini & Pietro D’Ali (22j13h02min)</p>
                    <p>Multicoque 50 : Crêpes Whaou ! – Franck-Yves Escoffier & Karine Fauconnier (15j22h27min)</p>
                    <p>Monocoque 60 : Foncia – Michel Desjoyeaux& Emmanuel Le Borgne (17j02h37min)</p>
                    <p>Multicoque 60 : Groupama – Franck Cammas & Steve Ravussin (10j00h38min)</p>
                    
                </section>
<?php $contenu = ob_get_clean();
require_once "Modeles/template.php";
?>