<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">


</head>
<body>
    <section>
        <div class="grille">
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__listlogo">
                        <img alt="logo" src="https://static.wixstatic.com/media/51e30d_d51e9a7675b14fec9050c17c133eb4e4~mv2.gif"/>
                    </li>
                    <li class="nav__listitem">
                        <a href="../home/index.php">Accueil</a>
                    </li>
                    <li class="nav__listitem">
                        <a href="../edu/edu.php">Parcours scolaire</a>
                    </li>
                    <li class="nav__listitem">
                        <a href="../projects/projects.php">Projets</a>
                        <ul class="nav__listitemdrop">
                            <li>Miap</li>
                            <li>Otadakimasu</li>
                            <li>Black Mirror</li>
                            <li>Analyse Netflix</li>
                            <li>Farenheit 11/9</li>
                            <li>Gestion de projet</li>
                            <li>Journal pharmaceutique</li>
                            <li>Eminem</li>
                            <li>Base de données</li>
                            <li>Site IA</li>
                            <li>Portfolio</li>
                        </ul>
                    </li>
                    <li class="nav__listitem">
                        <a href="../pro/pro.php">Parcours professionnel</a>
                    </li>
                    <li class="nav__listitem">
                        <a href="../competences/competences.php">Compétences</a>
                    </li>
                    <li class="nav__listitem">
                        <a href="../charity/charity.php">Engagement associatif</a>
                    </li>
                    <li class="nav__listitem">
                        <a href="../interests/interests.php">Centres d'intérêts</a>
                    </li>
                </ul>
            </nav>
            <div class=" item banner">
                <img src="images/banner.jpg">
                <div class="text-wrapper">
                    <h1>Bonjour ! Je suis Hassina Ayachi, étudiante en informatique</h1>
                    <br>
                    <h2>Bienvenue sur mon portfolio.</h2>
                    <br>
                    <img id="logo" alt="logo" src="https://static.wixstatic.com/media/51e30d_d51e9a7675b14fec9050c17c133eb4e4~mv2.gif" />
                </div>
            </div>

            <div class="item edu">
                <div class="container">
                    <div class="left"></div>
                    <div class="right">
                        <div class="content">
                            <h1>Mon parcours scolaire</h1>
                            <p>Mon parcours scolaire original m'a rendu plus mature, à travers mes échecs comme mes réussites.</p>
                            <a href="../edu/edu.php" class="btn">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item projects">
                <div class="container">
                    <div class="left">
                        <div class="content">
                            <h1>Mes projets
                            </h1>
                            <p>Mes projets ont été l'occasion pour moi de travailler en équipe et de découvrir mes domaines de prédilection: la gestion de projet et le développement web.</p>
                            <a href="../projects/projects.php" class="btn">En savoir plus</a>
                        </div>
                    </div>
                    <div class="right"></div>
                </div>

            </div>

            <div class="item pro">
                <div class="container">
                    <div class="left"></div>
                    <div class="right">
                        <div class="content">
                            <h1>Mon parcours professionnel</h1>
                            <p>J'en suis encore au début de mon parcours professionnel. Il est certes court mais très instructif.</p>
                            <a href="../pro/pro.php" class="btn">En savoir plus</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="item charity">
                <div class="container">
                    <div class="left">
                        <div class="content">
                            <h1>Mon engagement associatif</h1>
                            <p>Accorder du temps à des associations pour aider autrui est toujours un plaisir. C'est aussi l'occasion de s'améliorer et d'en apprendre plus, surtout sur soi même.</p>
                            <a href="../charity/charity.php" class="btn">En savoir plus</a>
                        </div>
                    </div>
                    <div class="right"></div>
                </div>

            </div>

            <div class="item interest">
                <div class="container">
                    <div class="left"></div>
                    <div class="right">
                        <div class="content">
                            <h1>Mes centres d'intérêts</h1>
                            <p>Ce que je préfère faire durant mon temps libre.</p>
                            <a href="../interests/interests.php">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <h3>Hassina Ayachi</h3>
                <img alt="" src="https://static.wixstatic.com/media/51e30d_d51e9a7675b14fec9050c17c133eb4e4~mv2.gif" />
                <p>hassinaayachi99@gmail.com</p>
                <p>hassina.ayachi@edu.devinci.fr</p>
                <p>0637657645</p>
                <a href="https://www.linkedin.com/in/hassina-ayachi-2468991ab"><img id="in" src="../linkedin.png"></a>
            </footer>

        </div>
        <div class="mention">
            <p>©2021 par Hassina Ayachi.</p>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../script.js"></script>
</body>
</html>