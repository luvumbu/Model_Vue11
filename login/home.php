<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>








  <?php
  include ("../model/class/php/connexion.php");
  include ("../model/class/php/Select_datas.php");
  include ("../model/class/php/Insertion_Bdd.php");
  include ("../model/class/php/give_url.php");




  $apple_iteration_1 = new Select_datas($servername, $username, $password, $dbname);
  array_push(
    $apple_iteration_1->row,
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
    'liste_projet_admin_new_file'

  );

  $apple_iteration_1->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`!="remove" AND `liste_projet_admin_id_sha1` ="' . give_url() . '" ';
  $apple_iteration_1->execution();

  $number_iteration_1 = 0;
  // affectation valeur array 
  // execution et ajout des element dans la nouvelle table   
  $liste_projet_admin_id_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_id_sha1_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_id_parent_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_id_sha1_general_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_ip_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_img_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name1_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name2_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name1_ascii_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name2_ascii_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name3_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name4_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name_tittle1_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name_tittle2_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name_tittle1_ascii_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name_tittle2_ascii_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;

  $liste_projet_admin_name_tittle3_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;
  $liste_projet_admin_name_tittle4_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);
  $number_iteration_1++;
  $liste_projet_admin_new_file_iteration_1 = $apple_iteration_1->add_array_element($number_iteration_1);













  for ($iteration_1x = 0; $iteration_1x < count($liste_projet_admin_id_sha1_iteration_1); $iteration_1x++) {




    $mot_d_origine1 = '';
    $ascii_codes = explode(' ', trim($liste_projet_admin_name1_ascii_iteration_1[$iteration_1x]));
    foreach ($ascii_codes as $ascii_code) {
      $mot_d_origine1 .= chr($ascii_code);
    }


    $mot_d_origine2 = '';
    $ascii_codes = explode(' ', trim($liste_projet_admin_name2_ascii_iteration_1[$iteration_1x]));
    foreach ($ascii_codes as $ascii_code) {
      $mot_d_origine2 .= chr($ascii_code);
    }









    echo '<div class="iteration1_0 iterationimg_all">';
    echo "<h1>" . $mot_d_origine1 . "</h1>";
    echo "<p>" . $mot_d_origine2 . "</p>";
    echo '</div>';



    if ($liste_projet_admin_new_file_iteration_1[$iteration_1x] != "") {
      echo '<div class="iteration1_0_img iterationimg_all">';
      ?>

      <a href="../add_picture/<?php echo $liste_projet_admin_new_file_iteration_1[$iteration_1x] ?>">
        <img src="../add_picture/<?php echo $liste_projet_admin_new_file_iteration_1[$iteration_1x] ?>" alt="" srcset="">
      </a>

      <?php
      echo '</div>';

    }
    $iteration2_x = $liste_projet_admin_id_sha1_iteration_1[$iteration_1x];
    include ("iteration/iteration2.php");
  }
  ?>

</body>

</html>

<style>
  .iterationimg_all img {
    max-width: 250px;
 
  margin-top:100px; 
  margin-bottom:100px; 
  }
  .iterationimg_all{
    width: 80% ; 
   
    margin: auto;   text-align: center;
  }
  .iterationimg_all p {
    text-align: justify;
  }
  .iterationimg_all p, .iterationimg_all h1 {
  padding: 15px;
  }



  @media screen and (max-width: 1200px) {
    .iterationimg_all{
    width: 90% ; 
   
   
  }
}
</style>