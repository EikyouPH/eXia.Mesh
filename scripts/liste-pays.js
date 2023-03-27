let pays = [
  "France",
  "Luxembourg",
  "Irlande",
  "Afghanistan",
  "Albanie",
  "Antarctique",
  "Algérie",
  "Andorre",
  "Angola",
  "Azerbaïdjan",
  "Argentine",
  "Australie",
  "Autriche",
  "Bahamas",
  "Bahreïn",
  "Bangladesh",
  "Arménie",
  "Barbade",
  "Belgique",
  "Bermudes",
  "Bhoutan",
  "Bolivie",
  "Bosnie-Herzégovine",
  "Botswana",
  "Brésil",
  "Bulgarie",
  "Birmanie",
  "Burundi",
  "Biélorussie",
  "Cambodge",
  "Cameroun",
  "Canada",
  "Cap-vert",
  "République Centrafricaine",
  "Sri Lanka",
  "Tchad",
  "Chili",
  "Chine",
  "Taïwan",
  "Colombie",
  "Congo",
  "Costa Rica",
  "Croatie",
  "Cuba",
  "Chypre",
  "République Tchèque",
  "Bénin",
  "Danemark",
  "République Dominicaine",
  "Équateur",
  "El Salvador",
  "Guinée Équatoriale",
  "Éthiopie",
  "Érythrée",
  "Estonie",
  "Fidji",
  "Finlande",
  "Djibouti",
  "Gabon",
  "Géorgie",
  "Gambie",
  "Palestine",
  "Allemagne",
  "Ghana",
  "Kiribati",
  "Grèce",
  "Guam",
  "Guatemala",
  "Guinée",
  "Guyana",
  "Haïti",
  "Vatican)",
  "Honduras",
  "Hong-Kong",
  "Hongrie",
  "Islande",
  "Inde",
  "Indonésie",
  "Iran",
  "Iraq",
  "Israël",
  "Italie",
  "Côte d Ivoire",
  "Jamaïque",
  "Japon",
  "Kazakhstan",
  "Jordanie",
  "Kenya",
  "Corée du Nord",
  "Corée du Sud",
  "Koweït",
  "Kirghizistan",
  "Liban",
  "Lesotho",
  "Lettonie",
  "Libéria",
  "Liechtenstein",
  "Listenbourg",
  "Lituanie",
  "Madagascar",
  "Malawi",
  "Malaisie",
  "Maldives",
  "Mali",
  "Malte",
  "Mauritanie",
  "Maurice",
  "Mexique",
  "Monaco",
  "Mongolie",
  "Moldavie",
  "Maroc",
  "Mozambique",
  "Oman",
  "Namibie",
  "Nauru",
  "Népal",
  "Pays-Bas",
  "Aruba",
  "Nouvelle-Calédonie",
  "Vanuatu",
  "Nouvelle-Zélande",
  "Nicaragua",
  "Niger",
  "Nigéria",
  "Niué",
  "Norvège",
  "Palaos",
  "Pakistan",
  "Panama",
  "Papouasie-Nouvelleuinée",
  "Paraguay",
  "Pérou",
  "Philippines",
  "Pologne",
  "Portugal",
  "Guinée-Bissau",
  "Porto Rico",
  "Qatar",
  "Roumanie",
  "Russie",
  "Rwanda",
  "Anguilla",
  "Saint-Vincent-et-l Grenadines",
  "Saint-Marin",
  "Sao Tomé-et-Princi",
  "Arabie Saoudite",
  "Sénégal",
  "Seychelles",
  "Sierra Leone",
  "Singapour",
  "Slovaquie",
  "Viet Nam",
  "Slovénie",
  "Somalie",
  "Afrique du Sud",
  "Zimbabwe",
  "Espagne",
  "Soudan",
  "Suriname",
  "Swaziland",
  "Suède",
  "Suisse",
  "Syrie",
  "Tadjikistan",
  "Thaïlande",
  "Togo",
  "Tokelau",
  "Tonga",
  "Trinité-et-Tobago",
  "Émirats Arabes Uni",
  "Tunisie",
  "Turquie",
  "Turkménistan",
  "Tuvalu",
  "Ouganda",
  "Ukraine",
  "Macédoine",
  "Égypte",
  "Royaume-Uni",
  "Tanzanie",
  "États-Unis",
  "Burkina Faso",
  "Uruguay",
  "Ouzbékistan",
  "Venezuela",
  "Samoa",
  "Yémen",
  "Serbie",
  "Monténégro",
  "Zambi"
]


//Sort names in ascending order
let sortedPays = pays.sort();
//reference
let input = document.getElementById("pays");
//Execute function on keyup
input.addEventListener("keyup", (e) => {
  //loop through above array
  //Initially remove all elements ( so if user erases a letter or adds new letter then clean previous outputs)
  removeElements();
  for (let i of sortedPays) {
    //convert input to lowercase and compare with each string
    if (
      i.toLowerCase().startsWith(input.value.toLowerCase()) &&
      input.value != ""
    ) {
      //create li element
      let listItem = document.createElement("li");
      //One common class name
      listItem.classList.add("list-items");
      listItem.style.cursor = "pointer";
      listItem.setAttribute("onclick", "displayPays('" + i + "')");
      //Display matched part in bold
      let word = "<b>" + i.substr(0, input.value.length) + "</b>";
      word += i.substr(input.value.length);
      //display the value in array
      listItem.innerHTML = word;
      document.querySelector(".list").appendChild(listItem);
    }
  }
});
function displayPays(value) {
  input.value = value;
  removeElements();
}
function removeElements() {
  //clear all the item
  let items = document.querySelectorAll(".list-items");
  items.forEach((item) => {
    item.remove();
  });
}