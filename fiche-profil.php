<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<header>
    <nav></nav>
    <div class="header">

        <div><a href="accueil.html"><img src="/img/logo.svg" alt="retour accueil" id="img-acceuil"></a></div>
        <div>
            <h1>Profil</h1>
        </div>
    </div>
    </nav>
    <div>
        <nav>
            <div class="bandeau">
                <div>
                    <a href="accueil.html">Accueil</a>
                </div>
                <div>
                    <a href="navigation.html">Navigation</a>
                </div>
                <div>
                    <a href="fiche-profil.html">Profil</a>
                </div>
                <div>
                    <a href="index.html">Déconnexion</a>
                </div>
            </div>
    </div>
</header>

<body>
    <table class="page-profil">
        <tr>
            <td class="personne">
                <img src="/img/personne.png" alt="Image du compte">
            </td>
            <td>
                <div id="nom">Nom : DOE<br></div>
                <div id="prenom">Prénom : JOHN<br></div>
                <div id="date-naissance">Date de naissance : 01/01/1990<br></div>
                <div id="pilote">Pilote : Amira</div>
                <div id="promotion">Promotion : A2<br></div>
                <div id="centre">Centre : Strasbourg<br></div>
                <div id="entreprise">Entreprise : NAGARRO</div>
            </td>
            <td id="td-reseaux">
                <table class="reseaux">
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td class="icone">
                                        <img src="/img/linkedin.png" alt="">
                                    </td>
                                    <td>
                                        <a id="linkedin" href="bonjourjesuisunlien.linkedin.fr"> LinkedIn</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td class="icone">
                                        <img src="/img/indeed.png" alt="">
                                    </td> 
                                    <td>
                                        <a id="indeed" href="bonjourjesuisunlien.indeeed.fr"> Indeed</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td class="icone">
                                        <img src="/img/facebook.png" alt="">
                                    </td>
                                    <td>
                                        <a id="facebook" href="bonjourjesuisunlien.facebook.fr"> Facebook</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td class="icone">
                                        <img src="/img/site.png" alt="">
                                    </td>
                                    <td>
                                        <a id="site-perso" href="bonjourjesuisunlien.site-personnel.fr"> Site personnel</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>

        </tr>

    </table>
    </td>
    </tr>
    </table>

    <p>
        Expériences passées
    </p>
    <a href="edit-profil.html"><img src="/img/stylo.png" alt="editer" id="img-edit" width="40"></a>
</body>
<?php include 'footer.php'; ?>
  <script type="text/javascript" src="profile.js"></script>
</html>