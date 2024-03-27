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
  'liste_projet_admin_name2',
  'liste_projet_admin_id_parent',
  'liste_projet_admin_name1_ascii',
  'liste_projet_admin_name2_ascii'
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
$liste_projet_admin_id_parent_ = $apple->add_array_element($number);
$number++;
$liste_projet_admin_name1_ascii = $apple->add_array_element($number);
$number++;
$liste_projet_admin_name2_ascii = $apple->add_array_element($number);
$number++;
$src_parent = $liste_projet_admin_id_parent_[0];
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










$mot_d_origine1 = '';
$mot_d_origine2 = '';
if ($liste_projet_admin_name1[0] != "") {


  $ascii_codes = explode(' ', trim($liste_projet_admin_name1_ascii[0]));
  foreach ($ascii_codes as $ascii_code) {
    $mot_d_origine1 .= chr($ascii_code);
  }
}


if ($liste_projet_admin_name2[0] != "") {



  $ascii_codes = explode(' ', trim($liste_projet_admin_name2_ascii[0]));
  foreach ($ascii_codes as $ascii_code) {
    $mot_d_origine2 .= chr($ascii_code);
  }
}

























$liste_projet_admin_name1_d_origine = '';
$ascii_codes = explode(' ', trim($liste_projet_admin_name1_ascii[0]));
foreach ($ascii_codes as $ascii_code) {
  $liste_projet_admin_name1_d_origine .= chr($ascii_code);
}
$liste_projet_admin_name2_d_origine = '';
$ascii_codes = explode(' ', trim($liste_projet_admin_name2_ascii[0]));
foreach ($ascii_codes as $ascii_code) {
  $liste_projet_admin_name2_d_origine .= chr($ascii_code);
}
  echo "<div class='home_0'>" ; 
  echo '<h1>' . $liste_projet_admin_name1_d_origine . '</h1>';
  echo '<p>' . $liste_projet_admin_name2_d_origine . '</p>';
  echo "</div>" ; 
  if ($liste_projet_admin_id_parent_[0] != "") {

  }



  $apple = new Select_datas($servername, $username, $password, $dbname);

  array_push(
    $apple->row,
    'liste_projet_admin_id_sha1',
    'liste_projet_admin_id',
    'liste_projet_admin_name1',
    'liste_projet_admin_name2',
    'liste_projet_admin_id_parent',
    'liste_projet_admin_name1_ascii',
    'liste_projet_admin_name2_ascii'
  );

  $apple->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`!="remove" AND `liste_projet_admin_id_parent` ="' . give_url() . '" ';
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

  $liste_projet_admin_id_parent = $apple->add_array_element($number);
  $number++;

  $liste_projet_admin_name1_ascii = $apple->add_array_element($number);
  $number++;
  $liste_projet_admin_name2_ascii = $apple->add_array_element($number);
  $number++;







 


if(count( $liste_projet_admin_id_sha1) !=0){
  $mot_d_origine1 = '';
  $mot_d_origine2 = '';
  if ($liste_projet_admin_name1[0] != "") {
  
  
    $ascii_codes = explode(' ', trim($liste_projet_admin_name1_ascii[0]));
    foreach ($ascii_codes as $ascii_code) {
      $mot_d_origine1 .= chr($ascii_code);
    }
  }
  
  
  if ($liste_projet_admin_name2[0] != "") {
  
  
  
    $ascii_codes = explode(' ', trim($liste_projet_admin_name2_ascii[0]));
    foreach ($ascii_codes as $ascii_code) {
      $mot_d_origine2 .= chr($ascii_code);
    }
  }

}
 
 
  $list_array_class = array(
    "container p-5 my-5 border",
    "container p-5 my-5 bg-dark text-white",
    "container p-5 my-5 bg-primary text-white"
  );


  for ($a = 0; $a < count($liste_projet_admin_name1); $a++) {
    ?>
    <?php
    /* <div class="<?php echo $list_array_class[fmod($a, count($list_array_class))] ?>"> */
    ?>
    <div class="home_2">
        <h1>
          <?php echo $mot_d_origine1; ?>
        </h1>
        <p>
          <?php echo $mot_d_origine2; ?>
        </p>
    </div>

    <?php
    /*
    <a href="<?php echo $liste_projet_admin_id_sha1[$a] ?>">
      <div class="btn btn-primary">Voir article</div>
    </a>
    */
    include ("iteration/iteration2.php");

  }
  ?>
  <a href="../index.php">
    <img width="50" height="50" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1" />
  </a>

 

  <style>
    p{
      text-align: justify;
    }
  </style>