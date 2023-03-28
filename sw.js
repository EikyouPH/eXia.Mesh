// installe le service worker

self.addEventListener('install', evt =>  {
    console.log('Service worker installé !')
})

// active le service worker
self.addEventListener('activate', evt =>  {
    console.log('Service worker activé !')
})