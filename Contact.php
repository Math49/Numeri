<?php
    require "Fragments/head.php";
?>
<link rel="stylesheet" href="Style/contact.css">
<?php
    require "Fragments/header.php"
?>

<main>
    <div class="title">
        <h1>Contact</h1>
        <span class="separator"></span>
    </div>
    <div class="content_div">
        <form class="contact">
            <div class="nameemail">
                <div class="name">
                    <label for="Name">Nom Prénom</label>
                    <input type="text" name="Name">
                </div>
                <div class="email">
                    <label for="Email">Email</label>
                    <input type="email" name="Email">
                </div>
            </div>
            <div class="objet">
                <label for="Object">Objet</label>
                <input type="text" name="Object">
            </div>
            <div class="message">
                <label for="Message">Message</label>
                <textarea name="Message"></textarea>
            </div>
            <button type="submit">Envoyez</button>
        </form>
    </div>
</main>

<?php

    const FILE_SAVE = "Save/save_contact.txt";
            
    if (!file_exists(FILE_SAVE)){ //création du fichier de sauvegarde si il n'existe pas
        $file = fopen(FILE_SAVE, "w");
        fclose($file);
    }
/*

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $expediteur = $_POST['Email'];
    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $destinataire = 'numeri.mathis@hotmail.com';
    $objet = $_POST['Object']; // Objet du message
    $headers = 'From: numeri.mathis@hotmail.com'; // Expediteur
    $message = $_POST['Message'];

    mail($destinataire, $objet, $message, $headers); // Envoi du message

    $table = $_POST['Name'].",".$expediteur.",".$objet.",".$message. "\n";

    $file = fopen(FILE_SAVE, "a+");
    fwrite($file, $table);
}
*/
?>

<?php
    require "Fragments/footer.php"
?>  