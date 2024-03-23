<?php

// Itération sur les éléments de $liste_projet_admin_id_sha1
for($o=0; $o < count($liste_projet_admin_id_sha1); $o++){

  $liste_projet_admin_id_parent_ =  $liste_projet_admin_id_sha1[$o];
  
  // Nouvel objet $apple à chaque itération
  $apple_iteration = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple_iteration->row,
    'liste_projet_admin_id_sha1',
    'liste_projet_admin_id',
    'liste_projet_admin_name1',
    'liste_projet_admin_name2'
  );

  $apple_iteration->sql='SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_parent`="'.$liste_projet_admin_id_parent_.'" ';
  $apple_iteration->execution();

  $number_iteration = 0 ; 
  $liste_projet_admin_id_sha1_iteration=$apple_iteration->add_array_element( $number_iteration);
  $number_iteration ++;
  $liste_projet_admin_id_iteration=$apple_iteration->add_array_element( $number_iteration);
  $number_iteration ++;
  $liste_projet_admin_name1_iteration=$apple_iteration->add_array_element( $number_iteration);
  $number_iteration ++;
  $liste_projet_admin_name2_iteration=$apple_iteration->add_array_element( $number_iteration);
  $number_iteration ++;


  

  echo "<h1>".$liste_projet_admin_name1_iteration5[$o_iteration5]."</h1>";
  echo "<p>".$liste_projet_admin_name2_iteration5[$o_iteration5]."</p>";

  

//  include("class/php/admin_section_form.php");
}

?>