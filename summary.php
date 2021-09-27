<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNES (образец резюме)</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.icons8.com/fluency/48/000000/fire-element.png">
</head>
<!-- header -->
<?php include('components/header.php'); ?>

<!-- section start -->
<main class="main">
    <div class="container">
		<h1 class="section_title">Образец резюме</h1><br>
        <p>При отправке резюме, в "теме" укажите название вакансии, например: frontend-разработчик.</p>
        <ul>
            <li>Имя</li>
            <li>телефон</li>
            <li>email</li>
            <li>Напишите, какими навыками Вы владеете, с чем работали и с чем хотели бы поработать?</li>
            <li>Ссылка на портфолио (если есть).</li>
        </ul>
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