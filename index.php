<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNES it-симулятор</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.icons8.com/fluency/48/000000/fire-element.png">
</head>
<body class="body_index">
	<!--  header start  -->
     <?php include('components/header.php'); ?>

	<!-- section start -->
	<div class="content">
        <div class="container">
		<section class="section">
			<h1 class="section_title">Добро пожаловать<br>в</h1><br>
	        <img class="lunes_logo_img" src="img/lunes_logo.png" alt="понедельник">
	    </section>
		</div>
    </div>

	<!--  footer start  -->
	<footer class="footer" style="position: absolute;">
		<div class="footer_wrapper">
			<span>&copy <?php include('components/date.php'); ?> Все права защищены.</span>
		</div>
    </footer>
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