<?php
session_start();
if(isset($_POST["pwd"])&&isset($_POST["username"])){
    $password=$_POST["pwd"];

    if($password === "0e45786"){
      //  setcookie("secret","1");
      $_SESSION["secret"]=1;
      $_SESSION["username"]=$_POST["username"];
      
      echo "MESSAGE SECRET";
    }
}
else{
    if(isset($_SESSION["secret"])&&
            $_SESSION["secret"]===1){
                //XSS
                echo "Salut ". $_SESSION["username"]."<br/>";
        echo "MESSAGE SECRET";
    }
  /*  if(isset($_COOKIE["secret"])&&$_COOKIE["secret"]==="1"){
        echo "MESSAGE SECRET";
    }
    else setcookie("secret","0");*/
}
?>
