<?php 

include("model/class/php/Select_file.php");
$apple = new Select_file("model/class/php/",".php");

// 1 donner le chemin du fichier 
// 2 Donner son extension 
// 3 ajouter a l'aide de set array les nom des fichier a ajouter
// 4 faire l'execution du code pour avec exe()
$apple->set_array_name('verif_file_name');
if (file_exists("model/class/php/connexion.php")) {
 
$apple->set_array_name('connexion');
$apple->set_array_name('destroy');
$apple->set_array_name('Get_anne');
$apple->set_array_name('Insertion_Bdd');
$apple->set_array_name('remove_db');
$apple->set_array_name('Select_datas');



 
 for($a = 0 ; $a<count($apple->array_name);$a++) {  
    include($apple->src_name.$apple->array_name[$a].$apple->extension) ; 
 }

 
 
 
 
 // Create connection
 $conn = new mysqli($servername, $username, $password); 
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 header('Location:login/index.php');
 exit();
     
 }
 else {
 
  $apple = new Select_file("model/class/js/",".js");

  $apple->set_array_name('Ajax');
  $apple->set_array_name('Atribute');
  $apple->set_array_name('Information');


  echo "<script>" ; 
  for($a = 0 ; $a<count($apple->array_name);$a++) {  
    include($apple->src_name.$apple->array_name[$a].$apple->extension) ; 
 }
 echo "</script>" ; 


   
 }
 
 ?>