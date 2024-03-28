<?php 
include("path_class.php") ; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ndenga Luvumbu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
 
<div class="container p-5 my-5 border">
  <h1>My First Bootstrap Page</h1>
  <p>This container has a border and some extra padding and margins.</p>
</div>

<div class="container p-5 my-5 bg-dark text-white">
  <h1>My First Bootstrap Page</h1>
  <p>This container has a dark background color and a white text, and some extra padding and margins.</p>
</div>

 


<?php 



 
$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

    'liste_projet_admin_id_sha1',
    'liste_projet_admin_name1',
    'liste_projet_admin_name2' 
    

    );
 
 
 
 
    $apple->sql='SELECT * FROM `liste_projet_admin` WHERE   `liste_projet_admin_id_sha1_general`!="remove" AND `liste_projet_admin_id_parent`=""';

 


    

    
    $apple->execution();
    $myJSON = json_encode($apple->list_row);   
  

 
      


     // creation de la variable vide
     $number = 0 ; 
     // affectation valeur array 
     // execution et ajout des element dans la nouvelle table 
     
     $liste_projet_id=$apple->add_array_element($number);
     $number ++ ; 
 

    var_dump($apple->list_row) ; 
   

/*
     var_dump($liste_projet_id) ; 
     var_dump($liste_projet_id_sha1) ; 
     var_dump($liste_projet_id_parent) ; 
     var_dump($liste_projet_id_sha1_general) ; 
     var_dump($liste_projet_ip) ; 
     var_dump($liste_projet_img) ; 
     var_dump($liste_projet_name) ; 
     var_dump($liste_projet_description1) ; 
     var_dump($liste_projet_description2) ; 
     var_dump($liste_projet_visibilite1) ; 
     var_dump($liste_projet_visibilite2) ; 
     var_dump($liste_projet_type) ; 
     var_dump($information_user_id_sha1) ; 
     var_dump($liste_projet_new_file) ; 
     var_dump($liste_projet_reg_date) ; 
*/



     
      
 

     
    ?>
 

 
</body>
</html>
