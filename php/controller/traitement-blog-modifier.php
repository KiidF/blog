<?php
// ON RECUPERE LES INFOS DU FORMULAIRE
// ET ENSUITE ON VA LES STOCKER DANS LA TABLE SQL blog
// ATTENTION: NE PAS OUBLIER îd
$id       = $_REQUEST["id"] ?? "";
$titre    = $_REQUEST["titre"] ?? "";
$contenu  = $_REQUEST["contenu"] ?? "";
$photo    = $_REQUEST["photo"] ?? "";
// appeler ma fonction pour insérer une ligne dans la table SQL blog
// ON VA CHARGER LE CODE DES FONCTIONS
require "php/mes-fonctions.php";
// ensuite je peux appeler mes fonctions
modifierLigne("blog", $id, [
    "titre"   => $titre,
    "contenu" => $contenu,
    "photo"   => $photo,
]);
// message de confirmation pour l'utilisateur
$confirmation = "article modifié ($id: $titre)";
// en plus, on va fournir la liste des articles publiés
$tabBlog = lireTable("blog");
// je rajoute le tableau dans la réponse à envoyer au navigateur
$tabAssoJson["tabBlog"] = $tabBlog; 