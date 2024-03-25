<?php

for($o =0; $o<count($liste_projet_admin_id); $o++){
    ?>
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold"><input onkeyup="liste_projet_admin_onkeyup(this)" id="<?php echo "a_".$liste_projet_admin_id_sha1[$o] ?>"  title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" type="text" value="<?php echo $liste_projet_admin_name1[$o] ?>"></div>
          <div class="fw-bold"><input onkeyup="liste_projet_admin_onkeyup(this)" id="<?php echo "b_".$liste_projet_admin_id_sha1[$o] ?>"  title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" type="text" value="<?php echo $liste_projet_admin_name2[$o] ?>"></div>      
        </div>
    
     <div class="add_visibility">

 
     <img onclick="liste_projet_admin_add2(this)" width="50" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" height="50" src="https://img.icons8.com/officel/50/add--v1.png" alt="add--v1" class="cursor_pointer"/> 
 
     </div>
       <img onclick="liste_projet_admin_show(this)" width="50" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>"  width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/android/50/visible.png" alt="visible"/>
   
   
       <img width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/office/50/picture.png" alt="picture"/>
        <img  onclick="liste_projet_admin_remove(this)" width="50" title="<?php echo $liste_projet_admin_id_sha1[$o] ?>" width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1"/>
       
      </li>
    <?php
    
    }
    ?>

