<link rel="stylesheet" href="/css/recherche.css">

<body>
    <div class="cadre">
        <div class="cadre-recherche">
            <table id="recherche">
                <form>
                    <tr>
                        <td>
                            <input type="search" id="barre" placeholder="Recherche...">
                        </td>
                    </tr>
                    <tr>
                        <td id="choix">
                            <input type="radio" name="sat" id="stage" value="Oui" checked="checked">
                            <label for="stage">Stage</label>
                            <input type="radio" name="sat" id="personne" value="Non">
                            <label for="personne">Personne</label>
                            <input type="radio" name="sat" id="entreprise" value="Non">
                            <label for="entreprise">Entreprise</label>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        <table class="resultat">
            <tr>
                <td>
                    <div class="header">
                        <div class="titre">Création d'application</div>
                        <div class="entreprise">PSG</div>
                    </div>
                    <div class="contenu">
                        <a href="wishlist.php" target="_blank" aria-label="voir la wishlist">
                            <div class="texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed
                                euismod,
                                nisl sit amet ultricies lacinia, nisl nisl aliquam nisl, eget aliquam nisl nisl sit
                                amet
                                nisl.
                                Sed euismod, nisl sit amet ultricies lacinia, nisl nisl aliquam nisl, eget aliquam
                                nisl
                                nisl
                                sit
                                amet nisl.
                            </div>
                            <div class="lien"><a href="#"><img src="/img/fleche-droite.svg"
                                        alt="Fleche vers la droite"></a>
                            </div>
                        </a>
                    </div>
                </td>
            </tr>
        </table>

    </div>
</body>