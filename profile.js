let nom = "Varoquier";
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

let champNom = document.getElementById("nom");
console.log(champNom.innerHTML);
champNom.innerHTML = "Nom : " + nom;

let champPrenom = document.getElementById("prenom");
console.log(champPrenom.innerHTML);
champPrenom.innerHTML = "Prénom : " + prenom;

let champDateNaissance = document.getElementById("date-naissance");
console.log(champDateNaissance.innerHTML);
champDateNaissance.innerHTML = "Date de naissance : " + dateNaissance;

let champPilote = document.getElementById("pilote");
console.log(champPilote.innerHTML);
champPilote.innerHTML = "Pilote : " + pilote;

let champPromo = document.getElementById("promotion");
console.log(champPromo.innerHTML);
champPromo.innerHTML = "Promotion : " + promotion;

let champCentre = document.getElementById("centre");
console.log(champCentre.innerHTML);
champCentre.innerHTML = "Centre : " + centre;

let champEntreprise = document.getElementById("entreprise");
console.log(champEntreprise.innerHTML);
champEntreprise.innerHTML = "Entreprise : " + entreprise;

let champLinkedin = document.getElementById("linkedin");
console.log(champLinkedin.innerHTML);
champLinkedin.innerHTML = "<a id=\"linkedin\" href=\"" + Linkedin + ".fr\"> Linkedin</a>";

let champIndeed = document.getElementById("indeed");
console.log(champIndeed.innerHTML);
champIndeed.innerHTML = "<a id=\"indeed\" href=\"" + Indeeed + ".fr\"> Indeed</a>";

let champFacebook = document.getElementById("facebook");
console.log(champFacebook.innerHTML);
champFacebook.innerHTML = "<a id=\"facebook\" href=\"" + Facebook + ".fr\"> Facebook</a>";

let champSite = document.getElementById("site-perso");
console.log(champSite.innerHTML);
champSite.innerHTML = "<a id=\"site-perso\" href=\"" + site + ".fr\"> Site personnel</a>";