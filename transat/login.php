<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Transat Jacques Vabre 2007, fake content">
        <meta name="author" content="Gwénaël LAURENT">
        <!-- <meta name="robots" content="none"> -->
        <link rel="stylesheet" href="css/jacques-vabre.css">
        <title>Espace Organisateurs</title>
        <script>
            // 100vh chrome mobile
            // https://css-tricks.com/the-trick-to-viewport-units-on-mobile/
            // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
            let vh = window.innerHeight * 0.01;
            // Then we set the value in the --vh custom property to the root of the document
            document.documentElement.style.setProperty('--vh', `${vh}px`);

            // We listen to the resize event
            window.addEventListener('resize', () => {
                // We execute the same script as before
                let vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            });
        </script>
        <script src="js/menu-nav-opener.js"></script>
        <!-- favicon (attention chemins absolus):  https://realfavicongenerator.net/ -->
        <link rel="apple-touch-icon" sizes="180x180" href="/transat/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/transat/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/transat/favicon-16x16.png">
        <link rel="manifest" href="/transat/site.webmanifest">
        <link rel="mask-icon" href="/transat/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body>
        <div id="page-wrapper">
            <div id="header-wrapper">
                <header id="main-header">
                    <a class="header-logo" href="#">Résultats 2007</a>
                    <input type="checkbox" id="nav-opener" class="toggle-opener">
                    <label for="nav-opener" class="nav-opener">
                        <span class="nav-opener-text">Afficher / Cacher le menu</span>
                        <span></span>
                    </label>
                    <nav id="main-nav">
                        <ul id="main-nav-ul">
                            <li><a href="index.html">Accueil</a></li>
                            <li><a href="liste-classes.html">Classements</a></li>
                            <li class="active"><a href="login.html">Connexion</a></li>
                            <li><a href="ajoutclasse.html">Ajout Classe</a></li>
                            <!-- <li><a href="logout.html">Déconnexion</a></li> -->
                        </ul>
                    </nav>

                </header>
            </div>
            <div id="article-wrapper">
                <article class="main-article">
                    <h1>Espace Organisateurs</h1>
                    <p>
                        <strong>
                            Déjà inscrit ? Entrez votre email et mot de passe pour vous connecter
                        </strong>
                    </p>
                    <h2>Connexion</h2>
                    <form method="POST" action="login_action.php" class="form-login">
                        <label for="login">E-mail</label>
                        <input type="email" name="email" placeholder="Saisissez votre e-mail..." required>
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" placeholder="Saisissez votre mot de passe..." required>
                        <input type="submit" value="Se connecter">
                    </form>
                    <img src="images/champagne.jpg" alt="Des vainqueurs sabrent le champagne">
                </article>
            </div>
            <div id="footer-wrapper">
                <footer id="main-footer">
                    <ul class="footer-links">
                        <li><a href="#">&copy; Fake</a></li>
                        <li><a href="#">Formation Web</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </footer>
            </div>
        </div>

    </body>

</html>