
// Variables utilisées pour l'affichage du profil

let nom = "Varoquier";                              // Variable fictives contenant les informations de l'utilisateur de la session
let prenom = "Alanis";
let dateNaissance = "18/06/2003";
let pilote = "Amira";
let promotion = "A2";
let centre = "Strasbourg";
let entreprise = "Nagarro";
let linkedin = "jesuisunlien.linkedin.fr";
let indeed = "jesuisunlien.indeed.fr";
let facebook = "jesuisunlien.facebook.fr";
let site = "jesuisunlien.site-personnel.fr";

// Changement du champ "nom" par la variable de l'utillisateur de la session

let champNom = document.getElementById("nom");      // Récupération de l'élément HTML "nom" par son id
champNom.innerHTML = "Nom : " + nom;                // Changement de la valeur de l'élément HTML "nom"

// Changement du champ "prénom" par la variable de l'utillisateur de la session

let champPrenom = document.getElementById("prenom");
champPrenom.innerHTML = "Prénom : " + prenom;

// Changement du champ "date de naissance" par la variable de l'utillisateur de la session

let champDateNaissance = document.getElementById("date-naissance");
champDateNaissance.innerHTML = "Date de naissance : " + dateNaissance;

// Changement du champ "pilote" par la variable de l'utillisateur de la session

let champPilote = document.getElementById("pilote");
champPilote.innerHTML = "Pilote : " + pilote;

let champPromo = document.getElementById("promotion");
champPromo.innerHTML = "Promotion : " + promotion;

// Changement du champ "promotion" par la variable de l'utillisateur de la session

let champCentre = document.getElementById("centre");
champCentre.innerHTML = "Centre : " + centre;

// Changement du champ "centre" par la variable de l'utillisateur de la session

let champEntreprise = document.getElementById("entreprise");
champEntreprise.innerHTML = "Entreprise : " + entreprise;

// Changement du champ "entreprise" par la variable de l'utillisateur de la session

let champLinkedin = document.getElementById("linkedin");
champLinkedin.innerHTML = "<a id=\"linkedin\" href=\"" + linkedin + ".fr\"> Linkedin</a>";

// Changement du lien "linkedin" par la variable de l'utillisateur de la session

let champIndeed = document.getElementById("indeed");
champIndeed.innerHTML = "<a id=\"indeed\" href=\"" + indeeed + ".fr\"> Indeed</a>";

// Changement du lien "facebook" par la variable de l'utillisateur de la session

let champFacebook = document.getElementById("facebook");
champFacebook.innerHTML = "<a id=\"facebook\" href=\"" + facebook + ".fr\"> Facebook</a>";

// Changement du lien "site personnel" par la variable de l'utillisateur de la session

let champSite = document.getElementById("site-perso");
champSite.innerHTML = "<a id=\"site-perso\" href=\"" + site + ".fr\"> Site personnel</a>";