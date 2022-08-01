

<html>
    <head>
        <meta charset="utf-8">
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <!-- importer le fichier de style -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<a href="topologie2.php"><i style="color:white;" size ="15px" class='fas'>&#xf100;</i> </a>
		
		<h1 style="background-color:#0d0566;" style="color:white;" align="center"     > 
		<FONT size="15" style="color:white;"><I> Liste des configurations</I></FONT></h1>
		<style>
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
      
      
    </style>
    </head>
    <body >
        <div id="content">
		
<table id="customers" align="center">
  <tr>
    <th>Date</th>
    <th>Historique</th>
    
  </tr>
   <?php
             //connexion à la base de données
				$db_username = 'root';
				$db_password = '';
				$db_name     = 'admin';
				$db_host     = 'localhost';
				$db = mysqli_connect($db_host, $db_username, $db_password,$db_name) or die('could not connect to database');

				
				/******************************************************* Res 2 ******************************************************/ 
			
			    $filename2 = 'topo2.txt';
				$date2=filemtime($filename2);
				$Date2=date(" Y-m-d ",$date2 );
				$heur2=date("H:i:s",$date2);    
				$homepage = file_get_contents('topo2.txt');
	                                             												 
				$req222= "select Date from historique"; 
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
					$req2 = "insert into historique2 values ('$Date2','$homepage','$heur2')"; 
					$res2 = mysqli_query($db,$req2);	
					}
			 
				if((strtotime($dr2))==(strtotime($Date2)))    // egale // 
				{ 						
					$reqh2= "select heur from historique2 where Date ='$dr2'"; 
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
					 	$re2 = "insert into historique2 values ('$Date2','$homepage','$heur2')"; 
					    $rs2 = mysqli_query($db,$re2);
					}
				}
				
				/******************************************************* Fin de Res 2 ******************************************************/ 
				

			mysqli_close($db);
?>
  <?php
//<textarea align=\"centre\" class=\"textareaMonDocument\" name=\"TxtContenuFichier\" id=\"TxtContenuFichier\" cols=\"100\" rows=\"".($count+2)."\" >\n

$db_username = 'root'; $db_password = '';  $db_name     = 'admin'; $db_host     = 'localhost'; 
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name) or die('could not connect to database');
          
          $req2= "select Date,detaile,heur from historique2"; 
          $res2= mysqli_query($db,$req2);
          if (mysqli_num_rows($res2)>0)
			  {
				while($l=mysqli_fetch_assoc($res2)) {?>
				 
        <tr>  <td align="center" ><b> <?php echo "Modifié le : ";echo nl2br($l['Date']);echo "<br></br>à : ";echo $l['heur'];?></b></td>
	    <td><b><?php
		$count = count($l['detaile']);
		echo "<textarea align=\"centre\" class=\"textareaMonDocument\" name=\"TxtContenuFichier\" id=\"TxtContenuFichier\" cols=\"120\" rows=\"".($count+2)."\" >\n";
		echo $l['detaile'];
		echo "</textarea>\n"; //Debut du textarea
		
		?></b></td></tr>
				
				
				<?PHP } mysqli_free_result($res2);	}						
          else {echo'<h1   align="center"     > 
		<FONT size="15" style="color:red;"><I> Aucune configuration est disponible pour le moment </I></FONT></h1>'; }mysqli_close($db);
				
?>
  
</table>
			
        </div>
		
    </body>
</html>