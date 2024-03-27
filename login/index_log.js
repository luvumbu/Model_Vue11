 

  function add_admin1(_this) {
    _this.style.display="none";
    const ok = new Information("class/php/add_admin1.php"); // création de la classe 
    ok.add("liste_projet_admin_id_parent", _this.title); // ajout d'une deuxieme information denvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_add, 250);
    function liste_projet_admin_add() {
      Ajax("admin_section_1", "class/php/admin_section_1_1.php");
    _this.style.display="block";

    }
  }
  function liste_projet_admin_onkeyup(_this) {
    const liste_projet_admin_name1 = document.getElementById("a_" + _this.title).value;
    const liste_projet_admin_name2 = document.getElementById("b_" + _this.title).value;
    const ok = new Information("class/php/update/liste_projet_admin_onkeyup.php"); // création de la classe 
    ok.add("liste_projet_admin_name1", liste_projet_admin_name1); // ajout d'une deuxieme information denvoi  
    ok.add("liste_projet_admin_name2", liste_projet_admin_name2); // ajout d'une deuxieme information denvoi  
    ok.add("liste_projet_admin_id_sha1", _this.title); // ajout d'une deuxieme information denvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
  }


  function liste_projet_admin_add2(_this) {
    _this.style.display="none";

    const ok = new Information("class/php/cookie/liste_projet_admin_add2.php"); // création de la classe 
    ok.add("liste_projet_admin_id_parent", _this.title); // ajout d'une deuxieme information denvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_add2, 250);
    function liste_projet_admin_add2() {
      Ajax("admin_section_1", "all_table.php");
    _this.style.display="block";

    }
  }

  function liste_projet_admin_show(_this) {
    _this.style.display="none";

    const ok = new Information("class/php/cookie/liste_projet_admin_show.php"); // création de la classe 
    ok.add("liste_projet_admin_id_parent", _this.title); // ajout d'une deuxieme information denvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_show, 250);
    function liste_projet_admin_show() {
      Ajax("admin_section_1", "class/php/admin_section_1_1.php");
    _this.style.display="block";

    }
  }


  function liste_projet_admin_remove(_this) {
    _this.style.display="none";

    const ok = new Information("class/php/cookie/liste_projet_admin_remove.php"); // création de la classe 
    ok.add("liste_projet_admin_id_sha1", _this.title); // ajout d'une deuxieme information denvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_remove, 250);
    function liste_projet_admin_remove() {
      Ajax("admin_section_1", "class/php/admin_section_1.php");
     }
  }

  function liste_projet_admin_remove2(_this) {
    _this.style.display="none";

    const ok = new Information("class/php/cookie/liste_projet_admin_remove.php"); // création de la classe 
    ok.add("liste_projet_admin_id_sha1", _this.title); // ajout d'une deuxieme information denvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(liste_projet_admin_remove, 250);
    function liste_projet_admin_remove() {
      Ajax("admin_section_1", "all_table.php");

     }
  }

  function all_element() {
    Ajax("admin_section_1", "all_table.php");
  }


  function home() {
    location.reload();
  }

  function disconnect() {
    Ajax("admin_section_1", "class/php/disconnect.php");


    const myTimeout = setTimeout(disconnect, 250);

    function disconnect() {
      location.reload();
    }
  }

  Ajax("admin_section_1", "class/php/admin_section_1.php");
 