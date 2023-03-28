// installe le service worker

self.addEventListener('install', evt =>  {
    console.log('Service worker installé !')
})

// active le service worker
self.addEventListener('activate', evt =>  {
    console.log('Service worker activé !')
})

// intercepte les requêtes
self.addEventListener('fetch', evt =>  {
    console.log('Requête interceptée !', evt)
}

