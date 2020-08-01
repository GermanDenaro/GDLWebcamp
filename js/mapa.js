document.addEventListener('DOMContentLoaded', function() {

    var map = L.map('mapa').setView([-34.668278, -58.560728], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-34.668278, -58.560728]).addTo(map)
        .bindPopup('GDLWEBCAMP </br> Entradas en stock.')
        .openPopup()
        .bindTooltip('Por entrada Avenida de Mayo. Preguntar por el señor Mayor.')
        .openTooltip();

});