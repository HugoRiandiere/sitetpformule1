<?php
    $prenom = $_POST["Prenom"];
    $nom = $_POST["Nom"];
    $message = $_POST["MessageU"];
    echo "<h1>Bonjour $prenom $nom</h1>";
    echo "<p>Voulez-vous validé votre message :</p>";
    echo "<p>$message</p>";
?>