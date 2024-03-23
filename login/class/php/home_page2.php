<?php 
 
 include("path_class.php") ; 
 

$information_user_login= $_POST["information_user_login"] ;

 $apple = new Select_datas($servername,$username,$password,$dbname);
 array_push(
   $apple->row,
   'information_user_id' 
   ); 
   $apple->sql='SELECT * FROM `information_user` WHERE `information_user_login`="'.$information_user_login.'" ';
   $apple->execution();
   $myJSON = json_encode($apple->list_row); 






if(count($apple->list_row)!=0){

echo $apple->list_row[0] ; 

}
else {


    $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname            
        );          
        $apple->set_msg_valudation("inserttion ok ") ;  
        $apple->set_sql("INSERT INTO information_user (information_user_login)                    
        VALUES ('xx')") ; 
        $apple->execution() ;

        $_SESSION["information_user_login"] = $information_user_login ; 

         $_SESSION["information_user_password"]= "X" ; 


}

  
?>