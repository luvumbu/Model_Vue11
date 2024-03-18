<?php
 include("path_class.php") ; 


 
 $apple = new Select_datas($servername,$username,$password,$dbname);

 array_push(
   $apple->row,
   'liste_projet_admin_id_sha1',
   'liste_projet_admin_id',
   'liste_projet_admin_name1',
   'liste_projet_admin_name2'
   

   );


   $apple->sql='SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general` !="remove" AND `liste_projet_admin_id_parent`="" ';
   $apple->execution();
   $myJSON = json_encode($apple->list_row);   

   $number = 0 ; 
   // affectation valeur array 
   // execution et ajout des element dans la nouvelle table 
   
   $liste_projet_admin_id_sha1=$apple->add_array_element($number);
   $number ++ ; 
   $liste_projet_admin_id=$apple->add_array_element($number);
   $number ++ ; 
   $liste_projet_admin_name1=$apple->add_array_element($number);
   $number ++ ; 
   $liste_projet_admin_name2=$apple->add_array_element($number);
   $number ++ ; 

 
include("admin_section_form.php");
 
 


 
?>

<style>
  .cursor_pointer{
    margin: 15px;
  }
 
</style>