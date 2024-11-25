<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à PHP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Découverte de PHP</h1>
    <?php
    // Pour ouvrir un bloc PHP, on utilise la balise <?php
    // Pour fermer un bloc PHP on utilise la balise suivante :
    ?>

    <p>Je suis du HTML</p>

    <?php
    /* --------------------------------- */
    echo '<h2>Les commentaires</h2>';
    /* --------------------------------- */

    // Je suis un commentaire en PHP
    # Je suis aussi un commentaire en PHP
    /*
        Je suis un commentaire
        sur plusieurs lignes
    */


    /* --------------------------------- */
    echo '<h2>Affichage</h2>';
    /* --------------------------------- */

    //  echo est une instruction qui permet d'afficher du texte dans le navigateur
    echo 'Hello, world !';
    //  print est équivalent à echo
    print "Hello, World !";


    /* --------------------------------- */
    echo '<h2>Les variables</h2>';
    /* --------------------------------- */

    // Déclaration d'une variable avec le signe $
    $unNom;
    // Affectation d'une valeur à la variable
    $unNom = 127;
    // Affichage de la variable
    echo $unNom;
    echo '<br>';


    /* --------------------------------- */
    echo '<h2>Les types de variables</h2>';
    /* --------------------------------- */

    // Les types de variables :

    // String : chaine de caractères (texte)
    $unMessage = 'Salut, l\'equipe. Je suis un message dans une variable';
    echo gettype($unMessage) . '<br>';

    // Integer : entier (nombre sans virgule)
    $unNombreEntier = 123;
    echo gettype($unNombreEntier) . '<br>';

    // Float : nombre à virgule (-3.14, 0.0, 1.2, 3.14)
    $unNombreAVirgule = 23.6;
    echo gettype($unNombreAVirgule) . '<br>';

    // Boolean : true ou false
    $unBooleen = true;
    echo $unBooleen . ' <br>';

    $unBooleen = false;
    echo $unBooleen . '<br>';

    echo gettype($unBooleen) . '<br>';

    // NULL : absence de valeur
    $uneVariable = null;
    echo gettype($uneVariable) . '<br>';
    echo $uneVariable . '<br>';


    /* --------------------------------- */
    echo '<h2>La concaténation</h2>';
    /* --------------------------------- */

    // La concaténation permet d'assembler des chaines de caractères avec des variables
    $a = 'Bonjour';
    $b = 'tout le monde';
    echo $a . ' ' . $b . ', je suis en cours de PHP' . '<br>';

    // Entre guillemets simple les variables ne sont pas évaluées : c'est leur nom littéral qui est affiché
    echo '$a $b, je suis un message en PHP' . '<br>';

    // Entre guillemets doubles, les variables sont évaluées : c'est leur contenu qui est affiché
    echo "$a $b, je suis un message en PHP" . '<br>';

    // Entre guillemets doubles, on peut mettre des accolades autour des variables pour les séparer du reste de la chaine de caractères
    echo "{$a} {$b}, je suis un message en PHP" . '<br>';


    // Déclarer 3 variables contenant : bleu, blanc, rouge
    // Afficher bleu-blanc-rouge (avec les tirets) en mettant le texte de chaque couleur dans des variables.
    $blue = 'Bleu';
    $white = 'Blanc';
    $red = 'Rouge';

    echo $blue . '-' . $white . '-' . $red . '<br>';
    echo "$blue-$white-$red <br>";
    echo "{$blue}-{$white}-{$red} <br>";
    echo '$blue-$white-$red';


    /* --------------------------------- */
    echo '<h2>Les constantes et les constantes magiques</h2>';
    /* --------------------------------- */

    // Une constante permet de sauvegarder une valeur sauf que celle-ci ne peut pas être modifiée
    // Utile pour conserver les parametres de la base de donnée
    // Par convention, une constante se déclare toujours en majuscule
    define("CAPITAL", "Paris");
    const PAYS = 'France';
    echo CAPITAL;
    echo '<br>';
    echo PAYS;
    echo '<br>';

    // Les constantes predefinies :
    echo 'Version de PHP : ' . PHP_VERSION . '<br>'; // Affiche la version de PHP
    echo 'Système d\'exploitation du serveur : ' . PHP_OS . '<br>'; // Affiche le système d'exploitation du serveur

    // Les constantes magiques sont des constantes prédéfinies dans le langage qui changent de valeur en fonction du contexte


    echo 'Le numero de ligne courante ' . __LINE__ . '<br>'; // Affiche le numéro de la ligne courante
    echo __DIR__ . '<br>'; // Affiche le chemin complet vers le fichier courant
    echo __FILE__ . '<br>'; // Affiche le dossier dans lequel est le fichier courant

    /* --------------------------------- */
    echo '<h2>Les tableaux</h2>';
    /* --------------------------------- */

    /* --------------------------------- */
    echo '<h3>Les tableaux à indice</h3>';
    /* --------------------------------- */

    // Un tableau de données ARRAY est déclaré comme une variable améliorée dans laquelle on stocke une multitude de valeurs.
    // Ces valeurs peuvent être de n'importe quel type et possèdent un indice par défaut dont la numérotation commence à 0.

    $country = ['France', 'Italie', 'Espagne', 'Portugal'];
    $country = array('France', 'Italie', 'Espagne', 'Portugal');

    echo gettype($country) . '<br>';

    echo '<pre>';
    var_dump($country);
    echo '</pre>';

    echo '<pre>';
    print_r($country);
    echo '</pre>';

    // Afficher le premier element de $tableau
    echo $country[0];

    /* --------------------------------- */
    echo '<h3>Les tableaux associatifs</h3>';
    /* --------------------------------- */

    $tableau2 = ['nom' => 'rachid', 'prenom' => 'edjek'] ;
    // echo $tableau2['nom'] . '<br>';

    // Déclarer un tableau associatif user : firstName, lastName, age, phone

    // Afficher  Bonjour, je m'appelle XXX XXX, j'ai XXX ans et mon numéro de téléphone est le : XXXX

     // Déclarer un tableau associatif user
     $user = [
        'firstName' => 'Ilyaas',
        'lastName' => 'ABDOUL AZIS',
        'age' => 24,
        'phone' => '123-456-7890'
    ];

    // Afficher le message
    echo "Bonjour, je m'appelle " . $user['firstName'] . " " . $user['lastName'] . ", j'ai " . $user['age'] . " ans et mon numéro de téléphone est le : " . $user['phone'] . "<br>";

    // Trouver la fonction php qui permet de transformer un tableau en chaine de caractère

    // Afficher : 'Mes animaux préférés sont : chien, chat, lapin, poule';
    
    // Déclarer un tableau avec les animaux
    $animaux = ['chien', 'chat', 'lapin', 'poule'];

    // Utiliser la fonction implode() pour transformer le tableau en chaîne
    $animaux_str = implode(', ', $animaux);

    // Afficher le message
    echo "Mes animaux préférés sont : " . $animaux_str . '<br>';

    // Boucler sur mon tableau animals pour afficher pour chacu, des elements du tableau

    // L'animal est un : XXX

    //Boucle for
    for($i= 0; $i < count($animaux); $i++){
    echo "L'animal est un : $animaux[$i] <br>";
    }

    echo count($animaux) + 18;

    // Boucle foreach pour parcourir chaque élément du tableau
    foreach ($animaux as $animal) {
        echo "L'animal est un : " . $animal . "<br>";
    }

    while ($i < count($animaux)){
        echo 'salut';
        $i++;
    }

