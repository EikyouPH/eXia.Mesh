<?php

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: index.php");
  exit;
}
// Connect to the database
$conn = mysqli_connect('main.leskientz.ovh', 'api', 'Ludovic03', 'projet_web');
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT nom_utilisateur, prenom, PASSWORD, mail, date_naissance, numero, complement, rue, nom_ville, code_postal, region, nom_pays FROM utilisateur JOIN adresse ON utilisateur.ID_adresse = adresse.ID_adresse JOIN ville ON adresse.ID_ville = ville.ID_ville JOIN region ON ville.ID_region = region.ID_region JOIN pays ON pays.ID_pays = region.ID_pays WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
        $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $nom_utilisateur = $row['nom_utilisateur'];
            $prenom = $row['prenom'];
            $password = $row['PASSWORD'];
            $mail = $row['mail'];
            $date_naissance = $row['date_naissance'];
            $numero = $row['numero'];
            $complement = $row['complement'];
            $rue = $row['rue'];
            $ville = $row['nom_ville'];
            $code_postal = $row['code_postal'];
            $region = $row['region'];
            $pays = $row['nom_pays'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="titre">Profil</title>

    <link rel="stylesheet" href="style-global.css">
    <link rel="stylesheet" href="style-profil.css">
    <link rel="stylesheet" href="style-footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<?php include('header.html'); ?>

<body>
    <table class="page-profil">
        <tr>
            <td class="personne">
                <img src="/img/personne.png" alt="Image du compte">
            </td>
            <td>
                <?php
            echo "Nom : $nom_utilisateur<br>";
            echo "Prenom : $prenom<br>";
                echo "Adresse mail : $mail<br>";
                echo "Password : $password<br>";
                echo "Date de naissance : $date_naissance<br>";
                echo "Adresse : $numero $complement $rue, $code_postal, $ville, $region, $pays<br>";
                ?>
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
                                        <a id="site-perso" href="bonjourjesuisunlien.site-personnel.fr"> Site personnel</a>
                                    </td>
                                </tr>
                            </table>
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
        Expériences passées
    </p>
    <a href="edit-profil.php"><img src="/img/stylo.png" alt="editer" id="img-edit" width="40"></a>
</body>
<?php include('footer.html'); ?>

</html>