<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNES (новости)</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.icons8.com/fluency/48/000000/fire-element.png">
</head>
<body>
	<!--  header start  -->
     <?php include('components/header.php'); ?>

	<!-- section start -->
    <main class="main">
        <div class="container">
		    <h1 class="section_title">Новости</h1>
            <section class="info_block">
                <a href="#">
                    <img class="news_image" src="img/news/self-org.jpg" alt="news1">
                </a>
                <h3>Симулятор понедельника</h3>
                <p>Кто мы? Читайте нас на ЯндексДзен!</p>
            </section><br>
            <section class="info_block">
                <a href="#">
                    <img class="news_image" src="img/news/superhero.jpg" alt="news1">
                </a>
                <h3>Манифест</h3>
                <p>С чего всё начинается?</p>
            </section><br>
            <section class="info_block"> 
                <a href="#">           
                <img class="news_image" src="img/news/city.jpg" alt="news1">
                </a>
                <h3>Мечты или цели?</h3>
                <p>Однажды мы станем большими...</p>
            </section>
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