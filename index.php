<h1>Introduction PHP</h1>

<?php

// un commentaire sur une seule
/*
    commentaire
    sur 
    plusieurs
    lignes
*/
/*
// DECLARATION DE VARIABLES
$chaineDeCaracteres = "mon texte";  // string
$chaineDeCaracteres2 = "mon prix est très intéressant";  // string
$chaineDeCaracteres3 = "Mon prix est de";
$entier = 50;  // integer 
$flottant = 9.99;  // float
$booleen = true;  // boolean (true ou false)
$tableau1 = array("valeur 1", 100, "valeur 3");  // array
$tableau2 = ["valeur 1", "valeur 2"];  // array
$date = new DateTime();  // programmation orientée objet (POO) : object

// AFFICHAGE
echo "Test<br>";
echo $chaineDeCaracteres."<br>";
echo $chaineDeCaracteres3." ".$entier." euros<br>"; // Mon prix est de 50 euros
echo "$chaineDeCaracteres3 $entier euros<br>"; // Mon prix est de 50 euros

// FONCTIONS CHAINES DE CARACTERES

// Compter le nombre de caractères (espaces inclus !)
$nbCaracteres = strlen($chaineDeCaracteres);
echo "La phrase contient $nbCaracteres caractères<br>";
echo "La phrase contient ".strlen($chaineDeCaracteres)." caractères<br>";

// Conversion en majuscules
$chaineMajuscules = mb_strtoupper($chaineDeCaracteres2);
echo $chaineMajuscules."<br>";
echo mb_strtoupper($chaineDeCaracteres2)."<br>";

// Compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase contient $nbMots mots<br>";

// FONCTIONS TABLEAUX
$tailleTableau = count($tableau1);
$tailleTableau2 = sizeof($tableau2);
echo "Le tableau 1 contient $tailleTableau éléments<br>";
echo "Le tableau 2 contient $tailleTableau2 éléments<br>";

$notes = [12, 14, 9.5, 18.5, 7.5];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne1 = round($sommeNotes / $nbNotes, 2);   // float
$moyenne2 = number_format($sommeNotes / $nbNotes, 2, ".", " "); // string
echo "La moyenne générale est de $moyenne1<br>";
echo "La moyenne générale est de $moyenne2<br>";

// OPERATIONS MATHEMATIQUES
$nbArticles = 5;
$prix = 10.99;
$total = $nbArticles * $prix;
echo "Le total est de $total €<br>";

// afficher le total TTC d'une facture
$tva = 0.20;

// méthode 1
$totalTTC1 = $nbArticles * $prix + $nbArticles * $prix * $tva;
echo "Le total TTC est de $totalTTC1 €<br>";
$totalTTC2 = $nbArticles * $prix * (1 + $tva);
echo "Le total TTC est de $totalTTC2 €<br>";

$texte = "Mon texte";
$calcul = $texte * $tva;
echo $calcul;

echo gettype($texte);
echo gettype($entier);

var_dump($tableau1);
var_dump($total);
var_dump($chaineDeCaracteres);


// STRUCTURES DE CONTROLE

// Conditions (if = si)

$prenom = "Georges";
$age = 16;

if($age >= 18) {
    $result = "majeur";
} else {
    $result = "mineur";
}

echo "$prenom est $result<br>";

// Ternaire
$result = $age >= 18 ? "majeur" : "mineur";
echo "$prenom est $result<br>";
echo "$prenom est ".($age >= 18 ? "majeur" : "mineur")."<br>";

// En fonction de l'âge, afficher une catégorie spécifique
/*
    si la personna a plus de 30 ans --> SENIOR
    si la personna a plus de 20 ans --> CADET
    sinon JUNIOR
*/
/*
if(gettype($age) === "integer") {
    if($age >= 30) {
        $result = "Senior";
    } elseif($age >= 20) {
        $result = "Cadet";
    } else {
        $result = "Junior";
    }
    echo "La personne qui a $age ans est : $result<br>";
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}

/*
    si la valeur est 1 --> OK !
    si la valeur est 0 --> KO !
    sinon afficher "valeur non gérée"
*/
/*
$valeur = 0;
switch($valeur) {
    case 0: echo "KO !<br>"; break;
    case 1: echo "OK !<br>"; break;
    default: echo "Valeur non gérée !<br>";
}


// BOUCLES
/*
    for (POUR)
    while (TANT QUE)
    foreach (POUR CHAQUE)
*/

