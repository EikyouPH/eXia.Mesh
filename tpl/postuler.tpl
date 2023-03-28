<link rel="stylesheet" href="/css/postuler.css">

<body>
    <div>
        <form id="postuler" method="post">
            <label for="nom_utilisateur">Nom</label><br>
            <input type="text" name="nom_utilisateur" id="nom_utilisateur" value="{$nom_utilisateur}" required><br>

            <label for="prenom">Prénom</label><br>
            <input type="text" name="prenom" id="prenom" value="{$prenom}" required><br>
            <label for="mail">Adresse mail</label><br>
            <input type="mail" name="mail" id="mail" value="{$mail}" required><br>
            <label for="date_naissance">Date de naissance</label><br>
            <input type="date" name="date_naissance" id="date_naissance" value="{$date_naissance}" required><br>
            <label for="lettre-motivation">Lettre de motivation</label><br>
            <textarea class="redimensionnable type=" text" name="lettre-motivation" id="lettre-motivation"
                value="{$lettre_motivation}" required>{$lettre_motivation}</textarea><br>
        </form>
    </div>
    <div>
        <table class="lien">
            <tr>
                <td>
                    <a href='/php/confirmation.php' type="submit" name="submit">Envoyer</a>
                </td>
                <td>
                    <a href="./postuler.php" type="submit" name="submit">Annuler</a>
                </td>
            </tr>
        </table>
    </div>
</body>