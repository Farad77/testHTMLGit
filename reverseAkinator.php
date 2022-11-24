<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Score Reverse Akinator</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  



</head>
<body class="text-center">
    <div class="container-fluid !direction !spacing">
    <div class="row"> 
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
<div class="col-12"><img src="akinator.png" alt="image d'akinator"/></div>
</div> 
<div class="row"> 
    <form method="get" action="reverseAkinator.php">
    <input type="text" name="nombre" />
     <input type="submit" value="ok" name="btn"/>
   </form>
   </div>
   <?php
}
if(isset($_POST["username"])){
    $username=$_POST["username"];
    $_SESSION["username"]=$username;
    $_SESSION["score"]=10;
    $_SESSION["nombreSecret"]=random_int(0,100);
    ?>
  <div class="row"> <div class="col fs-1">je pense à un nombre entre 1 et 100 quel est ce nombre?</div></div>

 


<?php 
   showForm();
}
else if(isset($_SESSION["username"])){

    if(isset($_GET["nombre"])){
        $nombre=$_GET["nombre"];
        if($nombre >  $_SESSION["nombreSecret"]){
            echo '<div class="row"> <div class="col fs-1">plus petit.</div></div>';
            $_SESSION["score"]= $_SESSION["score"]-1;
            showForm();
        }
        if($nombre ==  $_SESSION["nombreSecret"]){
            echo "Gagné: votre score: ".$_SESSION["score"].".<br/>";
            saveScore();
            
        }
        if($nombre <  $_SESSION["nombreSecret"]){
            echo '<div class="row"> <div class="col fs-1">plus grand.</div></div>';
            $_SESSION["score"]= $_SESSION["score"]-1;
            showForm();
        }
    }
}

?>
  
    </div>
 <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

</body>
</html>