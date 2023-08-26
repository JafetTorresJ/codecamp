if(document.querySelector('#mapa')){
    const lat=19.825400
    const lng =-97.361289
    const zoom = 16

    const map = L.map('mapa').setView([lat, -lng], zoom);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([lat, lng]).addTo(map)
    .bindPopup(`
    <h2 clas="mapa__heading">Taller Tecnologico</h2>
    <p class="mapa__texto">Centro de convenciones de teziutlan</p>
    `)
    .openPopup();
}