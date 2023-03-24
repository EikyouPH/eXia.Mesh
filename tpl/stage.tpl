<link rel="stylesheet" href="/css/style-stage.css">

<body>
    <table class="table_stage">
        <tr>
            <td colspan="3">
                <h2>{$nom_stage}<h2>
            </td>
        </tr>
        <tr>    
            <td rowspan="3">
                Lieu du stage : <br> {$numero} {$complement} {$rue}, <br> {$code_postal}, {$ville}, <br>{$region}, {$pays} <br><br>
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
    </table>

    <div id="description">
        <h2>Description du poste</h2>
        <p>{$detail}</p>
        {$nombre_places} places restantes
    </div>
    <table class = bouton-postuler>
        <tr>
            <td>
                <a target="_blank" href="./postuler.php">Postuler</a>
            </td>
        </tr>
    </table>
    
</body>