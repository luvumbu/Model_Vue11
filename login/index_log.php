<?php
$information_user_login = $_SESSION["information_user_login"];
$information_user_password = $_SESSION["information_user_password"];
?>

<div class="container mt-5 text-center">
  <?php
$root_user= false;
  if ($information_user_login == $username && $information_user_password == sha1($password)) {
    echo '<img width="50" height="50" src="https://img.icons8.com/fluency/50/crown.png" alt="crown"/>';
    $root_user = true;
  }

  ?>
  <div class="row">
    <div class="col-sm-4" onclick="home()">
      <h3>home</h3>

      <img width="50" height="50" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1" />
    </div>
    <div class="col-sm-4" onclick="all_element()">
      <h3>All element</h3>
      <img width="50" height="50" src="https://img.icons8.com/color/50/all.png" alt="all" />

    </div>
    <div class="col-sm-4" onclick="disconnect()">
      <h3>Déconnection</h3>
      <img width="48" height="48" src="https://img.icons8.com/color/48/disconnect-main-plug.png"
        alt="disconnect-main-plug" />
    </div>
    <?php
if($root_user){
  ?>
    <div class="col-sm-4" style="margin-top:100px" onclick="all_element_admin()">
      <h3>Element suprimée</h3>
      <img width="48" height="48" src="https://img.icons8.com/matisse/48/remove--v2.png" alt="remove--v2"/>
    </div>
  <?php
}
    ?>
  </div>
</div>

<div class="container p-5 my-5 ">
  <h1>add setting</h1>
  <p><img onclick="add_admin1(this)" width="50" height="50" src="https://img.icons8.com/officel/50/add--v1.png"
      alt="add--v1" class="cursor_pointer" /></p>
</div>
<div class="container p-5 my-5 bg-dark text-white">
  <ol class="list-group list-group-numbered">
    <div id="admin_section_1"></div>
  </ol>
  <ol class="list-group list-group-numbered" style="margin-top:70px">
    <h1>Aperçu</h1>
  </ol>
</div>

 <link rel="stylesheet" href="index_log.css">
<!-- ajout de data automatique avec index_log.js -->



<?php 
if($root_user){
  ?>
  <script>
    Ajax("admin_section_1", "class/php/admin_section_1.php"); 
  </script>
    <?php
}
else {
 

  ?>
<script>
  Ajax("admin_section_1", "class/php/admin_section_1.php"); 
</script>
  <?php
}
?>
<script src="index_log.js"></script>