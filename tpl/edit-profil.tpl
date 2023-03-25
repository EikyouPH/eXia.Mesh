<link rel="stylesheet" href="/css/edit.css">
<link rel="stylesheet" href="/css/listes-deroulantes.css">

<body>
    <div class="en cadre">
        <table class="grand">
            <tr>
                <td id="personne">
                    <img src="/img/personne.png" alt="Image du compte">
                </td>
                <td class="infos">
                    <form method="post" autocomplete="off">
                        <label for="nom_utilisateur">Nom</label><br>
                        <input type="text" name="nom_utilisateur" id="nom_utilisateur" value="{$nom_utilisateur}"
                            required><br>
                        <label for="prenom">Prénom</label><br>
                        <input type="text" name="prenom" id="prenom" value="{$prenom}" required><br>
                        <label for="mail">Adresse mail</label><br>
                        <input type="mail" name="mail" id="mail" value="{$mail}" required><br>
                        <label for="password">Mot de passe</label><br>
                        <input type="password" name="password" id="password" value="{$password}" required><br>
                        <label for="date_naissance">Date de naissance</label><br>
                        <input type="date" name="date_naissance" id="date_naissance" value="{$date_naissance}"
                            required><br>
                </td>
                <td class="adresse">
                    <label for="numero">N°</label><br>
                    <input type="text" name="numero" id="numero" value="{$numero}" required><br>
                    <label for="complement">Complément</label><br>
                    <input type="text" name="complement" id="complement" value="{$complement}"><br>
                    <label for="rue">Rue</label><br>
                    <input type="text" name="rue" id="rue" value="{$rue}" required><br>
                    <label for="code_postal">Code postal</label><br>
                    <input type="number" name="code_postal" id="code_postal" value="{$code_postal}" required><br>
                    <label for="ville">Ville</label><br>
                    <input type="text" name="ville" id="ville" value="{$ville}" required><br>
                    <label for="region">Région</label><br>
                    <input type="text" name="region" id="region" value="{$region}" required><br>
                    <label for="pays">Pays</label><br>
                    <input type="text" name="nom_pays" id="nom_pays" value="{$pays}"><br>
                    <div>
                        <input type="text" id="pays" placeholder="Votre pays">
                    </div>
                    <ul class="list"></ul>
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
                                            <label for="Linkedin">Lien Linkedin</label><br>
                                            <input type="url" name="lien_linkedin" id="lien_linkedin"
                                                value="{$lien_linkedin}"><br>
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
                                            <img src="/img/indeed.png" alt="">
                                        </td>
                                        <td>
                                            <label for="Indeed">Lien Indeed</label><br>
                                            <input type="url" name="lien_indeed" id="lien_indeed"
                                                value="{$lien_indeed}"><br>
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
                                            <label for="Facebook">Lien Facebook</label><br>
                                            <input type="url" name="lien_facebook" id="lien_facebook"
                                                value="{$lien_facebook}"><br>
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
                                            <img src="/img/site.png" alt="">
                                        </td>
                                        <td>
                                            <label for="perso">Lien Site Personnel</label><br>
                                            <input type="url" name="lien_perso" id="lien_perso"
                                                value="{$lien_perso}"><br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <table class=lien>
                    <tr>
                        <td class="ok">
                            <button href='profil.tpl' type="submit" name="submit" >Enregistrer</button>
                        </td>
                        <td>
                            <a href='profil.tpl'>Annuler</a>
                        </td>
                    </tr>
                </table>
                </form>
            </tr>
        </table>
    </div>

    <p>
        Expériences passées
    </p>
    <!-- Script -->
    <script src="/scripts/liste-pays.js"></script>
</body>