const StaticCacheName = 'site-static'
const assets = [
    '/',
    '/index.php',
    '/js/serviceworker.js'
];

// installe le service worker
self.addEventListener('install', evt =>  {
    console.log('Service worker installé !')
    caches.open(StaticCacheName).then(cache => {
        cache.addAll([
            '/',
            '/index.html',
            '/js/app.js',
            '/css/style.css',
            '/img/dish.png'
        ])
    }
})

// active le service worker
self.addEventListener('activate', evt =>  {
    console.log('Service worker activé !')
})

// intercepte les requêtes
self.addEventListener('fetch', evt =>  {
    console.log('Requête interceptée !', evt)
})

