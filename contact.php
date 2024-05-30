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
<div class="container" data-aos="zoom-in-down" data-aos-duration="1000">
    <h2 style="text-align: center; margin-bottom: 30px;">Contactez-nous</h2>
    <form action="send_email.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name"><h4>Nom:</h4></label>
            <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" name="name" required>
        </div>
        <div class="form-group">
            <label for="email"><h4>Email:</h4></label>
            <input type="email" class="form-control" id="email" placeholder="Entrez votre email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message"><h4>Message:</h4></label>
            <textarea class="form-control" id="message" placeholder="Entrez votre message" name="message" required></textarea>
        </div>
        <div class="form-group">
            <label for="file"><h4>Pièce jointe:</h4></label>
            <input type="file" class="form-control" id="file" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>

    <div class="infoBox" data-aos="zoom-in-down" data-aos-duration="1000" >
        <h2>Informations de contact</h2>
        <p>Adresse: 81 Avenue Arisitde Briand, 92120 Montrouge</p>
        <p>Téléphone: 01 49 23 06 00</p>
        <p>Email: rudy@vdmh.com
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


<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'kendal3@hotmail.fr'; 
    $subject = 'Nouveau message de votre site web';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $body = "Nom: $name\nE-mail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Merci pour votre message !';
    } else {
        echo 'Il y a eu une erreur lors de l\'envoi de votre message. Veuillez réessayer.';
    }
} else {
    echo 'Il y a eu une erreur lors de l\'envoi de votre message. Veuillez réessayer.';
}
?> -->




<?php
require_once 'templates/footer.php';
?>