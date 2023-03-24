<link rel="stylesheet" href="/css/style-edit.css">

<body>
    <table class="page-profil">
        <tr>
            <td class="personne">
                <img src="/img/personne.png" alt="Image du compte">
            </td>
            <td>
                <form method="post">
                    <label for="nom_utilisateur">Nom</label><br>
                    <input type="text" name="nom_utilisateur" id="nom_utilisateur" value="{$nom_utilisateur}"
                        required><br>

                    <label for="prenom">Prénom</label><br>
                    <input type="text" name="prenom" id="prenom" value="{$prenom}" required><br>
                    <label for="mail">Adresse mail</label><br>
                    <input type="text" name="mail" id="mail" value="{$mail}" required><br>
                    <label for="password">Mot de passe</label><br>
                    <input type="text" name="password" id="password" value="{$password}" required><br>
                    <label for="date_naissance">Date de naissance</label><br>
                    <input type="text" name="date_naissance" id="date_naissance" value="{$date_naissance}" required><br>
                    <label for="numero">N°</label><br>
                    <input type="text" name="numero" id="numero" value="{$numero}" required><br>
                    <label for="complement">Complément</label><br>
                    <input type="text" name="complement" id="complement" value="{$complement}"><br>
                    <label for="rue">Rue</label><br>
                    <input type="text" name="rue" id="rue" value="{$rue}" required><br>
                    <label for="code_postal">Code postal</label><br>
                    <input type="text" name="code_postal" id="code_postal" value="{$code_postal}" required><br>
                    <label for="ville">Ville</label><br>
                    <input type="text" name="ville" id="ville" value="{$ville}" required><br>
                    <label for="region">Région</label><br>
                    <input type="text" name="region" id="region" value="{$region}" required><br>
                    <label for="nom_pays">Pays</label><br>
                    <input type="text" name="nom_pays" id="nom_pays" value="{$pays}" required><br>
                </form>
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
                                        <a id="site-perso" href="bonjourjesuisunlien.site-personnel.fr"> Site
                                            personnel</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <button type="submit" name="submit" class="a">Enregistrer</button>
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