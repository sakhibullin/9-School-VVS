<!DOCTYPE html>
<html>
<head>
	<title>9ВВС</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ledger&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery 1.8 or later, 33 KB -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Fotorama from CDNJS, 19 KB -->
<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	
</head>


	<?php include("blocks/header.php");?>


<div class="banner"> <!--Баннер-->
	<img src="" alt="" class="banner__img">
</div>	
<div class="slider" ><!--Слайдер -->
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500" data-bs-touch="true">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height: 510px; width: 980px;" data-bs-touch="true">
    <div class="carousel-item active" style="">
      <img src="img/1.jpg" class="d-block w-100" alt="..." onclick="myFunction1()">
    </div>
    <div class="carousel-item" style="">
      <img src="img/1.jpg" class="d-block w-100" alt="..." onclick="myFunction2()">
    </div>
    <div class="carousel-item" style="">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="z-index: 0;"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next" style="z-index: 0;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
</div>




<div class="container__v2"><!--Блоки с текстом и картинками -->
	<div class="information">
		<div class="block2__mobile" id="first">
			<img src="https://kpfu.ru/portal/docs/F1756984148/f6d316b88308a923169cc4076a342c66_XL.jpg" class="block_img"  >	
			<div class="text__l">
							
				<h2 onclick="myFunction1()" >Музей</h2>
				<div class="podch"></div>
				<p >    Разнообразный и богатый опыт консультация с широким активом обеспечивает широкому кругу. Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.
   			    Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</p>
				<a href="museum.php">Продолжить</a>
			</div><!--1--><!----><!--1-->
				
		</div>	
		<div class="block2">
			<div class="text__l">			
				<h2>Музей</h2>
				<div class="podch"></div>
				<p >    Разнообразный и богатый опыт консультация с широким активом обеспечивает широкому кругу. Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.
   			    Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</p>
				<a href="gallerrey.php">Продолжить</a>
			</div>
			<img src="https://kpfu.ru/portal/docs/F1756984148/f6d316b88308a923169cc4076a342c66_XL.jpg" class="block_img"  >		<!--6--><!--6-->

		</div>		

		<div class="block1">
			<img src="https://kpfu.ru/portal/docs/F1756984148/f6d316b88308a923169cc4076a342c66_XL.jpg" class="block_img" >
			<div class="text__r" >			
				<h2>История</h2>
				<div class="podch"></div>
				<p >    Разнообразный и богатый опыт консультация с широким активом обеспечивает широкому кругу. Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.
   			    Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</p>
				<a href="history.php" >Продолжить</a>
			</div><!--2--><!--2-->

		</div>
		<div class="block2">
			<div class="text__l">			
				<h2>Выпускники</h2>
				<div class="podch"></div>
				<p >    Разнообразный и богатый опыт консультация с широким активом обеспечивает широкому кругу. Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.
   			    Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</p>
				<a href="history.php">Продолжить</a>
			</div>
			<img src="https://kpfu.ru/portal/docs/F1756984148/f6d316b88308a923169cc4076a342c66_XL.jpg" class="block_img"  >		<!--3--><!--3-->

		</div>	
		<div class="block2__mobile">
			<img src="https://kpfu.ru/portal/docs/F1756984148/f6d316b88308a923169cc4076a342c66_XL.jpg" class="block_img"  >	
			<div class="text__l">			
				<h2>Выпускники</h2>
				<div class="podch"></div>
				<p >    Разнообразный и богатый опыт консультация с широким активом обеспечивает широкому кругу. Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.
   			    Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</p>
				<a href="peop.php">Продолжить</a>
			</div><!--4--><!--4-->
				
		</div>	
		<div class="block1">
			<img src="https://kpfu.ru/portal/docs/F1756984148/f6d316b88308a923169cc4076a342c66_XL.jpg" class="block_img" >
			<div class="text__r" >			
				<h2>Галерея</h2>
				<div class="podch"></div>
				<p >    Разнообразный и богатый опыт консультация с широким активом обеспечивает широкому кругу. Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.
   			    Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач.</p>
				<a href="peop.php" >Продолжить</a>
			</div><!--5--><!--5-->

		</div>
	

		
		

		

		
	</div>	
	</div>
</div>

<?php include("blocks/qestions.php");?>
<?php include("blocks/footer.php");?>



	<script type="text/javascript">
		  
		$("window").load(function() {
 		 $("body").removeAttr("id");});
	</script>
	<script type="text/javascript">
		function myFunction2(){
			window.location.href = 'hero.php';
		}
	</script>
	<script type="text/javascript" defer>
		function myFunction2(){
			window.location.href = 'newspaper.php';
		}
			function myFunction1(){
			window.location.href = 'hero.php';
		}

		
	</script>
	<script type="text/javascript">

   function myFunction3() {
  if(document.documentElement.clientWidth < 1100) {
   document.getElementsByClassName("carousel-inner")[0].style.width='590px';
   document.getElementsByClassName("carousel-inner")[0].style.height='310px';
  }
  if(document.documentElement.clientWidth < 950){
document.getElementsByClassName("nav")[0].style.flexWrap='nowrap';
  }
if(document.documentElement.clientWidth < 650) {
   document.getElementsByClassName("carousel-inner")[0].style.width='390px';
   document.getElementsByClassName("carousel-inner")[0].style.height='210px';
   document.getElementsByClassName("photo")[0].style.width='66px';
   document.getElementsByClassName("photo")[0].style.height='73px';
   
  }
if(document.documentElement.clientWidth < 450) {
   document.getElementsByClassName("carousel-inner")[0].style.width='290px';
   document.getElementsByClassName("carousel-inner")[0].style.height='150px';
  }
  };



</script>
</script>
</body>
</html>
