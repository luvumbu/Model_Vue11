<?php

$liste_projet_admin_id_sha1_iteration3 = $liste_projet_admin_id_sha1_iteration2;



// Itération sur les éléments de $liste_projet_admin_id_sha1
for ($o_iteration3 = 0; $o_iteration3 < count($liste_projet_admin_id_sha1_iteration3); $o_iteration3++) {

  $liste_projet_admin_id_parent_iteration3 = $liste_projet_admin_id_sha1_iteration3[$o_iteration3];

  // Nouvel objet $apple à chaque itération
  $apple_iteration3 = new Select_datas($servername, $username, $password, $dbname);

  array_push(
    $apple_iteration3->row,
    'liste_projet_admin_id_sha1',
    'liste_projet_admin_id',
    'liste_projet_admin_name1',
    'liste_projet_admin_name2'
  );

  $apple_iteration3->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_parent`="' . $liste_projet_admin_id_parent_iteration3 . '" ';
  $apple_iteration3->execution();



  if (count($apple_iteration3->list_row ) != 0) {

 
    $number_iteration3 = 0;
    $liste_projet_admin_id_sha1_iteration3 = $apple_iteration3->add_array_element($number_iteration3);
    $number_iteration3++;
    $liste_projet_admin_id_iteration3 = $apple_iteration3->add_array_element($number_iteration3);
    $number_iteration3++;
    $liste_projet_admin_name1_iteration3 = $apple_iteration3->add_array_element($number_iteration3);
    $number_iteration3++;
    $liste_projet_admin_name2_iteration3 = $apple_iteration3->add_array_element($number_iteration3);
 

  echo "<h1>".$liste_projet_admin_name1_iteration3[0]."</h1>";
  echo "<p>".$liste_projet_admin_name2_iteration3[0]."</p>";

 
    //        include("iteration3.php");


  }
  //var_dump( $liste_projet_admin_name1_iteration3);


}

?>