 <?php

 

  


for ($o_iteration2 = 0; $o_iteration2 < count($liste_projet_admin_id_sha1_iteration1); $o_iteration2++) {

 




 
 
$apple_iteration2 = new Select_datas($servername, $username, $password, $dbname);

array_push(
  $apple_iteration2->row,
  'liste_projet_admin_id_sha1',
  'liste_projet_admin_id',
  'liste_projet_admin_name1',
  'liste_projet_admin_name2'
);

$apple_iteration2->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_parent`="'. $liste_projet_admin_id_sha1_iteration1[$o_iteration2].'"  AND `liste_projet_admin_id_sha1_general` !="remove"';
$apple_iteration2->execution();

$number_iteration2 = 0;
$liste_projet_admin_id_sha1_iteration2 = $apple_iteration2->add_array_element($number_iteration2);
$number_iteration2++;
$liste_projet_admin_id_iteration2 = $apple_iteration2->add_array_element($number_iteration2);
$number_iteration2++;
$liste_projet_admin_name1_iteration2 = $apple_iteration2->add_array_element($number_iteration2);
$number_iteration2++;
$liste_projet_admin_name2_iteration2 = $apple_iteration2->add_array_element($number_iteration2);
 






//  echo $liste_projet_admin_name1_iteration2[0] ; 

 
if(count($liste_projet_admin_name1_iteration2)!=0){
 

  for($o_iteration3 = 0 ; $o_iteration3<count($liste_projet_admin_name1_iteration2) ; $o_iteration3 ++ ) {


?>
<div class="container-fluid p-5  text-center">
  <h1>
    <?php    echo $liste_projet_admin_name1_iteration2[$o_iteration3] ; ?>
  </h1>
  <p>
    <?php    echo $liste_projet_admin_name2_iteration2[$o_iteration3] ; ?>
  </p> 
</div>
  
 

<?php 
 









  }

}
 

?>



<?php 

}
?>
  
