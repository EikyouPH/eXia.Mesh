<?php include('verif-session.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="titre">Création compte</title>

    <link rel="stylesheet" href="css/style-global.css">
    <link rel="stylesheet" href="css/style-creation.css">
    <link rel="stylesheet" href="css/style-footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<?php include('header.html'); ?>

<body>
    <div>
        <h2>Création de stage</h2>
    </div>
    <div id="container">
        <fieldset>
            <legend>Informations du stage</legend>
            <label for="nom-stage">Nom du stage</label>
            <input type="text" name="nom-stage" id="nom-stage" placeholder="Stage de fin d'étude">
            <label for="entreprise">Entreprise</label>
            <input type="text" name="entreprise" id="entreprise" placeholder="CESI">
            <br>
            <br>
            <label for="date-debut">Date de début</label>
            <input type="date" name="date-debut" id="date-debut">
            <label for="date-fin">Date de fin</label>
            <input type="date" name="date-fin" id="date-fin">
            <br>
            <br>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description du stage"></textarea>
        </fieldset>
        <fieldset>
            <legend>Informations complémentaires</legend>
            <label for="duree">Durée</label>
            <input type="number" name="duree" id="duree" placeholder="6">
            <label for="duree-type">Type de durée</label>
            <select name="duree-type" id="duree-type">
                <option value="semaine">Semaine</option>
                <option value="mois">Mois</option>
                <option value="jour">Jour</option>
            </select>
            <br>
            <br>
            <label for="remuneration">Rémunération</label>
            <input type="number" name="remuneration" id="remuneration" placeholder="500">
            <label for="remuneration-type">Type de rémunération</label>
            <select name="remuneration-type">
                <option value="euros">Euros</option>
                <option value="euros-heure">Euros par heure</option>
            </select>
        </fieldset>
    </div>
    <div id="bouton">
        <button type="submit">Annuler</button>
        <button type="submit">Valider</button>
    </div>
    </div>
</body>
<?php include('footer.html'); ?>

</html>