<?php



$apple_iteration_4 = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple_iteration_4->row,
  'liste_projet_admin_id',
  'liste_projet_admin_id_sha1',
  'liste_projet_admin_id_parent',
  'liste_projet_admin_id_sha1_general',
  'liste_projet_admin_ip',
  'liste_projet_admin_img',
  'liste_projet_admin_name1',
  'liste_projet_admin_name2',
  'liste_projet_admin_name1_ascii',
  'liste_projet_admin_name2_ascii',
  'liste_projet_admin_name3',
  'liste_projet_admin_name4',
  'liste_projet_admin_name_tittle1',
  'liste_projet_admin_name_tittle2',
  'liste_projet_admin_name_tittle1_ascii',
  'liste_projet_admin_name_tittle2_ascii',
  'liste_projet_admin_name_tittle3',
  'liste_projet_admin_name_tittle4',
  'liste_projet_admin_new_file',
  'liste_projet_admin_visibilite1'
);

$apple_iteration_4->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`!="remove" AND `liste_projet_admin_id_parent` ="' . $iteration3_x . '" ';
$apple_iteration_4->execution();

$number_iteration_4 = 0;
// affectation valeur array 
// execution et ajout des element dans la nouvelle table   
$liste_projet_admin_id_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_id_sha1_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_id_parent_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_id_sha1_general_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_ip_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_img_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name1_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name2_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name1_ascii_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name2_ascii_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name3_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name4_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name_tittle1_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name_tittle2_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name_tittle1_ascii_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name_tittle2_ascii_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name_tittle3_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_name_tittle4_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);
$number_iteration_4++;
$liste_projet_admin_new_file_iteration_4 = $apple_iteration_4->add_array_element($number_iteration_4);

$number_iteration_4++;
$liste_projet_admin_visibilite1_4 = $apple_iteration_4->add_array_element($number_iteration_4);


for ($iteration_4x = 0; $iteration_4x < count($liste_projet_admin_id_sha1_iteration_4); $iteration_4x++) {



if($liste_projet_admin_visibilite1_4[$iteration_4x]=="")
{

  $mot_d_origine1 = '';
  $ascii_codes = explode(' ', trim($liste_projet_admin_name1_ascii_iteration_4[$iteration_4x]));
  foreach ($ascii_codes as $ascii_code) {
    $mot_d_origine1 .= chr($ascii_code);
  }


  $mot_d_origine2 = '';
  $ascii_codes = explode(' ', trim($liste_projet_admin_name2_ascii_iteration_4[$iteration_4x]));
  foreach ($ascii_codes as $ascii_code) {
    $mot_d_origine2 .= chr($ascii_code);
  }







  echo '<div class="iteration3_0 iterationimg_all">';
  echo "<h1>" . $mot_d_origine1 . "</h1>";
  echo "<p>" . $mot_d_origine2 . "</p>";
  echo '</div>';



  if ($liste_projet_admin_new_file_iteration_4[$iteration_4x] != "") {
    echo '<div class="iteration3_0_img iterationimg_all">';
    ?>

    <a href="../add_picture/<?php echo $liste_projet_admin_new_file_iteration_4[$iteration_4x] ?>">
      <img src="../add_picture/<?php echo $liste_projet_admin_new_file_iteration_4[$iteration_4x] ?>" alt="" srcset="">

    </a>

    <?php
    echo '</div>';

  }


  $iteration3_x = $liste_projet_admin_id_sha1_iteration_4[$iteration_4x];

 //include ("iteration/iteration4.php");

}
}


?>