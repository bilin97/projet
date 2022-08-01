

<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
			   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<br><a href="1.php"><i style="color:white;" size ="15px" class='fas'>&#xf100;</i> </a></br>
		<h1 style="background-color:#1E90FF;" style="color:white;"align="center"     > 
		<FONT size="15"style="color:white;"><I> Consultations</I></FONT></h1>
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
	  <button type="button" class="button1"><i class="fa fa-wrench fa-spin" style="font-size:24px"aria-hidden="true"></i><a href="topologie1.php" style="color:#00FF00;"> Historique de configuration « Réseau 1 »</a></button>
      <button type="button" class="button3" ><i class="	fa fa-exchange fa-spin" style="font-size:24px"aria-hidden="true"></i><a href="topologie2.php" style="color:#00FF00;"> Historique de configuration « Réseau 2 »</a></button>
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
