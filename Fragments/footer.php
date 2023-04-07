        <footer>
            <div class="footer background"></div>
            <div class="footer content">
                <div class="footer newsletter">
                    <form method="POST">
                        <label for="Email">Abonne toi à notre Newsletter !</label>
                        <div>
                            <input type="email" placeholder="Email" name="Email">
                            <button type="submit">></button>
                        </div>
                    </form>
                </div>
                <div class="footer table">
                    <div class="footer link">
                        <h1>Liens importants</h1>
                        <a href="Mentions-Légales.php">Mentions Légales</a>
                        <a href="Telechargement.php">Téléchargement</a>
                    </div>
                    <div class="footer social">
                        <h1>Suis nous !</h1>
                        <div>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-youtube"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-patreon"></i>
                        </div>
                    </div>
                    <div class="footer price">
                        <h1>Tarifs</h1>
                        <p>Etudiant : 15€/mois</p>
                        <p>Particulier & Pro : 20€/mois</p>
                    </div>
                </div>
                <p class="credit">©Numéri.inc-<?php echo date("Y")?></p>
            </div>
        </footer>
    </body>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</html>


<?php

/*

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $destinataire = $_POST['Email'];
    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $expediteur = 'numeri.mathis@hotmail.com';
    $objet = 'Test'; // Objet du message
    $headers = 'From: numeri.mathis@hotmail.com'; // Expediteur
    $message = 'Merci de vous êtes inscrit à notre Newsletter ! L'équipe Numéri.inc';

    mail($destinataire, $objet, $message, $headers); // Envoi du message
}

*/

?>