// Afficher les chiffres de 1 à 10
/*
for($i = 1; $i <= 10; $i++) {
    echo $i." ";
}

$i = 1;
while($i <= 10) {
    echo $i." ";
    $i++;
}

$valeurs = range(1,10);  // création d'un tableau de 1 à 10 (entiers)
var_dump($valeurs);
foreach($valeurs as $valeur) {
    echo $valeur." ";
}

$voitures = ["Mercedes", "Peugeot", "BMW", "Toyota"];
echo $voitures[1];

var_dump($voitures);

for($i = 0; $i < count($voitures); $i++) {
    echo $voitures[$i]."<br>";
}

$i = 0;
while($i < count($voitures)){
    echo $voitures[$i]."<br>";
    $i++;
}

foreach($voitures as $voiture) {
    echo $voiture."<br>";
}


// Tableaux associatifs (clé => valeur)
// Attention : la clé est UNIQUE !

$formateurs = [
    "stéphane" => "mulhouse",
    "virgile" => "strasbourg",
    "micka" => "strasbourg"
];

var_dump($formateurs);
// echo "La ville de Stéphane est : ".$formateurs["stéphane"]; 

foreach($formateurs as $prenom => $ville) {
    echo "La ville de ".ucfirst($prenom)." est ".mb_strtoupper($ville)."<br>";
}

$clients = [
    "stéphane" => [
        "adresse" => "10 rue de la Gare",
        "cp" => "68100",
        "ville" => "MULHOUSE",
        "phone" => "0899887766"
    ],

    "virgile" => [
        "adresse" => "1 rue Principale",
        "cp" => "67000",
        "ville" => "STRASBOURG",
        "phone" => "0677556644"
    ]
];

var_dump($clients);
// echo $clients["virgile"]["cp"]." ".$clients["virgile"]["ville"];

foreach($clients as $prenom => $coordonnees) {
    echo $prenom." habite ".$coordonnees["adresse"]." ".$coordonnees["cp"]." ".$coordonnees["ville"]." et a comme numéro de téléphone : ".$coordonnees["phone"]."<br>";
}



// FONCTIONS

echo afficherMessage();
function afficherMessage() : string {
    $message = "Voici mon message<br>";
    return $message;
}


echo calculerCarre(7);
function calculerCarre($nombre) {
    if(gettype($nombre) == "integer") {
        $resultat = $nombre * $nombre;  // pow($nombre, 2)
        return $resultat."<br>";    
    } else {
        return "Erreur : la valeur doit être un entier !<br>";
    }
}

$elements = [10, 133, 90, 99, 45];

foreach($elements as $element) {
    echo pairOuImpair($element);
}

function pairOuImpair($nombre) : string {
    $resultat = "impair";
    if($nombre % 2 == 0) {
        $resultat = "pair";
    } 
    return $resultat."<br>";
}

echo repeterMot("Youpi", 5);
function repeterMot($mot, $repetition) : string {
    $result = "";
    foreach(range(1, $repetition) as $valeur) {
        $result .= $mot." - ";
    } 
    return $result;

    // for($i = 1; $i <= $repetition; $i++) {
    //     $result .= $mot." ";
    // }
}

echo str_repeat("Help ", 5);
*/
//// Exo 1:
//Affichage :
//La phrase « Notre formation DL commence aujourd’hui » contient 39 caractères.4
$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";
echo "la phrase « ".$chaineDeCaracteres." » contient ".strlen($chaineDeCaracteres)." caractères.<br>"; 
echo "<br><br>"; //alt174 alt175 pour petit guillemer
//// Exo 2:
//Affichage :
//La phrase « Notre formation DL commence aujourd’hui » contient 5 mots.
$chaineDeCaracteres = "Notre formation DL commence aujourdhui";
echo "la phrase « ".$chaineDeCaracteres." » contient ".str_word_count($chaineDeCaracteres)." mots. <br>"; 
echo "<br><br>";
//// Exo 3:
///A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
///« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";
$chaineDeCaracteres2 = str_replace("aujourd'hui","demain",$chaineDeCaracteres);
echo "En remplacant le mot aujourd'hui de la phrase « ".$chaineDeCaracteres." » par le mot demain on aura la phrase « ".$chaineDeCaracteres2." » <br>";
echo "<br><br>";
//// Exo 4:
///Ecrire un algorithme permettant de savoir si une phrase est palindrome.
//$mot = readline ("Entrer le mot pour savoir si c'est un palindrome: ");
$phrase = " Engage le jeu que je le gagne";
$phrase = str_replace(" ", "", $phrase);

