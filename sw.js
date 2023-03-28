const StaticCacheName = 'site-static'
const assets = [
    '/',
    '/index.php',
    '/serviceworker.js',
    '/css/global.css',
    '/css/acceuil.css',
    '/css/connexion.css',
    '/css/footer.css',
    '/css/stage.css',
    '/css/recap-candidature.css',
];

// installe le service worker
self.addEventListener('install', evt =>  {
    console.log('Service worker installé !')
    evt.waitUntil(
        caches.open(StaticCacheName).then(cache => {
        cache.addAll(assets)
    }))
})

// active le service worker
self.addEventListener('activate', evt =>  {
    console.log('Service worker activé !')
})

// intercepte les requêtes
self.addEventListener('fetch', evt =>  {
    console.log('Requête interceptée !', evt)
})

