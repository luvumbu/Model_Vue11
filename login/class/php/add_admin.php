<?php 
include("path_class.php") ; 


$t = time() ;
$apple = new Insertion_Bdd(
          $servername,
          $username,
          $password,
          $dbname
          
          );
              
         
          $apple->set_msg_valudation("inserttion ok ") ;  
          $apple->set_sql("INSERT INTO liste_projet_admin (liste_projet_admin_id_sha1)
                  
          VALUES ('$t')") ; 
          $apple->execution() ;



?>