$inverse = mb_strtolower(strrev($phrase));
if (mb_strtolower($phrase) === $inverse) {
    echo  "La phrase est un palindrome.<br>";
} else {
    echo $phrase . " La phrase n'est pas palindrome.<br>";
}
echo "<br><br>";
//// Exo 5:
//Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
//Attention, la valeur générée devra être arrondie à 2 décimales.
$variable1 = 100;
$variable2 = round(100 / 6.55,2);
//$variable2 = number_format()
echo "Le montent ".$variable1." francs est egale à ".$variable2." euros.<br>";
echo "<br><br>";
//// Exo 6:
//Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
//d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
//Affichage :
//Prix unitaire de l’article : 9.99 €
//Quantité : 5
//Taux de TVA : 0.2
//Le montant de la facture à régler est de : 59.94 €
echo "Affichage :<br>Prix unitaire de l’article : 9.99 €<br>Quantité : 5<br>Taux de TVA : 0.2<br>";
echo "Le montant de la facture à régler est de : ".(9.99*5+9.99*5*0.2)."€<br>";
echo "<br><br>";
//// Exo 7:
//Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
//Poussin : entre 6 et 7 ans
//Pupille : entre 8 et 9 ans
//Minime : entre 10 et 11 ans
//Cadet : à partir de 12 ans
//Si la catégorie n’est pas gérée, merci de le préciser.
//Affichage :
//L’enfant qui a 10 ans appartient à la catégorie « Minime »
echo "<br><br>";
$age = 10;
if(gettype($age) === "integer") {
if ($age >= 12){
    echo "L’enfant qui a ".$age." ans appartient à la catégorie « Cadet ».<br>";
}elseif ($age >= 10 ){
        echo "L’enfant qui a ".$age." ans appartient à la catégorie « Minime ».<br>";
    }elseif ( $age >= 8 ){
            echo "L’enfant qui a ".$age." ans appartient à la catégorie « Pupille ».<br>";

        }elseif ($age >= 6 ){
            echo "L’enfant qui a ".$age." ans appartient à la catégorie « Poussin ».<br>";
        }else{
        echo "L’enfant qui a ".$age." ans est encre petit pour jouer au foot.<br>";
        }
}else{
    echo "Veuillez saisir un age numerique.<br>";
}
//// Exo 8:
//Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
//forme :
//Affichage (pour la table de 8) :
//Table de 8 :
//1 x 8 = 8
//2 x 8 = 16
//3 x 8 = 24 …
echo "<br><br>";
$nombre = 8;
$result = 0;
echo "Affichage (pour la table de ".$nombre.") :<br>";
echo "Table de ".$nombre." :<br>";
for($i=1; $i <= 10; $i++){
        $result = $nombre*$i;
        echo $nombre."*".$i."=". $result."<br>";
        
}
echo "Affichage (pour la table de ".$nombre.") :<br>";
echo "Table de ".$nombre." :<br>";
$i = 1;
while($i <= 10){
    $result = $nombre * $i;
    echo $nombre."*".$i."=". $result."<br>"; 
    $i++;
} 

//// Exo 9:
//Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
//Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
//plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
//Affichage :
//Age : 32
//Sexe : F
//La personne est imposable.
echo "<br><br>";
$age = 32;
$sexe = "femme";
$reposne = "";
if (($age >= 18 && $age <= 35 && $sexe == "femme") || ($age > 20 && $sexe == "homme")){
     $reponse = "La personne est imposable";
}else{
    $reponse = "La personne est non imposable";
}
echo " Affichage :<br>Age : ".$age.".<br>Sexe : ".$sexe.".<br>".$reponse.".<br><br><br>";

//// Exo 10:
//A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
//affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
//1 €.
//Affichage :
//Montant à payer : 152 €
//Montant versé : 200 €
//Reste à payer : 48 €
//***************************************************
//Rendue de monnaie :
//4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €
$montantaPayer = 152;
$montantaVerser = 200;
$sommeRendue = 48;

$sommeRendue = $montantaVerser - $montantaPayer;
$nb10 = 0;
while ($sommeRendue >= 10){
    $nb10 = $nb10 + 1;
    $sommeRendue = $sommeRendue - 10;
}
$nb5 = 0;
$nb2 = 0;
if($sommeRendue >= 5){
    $nb5 = 1;
    $sommeRendue = $sommeRendue - 5;
}
if ($sommeRendue >= 2){
    $nb2 = 1;
    $sommeRendue = $sommeRendue - 2;
}

echo "Affichage :<br>Montant à payer : 152 €<br>Montant versé : 200 €<br>Reste à payer : 48 €<br>";
echo "*************************************************************** <br>";
echo "Rendue de monnaie :<br>";
echo $nb10." de 10 € - ".$nb5." de 5 € - ".$nb2." de 2 € - ".$sommeRendue." de 1€.<br><br><br>";

