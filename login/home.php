<!DOCTYPE html>
<html lang="fr">









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



?>
<head>
  <title><?php echo $liste_projet_admin_name1_iteration_1[0] ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


<?php




  //  partie pour le menu 

  $apple_iteration_0 = new Select_datas($servername, $username, $password, $dbname);
  array_push(
    $apple_iteration_0->row,
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

  $apple_iteration_0->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`!="remove" AND `liste_projet_admin_id_parent` ="' . $liste_projet_admin_id_sha1_iteration_1[0]. '" ';
  $apple_iteration_0->execution();

  $number_iteration_0 = 0;
  // affectation valeur array 
  // execution et ajout des element dans la nouvelle table   
  $liste_projet_admin_id_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_id_sha1_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_id_parent_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_id_sha1_general_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_ip_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_img_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name1_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name2_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name1_ascii_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name2_ascii_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name3_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name4_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name_tittle1_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name_tittle2_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name_tittle1_ascii_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name_tittle2_ascii_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;

  $liste_projet_admin_name_tittle3_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;
  $liste_projet_admin_name_tittle4_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);
  $number_iteration_0++;
  $liste_projet_admin_new_file_iteration_0 = $apple_iteration_0->add_array_element($number_iteration_0);


?>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo $liste_projet_admin_name1_iteration_1[0] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

        <?php
 

 
for($x=0;$x<count($liste_projet_admin_name1_iteration_0);$x++){
echo '<li class="nav-item">';
echo '<a class="nav-link active" aria-current="page" href="#'.$liste_projet_admin_id_sha1_iteration_0[$x].'">'.$liste_projet_admin_name1_iteration_0[$x].'</a>';
echo ' </li>';
 

}
 
        ?>
 
       <!-- <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>-->
      </div>
    </div>
  </div>
</nav>
<?php

  //  partie pour le menu 

























//var_dump($liste_projet_admin_name1_iteration_0);
 
  
echo "<div class='iterationimg_all_0'> ";
echo "<div style='margin-bottom:150px'></div>";







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


echo "</div> ";

  ?>

</body>

</html>

<style>
  .iterationimg_all img {
    max-width: 250px;
 
  margin-top:100px; 
  margin-bottom:100px; 
  border-radius: 10px;

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


@font-face {
  font-family: "CaviarDreams";
  src: url("../src/font/CaviarDreams.ttf");
}
@font-face {
  font-family: "CaviarDreams_Bold";
  src: url("../src/font/CaviarDreams_Bold.ttf");
}

@font-face {
  font-family: "Louis George Cafe";
  src: url("../src/font/Louis George Cafe.ttf");
}


h1{
  font-family: "CaviarDreams_Bold";

}
body{
  font-family: "CaviarDreams";

background-color: #e5e5dc;
}
.iterationimg_all_0{
  background-color: white;
  width: 90%;
  margin: auto;
  border-radius:15px ;
}

</style>




<a href="../index.php">
  <img width="50" height="50" src="https://img.icons8.com/cotton/50/home--v3.png" alt="home--v3"/>
</a>

