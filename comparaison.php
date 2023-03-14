<?php include('verif-session.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="titre">Comparaison</title>

    <link rel="stylesheet" href="style-global.css">
    <link rel="stylesheet" href="style-comparaison.css">
    <link rel="stylesheet" href="style-footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<?php include('header.html'); ?>

<body>
    <div>
        <h2>Comparaison (Entreprise/Stage)</h2>
    </div>
    <div>
        <table id="comparaison">
            <tr>
                <thead>
                    <tr>
                        <th>Intitulé</td>
                        <th>
                            Critère 1
                        </th>
                        <th>Critère 2</td>
                    </tr>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nom entreprise</td>
                    <td>Nagarro</td>
                    <td>Prism</td>
                </tr>
                <tr>
                    <td>Lieu</td>
                    <td>Strasbourg</td>
                    <td>Paris</td>
                </tr>
                <tr>
                    <td>Rémunération</td>
                    <td>8€/h</td>
                    <td>10€/h</td>
                </tr>
                <tr>
                    <td>Evaluation de l'entreprise</td>
                    <td>4/5</td>
                    <td>5/5</td>
                </tr>
            </tbody>
            </tr>
        </table>
    </div>
</body>
<?php include('footer.html'); ?>

</html>