if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js')
        .then((reg) => console.log('Le service worker est enregistré !', reg))
        .catch((err) => console.log('Echec de l\'enregistrement du service worker !', err))    
}




