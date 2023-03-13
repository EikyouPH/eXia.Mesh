let nom = "Varoquier";
let prenom = "Alanis";
let dateNaissance = "18/06/2003";
let pilote = "Amira";
let promotion = "A2";

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

let champ = document.getElementById("pilote");
console.log(champPilote.innerHTML);

champPilote.innerHTML = "Pilote : " + pilote;