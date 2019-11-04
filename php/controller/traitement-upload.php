<?php
// debug
$confirmation = "codage upload en cours...";
// ON VEUT RECUPERER LE FICHIER QUI A ETE UPLOADE
// AVEC PHP, LE FICHIER UPLOADE EST MIS EN QUARANTAINE
// ET LES INFOS SUR LE FICHIER SONT DANS $_FILES
// DEBUG
$tabAssoJson["files"] = $_FILES;
/*
// QUICK AND DIRTY (SUICIDAIRE POUR SON HEBERGEMENT...)
// ON VA RECUPERER LE FICHIER
// ON VA LE DEPLACER DANS LE DOSSIER assets/upload
// https://www.php.net/manual/fr/function.move-uploaded-file.php
move_uploaded_file(
        $_FILES["image"]["tmp_name"], 
        "assets/upload/" . $_FILES["image"]["name"]);
*/
// ON VA DEVOIR SE POSER DES QUESTIONS DE SECURITE
// ON VA AUTORISER UNE LISTE D'EXTENSIONS (WHITE LIST)
// jpeg, jpg, gif, png, svg, pdf, mp4, mp3, mov, txt
// ON VA AUSSI LIMITER LA TAILLE DU FICHIER
// images => 2Mo videos => 4Go
// ON VA RAJOUTER PLEIN DE SECURITE
// => CONDITIONS if... else... 
$tabImage = $_FILES["image"];
// JE RECUPERE LES INFOS SUR LE FICHIER UPLOADE
$name       = $tabImage["name"];
$type       = $tabImage["type"];        // pas fiable car déduit de l'extension du fichier 
$tmp_name   = $tabImage["tmp_name"];
$error      = $tabImage["error"];
$size       = $tabImage["size"];
// https://www.php.net/manual/fr/function.pathinfo.php
// on va extraire l'extension du nom du fichier
// https://www.php.net/manual/fr/function.strtolower.php
$extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
$filename  = strtolower(pathinfo($name, PATHINFO_FILENAME));
if ($error == 0)
{
    // cas OK
    if ($size < 2 * 1024 * 1024) // 2Mo en octets
    {
        // cas OK
        // https://www.php.net/manual/fr/function.in-array.php
        if (in_array($extension, [ "jpg", "jpeg", "png", "gif", "svg", "mp4", "mp3" ]))
        {
            // OK ON PEUT ACCEPTER LE FICHIER
            // MAIS ON VA CHANGER LE NOM POUR ENLEVER LES CARACTERES BIZARRES
            // EXPRESSIONS REGULIERES (REGEXP)
            // https://www.php.net/manual/fr/function.preg-replace.php
            // note: les expressions régulières sont anciennes 
            // mais tellement puissantes que tout le monde s'en sert...
            // on enlève les caractères bizarres 
            $nomFichierFiltre = preg_replace("/[^a-zA-Z0-9-]/i", "", $filename);
            
            // ON A CHECKE TOUT CE QU'ON VOULAIT
            // ON PEUT STOCKER LE FICHIER DANS LE DOSSIER assets/upload/
            move_uploaded_file(
                $tmp_name, 
                "assets/upload/$nomFichierFiltre.$extension");
        
        }
    }
    else
    {
        // cas KO
    }
}
else
{
    // cas KO
}
// AU FINAL, ON VEUT QUE LE FICHIER UPLOADE DANS LE FORMULAIRE 
// SOIT RANGE DANS LE DOSSIER assets/upload/
// JE VAIS RENVOYER DANS UN TABLEAU LA LISTE DES IMAGES DISPONIBLES DANS LE DOSSIER
// assets/upload/
// https://www.php.net/manual/fr/function.glob.php
$tabFichier = glob("assets/upload/*");
// JE VAIS LE RAJOUTER A LA REPONSE JSON
$tabAssoJson["tabUpload"] = $tabFichier;