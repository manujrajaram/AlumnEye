//Map Scripting
// Creating map options
var mapOptions = {
center: [18.9908226,73.1276162],
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

marker.bindPopup('<b>Pillai College of Engineering</b>'+'<p>Dr. K. M. Vasudevan Pillai Campus, Plot No. 10, Sector 16, New Panvel East, Navi Mumbai, Maharashtra 410206 <br><br>Phone: +912227456030<p>'+'<br>Find <a style="color:blue; text-decoration: none;" href="https://www.google.com/maps/dir//Pillai+College+of+Engineering,+New+Panvel,+Dr.+K.+M.+Vasudevan+Pillai+Campus,+Plot+No.+10,+Sector+16,+New+Panvel+East,+Navi+Mumbai,+Maharashtra+410206/@18.990201,73.1254814,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3be7e866de88667f:0xc1c5d5badc610f5f!2m2!1d73.1276701!2d18.990201!3e0">Direction</a>').openPopup();
marker.addTo(map); // Adding marker to the map



//Video Tag JS Buttons
var video = document.getElementById("abtVid");
var btn = document.getElementById("myBtn");
function vidFunction(){
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
    }else{
        video.pause();
        btn.innerHTML = "Play";
    }
}
function screenFunction(){
    if (video.requestFullscreen){
        video.requestFullscreen();
    }else if (video.mozRequestFullScreen){ /* Firefox */
        video.mozRequestFullScreen();
    }else if (video.webkitRequestFullscreen){ /* Chrome, Safari and Opera */
        video.webkitRequestFullscreen();
    }else if (video.msRequestFullscreen){ /* IE/Edge */
        video.msRequestFullscreen();
    }
}