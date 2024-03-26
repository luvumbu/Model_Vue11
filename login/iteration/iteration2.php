<?php 
    $apple_iteration_2 = new Select_datas($servername, $username, $password, $dbname);    
    array_push(
      $apple_iteration_2->row,
      'liste_projet_admin_id_sha1',
      'liste_projet_admin_id',
      'liste_projet_admin_name1',
      'liste_projet_admin_name2',
      'liste_projet_admin_id_parent'
    );
    
    $apple_iteration_2->sql = 'SELECT * FROM `liste_projet_admin` WHERE `liste_projet_admin_id_sha1_general`!="remove" AND `liste_projet_admin_id_parent` ="' .$liste_projet_admin_id_sha1[$a] . '" ';
    $apple_iteration_2->execution();
     
    $number_iteration_2 = 0;
    // affectation valeur array 
    // execution et ajout des element dans la nouvelle table   
    $liste_projet_admin_id_sha1_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;
    $liste_projet_admin_id_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;
    $liste_projet_admin_name1_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;
    $liste_projet_admin_name2_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number_iteration_2++;    
    $liste_projet_admin_id_parent_iteration_2 = $apple_iteration_2->add_array_element($number_iteration_2);
    $number++;   

    for($iteration_2x= 0 ; $iteration_2x< count($liste_projet_admin_id_sha1_iteration_2) ; $iteration_2x ++ ) {
    echo '<div class="iteration2_0">' ; 
      echo  "<h1>".$liste_projet_admin_name1_iteration_2[$iteration_2x]."</h1>" ; 
      echo  "<p>".$liste_projet_admin_name2_iteration_2[$iteration_2x]."</p>" ;
      echo '</div>' ; 
      $iteration3_x=$liste_projet_admin_id_sha1_iteration_2[$iteration_2x] ;      
    include ("iteration/iteration3.php"); 
    }
    ?>

 