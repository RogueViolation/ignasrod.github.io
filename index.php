<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Pirma reikia prisijungti";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Puslapio aprasymas">
  <meta name="author" content="Ignas Rodzianskis">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<head>
	<title>Namai</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Pagrindinis puslapis</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Sveiki, <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">Atsijungti</a> </p>
      <a href="https://www.google.lt"><img src="https://i.kym-cdn.com/entries/icons/facebook/000/021/572/rtPJmdgf.jpg" alt="Jebaited" height="21" width="21">Google!</a>
    <?php endif ?>
</div>
</div>
<div class="header">
  <h2>Žaidimas</h2>
</div>
<div class="content"><object width="400" height="400" data="https://external.kongregate-games.com/gamez/0021/4044/live/embeddable_214044.swf">
</object></div>
</body>

<script type="text/javascript">
  
</script>

</html>