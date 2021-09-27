<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNES (вакансии)</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.icons8.com/fluency/48/000000/fire-element.png">
</head>
<!-- header -->
<?php include('components/header.php'); ?>

<!-- section start -->
<main class="main">
    <div class="container">
		<h1 class="section_title">Вакансии</h1>
        <section class="info_block">
            <h2 class="title_vacancies">IT-рекрутер</h2>
            <p>(HR-менеджер)</p>
            <p class="vacancy_description" >Ищет классных специалистов и тех, кто хочет ими стать.</p>
        </section><br>           
        <section class="info_block">
            <h2 class="title_vacancies">UX/UI Дизайнер</h2>
            <p class="vacancy_description">Проектирует визуальную часть проекта.</p>
            <p>Рады видеть Вас с минимальным портфолио.</p>
        </section><br>
        <section class="info_block">
            <h2 class="title_vacancies">HTML-верстальщик</h2>
            <p class="vacancy_description">Создаёт структуру проекту и применяет CSS</p>
            <p>Минимальное портфолио</p>
        </section><br>
        <section class="info_block">
            <h2 class="title_vacancies">Front-end разработчик</h2>
            <p>Минимальное портфолио</p>
        </section><br>
        <section class="info_block">
            <h2 class="title_vacancies">PHP-разработчик</h2>
            <p>Минимальное портфолио</p>
        </section><br>
        <section class="info_block">
            <h2 class="title_vacancies">Ruby-разработчик</h2>
            <p>Минимальное портфолио</p>
        </section><br>
            
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