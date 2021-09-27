<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNES (о проекте)</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.icons8.com/fluency/48/000000/fire-element.png">
</head>
<!--  header -->
<?php include('components/header.php'); ?>

<!-- section start -->
    <main class="main">
        <div class="container">
		    <h1 class="section_title">О проекте</h1><br>
            <h2>Lunes <span>(пер. с исп. -<i>понедельник</i>)</span></h2>
            <p>Это симулятор IT-компании с открытым <a href="https://ru.wikipedia.org/wiki/%D0%9E%D1%82%D0%BA%D1%80%D1%8B%D1%82%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5">исходным кодом.</a></p><br>          
            <h2>Идея</h2>
            <p>Создать искусственную компанию с настоящими процессами, для максимально лёгкого входа в любую IT-профессию практически с 
                самого нуля. Избегая стрессов при найме, это как игра где можно вырасти по карьерной лестнице. 
            </p><br>
            <h2>Для кого</h2>
            <p>Для тех, кто учится или собирается перейти в IT, и не имеет достаточного опыта.</p><br><br>
            <a href="regulations.php">как это работает.</a>
        </div>          
    </main><br><br><br>

<!-- footer -->
<?php include('components/footer.php'); ?>
<script>
		window.addEventListener(orientationEvent, function() {
    var orientation = Math.abs(window.orientation) == 90 ? 'landscape' : 'portrait';
    // Применяем нужные нам стили
}, false);
	</script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>