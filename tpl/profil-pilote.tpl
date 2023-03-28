<link rel="stylesheet" href="/css/profil.css">

<body>
    <table class="page-profil">
        <tr>
            <td class="personne">
                <img src="/img/personne.png" alt="Image du compte">
            </td>
            <td>
                Vous êtes Pilote<br><br>

                Nom : {$nom_utilisateur}<br>
                Prenom : {$prenom}<br>
                Adresse mail : {$mail}<br>
                Pilote de promotion : {$nom_promo} <br>
                Centre : {$nom_centre}<br>
                Date de naissance : {$date_naissance}<br>
                Adresse : {$numero} {$complement} {$rue},<br>
                {$code_postal}, {$ville}, {$region}, {$pays}<br>
            </td>
            <td id="td-reseaux">
                <table class="reseaux">
                    <a href="edit_profil.php"><img src="/img/stylo.png" alt="editer" id="crayon" width="40"></a>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td class="icone">
                                        <img src="/img/linkedin.png" alt="">
                                    </td>
                                    <td>
                                        <a id="linkedin" href="{$lien_linkedin}"> LinkedIn</a>
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
                                        <a id="indeed" href="{$lien_indeed}"> Indeed</a>
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
                                        <a id="facebook" href="{$lien_facebook}"> Facebook</a>
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
                                        <a id="site-perso" href="{$lien_perso}"> Site
                                            personnel</a>
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
    <div class="back">
        <span class="cat" style="text-decoration: underline;">Profil</span>


        <div class='column'>
            {$nom_utilisateur}<br>
            {$prenom}<br>
            {$mail}<br>
            <a class='d' href='profiledit.php?Id=$Id'>Modifier</a>
        </div>
        <div class='column' style='text-align: center; font-size: 5rem'>
            <a href='newprofile.php' style='text-decoration: none; color: #ffffff'>+</a>
        </div>
    </div>
    </p>
</body>