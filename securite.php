<?php


 session_start();
var_dump($_POST);

if($_POST["password"] == "2020")
{
echo $_POST ["password"] ;
$_SESSION ["id"] = $_POST ["name"];
}
 
else 
{
  echo "Mauvais couple identifiant / mot de passe";
  echo"<a href='connexion.php'> connexion </a>";
}
{
    echo"<a href= 'http://localhost:8888/ISCC-2020/ISCC-2020-J12/EX-01/mini-site-routing.php'> page d'acceuil </a>";
   
}
 
?>


