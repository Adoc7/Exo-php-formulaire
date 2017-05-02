<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<title>Formulaire php</title>

</head>
<body>

<!-- Formulaire php -->
<?php
// if(isset($_POST['envoi'])){
  $nom=$_POST['nom'];
  $message=$_POST['message'];
  $email=$_POST['email'];
  // $pattern = '/>/''/</';
$str ="Nom : ".$nom."<br> Email : ".$email."<br> Message : ".$message;
$str = strtoupper($str);

// $subject = $_POST['message'];

// if (preg_match($pattern, $message,$matches))
// {
//    echo "La chaine contient des caractères spéciaux";
// }else{
//      echo $str;
// }
// }

// Vérifie si la chaine ressemble à un email
if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email))
{
    // echo 'Cet email est correct.';
    strip_tags($str);
     echo $str;
} else {
    echo 'Cet email a un format non adapté.';
  }

  if (strlen($message)>400){
    echo "Danger !!! ";

  }else{
    echo "cool !";
  }

  if (strlen($nom)>20){
    echo "Danger !!!";

  }else{
    echo "cool !";
  }
?>

  </body>
  </html>
