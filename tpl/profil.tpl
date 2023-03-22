<link rel="stylesheet" href="/css/style-profil.css">

<body>
    <table class="page-profil">
        <tr>
            <td class="personne">
                <img src="/img/personne.png" alt="Image du compte">
            </td>
            <td>
                Nom : {$nom_utilisateur}<br>
                Prenom : {$prenom}<br>
                Adresse mail : {$mail}<br>
                Password : {$password}<br>
                Date de naissance : {$date_naissance}<br>
                Adresse : {$numero} {$complement} {$rue}, {$code_postal}, {$ville}, {$region}, {$pays}<br>
            </td>
            <td id="td-reseaux">
                <table class="reseaux">
                    <a href="edit_profil.php"><img src="/img/stylo.png" alt="editer" id="crayon" width="40"></a>
                    <tr>
                        <td>
                            <div>
                                <a href="bonjourjesuisunlien.linkedin.fr" target="_blank"><img src="/img/linkedin.png"
                                        alt="linkedin" id="linkedin"></a>
                            </div>
                            <div>
                                <a href="bonjourjesuisunlien.linkedin.fr" target="_blank">LinkedIn</a>
                            </div>
                        </td>
                        <td>
                            <div>
                                <a href="bonjourjesuisunlien.indeed.fr" target="_blank"><img src="/img/indeed.png"
                                        alt="indeed" id="indeed"></a>
                            </div>
                            <div>
                                <a href="bonjourjesuisunlien.indeed.fr" target="_blank">Indeed</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <a href="bonjourjesuisunlien.facebook.fr" target="_blank"><img src="/img/facebook.png"
                                        alt="facebook" id="facebook"></a>
                            </div>
                            <div>
                                <a href="bonjourjesuisunlien.facebook.fr" target="_blank">Facebook</a>
                            </div>
                        </td>
                        <td>
                            <div>
                                <a href="bonjourjesuisunlien.site-personnel.fr" target="_blank"><img src="/img/site.png"
                                        alt="site" id="site-perso"></a>
                            </div>
                            <div>
                                <a href="bonjourjesuisunlien.site-personnel.fr" target="_blank">Site personnel</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <p>
        Expériences passées
    </p>
</body>