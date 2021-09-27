<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNES (правила)</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.icons8.com/fluency/48/000000/fire-element.png">
</head>
<!-- header -->
<?php include('components/header.php'); ?>

<!-- section start -->
<main class="main">
        <div class="container">
		    <h1 class="section_title">Правила</h1><br>
            <p>Подавая заявку на вакансию, приступая к работе и обучению в симуляторе, вы соглашаетесь соблюдать правила описанные ниже.</p><br>
            <h2>Порядок обращения</h2>
            <ol>
            <li>Отправить резюме в LUNES можно только по одному каналу связи, это HR почта.</li>
            <li>Образец резюме находится <a href="summary.php">здесь</a>.</li>
            <li>После отправки резюме с Вами свяжется наш HR-агент и скоординирует Ваши действия.</li>
            </ol>
            <h2>Общение</h2>
            <ol>
            <li>Общение по темам (обучение, программирование, карьера) происходит внутри компании в рабочих чатах.</li>
            <li>Общие и отвлечённые темы ведутся в соцсетях компании (<a href="https://vk.com/lunesit">вконтакте</a> и <a href="https://www.instagram.com/lunes_it">Instagram</a>)</li>
            <li>В чатах и соцсетях не допускается пропаганда и публикация контента, запрещённая законодательством РФ.</li>
            <li>Также в переписках и комментариях запрещаются оскорбления.</li>
            </ol>
            <h2>Регламент</h2>
            <p>Регламенты компании находятся в разработке.</p><br>
            <p>Дата публикации: 23 сентября 2021г.</p>
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