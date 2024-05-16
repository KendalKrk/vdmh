    <?php
    require_once 'templates/header.php';
    ?>

    <link rel="stylesheet" href="style.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    

    <style>
        @media (max-width: 600px) {
            .carousel-item img {
                width: 100%;
            }
            
        
        }
    </style>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-duration="2000">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="/upload/carous.jpeg" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/upload/lgtss.jpeg" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
                <img src="/upload/pain.jpeg" class="d-block w-100 " alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>



        <div id="presentation" data-aos="fade-up" data-aos-duration="2000" >
            <p class="custom-text"><strong>VDMH</strong>  exerce l'activité de Conseil et d'Ingénierie en Systèmes d'Information depuis 1987 en apportant à ses clients la <strong>COMPETENCE</strong> et la <strong>FIABILITE</strong>, deux atouts essentiels à son activité pour mener à bien ses projets.
            Les consultants de <strong>VDMH</strong> sont tous expérimentés, et possèdent un ou plusieurs champs d'action ciblés, sur lesquels nos clients peuvent se reposer afin de mener à bien leurs projets.
        Leurs points forts sont l'approche <strong>Méthodologique</strong> forte et l'intégration rapide aux équipes en place, que ce soit sur des interventions de Pilotage de projets, de Maitrise d'ouvrage, de développement ou de Support.</p>
        </div>






        <div class="pls" data-aos="fade-left" data-aos-duration="2000">
        <img src="/upload/cd.jpeg" alt="">
    </div>


        <div id="textmis" data-aos="fade-up" data-aos-delay="400">
            <h1><strong>Nos 3 Pôles</strong></h1>
        </div>



        <div class="img-flex-container" style="display: flex; justify-content: space-between; flex-wrap: wrap; margin-bottom: 50px; margin-top: -50px">
    <img src="/upload/infra.jpeg" class="rounded" alt="..." style="width: 465px; height:auto; margin-right: 20px; border-radius: 700px;" data-aos="fade-up" data-aos-delay="400">
    <img src="/upload/ttr.jpeg" class="rounded" alt="..." style="width:465px; height:auto;margin-right: 20px; border-radius: 400px;" data-aos="fade-up" data-aos-delay="600">
    <img src="/upload/nex.jpeg" class="rounded" alt="..." style="width: 465px; height:auto; border-radius: 80px;" data-aos="fade-up" data-aos-delay="800">
</div>


        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        </body>

        <script src="script.js"></script>


    <?php
    require_once 'templates/footer.php';
    ?>
