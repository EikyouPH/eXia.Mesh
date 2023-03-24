var codePostal = '';
const CARTO_BASE_URL = 'https://apicarto.ign.fr/api/codes-postaux/communes/' + codePostal

const codePostalInput = $('#codePostal')
const villeSelect = $('#ville')

codePostalInput.on('input', async () => {
    const codePostal = codePostalInput.val()

    const data = await $.getJSON(CARTO_BASE_URL + codePostal)

    villeSelect.empty()
    
  if (data.length === 0) {
    villeSelect.append(`<option value="">Aucune ville trouvée</option>`)
  } else {
    data.forEach(ville => {
        villeSelect.append(`<option value="${ville.nomCommune}">${ville.nomCommune}</option>`)
    })
  }
})