<!DOCTYPE html>
<html>
<head>
	<title>Выпускники</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="css/peop.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ledger&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery 1.8 or later, 33 KB -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Fotorama from CDNJS, 19 KB -->
<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script type="text/javascript"  src="js/peop.js"></script>
	<?php include("blocks/meta.php");?>
</head>
<body class="body">

	<?php include("blocks/header.php");?>

	<div class="menu">
		<a id="scroll_v">В</a>
		<a id="scroll_r">Р</a>
		<a id="scroll_k">К</a>
		<a id="scroll_l">Л</a>
	</div>


<div class="container__20">

<form id="live-search" action="" class="styled" method="post">
    <fieldset>
        <input type="text" class="text-input" id="filter" placeholder="Поиск" />
    </fieldset>
</form>

<nav>
    <ul class="liveSearchBar">
        <li id="v">
        	<img src="https://s10.stc.all.kpcdn.net/share/i/4/1285957/wr-750.jpg" alt="">	
        	<div class="text">
        		<h3>Володя Шабанов</h3>
        		<p>Значимость этих проблем настолько очевидна, что консультация с широким активом играет важную роль в формировании новых предложений. Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям.</p>
        		<a href="peop1.php" class="more">Подробнее</a>
        	</div>
    	</li>
    	<li >
    		<img src="https://s10.stc.all.kpcdn.net/share/i/4/1285957/wr-750.jpg" alt="">	
        	<div class="text">
        		<h3>Артем</h3>
        		<p>Значимость этих проблем настолько очевидна, что консультация с широким активом играет важную роль в формировании новых предложений. Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям.</p>
        		<a href="peop2.php" class="more">Подробнее</a>
        	</div>
        </li>
        <li id="r"><img src="https://s10.stc.all.kpcdn.net/share/i/4/1285957/wr-750.jpg" alt="">	
        	<div class="text">
        		<h3>Андрей</h3>
        		<p>Значимость этих проблем настолько очевидна, что консультация с широким активом играет важную роль в формировании новых предложений. Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям.</p>
        		<a href="#" class="more">Подробнее</a>
        	</div></li>
        <li id="k"><img src="https://s10.stc.all.kpcdn.net/share/i/4/1285957/wr-750.jpg" alt="">	
        	<div class="text">
        		<h3>Николай</h3>
        		<p>Значимость этих проблем настолько очевидна, что консультация с широким активом играет важную роль в формировании новых предложений. Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям.</p>
        		<a href="#" class="more">Подробнее</a>
        	</div></li>
        
        <li id="l"><img src="https://s10.stc.all.kpcdn.net/share/i/4/1285957/wr-750.jpg" alt="">	
        	<div class="text">
        		<h3>Алексей</h3>
        		<p>Значимость этих проблем настолько очевидна, что консультация с широким активом играет важную роль в формировании новых предложений. Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям.</p>
        		<a href="#" class="more">Подробнее</a>
        	</div></li>
    </ul>
</nav>

</div>



<?php include("blocks/qestions.php");?>
<?php include("blocks/footer.php");?>

	<script type="text/javascript">
		  
		$("window").load(function() {
 		 $("body").removeAttr("id");});
	</script>
	<script type="text/javascript">
	
	$("#scroll_l").click(function() { // ID откуда кливаем
    $('html, body').animate({
        scrollTop: $("#l").offset().top  // класс объекта к которому приезжаем
    }, 250); // Скорость прокрутки
});

	$("#scroll_v").click(function() { // ID откуда кливаем
    $('html, body').animate({
        scrollTop: $("#v").offset().top  // класс объекта к которому приезжаем
    }, 250); // Скорость прокрутки
});

	$("#scroll_r").click(function() { // ID откуда кливаем
    $('html, body').animate({
        scrollTop: $("#r").offset().top  // класс объекта к которому приезжаем
    }, 1000); // Скорость прокрутки
});

	$("#scroll_k").click(function() { // ID откуда кливаем
    $('html, body').animate({
        scrollTop: $("#k").offset().top  // класс объекта к которому приезжаем
    }, 250); // Скорость прокрутки
});
	</script>
</body>
</div>
