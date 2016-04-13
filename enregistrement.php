<?php 

$nom = strtolower($_POST['nom']);
$nom = ucfirst($nom); 
$prenom = strtolower($_POST['prenom']);
$prenom = ucfirst($prenom);

if ("Homme"==$_POST['sexe']){
  echo "Bonjour Monsieur $nom $prenom";
}

if ("Femme"==$_POST['sexe']){
  echo "Bonjour Madame $nom $prenom";
}


?>