/*
        La population de la ville Marrakech est de 1, 000, 000 d’habitants et elle augmente de 50, 000 habitants par an.
        Celle de la ville Agadir est de 500, 000 habitants et elle augmente de 8% par an.

        Ecrire un algorithme permettant de déterminer dans combien d’années la population de la ville Agadir dépassera celle de la ville Marrakech.
    */

// Initialisation des populations
$population_marrakech = 1000000;  
$population_agadir = 500000;      

// Taux de croissance
$croissance_marrakech = 50000;    
$croissance_agadir = 0.08;        

// Compteur d'années
$annees = 0;

// Boucle jusqu'à ce que la population d'Agadir dépasse celle de Marrakech
while ($population_agadir <= $population_marrakech) {
    // La population de Marrakech augmente de 50,000 habitants chaque année
    $population_marrakech += $croissance_marrakech;

    // La population d'Agadir augmente de 8% chaque année
    $population_agadir += $population_agadir * $croissance_agadir;

    // Incrémentation du compteur d'années
    $annees++;
}

// Affichage du résultat
echo "La population d'Agadir dépassera celle de Marrakech dans $annees années." . "<br>";


// Ecrire un algorithme qui demande à l'utilisateur son age. Il indique ensuite à l'utilisateur quel film il peut aller voir.
    // "Action Man" si moins de 13 ans
    // "Matrix" si il a entre 13 et 18 ans
    // "Evil Dead" si plus de 18 ans


    // Demander à l'utilisateur de saisir son âge
    echo "Veuillez entrer votre âge : ";

    // Lire l'âge saisi par l'utilisateur via l'URL
    $age = isset($_GET['age']) ? (int)$_GET['age'] : 0;

    // Vérifier l'âge et indiquer le film correspondant
    if ($age < 13) {
        echo "Vous pouvez aller voir 'Action Man'.<br>";
    } elseif ($age >= 13 && $age <= 18) {
        echo "Vous pouvez aller voir 'Matrix'.<br>";
    } else {
        echo "Vous pouvez aller voir 'Evil Dead'.<br>";
    }



    // Mettre la chaine de caractère en majuscule
    // Mettre la chaine de caractère en minuscule
    // extraire 100 premier caractere suivi de ...
    // Supprimez les espaces au début et à la fin de la chaine de caractère
    // Remplacez une chaine de caractère par une autre


     // Déclaration d'une chaîne de caractères
     $chaine = "  Ceci est un exemple de chaîne de caractères pour démonstration. C'est un peu long, mais nous allons le manipuler !  ";

     // 1. Mettre la chaîne de caractère en majuscule
     $chaineMajuscule = strtoupper($chaine);
     echo "En majuscules : " . $chaineMajuscule . "<br>";
 
     // 2. Mettre la chaîne de caractère en minuscule
     $chaineMinuscule = strtolower($chaine);
     echo "En minuscules : " . $chaineMinuscule . "<br>";
 
     // 3. Extraire les 100 premiers caractères suivis de "..."
     $chaineExtraite = substr($chaine, 0, 100) . (strlen($chaine) > 100 ? "..." : "");
     echo "100 premiers caractères : " . $chaineExtraite . "<br>";
 
     // 4. Supprimer les espaces au début et à la fin de la chaîne de caractère
     $chaineSansEspaces = trim($chaine);
     echo "Sans espaces : '" . $chaineSansEspaces . "'<br>";
 
     // 5. Remplacer une chaîne de caractère par une autre
     $chaineRemplacee = str_replace("exemple", "démonstration", $chaine);
     echo "Chaîne après remplacement : " . $chaineRemplacee . "<br>";




    ?>

</body>

</html>