<?php
// ON RECUPERE LES INFOS DU FORMULAIRE
// ET ENSUITE ON VA LES STOCKER DANS LA TABLE SQL blog
$nom         = $_REQUEST["nom"] ?? "";
$email     = $_REQUEST["email"] ?? "";
$message    = $_REQUEST["message"] ?? "";

// appeler ma fonction pour insérer une ligne dans la table SQL blog
// ON VA CHARGER LE CODE DES FONCTIONS
require "php/mes-fonctions.php";
// ensuite je peux appeler mes fonctions
insererLigneTable("contact", [
    "nom"       => $nom,
    "email"   => $email,
    "message"  => $message,
]);
// message de confirmation pour l'utilisateur
$confirmation = "message envoyé ($nom)";
// en plus, on va fournir la liste des articles publiés
$tabBlog = lireTable("contact");
// je rajoute le tableau dans la réponse à envoyer au navigateur
$tabAssoJson["tabBlog"] = $tabBlog; 