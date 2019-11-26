<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta name="description" content="Portfolio de Thomas Debray - BTS SIO SLAM">
        <meta name="author" content="Thomas Debray">
        <link rel="icon" href="favicon.ico">
        <title>Portfolio de Thomas Debray (BTS SIO 2016/2018)</title>
        <meta charset="UTF-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container"> 
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Navigation raccourcie</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Mon portfolio</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
                        <li><a href="#"><span class="glyphicon-object-align-top"></span> CV</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <span class="glyphicon glyphicon-list-alt"></span> Réalisations
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation" class="dropdown-header">En autonomie</li>
                                <li role="presentation"><a role="menuitem" href="#">Application Android</a></li>
                                <li role="presentation"><a role="menuitem" href="projet/test.html">Site web</a></li>
                                <li role="presentation"><a role="menuitem" href="#">Études et analyses</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation" class="dropdown-header">En entreprise</li>
                                <li role="presentation"><a role="menuitem" href="#">Projet de 1ère année</a></li>
                                <li role="presentation"><a role="menuitem" href="#">Projet de 2ème année</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <span class="glyphicon glyphicon-education"></span>
                                Jury E4 BTS SIO <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation" class="dropdown-header">Documentations contexte</li>
                                <li role="presentation"><a role="menuitem" href="#">Présentation</a></li>
                                <li role="presentation"><a role="menuitem" href="#">Application</a></li>
                                <li role="presentation"><a role="menuitem" href="#">Missions à réaliser</a></li>
                                <li role="presentation"><a role="menuitem" href="#">Annexes</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation" class="dropdown-header">Fiches d'examen</li>
                                <li role="presentation"><a role="menuitem" href="#">Situation professionnelle n°1</a></li>
                                <li role="presentation"><a role="menuitem" href="#">Situation professionnelle n°2</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation" class="dropdown-header">Démonstrations</li>
                                <li role="presentation"><a role="menuitem" href="#">Démo SP n°1</a></li>
                                <li role="presentation"><a role="menuitem" href="#">Démo SP n°2</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation" class="dropdown-header">Codes sources</li>
                                <li role="presentation"><a role="menuitem" href="#">Sources SP n°1</a></li>
                                <li role="presentation"><a role="menuitem" href="#">Sources SP n°2</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Me contacter</a></li>
                    </ul>                    
                </div>
        </nav>

        <div class="jumbotron">
            <div class="container">
                <h1>Bonjour et bienvenue sur mon portfolio !</h1>
                <p>
                    <img id="maPhoto" class="pull-left img-rounded" src="images/ThomasDebray.jpg" alt="Ma photo d'identité" /> Je m'appel Thomas Debray, j'ai 22 ans
                    et ce site a pour vocation de me présenter en tant que personne, en tant qu'étudiant et candidat à l'obtention du BTS SIO (Services Informatiques
                    aux Organisations) et en tant que future professionnel de l'informatique.
                </p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">En savoir plus &raquo;</a></p>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Le BTS SIO</h2>
                        <p>Passionnée d'informatique depuis mon plus jeune âge, j'aime apprendre à faire de nouvelles choses avec mon ordinateur, mon
                            smartphone ou ma tablette. Un Geek ? Oui assurément ! Mais j'aimerais maintenant passer au niveau au dessus et devenir une
                            vrai Nerd, dans le bon sens du terme ! Après mon bac, le BTS SIO s'est présenté comme une évidence. Avec 62% d'Informatique "pure",
                            15% d'Économie, management et droit de l’informatique, 8% d'Anglais, 8% de culture générale et 7% de Maths, je savais que cette formation
                            allait me mettre le pied à l'étrier pour poursuivre ensuite dans cette voie et devenir informaticien !
                        </p>
                        <p><a class="btn btn-default" href="https://fr.wikipedia.org/wiki/ Brevet_de_technicien_sup%C3%A9rieur_-_Services_informatiques_aux_organisa
                              tions" target="_blank" role="button">En savoir plus &raquo;</a></p>
                    </div>
                    <div class="col-md-4">
                        <h2>Option B SLAM</h2>
                        <p>En fin de premier semestre, on doit choisir notre option. "Solutions Logicielles et Applications Métiers" est l'option qui m'a séduit !
                            Travailler en équipe à la satisfaction de besoins d'un client, définir des spécifications, faire des tests, corriger des bugs,
                            faire de la maintenance... tout en apprenant les bases du métier de développeur : modélisation des données avec Merise et UML,
                            programmation objet avec Java, C# et PHP, conception de bases de données sous PostgreSQL et MySQL, réalisation de composants
                            logiciels avec Symfony, gestion de projet, méthodes agiles... J'étais sûr que ça serait fait pour moi !
                        </p>
                        <p><a class="btn btn-default" href="http://www.onisep.fr/Ressources/ Univers-Formation/Formations/Post-bac/BTS-Services-informatiques-auxorganisations-option-B-solutions-logicielles-et-applications-metiers"
                              target="_blank" role="button">En savoir plus &raquo;</a></p>
                    </div>
                </div>
                <hr />
                <p id="copyright">&copy; Debray Thomas 2017</p>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
        <script src="css/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="css/bootstrap-3.3.5-dist/js/ie10-viewport-bug-workaround.js">
        </script>
        <!-- Main jumbotron for a primary marketing message or call to action -->
    </body>
</html>