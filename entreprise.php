<?php
require_once 'templates/header.php';
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <div class="header">
        <h1><strong>             Types d'interventions & projets             </strong></h1>
        <!-- <button>Contacter un expert</button> -->
    </div>
    <body>
        
   
    <div class="content" data-aos="fade-up" data-aos-duration="1000" >
        <img src="/upload/ing.jpeg" alt="">
    </div>



    <div class="card-container">
    <div class="card">
        <div class="scroll-margin" ></div>
        <h5 class="card-title">Conception / Développement MOE</h5>
        <p class="card-text">
La MOE conçoit, développe et assure la qualité du projet en collaboration avec les MOA et les développeurs.<span id="more1" style="display: none;"> La MOE conçoit et développe le projet, assurant la programmation, le développement et les tests. Elle garantit la cohérence avec les besoins du client et la gestion efficace des ressources. La collaboration avec les MOA et les développeurs est essentielle. La MOE assure le suivi du projet jusqu'à sa livraison. Son rôle est de garantir la qualité et la conformité aux spécifications.</span></p>
        <button class="btn btn-primary" onclick="expandCard(this)">Voir plus</button>
    </div>
    <div class="card">
        <div class="scroll-margin" ></div>
        <h5 class="card-title">Assistance MOA</h5>
        <p class="card-text">L'AMOA est un service externe qui aide la MOA à définir les besoins métier, choisir des solutions et piloter les projets.<span id="more1" style="display: none;">L'AMOA, un service externe, assiste la MOA dans la définition, la planification et la réalisation de projets. Elle clarifie les besoins métier, sélectionne des solutions adaptées et pilote leur mise en œuvre. Dès le début du projet, elle élabore le cahier des charges et participe à la sélection des prestataires. Tout au long du processus, elle conseille et contrôle, garantissant que les livrables répondent aux attentes et aux contraintes initiales. En résumé, l'AMOA joue un rôle crucial en assurant l'alignement des projets sur les objectifs métier et leur réussite.</span></p>
        <button class="btn btn-primary" onclick="expandCard(this)">Voir plus</button>
    </div>
    <div class="card">
        <div class="scroll-margin" ></div>
        <h5 class="card-title">Pilotage & Coordination projet</h5>
        <p class="card-text">Le pilotage et la coordination de projet consistent à superviser et organiser les activités pour atteindre les objectifs fixés dans les délais impartis.<span id="more1" style="display: none;">Le pilotage de projet implique de superviser les activités pour atteindre les objectifs dans les délais impartis, en prenant des décisions stratégiques pour orienter le projet vers le succès. La coordination assure une collaboration efficace entre les équipes et les parties prenantes pour garantir la cohérence et l'efficacité des actions entreprises. Cela inclut la planification des tâches, l'allocation des ressources, la gestion des risques et des parties prenantes, ainsi que le suivi de l'avancement et la résolution des problèmes.</span></p>
        <button class="btn btn-primary" onclick="expandCard(this)">Voir plus</button>
    </div>
    <div class="card">
        <div class="scroll-margin" ></div>
        <h5 class="card-title">Expertise fonctionnelle & technique</h5>
        <p class="card-text">L'expertise fonctionnelle définit les besoins métier, tandis que l'expertise technique met en œuvre les solutions informatiques correspondantes.<span id="more1" style="display: none;">L'expertise fonctionnelle définit les besoins métier et propose des solutions adaptées, en se basant sur une compréhension approfondie des processus métier. L'expertise technique se concentre sur la mise en œuvre de ces solutions, impliquant le choix des technologies, le développement logiciel, et l'intégration de systèmes. Elle nécessite une maîtrise des langages de programmation et des architectures système.</span></p>
        <button class="btn btn-primary" onclick="expandCard(this)">Voir plus</button>
    </div>
</div>


<div class="container-part">
  <div id="section-texte">
    <p><strong>Découvrez notre expertise inégalée dans la conception et le développement de projets !</strong>  Notre entreprise offre une gamme diversifiée de services professionnels, y compris la conception et le développement MOE, l’assistance MOA, et bien plus encore. Nous proposons des forfaits adaptés à vos besoins spécifiques, transformant les processus complexes en solutions simplifiées et efficaces. Nos interventions sont sur mesure, conçues pour répondre aux exigences uniques de chaque client. Faites confiance à notre équipe d’experts pour piloter vos projets avec précision et efficacité. <strong>Rejoignez-nous aujourd’hui pour une transformation réussie de vos projets !</strong></p>
  </div>
  
  <div id="part-image">
    <img src="/upload/lgt.jpeg" alt="Votre Image" style="width:100%;">
  </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>


<script src="script.js"></script>
 




<?php
require_once 'templates/footer.php';
?>