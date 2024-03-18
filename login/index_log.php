 
<?php
/*
echo $dbname;
echo $username;
echo $password;
 */ 

$information_user_login =  $_SESSION["information_user_login"] ;  
$information_user_password =  $_SESSION["information_user_password"] ; 

 
if($information_user_login==$username && $information_user_password==sha1($password)) {
  echo '<img width="50" height="50" src="https://img.icons8.com/fluency/50/crown.png" alt="crown"/>' ; 
}








  
?>
    

    
<div class="container mt-3">
  <h2>Button Styles</h2>
 
  <button type="button" class="btn btn-primary">1</button>
  <button type="button" class="btn btn-secondary" onclick="all_element()">all_element</button>
     
</div>
  
 <div class="container p-5 my-5 bg-primary text-white">
  <h1>add setting</h1>
  <p><img onclick="add_admin(this)" width="50" height="50" src="https://img.icons8.com/officel/50/add--v1.png" alt="add--v1" class="cursor_pointer"/></p>
</div>

<div class="container p-5 my-5 bg-dark text-white">
<ol class="list-group list-group-numbered">

 

<div id="admin_section_1"></div>
 
</ol>






 

<ol class="list-group list-group-numbered"  style="margin-top:70px">
 <h1>Aperçu</h1>
</ol>


</div>


<style>
  input{
    border:1px solid rgba(0,0,0,0);
  }
  .flex_box_1{
    display: flex;
    justify-content: start;
    background-color: #89832c;
    padding-top: 5px;
    padding-bottom:5px;
    
  }
  .flex_box_2{
    display: flex;
   justify-content: end;
    background-color: #89832c;  
    padding-top: 5px;
    padding-bottom:5px;  
  }
  .flex_box_3{
    display: flex;
   justify-content: center;
    background-color: #89832c;   
    padding-top: 5px;
    padding-bottom:5px; 
  }
  .flex_box_4{
    display: flex;
   justify-content: space-between;
    background-color: #89832c;   
    padding-top: 5px;
    padding-bottom:5px; 
  }
  .flex_box_1 div{
      width:10px;
      height:10px;
      background-color:black ; 
      border:1px solid #89832c;
  }

 .flex_box_2 div{
      width:10px;
      height:10px;
      background-color:black ; 
      border:1px solid #89832c;
  }
  .flex_box_3 div{
      width:10px;
      height:10px;
      background-color:black ; 
      border:1px solid #89832c;
  }
  .flex_box_4 div{
      width:10px;
      height:10px;
      background-color:black ; 
      border:1px solid #89832c;
  }
</style>


<script>
  function add_admin(_this) {

    


     
    const ok = new Information("class/php/add_admin.php"); // création de la classe 
 

 ok.add("_this_title", _this.title); // ajout d'une deuxieme information denvoi  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 




  Ajax("admin_section_1","class/php/admin_section_1.php");



  const myTimeout = setTimeout(add_admin, 250);

function add_admin() {
  Ajax("admin_section_1","class/php/admin_section_1.php");

}



  }


  function liste_projet_admin_onkeyup(_this){

    const liste_projet_admin_name1 =document.getElementById("a_"+_this.title).value ; 
    const liste_projet_admin_name2 =document.getElementById("b_"+_this.title).value ; 

    const ok = new Information("class/php/update/liste_projet_admin_onkeyup.php"); // création de la classe 
  ok.add("liste_projet_admin_name1", liste_projet_admin_name1); // ajout d'une deuxieme information denvoi  
  ok.add("liste_projet_admin_name2", liste_projet_admin_name2); // ajout d'une deuxieme information denvoi  
  ok.add("liste_projet_admin_id_sha1", _this.title); // ajout d'une deuxieme information denvoi  

  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

  }

  function liste_projet_admin_add(_this){
   
    const ok = new Information("class/php/cookie/liste_projet_admin_add.php"); // création de la classe 
  ok.add("liste_projet_admin_id_parent", _this.title); // ajout d'une deuxieme information denvoi  

  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

  const myTimeout = setTimeout(liste_projet_admin_add, 250);

function liste_projet_admin_add() {
  Ajax("admin_section_1","class/php/admin_section_1_1.php");
}
  }

 



  function liste_projet_admin_show(_this){
    
    const ok = new Information("class/php/cookie/liste_projet_admin_show.php"); // création de la classe 
  ok.add("liste_projet_admin_id_parent", _this.title); // ajout d'une deuxieme information denvoi  

  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

  const myTimeout = setTimeout(liste_projet_admin_show, 250);

function liste_projet_admin_show() {
  Ajax("admin_section_1","class/php/admin_section_1_1.php");
}
  }
  

  function liste_projet_admin_remove (_this){
    
    const ok = new Information("class/php/cookie/liste_projet_admin_remove.php"); // création de la classe 
  ok.add("liste_projet_admin_id_sha1", _this.title); // ajout d'une deuxieme information denvoi  

  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 

  const myTimeout = setTimeout(liste_projet_admin_remove, 250);

function liste_projet_admin_remove() {
  Ajax("admin_section_1","class/php/admin_section_1.php");

}
  }
  


  function all_element(){
 Ajax("admin_section_1","all_table.php");
  }


  

  Ajax("admin_section_1","class/php/admin_section_1.php");
</script>

