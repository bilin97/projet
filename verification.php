<?php
session_start(); 
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'admin';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
				
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
          
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM admin where nom_utilisateur = '".$username."'";
        $exec_requete = mysqli_query($db,$requete);
        $reponse= mysqli_num_rows($exec_requete);
		
        if($reponse!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: 1.php');
        }
        
    }
   
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>