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
  'liste_projet_admin_id_parent'
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



$src_parent = $liste_projet_admin_id_parent_[0] ; 
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
 


 echo '<div class="container p-5 my-5 menu_01">' ; 
    echo '<h1 class="text-center">'.$liste_projet_admin_name1[0].'</h1>';
    echo '<p>'.$liste_projet_admin_name2[0].'</p>';



    ?>
<div class="container mt-3 rounded_p">
  
  <img src="../../src/img/bokonzi.png" class="rounded" alt="Cinque Terre" > 
</div>

<?php

    if($liste_projet_admin_id_parent_[0]!=""){
   
      ?>
      <a href="<?php echo $src_parent?>">
        <div   class="btn btn-secondary">Source article</div>
      </a>

      <?php
    }
echo '</div>' ; 




?>

 
<?php 
$apple = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple->row,
  'liste_projet_admin_id_sha1',
  'liste_projet_admin_id',
  'liste_projet_admin_name1',
  'liste_projet_admin_name2',
  'liste_projet_admin_id_parent'
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


 

$list_array_class = array(
  "container p-5 my-5 border",
  "container p-5 my-5 bg-dark text-white", 
  "container p-5 my-5 bg-primary text-white" 
);

echo '<div class="menu_02">';
for($a = 0 ; $a<count($liste_projet_admin_name1); $a ++) {
?>
<div class="<?php echo $list_array_class[fmod($a, count($list_array_class))] ?>">
  <h1><?php echo $liste_projet_admin_name1[$a]; ?></h1>
  <p><?php echo  $liste_projet_admin_name2[$a]; ?></p>
<a href="<?php echo $liste_projet_admin_id_sha1[$a] ?>">
<div   class="btn btn-primary margin_top">Voir article</div>
</a>


</div>
<?php 
  



 
}



echo '<div/>';







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

    .menu_presentation_child{
      background-color:red ; 
      
    }
    .margin_top{
      margin-top:100px; 
      border:1px solid rgba(0,50,0,0.8) ; 
    }
.rounded_p{
  width:50%;
  margin: auto;
  margin-top: 150px;
      margin-bottom: 150px;
}
    .rounded{
      text-align: center;
     
      margin: auto;
 
      width: 100%;
    }
  </style>


