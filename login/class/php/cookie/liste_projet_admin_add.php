<?php 
include("path_class.php") ; 


$t = time() ;

 


$_SESSION["liste_projet_admin_id_parent"] =  $_POST["liste_projet_admin_id_parent"];
$liste_projet_admin_id_parent = $_POST["liste_projet_admin_id_parent"];
$apple = new Insertion_Bdd(
          $servername,
          $username,
          $password,
          $dbname
          
          );
              
         
          $apple->set_msg_valudation("inserttion ok ") ;  
          $apple->set_sql("INSERT INTO liste_projet_admin (liste_projet_admin_id_sha1,liste_projet_admin_id_parent)
                  
          VALUES ('$t','$liste_projet_admin_id_parent')") ; 
          $apple->execution() ;



?>