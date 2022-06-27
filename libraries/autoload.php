<?php
/**
 * CE FICHIER A POUR BUT D'AFFICHER LA PAGE D'ACCUEIL ! 
 * et de récupérer les articles du plus récent au plus ancien (SELECT * FROM articles ORDER BY created_at DESC)
 * et ensuite on va boucler dessus pour afficher chacun d'entre eux et ces commentaires associés
 * 
 */
spl_autoload_register(function($className){
    // className = Controllers\Article   ce que l'on va chercher a la base 
    // require = libraries/controllers/Article.php;
    $className = str_replace('\\', '/', $className);
    // var_dump($className);
    // on va chercher dans le dossier libraries la classe Article.php
    require_once("libraries/{$className}.php"); 
});
