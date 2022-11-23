<?php
session_start();
function saveScore(){
    $file = 'scores.txt';
    $current = file_get_contents($file);
    
    $current .= $_SESSION["username"].":". $_SESSION["score"]."\n";
    file_put_contents($file, $current);
}
function showForm(){
?>
    <form method="get" action="reverseAkinator.php">
    <input type="text" name="nombre" />
     <input type="submit" value="ok" name="btn"/>
   </form>
   <?php
}
if(isset($_POST["username"])){
    $username=$_POST["username"];
    $_SESSION["username"]=$username;
    $_SESSION["score"]=10;
    $_SESSION["nombreSecret"]=random_int(0,100);
    ?>
   je pense à un nombre entre 1 et 100 quel est ce nombre?

 


<?php 
   showForm();
}
else if(isset($_SESSION["username"])){

    if(isset($_GET["nombre"])){
        $nombre=$_GET["nombre"];
        if($nombre >  $_SESSION["nombreSecret"]){
            echo "plus petit.<br/>";
            $_SESSION["score"]= $_SESSION["score"]-1;
            showForm();
        }
        if($nombre ==  $_SESSION["nombreSecret"]){
            echo "Gagné: votre score: ".$_SESSION["score"].".<br/>";
            saveScore();
            
        }
        if($nombre <  $_SESSION["nombreSecret"]){
            echo "plus grand.<br/>";
            $_SESSION["score"]= $_SESSION["score"]-1;
            showForm();
        }
    }
}

?>