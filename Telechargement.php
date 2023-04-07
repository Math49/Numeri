<?php
    require "Fragments/head.php";
?>

<link rel="stylesheet" href="Style/téléchargement.css">
<script src="Script/telechargement.js" defer></script>

<?php
    require "Fragments/header.php"
?>

<main>
    <div class="title">
        <h1>Téléchargement</h1>
        <span class="separator"></span>
    </div>
    <div class="content_table">

        <div class="row one">
            <div class="cell one"></div>
            <div class="cell two">
                <h1>Essaie Gratuit</h1>
            </div>
            <div class="cell three">
                <h1>Tarif Etudiant</h1>
            </div>
            <div class="cell four">
                <h1>Tarif Particulier & Pro</h1>
            </div>
        </div>
        <div class="row two">
            <div class="cell one">
                <h2>Temps d'accès</h2>
            </div>
            <div class="cell two">
                <h2>15 jours</h2>
            </div>
            <div class="cell three">
                <h2>Temps de l'abonnement</h2>
            </div>
            <div class="cell four">
                <h2>Temps de l'abonnement</h2>
            </div>
        </div>
        <div class="row three">
            <div class="cell one">
                <h2>Assistance 24/7</h2>
                </div>
            <div class="cell two"><i class="fa-solid fa-xmark"></i></div>
            <div class="cell three"><i class="fa-solid fa-check"></i></div>
            <div class="cell four"><i class="fa-solid fa-check"></i></div>
        </div>
        <div class="row four">
            <div class="cell one">
                <h2>Numéri Premium</h2>
            </div>
            <div class="cell two"><i class="fa-solid fa-xmark"></i></div>
            <div class="cell three"><i class="fa-solid fa-check"></i></div>
            <div class="cell four"><i class="fa-solid fa-check"></i></div>
        </div>
        <div class="row five">
            <div class="cell one">
                <h2 class="tarif">Tarif</h2>
            </div>
            <div class="cell two">
                <h2>GRATUIT</h2>
            </div>
            <div class="cell three">
                <h2>15€/mois</h2>
            </div>
            <div class="cell four">
                <h2>20€/mois</h2>
            </div>
        </div>
    </div>
    <div class="telechargement_div">
        <div class="telechargement background"></div>
        <div class="telechargement content">
            <h1>Essaie numéri maintenant !</h1>
            <button class="button_telechargement" id="telechargement">Télécharge le >></button>
        </div>
    </div>
</main>


<?php
    require "Fragments/footer.php"
?>  