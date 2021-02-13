<!DOCTYPE html>
<html>
<head>
	<title>Фото</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/photos.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=Ledger&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery 1.8 or later, 33 KB -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Fotorama from CDNJS, 19 KB -->
<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	<?php include("blocks/meta.php");?>
</head>

<body class="body">

	<?php include("blocks/header.php");?>

<h3 class="name">Фотогрфии со встречи</h3>
<div class="slider">
	<div class="fotorama"
     data-nav="thumbs">
  <img src="img/1.jpg">
  <img src="img/1.jpg">
  <img src="img/1.jpg">
  <img src="img/1.jpg">
  <img src="img/1.jpg">
  <img src="img/1.jpg">
  <img src="img/1.jpg">
  <img src="img/1.jpg">
</div>
</div>	
<?php include("blocks/qestions.php");?>
<?php include("blocks/footer.php");?>

	<script type="text/javascript">
		  
		$("window").load(function() {
 		 $("body").removeAttr("id");});
	</script>
</body>
</html>
