<?php
echo "\n";
echo "Votre nom de personnage est ?";
echo "\n";
$name = readline(">> ");
echo "\n";

echo "De quel sexe, est votre personnage?";
$sexe_array = ["Homme", "Femme"];
echo "\n";
print_r($sexe_array);

$answer_sexe = readline(">> ");
$sexe = "";
switch($answer_sexe) {
  case "0":
  case "homme":
    $sexe = $sexe_array[0];
    break;
  case "1":
  case "femme":
    $sexe = $sexe_array[1];
    break;
  default:
    $sexe = "nok";
}

echo "\n";
echo "Quel Race souhaitez-vous ?";
$races_array = ["Elfe", "Nain", "Humain", "Barbare", "Orc", "Semi-Homme"];
echo "\n";
print_r($races_array);
$answer_race = readline(">> ");
$race = "";
switch($answer_race){
  case "0":
  case "elfe":
    $race = $races_array[0];
    break;
  case "1":
  case "nain":
    $race = $races_array[1];
    break;
  case "2":
  case "humain":
    $race = $races_array[2];
    break;
  case "3":
  case "barbare":
    $race = $races_array[3];
    break;
  case "4":
  case "orc":
    $race = $races_array[4];
    break;
  case "5":
  case "semi-homme":
    $race = $races_array[5];
    break;
  default:
    $race = "nok";
}

echo "\n";
echo "Quel Classe voulez-vous faire ?";
$classes_array = ["Barde", "Mage", "Archer", "Paladin", "Berserker", "Voleur"];
echo "\n";
print_r($classes_array);
$answer_classe = readline(">> ");
$classe = "";
switch($answer_classe){
  case "0":
  case "barde":
    $classe = $classes_array[0];
    break;
  case "1":
  case "mage":
    $classe = $classes_array[1];
    break;
  case "2":
  case "archer":
    $classe = $classes_array[2];
    break;
  case "3":
  case "paladin":
    $classe = $classes_array[3];
    break;
  case "4":
  case "berserker":
    $classe = $classes_array[4];
    break;
  case "5":
  case "voleur":
    $classe = $classes_array[5];
    break;
  default:
    $classe = "nok";
}

$force = 30;
$agility = 30;
$intelligence = 30;
$apparence = 30;
$endurance = 50;
$mentality = 30;
/*
// BONUS & MALUS de FORCE
if ($sexe = $sexe_array[0]){
  $force = $force + 2;
} else {
  $force = $force - 2;
}
if ($classe = $classes_array[4]){
  $force = $force + 2;
}
if ($race = $races_array[1] || $races_array[3]){
  $force = $force + 1;
}
if ($classe = $classes_array[3]){
  $force = $force + 1;
}
if ($race = $races_array[4]){
  $force = $force + 3;
}

// BONUS & MALUS d'AGILITE
if ($race = $races_array[5]){
  $agility = $agility + 1;
}
if ($classe = $classes_array[5]){
  $agility = $agility + 1;
}
if ($race = $races_array[0]){
  $agility = $agility + 2;
}
if ($classe = $classes_array[2]){
  $agility = $agility + 2;
}

// BONUS & MALUS d'INTELLIGENCE
if ($race = $races_array[3]){
  $intelligence = $intelligence - 1;
}
if ($race = $races_array[2]){
  $intelligence = $intelligence + 1;
}
if ($classe = $classes_array[0]){
  $intelligence = $intelligence + 1;
}
if ($classe = $classes_array[1]){
  $intelligence = $intelligence + 2;
}

// BONUS & MALUS d'APPARENCE
if ($sexe = $sexe_array[0]){
  $apparence = $apparence - 2;
} else {
  $apparence = $apparence + 2;
}
if ($race = $races_array[1]){
  $apparence = $apparence - 1;
}
if ($race = $races_array[0] || $races_array[2]){
  $apparence = $apparence + 1;
}
if ($classe = $classes_array[0]){
  $apparence = $apparence + 1;
}

// BONUS & MALUS d'ENDURANCE
if ($race = $races_array[1] || $races_array[3]){
  $endurance = $endurance + 1;
}
if ($classe = $classes_array[5]){
  $endurance = $endurance + 1;
}
if ($race = $races_array[5]){
  $endurance = $endurance + 2;
}

// BONUS & MALUS de MENTALITE
if ($race = $races_array[2]){
  $mentality = $mentality - 1;
}
if ($classe = $classes_array[3]){
  $mentality = $mentality + 1;
}
*/
echo "Combien voulez-vous ajouter...\n";
echo "En FORCE ?\n";
	$answer_force = readline(">> ");
	$force = $force + $answer_force;
echo "En AGILITE ?\n";
	$answer_agility = readline(">> ");
	$agility = $agility + $answer_agility;
echo "En INTELLIGENCE ?\n";
	$answer_intelligence = readline(">> ");
	$intelligence = $intelligence + $answer_intelligence;
echo "En APPARENCE ?\n";
	$answer_apparence = readline(">> ");
	$apparence = $apparence + $answer_apparence;
echo "En ENDURANCE ?\n";
	$answer_endurance = readline(">> ");
	$endurance = $endurance + $answer_endurance;
echo "En MENTALITE ?\n";
	$answer_mentality = readline(">> ");
	$mentality = $mentality + $answer_mentality;
echo "\n";


echo "\n";
echo "NOM = $name";
echo "\n";
echo "SEXE = $sexe";
echo "\n";
echo "RACE = $race";
echo "\n";
echo "CLASSE = $classe";
echo "\n";

echo "FORCE = $force";
echo "\n";
echo "AGILITE = $agility";
echo "\n";
echo "INTELLIGENCE = $intelligence";
echo "\n";
echo "APPARENCE = $apparence";
echo "\n";
echo "ENDURANCE = $endurance";
echo "\n";
echo "MENTALITE = $mentality";
echo "\n";
