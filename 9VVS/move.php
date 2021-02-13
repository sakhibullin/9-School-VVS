<!DOCTYPE html>
<html>
<head>
	<title>Запись со встречи</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/photos.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
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
<h3 class="name">Видио со встреч</h3>
<div class="thumb-wrap">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/y4SxUXYXra4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>	
<?php include("blocks/qestions.php");?>
<?php include("blocks/footer.php");?>


	<script type="text/javascript">
		  
		$("window").load(function() {
 		 $("body").removeAttr("id");});
	</script>
</body>
</html>
