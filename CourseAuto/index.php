<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<h1>Bienvenue sur le circuit !</h1>

<?php
require_once("vehicule.php");
require_once("voiture.php");
require_once("utilisateur.php");

$vehicule=new Vehicule("Bleu","BMW",1000);
//$vehicule->setCouleur("Bleu");


$vehicule2=new Vehicule("Vert","Audi",1001);
$vehicule2->setCouleur("Bleu");


echo $vehicule;

$voiture1=new Voiture("Bleu","BMW",1000);

echo $voiture1;
//Connection à la base
$db=new PDO("mysql:host=127.0.0.1;dbname=mydatabase","root","");


//Recuperation des utilisateurs
$requeteExtract=$db->query("select * from utilisateur");
$requeteExtract->setFetchMode(PDO::FETCH_CLASS,Utilisateur::class);

$resultat=$requeteExtract->fetchAll();
var_dump($resultat);

//Ajout d'un utilisateur
$utilisateur=new Utilisateur();
$utilisateur->setId(2);
$utilisateur->setUsername("Patrick");
$utilisateur->setScore(99);
$requeteInsert=$db->prepare("insert into utilisateur (id,username,score) values (?,?,?)");
//$tab=array($utilisateur->getId(),$utilisateur->getUsername(),$utilisateur->getScore());
//var_dump((array)$utilisateur);
$requeteInsert->execute($utilisateur->toArray());
//$requeteInsert->execute($tab);



//var_dump($requete);

?>
</body>
</html>