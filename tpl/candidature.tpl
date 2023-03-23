<link rel="stylesheet" href="/css/candidature.css">

<body>
    <div>
        <table class="table_stage">
            <tr>
                <td colspan="3">
                    <h3>{$nom_stage}<h3>
                </td>
            </tr>
            <tr>
                <td rowspan="3">
                    Lieu du stage : <br> {$numero} {$complement} {$rue}, <br> {$code_postal}, {$ville}, <br>{$region},
                    {$pays} <br><br>
                    Durée : {$duree} <br>
                    Rémunération : {$remuneration} €/h
                </td>
                <td>
                    Date de début : {$date_debut}
                </td>

            </tr>
            <tr>
                <td>
                    Entreprise : {$entreprise} + note
                </td>
                <td>
                    Date de fin : {$date_fin}
                </td>
            </tr>
            <tr>
                <td>
                    Domaines : {$domaine1}, {$domaine2}
                </td>
                <td>
                    Date de publication : {$date_publication}
                </td>
            </tr>
            <tr>
                <td id="description" colspan="3">
                    <h2>Description du poste</h2>
                    <p>{$detail}</p>
                    {$nombre_places} places restantes
                </td>
            </tr>
        </table>

        <table class="table_candidature">
            <tr>
                <td>
                    <h4>Informations personnelles</h4>
                    Nom : {$nom_utilisateur}<br>
                    Prenom : {$prenom}<br>
                    Adresse mail : {$mail}<br>
                    Date de naissance : {$date_naissance}<br>
                    Adresse : {$numero} {$complement} {$rue}, {$code_postal}, {$ville}, {$region}, {$pays}<br>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Votre réponse</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
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
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="liens">
                        <a href="/site2/CV/1">Votre CV</a>
                        <a href="/site2/lettre/1">Votre lettre de motivation</a>
                    </div>
        </table>
    </div>
</body>