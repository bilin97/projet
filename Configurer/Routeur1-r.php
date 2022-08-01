

<html>
    <head>
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
	#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  height="200";
}

#customers td, #customers th {
  border: 3px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #faf0e6 ;}
#customers tr:nth-child(odd){background-color: #faf0e6 ;}

#customers tr:hover {background-color: #7ac8f5;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #0d0566;
  color: white;
}

body{
    background-image: url("s.jpg");
}
      
textarea {
  resize: none;
}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #0d0566;
  background-color: #0d0566;
  border: #1E90FF;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin-left: 100px;
  margin-top: 5px;
  width: 100px;
  height: 300px;   
  background: transparent;
  color: white;   
  font-weight:200;
}

.button:hover {background-color:#0d0566}

.button:active {
  background-color: #0d0566;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
      
    </style>
    </head>
    <body >
	
	<br></br>
	 <div class="navbar" id="nav">
      <a href="principale.php" class="active"><i style="color:white;" size ="15px" class='fas'>&#xf100;</i></a>
	   <a href="#" class="active2">Accueil</a>
		</div></div></div>
		<h2 style="background-color:#0d0566;" style="color:white;" align="center"     > 
		<FONT size="6" style="color:white;"><I> Liste Historique des adresse Ip de Routeur 1</I></FONT></h2>
        <div id="content">
<table id="customers" align="center">
  
  <tr>
    <th>Date & Heur</th>
    <th>Historique de configuration</th>
    <th>Résultas</th>
  </tr>
 
  
   <?php
             //connexion à la base de données
				$db_username = 'root';
				$db_password = '';
				$db_name     = 'admin';
				$db_host     = 'localhost';
				$db = mysqli_connect($db_host, $db_username, $db_password,$db_name) or die('could not connect to database');

				
				/******************************************************* Res 2 ******************************************************/ 
			
			    $filename2 = 'C:/wamp/www/Projet/Playbook/Routeur1_IP.txt';
				$date2=filemtime($filename2);
				$Date2=date(" Y-m-d ",$date2 );
				$heur2=date("H:i:s",$date2);    
				$homepage = file_get_contents('C:/wamp/www/Projet/Playbook/Routeur1_IP.txt');
	            $bil=basename('C:/wamp/www/Projet/Equip/Routeur1_IP.txt',"_IP.txt"); 
				$file = 'playbook.yml';
				$homepage3 = file_get_contents($file);	
				//echo $homepage3;
				$homepage2 = str_replace('.yml','.txt',$file);	
				//echo $homepage2;	
				
				$req22 = "insert into historique1 values ('$Date2','$heur2','$bil','$homepage2','$homepage')"; 
				$res22 = mysqli_query($db,$req22);	
					
				$req222= "select Date from historique1"; 
				$res222= mysqli_query($db,$req222);
				if (mysqli_num_rows($res222)>0)
					{
						while($l22=mysqli_fetch_assoc($res222)) 
							{	
								$dr2=	$l22['Date'];
							}
					} 	
				if((strtotime($dr2))< (strtotime($Date2)))
					{    /*dr l9dim */
					$req2 = "insert into historique1 values ('$Date2','$heur2','$bil','$homepage2','$homepage')"; 
					$res2 = mysqli_query($db,$req2);	
					}
			 
				if((strtotime($dr2))==(strtotime($Date2)))    // egale // 
				{ 						
					$reqh2= "select heur from historique1 where Date ='$dr2'"; 
					$reph2= mysqli_query($db,$reqh2);
					if (mysqli_num_rows($reph2)>0)
						{
							 while($Heur2=mysqli_fetch_assoc($reph2)) 
								{	
									$new2= $Heur2['heur'];
								}
						} 	
						
				    if((strtotime($new2))<(strtotime($heur2)))
					{ 
					 	$re2 = "insert into historique1 values ('$Date2','$heur2','$bil','$homepage2','$homepage')"; 
					    $rs2 = mysqli_query($db,$re2);
					}
				}
				
				/******************************************************* Fin de Res 2 ******************************************************/ 
			
?>
  <?php
//<textarea align=\"centre\" class=\"textareaMonDocument\" name=\"TxtContenuFichier\" id=\"TxtContenuFichier\" cols=\"100\" rows=\"".($count+2)."\" >\n

          
          $req2= "select * from historique1"; 
          $res2= mysqli_query($db,$req2);
           if (mysqli_num_rows($res2)>0)
			  {
				while($l=mysqli_fetch_assoc($res2)) {?>
				 
        <tr>  <td align="center" ><b> <?php echo "Modifié le : ";echo nl2br($l['Date']);echo "<br></br>à : ";echo $l['heur'];?></b></td>
	    <td><b><?php
		$count=count($l['playbook']);
     	echo "<textarea align=\"centre\" class=\"textareaMonDocument\" name=\"TxtContenuFichier\" id=\"TxtContenuFichier\" cols=\"100\" rows=\"4".($count+2)."\" >\n";
		echo $l['playbook'];
		echo $homepage3;
		echo "</textarea>\n"; //Debut du textarea
		?></b></td>
		 <td><b><?php
		$count = count($l['resultas']);
		echo "<textarea align=\"centre\" class=\"textareaMonDocument\" name=\"TxtContenuFichier\" id=\"TxtContenuFichier\" cols=\"100\" rows=\"4".($count+2)."\" >\n";
		echo $l['resultas'];
		echo "</textarea>\n"; //Debut du textarea
		?></b></td>
		</tr>	
				<?PHP } mysqli_free_result($res2);	}						
          else {echo'<h1   align="center"     > 
		<FONT size="15" style="color:red;"><I> Aucune configuration est disponible pour le moment </I></FONT></h1>'; }mysqli_close($db);
				
?>
  
</table>
			
        </div>
		
    </body>
</html>