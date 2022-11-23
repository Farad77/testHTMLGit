<?php
session_start();
session_destroy();

?>
<form method="POST" action="reverseAkinator.php">
<input type="text" name="username" value="" />
  
    <input type="submit" value="ok" name="btn"/>
</form>
<!-- <table>
    <thead><tr><th>Nom</th><th>Prénom</th><th>Age</th></tr></thead>
    <tbody> -->
<?php
/*$entier=17;
$nombreReel=15.5;
$nom="Sebastien";
$booleen=true;
echo $entier." ".$nombreReel." ".$nom." ".$booleen;
echo gettype($booleen);


$tableau=array("item1",5,true);

var_dump($tableau);
$tableau[0]="Rien dedans";
var_dump($tableau);
$tableau[5]="Rajouter element";
var_dump($tableau);

echo $tableau[5];*/
//Utilisateur: nom,prenom,age
/*$utilisateur1=array("nom"=>"Manglou","prenom"=>"Sebastien","age"=>18);
$utilisateur2=array("nom"=>"Payet","prenom"=>"Yves","age"=>38);
$utilisateur3=array("nom"=>"Hoareau","prenom"=>"Paul","age"=>58);
$utilisateur4=array("nom"=>"Robert","prenom"=>"Jacques","age"=>62);

$utilisateurs=array($utilisateur1,$utilisateur2,$utilisateur3,$utilisateur4);
foreach($utilisateurs as $utilisateur){
    echo "<tr><td>".$utilisateur["nom"]."</td><td>".
                $utilisateur["prenom"]."</td><td>".$utilisateur["age"]."</td></tr>";
}
$tableau=array("item1",5,true);
var_dump($tableau);*/


/*for($compteur=0;$compteur<count($tableau);$compteur++){
    echo "<li>".$tableau[$compteur]."</li>";

}*/
/*foreach($tableau as $valeur){
    echo "<li>".$valeur."</li>";
}*/

?>
<!-- </tbody>
</table> -->

<?php
// var_dump($_GET);
// // var_dump($_POST);*/
// // var_dump($_POST);*/

// echo $_POST["username"];


?>