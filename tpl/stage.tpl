<link rel="stylesheet" href="/css/style-stage.css">

<body>
    <table>
        <tr>
            <td>
                Nom de stage
            </td>
            <td rowspan="3">
                Lieu du stage : {$numero} {$complement} {$rue}, {$code_postal}, {$ville}, {$region}, {$pays} <br>
                Durée : {$duree} <br>
                Rémunération : {$remuneration} €/h
            </td>
            <td>
                Date de début : {$date_debut}
            </td>

        </tr>
        <tr>
            <td>
                {$entreprise} + note
            </td>
            <td>
            Date de fin : {$date_fin}
            </td>
        </tr>
        <tr>
            <td>
                Domaines : {$domaine1} {$domaine2}
            </td>
            <td>
            Date de publication : {$date_publication}
            </td>
        </tr>
    </table>

    <div>
        <h2>Description du poste</h2>
        <p>{$detail}</p>
    </div>
    {$nombre_places} places restantes

</body>