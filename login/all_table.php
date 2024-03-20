<?php
include("../model/class/php/connexion.php") ;    
include("../model/class/php/Select_datas.php") ;    
include("../model/class/php/Insertion_Bdd.php") ;  
$apple = new Select_datas($servername,$username,$password,$dbname);

array_push(
  $apple->row,
  'liste_projet_admin_id_sha1',
  'liste_projet_admin_id',
  'liste_projet_admin_name1',
  'liste_projet_admin_name2'
);

$apple->sql='SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`!="remove"';
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
// Itération sur les éléments de $liste_projet_admin_id_sha1
for($o=0; $o < count($liste_projet_admin_id_sha1); $o++){
    echo $liste_projet_admin_id_sha1[$o];
    echo "<br/>";
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

    include("class/php/admin_section_form.php");
}
?>
