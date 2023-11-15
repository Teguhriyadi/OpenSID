<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <style>
        #map {
            height: 600px;
        }

        .custom-popup {
            width: 300px;
            height: auto;
        }
    </style>
</head>
<body>

    <div id="map"></div>

    <script>
        var map = L.map('map').setView(
            [-6.1600212, 106.8275618],
            13);

        var marker = L.marker([-6.1600212, 106.8275618]).addTo(map);

        var popupContent = `
            <div class="custom-popup">
                <strong>PT Jaring Solusi Aplikasi</strong>
                <br>
                <span>Jakarta Pusat, Kemayoran</span>
                <hr>
                <img style='width: 100%' src='images/images-rs.jpeg'>
                <hr>
                <strong>Longitude: </strong> -6.1699883
                <br>
                <strong>Latitude: </strong> 106.8283529
                <br>
                <strong>Deskripsi: </strong>
                <br>
                PT Jaring Solusi Aplikasi adalah perusahaan yang bergerak di bidang jasa layanan IT
            </div>
        `;

        var popup = L.popup()
            .setLatLng([-6.1600212, 106.8275618])
            .setContent(popupContent);

        marker.bindPopup(popup)

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    </script>
    
</body>
</html>