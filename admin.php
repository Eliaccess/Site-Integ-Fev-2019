<?php
	session_start();
//On vérifie si la personne est déjà connectée
  if(isset($_SESSION['login'])){
    header('Location: dashboard.php');
    exit();
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Integ Fev !</title>
  <link rel="icon" type="image/png" href="./Images/logo.png" />
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="./Style/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./Style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./Style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <script src="./js/bootstrap.min.js"></script>
</head>
<body>
  <div id="website-container" class="slide connexion">
    <form method="POST" action="panel.php">
      <div id="username">
        <div id="txt">
          Nom d'utilisateur :
        </div>
        <div id="champ">
          <input type="text" name="login" size="20" placeholder="Utilisateur">
        </div>
      </div>
      <div id="password">
        <div id="txt">
          Mot de passe :
        </div>
        <div id="champ">
          <input type="password" name="password" size="20" placeholder="Code">
        </div>
      </div>
      <div id="boutton">
        <input type="submit" class="button" name="Suivant">
      </div>
    </form>
  </div>
</body>
</html>