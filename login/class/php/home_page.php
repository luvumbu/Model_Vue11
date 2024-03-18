<?php 
session_start() ; 

 
include("path_class.php") ; 
$information_user_login = $_POST["information_user_login"] ; 
$information_user_password =sha1($_POST["information_user_password"]) ; 





$_this_title = $_POST["_this_title"];

$apple = new Select_datas($servername,$username,$password,$dbname);
array_push(
    $apple->row, 
    'information_user_id_sha1'
    );

switch ($_this_title) {
    case 'Connexion':
        $apple->sql='SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" AND `information_user_password`="'.$information_user_password.'" ';
        
        
        $number = 0 ; 
 
 
        
        
        

     
        
        $_SESSION["information_user_login"] = $information_user_login ;
        $_SESSION["information_user_password"] = $information_user_password  ;
   
 

        
        
        
        
        
        break;
    
    default:
        # code...
        break;
}





 
    
 
 
    

 
 

    
    $apple->execution();
  






if(count($apple->list_row)>0){
  $_SESSION["cookie_info_connexion"] = "ON" ; 
}
else {
  $_SESSION["cookie_info_connexion"] = "OFF" ; 

}



?>