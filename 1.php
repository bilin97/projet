

<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<br></br>
		<h1 style="background-color:#1E90FF;" style="color:white;"align="center"     > 
		<FONT size="15"style="color:white;"><I> Console administrateur</I></FONT></h1>
		<style>
		
		.btn {
  background-color: #1E90FF; /* Blue background */ jaune 
  border: none; /* Remove borders */
  color: #fafaf2; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}

body{
    background-image: url("4.jpg");
}
      .container {
        padding: 50px;
      }
      button,
      button::after {
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
      }
      button {
        background: none;
        border: 4px solid #fff;
        border-radius: 10px;
        color: #fff;
        display: block;
        font-size: 1.6em;
        font-weight: bold;
        margin: 10px auto;
        padding: 2em 6em;
        position: relative;
        text-transform: uppercase;
      }
 
      button::before,
      button::after {
        background: #fff;
        content: "";
        position: absolute;
        z-index: -1;
      }
      button:hover {  /***********************/
        color:#0ef116;
      }
      .button1::after {
        height: 0;
        left: 0;
        top: 0;
        width: 100%;
      }
      
      .button1:hover:after {
        height: 100%;
      }
      .button2::after {
        height: 100%;
        left: 0;
        top: 0;
        width: 0;
      }
      .button2:hover:after {
        width: 100%;
      }
      .button3::after {
        height: 0;
        left: 50%;
        top: 50%;
        width: 0;
      }
      .button3:hover:after {
        height: 100%;
        left: 0;
        top: 0;
        width: 100%;
      }
	  .container a {
  color: #FF0000;
  text-decoration: none;
}
    </style>
    </head>
    <body >
        <div id="content">
			 <br></br>
			 <div class="container">
	  <button type="button" class="button1"><i class="fa fa-wrench fa-spin" style="font-size:24px"aria-hidden="true"></i><a href="consulter.php" style="color:#00FF00;">   « Consultation d'Historique »  </a></button>
      <button type="button" class="button3" ><i class="	fa fa-exchange fa-spin" style="font-size:24px"aria-hidden="true"></i><a href="configurer.php" style="color:#00FF00;"> « Gestion de Configuration »</a></button>
	  <button class="btn"><a href='principale.php?deconnexion=true' align="center" ><i class="	fa fa-power-off fa-spin " aria-hidden="true"></i> Déconnexion</a>
                     </div>
                                    </button>
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                   // echo "<br>Console Administrateur";
                }
            ?>
            
			
        </div>
		
    </body>
