<section class="section-upload afficher">
    <h3>FORMULAIRE POUR UPLOADER UN FICHIER</h3>
    <form method="POST" action="api-json.php" enctype="multipart/form-data" class="ajax">
        <label>
            <span>Photo</span>
            <input type="file" name="photo">
            <button type="submit">UPLOADER MON IMAGE</button>
        </label>
        <div class="confirmation">
            <!-- ICI ON VERRA LE MESSAGE DE CONFIRMATION -->
        </div>
        <!-- PARTIE TECHNIQUE -->
        <input type="hidden" name="idForm" value="annonce-upload">
    </form>
</section>

<section class="section-create">
    <h3>FORMULAIRE DE CREATION D'ARTICLE DE BLOG</h3>
    <form method="GET" action="api-json.php" class="ajax">
        <label>
            <span>Titre</span>
            <input type="text" name="titre" required placeholder="entrez votre titre">
        </label>
        <label>
            <span>Contenu</span>
            <textarea name="contenu" cols="80" rows="10" required placeholder="entrez votre contenu"></textarea>
        </label>
        <button type="submit">PUBLIER</button>
        <div class="confirmation">
            <!-- ICI ON VERRA LE MESSAGE DE CONFIRMATION -->
        </div>
        <!-- PARTIE TECHNIQUE -->
        <input type="hidden" name="idForm" value="ajouter">
    </form>
</section>

<section class="section-update">
    <h3>FORMULAIRE DE MODIFICATION D'ARTICLE DE BLOG</h3>
    <form method="GET" action="api-json.php" class="ajax">
        <label>
            <span>id</span>
            <input type="text"  name="id" required placeholder="entrez id">
        </label>
        <label>
            <span>Titre</span>
            <input type="text" name="titre" required placeholder="entrez votre titre">
        </label>
        <label>
            <span>Contenu</span>
            <textarea name="contenu" cols="80" rows="10" required placeholder="entrez votre contenu"></textarea>
        </label>
        <button type="submit">PUBLIER</button>
        <div class="confirmation">
            <!-- ICI ON VERRA LE MESSAGE DE CONFIRMATION -->
        </div>
        <!-- PARTIE TECHNIQUE -->
        <input type="hidden" name="idForm" value="modifier">
    </form>
</section>

<section class="section-liste afficher">
    <h3>LISTE D'ARTICLES</h3>
    <div class="listeArticle"><!--container pour Flexbox -->
    
<?php
// ON VA AFFICHER LA LISTE DES ARTICLES
// etape1: il faut charger mes fonctions
require_once "php/mes-fonctions.php";
// etape2: on appelle la fonction
// je ne veux que les lignes dans la catégorie blog
// parametre1: "blog" est le nom de la table SQL
// parametre2: "categorie" est le nom de la colonne SQL dans la table blog
// parametre3: "blog" est la valeur de sélection de la colonne "catégorie"
$tabArticle = lireTable("blog");
// SSR Server Side Rendering
// On crée le code HTML avec PHP
// => le navbigateur reçoit directement le code HTML
// => google référence mieux ce contenu
// on fait une boucle pour parcourir la liste des articles
foreach($tabArticle as $ligneAsso)
{
    $titre    = $ligneAsso["titre"];
    $contenu  = $ligneAsso["contenu"];
    $photo    = $ligneAsso["photo"];
    $id       = $ligneAsso["id"];

    echo
<<<CODEHTML
    <div class="listeArt">
        <h3>$titre</h3>
        <p>$contenu</p>
        <img src="$photo">
        <div class="boutons">
            <button class="delete" data-id="$id" id="delete-$id">SUPPRIMER</button>
            <button class="update" data-id="$id" id="update-$id">MODIFIER</button>
        </div>
        <div class="confirmation"></div>
    </div>
CODEHTML;
}
?>
    </div>
</section>