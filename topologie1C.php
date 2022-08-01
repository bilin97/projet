
<html>
    <head>
	<link rel="stylesheet"  media="screen" type="text/css" />
       <meta charset="utf-8">
	   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
         /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
	   </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
 .navbar {
      overflow: hidden;
      background-color: #2c789e;
    }
    .navbar a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 20px;
    }
    .active {
      background-color: blue;
      color: white;
    }
	
	.active2 {
      background-color: #1E90FF;
      color: white;
    }
    .navbar .icon {
      display: none;
    }
    .more {
      float: left;
      overflow: hidden;
    }
    .more .btn {
      font-size: 20px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }
    .more-menu {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .more-menu a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    .navbar a:hover, .more:hover .btn {
      background-color: #555555;
      color: white;
    }

    .dropdown-menu a:hover {
      background-color: #CCCCCC;
      color: black;
    }
    .more:hover .more-menu {
      display: block;
    }
body{
    background-image: url("a2.jpg");
}
  .frame {
        width: 900px;
        height: 400px;
        border: 3px solid #ccc;
        background: #1E90FF;
        margin: auto;
        padding: 15px 15px;
      }
 img {
        width: 100%;
        height: 100%;
      }
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 32px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}

</style>
    </head>
    <body><br></br>
	<?php
    
	$filename='C:/wamp/www/Projet/Playbook/Routeur1_IP.txt';    // récuperer les équipement 
	$Routeur = file_get_contents($filename);
//	echo basename($filename, "_IP.txt").PHP_EOL;
	
	?>
	 <div class="navbar" id="nav">
      <a href="principale.php" class="active"><i style="color:white;" size ="15px" class='fas'>&#xf100;</i></a>
	   <a href="#" class="active2">Accueil</a>
    
      <div class="more">
        <button class="btn">Historique <i class="fa fa-caret-down"></i></button>
        <div class="more-menu">
		<?PHP foreach (new DirectoryIterator('C:/wamp/www/Projet/Equip') as $fileInfo) {
              if($fileInfo->isDot()) continue;
			  $bil=basename($fileInfo,"_IP.txt");
			  $lien="$bil.php";
			 
			  ?>
		
	  <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn"><?php echo $bil;?></button>
		<div class="more-menu">
          <a href="<?= $lien ?>">Addresse Ip </a>
          <a href="#">Hostname</a>
          <a href="#">Routage</a>
        </div>
      </div>
		<?PHP } ?>
		
        </div>
	  </div>
     </div>
<br></br><br></br>

	 <div class="frame">
  <img src="topo1.png" alt="Nature" align="centre">
</div>
<h1 style="color:white;"align="center"><I> - Réseau 1 - </I></h1>

    </body>

</html>