//// Exo 11:
//Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
//tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
//d’afficher le nombre de marques de voitures présentes dans le tableau.
//Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
//Affichage (attention à utiliser une liste à puces)
//Il y a 4 marques de voitures dans le tableau :
//Peugeot
//Renault
//BMW
//Mercedes
$marques= ['Peugeot', 'Renault', 'BMW', "Mercedes"];
echo "il ya ".count($marques)." marques de voitures dans le tableau :<br>";
foreach($marques as $marque){
    echo "<ul>";
   echo "<li>$marque</li>";
}
echo "</ul>";
//// Exo 12:
// A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
// (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
// respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
// Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
// Affichage :
// Salut Mickaël
// Hola Virgile
// Hello Marie-Claire
// Variante : trier d’abord le tableau par ordre alphabétique du prénom
// Affichage :
// Hello Marie-Claire
// Salut Mickaël
// Hola Virgile
$clients = [
    "Mickael" => ["FRA","Salut"],
    "Virgille" => ["ESP", "Hola"],
    "Marie-Claire" => ["ENG","Hello"]
];
asort($clients);
echo "Affichage :<br>";
foreach($clients as $client => $valeur){
 echo $valeur[1]." ".$client."<br>";
 //var_dump($valeur[1]);
}

// Exo 13:
// Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
// coefficient). Elle devra être affichée avec 2 décimales.
// Affichage :
// Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9
// Sa moyenne générale est donc de : 11.
echo "<br><br>";
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne1 = round($sommeNotes / $nbNotes, 2);
$moyenne2 = number_format($sommeNotes / $nbNotes, 2, ".", " ");
echo "Les notes obtenues par l’élève sont : ";
foreach($notes as $note){
    echo "$note ";
   }
echo "<br>La moyenne générale est de: $moyenne1<br><br><br>";

// Exo 14:
// Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
// Affichage (si la date courante est le 21/05/2018 et la date de naissance le
// 17/01/1985 :
// Age de la personne : 33 ans 4 mois 4 jours

$dateNaissance = "17-01-1985";
$dateNaissance2 =  str_replace('-', '/', $dateNaissance);;
$aujourdhui = date("d-m-Y");
$aujourdhui2 = date('d/m/Y',strtotime($aujourdhui));
$diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
echo " Affichage ( si la date courante est le $aujourdhui2 et la date de naissance le $dateNaissance2 :<br>";
echo $diff->format('Age de la personne : %y ans %m mois %d jours.');
echo "<br><br><br>"; 

// $date = new DateTime("1985-01-17");
// $dateN = new DateTime("NOW");
// toString($date);
// $diff = date_diff(date_create(toString($date)), date_create($dateN));
// echo $date->format('d/m/Y');

$dateN = new DateTime("1985-01-17");
$dateA = new DateTime("NOW");
$interval = $dateN->diff($dateA);
//echo " Affichage ( si la date courante est le $date1->format('d/m/Y') et la date de naissance le $date2->format('d/m/Y') :<br>";
echo " Affichage ( si la date courante est le ".$dateA->format('d/m/Y')." et la date de naissance le ".$dateN->format('d/m/Y')." :<br>";
echo "Age de la personne : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days. <br>"; 

// shows the total amount of days (not divided into years, months and days like above)
echo "La difference entre les deux dates est : " . $interval->days . " jours.";
echo "<br><br><br>";


// Exo 15:
// Créer une classe Personne (nom, prénom et date de naissance).
// Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
// $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
// $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
// Affichage :
// Michel DUPONT a … ans
// Alice DUCHEMIN a … ans
class Personne {
    private $_nom;
    private $_prenom;
    private $_date;

    public function __construct($nom, $prenom, $date){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_date = $date;
    }
    

    public function getNom(){
        return $this->_nom;
        
    }
    public function getPrenom(){
        return $this->_prenom;
        
    }
    public function getDate(){
        return $this->_date;
        
    }
}
$p1 = new Personne("DUPONT", "Michel","1980-02-19");
$p2 = new Personne ("DUCHEMIN", "Alice","1985-01-17");
echo "Affichage :<br> La première personne s'appel : ".$p1->getPrenom()." ". $p1->getNom().". né le : ".$p1->getDate().".<br>";
echo  "La deuxième personne s'appel : ".$p2->getPrenom()." ". $p2->getNom().". né le : ".$p2->getDate().".<br><br>";
  
//$dateAj = new DateTime("NOW");
$datep1 = new DateTime($p1->getDate());
$interval1 = $datep1->diff($dateA);
$datep2 = new DateTime($p2->getDate());
$interval2 = $datep2->diff($dateA);
echo "Affichage :<br>".$p1->getPrenom()." ". $p1->getNom()." a ".$interval1->y." ans.<br>";
echo  $p2->getPrenom()." ". $p2->getNom()." a ".$interval2->y." ans.<br>";






?>

