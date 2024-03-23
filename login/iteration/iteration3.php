<?php

$liste_projet_admin_id_sha1_iteration4 = $liste_projet_admin_id_sha1_iteration3;


// Itération sur les éléments de $liste_projet_admin_id_sha1
for ($o_iteration4 = 0; $o_iteration4 < count($liste_projet_admin_id_sha1_iteration4); $o_iteration4++) {

  $liste_projet_admin_id_parent_iteration4 = $liste_projet_admin_id_sha1_iteration4[$o_iteration4];

  // Nouvel objet $apple à chaque itération
  $apple_iteration4 = new Select_datas($servername, $username, $password, $dbname);

  array_push(
    $apple_iteration4->row,
    'liste_projet_admin_id_sha1',
    'liste_projet_admin_id',
    'liste_projet_admin_name1',
    'liste_projet_admin_name2'
  );

  $apple_iteration4->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_parent`="' . $liste_projet_admin_id_parent_iteration4 . '" ';
  $apple_iteration4->execution();



  if ($apple_iteration4->list_row != 0) {


    $number_iteration4 = 0;
    $liste_projet_admin_id_sha1_iteration4 = $apple_iteration4->add_array_element($number_iteration4);
    $number_iteration4++;
    $liste_projet_admin_id_iteration4 = $apple_iteration4->add_array_element($number_iteration4);
    $number_iteration4++;
    $liste_projet_admin_name1_iteration4 = $apple_iteration4->add_array_element($number_iteration4);
    $number_iteration4++;
    $liste_projet_admin_name2_iteration4 = $apple_iteration4->add_array_element($number_iteration4);





    echo "<h1>".$liste_projet_admin_name1_iteration4[$o_iteration4]."</h1>";
    echo "<p>".$liste_projet_admin_name2_iteration4[$o_iteration4]."</p>";
 
  
 
     // include("iteration4.php");


  }
  //var_dump( $liste_projet_admin_name1_iteration4);


}

?>