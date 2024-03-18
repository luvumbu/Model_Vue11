<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="image/x-icon" href="https://pbs.twimg.com/profile_banners/1276013910987026434/1702156600/1500x500">
</head>

<body>
  <?php
  include ("liste_include.php");
  ?>
  <div class="center_form">
    <div class="form-group">
      <label for="dbname">dbname</label>
      <input type="text" class="form-control" id="dbname" placeholder="dbname">
    </div>
    <div class="form-group">
      <label for="username">username</label>
      <input type="text" class="form-control" id="username" placeholder="username">
    </div>
    <div class="form-group">
      <label for="password">password</label>
      <input type="text" class="form-control" id="password" placeholder="password">
    </div>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="maCaseACocher">
    </div>

    <div type="submit" class="btn btn-primary" onclick="submit()">Submit</div>
  </div>




  <style>
    .center_form {
      width: 80%;
      margin: auto;
      margin-top: 100px;
    }
  </style>
  <script>
    function submit() {


      const dbname = document.getElementById("dbname").value;
      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;
      const caseACocher_result = false ; 
    

/*
      alert(dbname) ; 
      alert(username) ; 

      alert(password) ; 

      */
   
      
    // Récupérer l'élément de la case à cocher
    var caseACocher = document.getElementById("maCaseACocher");

    // Vérifier si la case est cochée
    if (caseACocher.checked) {
        // Obtenir la valeur de la case cochée
        var valeurCheckbox = caseACocher.value;
        
        caseACocher_result = true ; 
    } else {
         
    }







  var ok = new Information("model/class/php/bdd_exe_config.php"); // création de la classe 
  ok.add("dbname", dbname); // ajout de l'information pour lenvoi 
  ok.add("username", username); // ajout de l'information pour lenvoi 
  ok.add("password", password); // ajout de l'information pour lenvoi 
  ok.add("caseACocher_result", caseACocher_result); // ajout de l'information pour lenvoi 
 

 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 



  const myTimeout = setTimeout(myGreeting, 500);

function myGreeting() {
 
  location.reload();


}



    }
  </script>




</body>

</html>