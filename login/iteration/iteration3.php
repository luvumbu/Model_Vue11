<?php 

 

    $apple_iteration_3 = new Select_datas($servername, $username, $password, $dbname);
    
    array_push(
      $apple_iteration_3->row,
      'liste_projet_admin_id_sha1',
      'liste_projet_admin_id',
      'liste_projet_admin_name1',
      'liste_projet_admin_name2',
      'liste_projet_admin_id_parent'
    );
    
    $apple_iteration_3->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`!="remove" AND `liste_projet_admin_id_parent` ="' .$iteration3_x. '" ';
    $apple_iteration_3->execution();
     
    $number_iteration_3 = 0;
    // affectation valeur array 
    // execution et ajout des element dans la nouvelle table   
    $liste_projet_admin_id_sha1_iteration_3 = $apple_iteration_3->add_array_element($number_iteration_3);
    $number_iteration_3++;
    $liste_projet_admin_id_iteration_3 = $apple_iteration_3->add_array_element($number_iteration_3);
    $number_iteration_3++;
    $liste_projet_admin_name1_iteration_3 = $apple_iteration_3->add_array_element($number_iteration_3);
    $number_iteration_3++;
    $liste_projet_admin_name2_iteration_3 = $apple_iteration_3->add_array_element($number_iteration_3);
    $number_iteration_3++;
    
    $liste_projet_admin_id_parent_iteration_3 = $apple_iteration_3->add_array_element($number_iteration_3);
    $number++;
    
    

    for($iteration_3x= 0 ; $iteration_3x< count($liste_projet_admin_id_sha1_iteration_3) ; $iteration_3x ++ ) {
    echo '<div class="iteration3_0">' ; 

      echo  "<h1>".$liste_projet_admin_name1_iteration_3[$iteration_3x]."</h1>" ; 
      echo  "<p>".$liste_projet_admin_name2_iteration_3[$iteration_3x]."</p>" ;
      echo '</div>' ; 


      $iteration3_x=$liste_projet_admin_id_sha1_iteration_3[$iteration_3x] ;
   
      include ("iteration/iteration3.php");

 
    }


    ?>


 