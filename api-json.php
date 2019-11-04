<?php
// JE SUIS DANS LE MONDE PHP
// JE PEUX RECUPERER DES INFORMATIONS DE FORMULAIRE
$idForm = $_REQUEST["idForm"] ?? "";
// SCENARIO DU FORMULAIRE newsletter
if ($idForm == "newsletter")
{
    require "php/controller/traitement-newsletter.php";
}
// SCENARIO DU FORMULAIRE contact
if ($idForm == "contact")
{
    require "php/controller/traitement-contact.php";
}
// SCENARIO DU FORMULAIRE blog
if ($idForm == "ajouter")
{
    require "php/controller/traitement-blog-ajouter.php";
}
if ($idForm == "annonce-upload")
{
    require "php/controller/traitement-upload.php";
}
if ($idForm == "supprimer")
{
    require "php/controller/traitement-blog-supprimer.php";
}
if ($idForm == "modifier")
{
    require "php/controller/traitement-blog-modifier.php";
}
// TABLEAU ASSOCIATIF PHP
// JE PEUX UTILISER LA FONCTION json_encode QUI VA PRODUIRE LE TEXTE JSON CORRESPONDANT
// TRADUCTEUR PHP => TEXTE JSON
// https://www.php.net/manual/fr/function.json-encode.php
$tableauAssociatif = [
    "date"  => date("Y-m-d H:i:s"),
    "confirmation" => $confirmation ?? "",
];
$texteJSON = json_encode($tableauAssociatif, JSON_PRETTY_PRINT);
echo $texteJSON;
?>