<?php
require_once 'templates/header.php';
?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
    <script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>

    

</head>
<body>
    <div class="container"data-aos="zoom-in-down" data-aos-duration="1000">
        <h2 style="text-align: center; margin-bottom: 30px;">Contactez-nous</h2>
        <form action="/submit_form" method="post">
            <div class="form-group">
                <label for="name"><h4>Nom:</h4></label>
                <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" name="name" require>
            </div>
            <div class="form-group">
                <label for="email"><h4>Email:</h4></label>
                <input type="email" class="form-control" id="email" placeholder="Entrez votre email" name="email" require>
            </div>
            <div class="form-group">
                <label for="message"><h4>Message:</h4></label>
                <textarea class="form-control" id="message" placeholder="Entrez votre message" name="message" require ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>

    <div class="infoBox" data-aos="zoom-in-down" data-aos-duration="1000" >
        <h2>Informations de contact</h2>
        <p>Adresse: 22 Passage Saint Bernard, 75011 Paris</p>
        <p>Téléphone: 01 49 23 06 00</p>
        <p>Email: contact@vdmh.com
    </div>

    <div class="miniMap" id="map" data-aos="zoom-in-down" data-aos-duration="1000" ></div>

<script>
var map = new ol.Map({
    target: 'map',
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        })
    ],
    view: new ol.View({
        center: ol.proj.fromLonLat([2.380086, 48.852252]), // Remplacez par les coordonnées de votre entreprise
        zoom: 18
    })
});

var layer = new ol.layer.Vector({
    source: new ol.source.Vector({
        features: [
            new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.fromLonLat([2.380086, 48.852252])), // Remplacez par les coordonnées de votre entreprise
                style: new ol.style.Style({
                    image: new ol.style.Icon({
                        anchor: [0.5, 0.5],
                        anchorXUnits: 'fraction',
                        anchorYUnits: 'fraction',
                        src: "/upload/mark.jpeg" // Remplacez par le chemin vers votre image de marqueur
                    })
                })
            })
        ]
    })
});

map.addLayer(layer);
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>

<script src="script.js"></script>

<?php
require_once 'templates/footer.php';
?>