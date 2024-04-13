<?php
include ("path_class.php");
$apple = new Select_datas($servername, $username, $password, $dbname);
include ("apple_row2.php");


$information_user_id =   $_SESSION["information_user_id"] ; 
$apple->sql = 'SELECT * FROM `information_user` WHERE `information_user_id` ="'.$information_user_id.'"  ';
$apple->execution();
$myJSON = json_encode($apple->list_row);
include ("liste_projet_admin2.php");
 




 
?>

 <div class="div_text" >
 <p>
     prénom
     </p>
     <input  id ="liste_projet_admin_name1" placeholder="prénom" type="text" onkeyup="information_user()" value="<?php echo $information_user_name_1[0]  ?>">
     <p>
      Nom 
     </p>
     <input  id ="liste_projet_admin_name2" placeholder="nom" type="text" onkeyup="information_user()" value="<?php echo $information_user_name_2[0]  ?>">

     <div class="terminer cursor_pointer" onclick="home()"> Terminer</div>

 </div>
<style>
  .div_text{
    text-align:center ; 
    width: 90%; 
    margin:auto; 
  }

  .div_text input,.terminer{
   
    width: 100%; 
    margin:auto; 
    margin-bottom:15px; 
    
  }
  .terminer{
    background-color:green ; 
    padding:10px; 
    
  }
</style>