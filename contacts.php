<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNES (контакты)</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.icons8.com/fluency/48/000000/fire-element.png">
</head>
<!--  header -->
<?php include('components/header.php'); ?>

<!-- section start -->
    <main class="main">
        <div class="container">
		    <h1 class="section_title">Контакты</h1><br>
            <h4>Почта для резюме</h4>
            <div class="mail_block">
                <img class="mail_icon" src="img/icon_3.png" alt="почта">
                <a class="mail_link" href="mailto:hr@lunes-it.ru">hr@lunes-it.ru</a>
            </div><br>
            <h4>Тех. поддержка</h4>
            <div class="mail_block">
                <img class="mail_icon" src="img/icon_3.png" alt="почта">
                <a class="mail_link" href="mailto:support@lunes-it.ru">support@lunes-it.ru</a>
            </div><br>
            <h4>Соц. сети</h4>
            <div class="social_block">
                <a href="https://vk.com/lunesit">
                    <img class="social_icon" src="img/vk_logo.png" alt="вконтакте">
                </a>
                <a href="https://www.instagram.com/lunes_it">
                    <img class="social_icon" src="img/inst_logo.png" alt="instagram">
                </a>
            </div>
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