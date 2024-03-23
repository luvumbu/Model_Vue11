</body>

</html>
<?php
include ("../model/class/php/connexion.php");
include ("../model/class/php/Select_datas.php");
include ("../model/class/php/Insertion_Bdd.php");
include ("../model/class/php/give_url.php");

 
$apple = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple->row,
  'liste_projet_admin_id_sha1',
  'liste_projet_admin_id',
  'liste_projet_admin_name1',
  'liste_projet_admin_name2'
);

$apple->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`!="remove" AND `liste_projet_admin_id_sha1` ="' . give_url() . '" ';
$apple->execution();
$myJSON = json_encode($apple->list_row);
$number = 0;
// affectation valeur array 
// execution et ajout des element dans la nouvelle table   
$liste_projet_admin_id_sha1 = $apple->add_array_element($number);
$number++;
$liste_projet_admin_id = $apple->add_array_element($number);
$number++;
$liste_projet_admin_name1 = $apple->add_array_element($number);
$number++;
$liste_projet_admin_name2 = $apple->add_array_element($number);
$number++;

?>



<?php


if (count($apple->list_row) == 0) {



  ?>
  <img style="width:60%" src="http://i55.servimg.com/u/f55/13/89/58/68/error410.jpg" alt="" srcset="">

  <?php
} else {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>
      <?php echo $liste_projet_admin_name1[0]; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <?php

}
$liste_projet_admin_id_sha1_iteration1 = $liste_projet_admin_id_sha1;



// Itération sur les éléments de $liste_projet_admin_id_sha1
for ($o = 0; $o < count($liste_projet_admin_id_sha1_iteration1); $o++) {

  $liste_projet_admin_id_parent_iteration1 = $liste_projet_admin_id_sha1_iteration1[$o];

  // Nouvel objet $apple à chaque itération
  $apple_iteration1 = new Select_datas($servername, $username, $password, $dbname);

  array_push(
    $apple_iteration1->row,
    'liste_projet_admin_id_sha1',
    'liste_projet_admin_id',
    'liste_projet_admin_name1',
    'liste_projet_admin_name2'
  );

  $apple_iteration1->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_parent`="' . $liste_projet_admin_id_parent_iteration1 . '"  AND `liste_projet_admin_id_sha1_general` !="remove"';
  $apple_iteration1->execution();

  $number_iteration1 = 0;
  $liste_projet_admin_id_sha1_iteration1 = $apple_iteration1->add_array_element($number_iteration1);
  $number_iteration1++;
  $liste_projet_admin_id_iteration1 = $apple_iteration1->add_array_element($number_iteration1);
  $number_iteration1++;
  $liste_projet_admin_name1_iteration1 = $apple_iteration1->add_array_element($number_iteration1);
  $number_iteration1++;
  $liste_projet_admin_name2_iteration1 = $apple_iteration1->add_array_element($number_iteration1);















  if (count($apple_iteration1->list_row ) != 0) {

 
    $number_iteration1 = 0;
    $liste_projet_admin_id_sha1_iteration1 = $apple_iteration1->add_array_element($number_iteration1);
    $number_iteration1++;
    $liste_projet_admin_id_iteration1 = $apple_iteration1->add_array_element($number_iteration1);
    $number_iteration1++;
    $liste_projet_admin_name1_iteration1 = $apple_iteration1->add_array_element($number_iteration1);
    $number_iteration1++;
    $liste_projet_admin_name2_iteration1 = $apple_iteration1->add_array_element($number_iteration1);
 

 
     
 


?>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php  echo $liste_projet_admin_name1[0];?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
 
<?php
 
for ($o_iteration1 = 0; $o_iteration1 < count($liste_projet_admin_id_sha1_iteration1); $o_iteration1++) {
  echo '
  <li class="nav-item">
    <a class="nav-link" href="#">'.$liste_projet_admin_name1_iteration1[$o_iteration1].'</a>
  </li>';
}

echo '</ul>
</div>
</div>
</nav>
';
      include("iteration/iteration2.php");
 


  }

}


?>





<div class="margin_t"></div>

  <a href="../index.php">
    <img width="50" height="50" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1" />

  </a>


  <style>
    body {
      margin: 0;
      padding: 0;
    }
    .margin_t{
      margin-top: 700px;
    }
  </style>