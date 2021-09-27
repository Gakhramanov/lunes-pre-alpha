<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNES (люди)</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.icons8.com/fluency/48/000000/fire-element.png">
</head>
<body>
	<!--  header start  -->
     <?php include('components/header.php'); ?>

	<!-- section start -->
    <main class="main">
        <div class="container">
		    <h1 class="section_title">Люди</h1>
            <div class="photo_block">
                <div class="photo_box">
                    <div class="photo">
                        <img src="img/people/myphoto.jpg" alt="">
                    </div>
                    <div class="photo_title">
                        <h2>Али</h2>
                        <h3>Гахраманов</h3>
                        <h2 class="title_vacancies">Frontend-разработчик</h2>
                    </div>
                </div><br>
                <div class="photo_box">
                    <div class="photo">
                        <img src="img/people/victoria.jpg" alt="">
                    </div>
                    <div class="photo_title">
                        <h2>Виктория</h2>
                        <h3>Орлова</h3>
                        <h2 class="title_vacancies">Ruby-разработчик</h2>
                    </div>
                </div>
            </div>   
		</div>
    </main><br><br><br>


	<!--  footer start  -->
	<?php include('components/footer.php'); ?>
    <script>
		window.addEventListener(orientationEvent, function() {
    var orientation = Math.abs(window.orientation) == 90 ? 'landscape' : 'portrait';
    // Применяем нужные нам стили
}, false);
	</script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>