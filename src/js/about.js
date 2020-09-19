//Map Scripting
// Creating map options
var mapOptions = {
center: [18.9902946,73.1278969],
zoom: 20
}

// Creating a map object
var map = new L.map('map', mapOptions);

// Creating a Layer object
var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

// Adding layer to the map
map.addLayer(layer);

// Creating a marker
var marker = L.marker([18.9902946,73.1278969]);

// Adding marker to the map
marker.addTo(map);



