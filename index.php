<!DOCTYPE html>
<html lang="ru en">
    <head>
        <title>Кодексы РК</title>

        <meta charset="UTF-8">
        <meta name="author" content="TOO WebNet">
        <meta name="description" content="Трудовой кодекс Республики Казахстан">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/mobileStyle.css">
          
            <style>
                @import url('https://fonts.googleapis.com/css?family=Montserrat');
            </style>

    </head>
    
    <body>

        <header>
            <ul>
                <li class="menuItem" onclick="getConstitution();" title="Читать Конституцию Республики Казахстан">Конституция Республики Казахстан</li>
                <li class="menuItem" onclick="getKodeks();" title="Читать Кодексы Республики Казахстан">Кодексы Республики Казахстан</li>
                    <ul id="kodeks">
                        <li class="kodeks">Бюджетный Кодекс Республики Казахстан</li>
                        <li class="kodeks">Водный Кодекс Республики Казахстан</li>
                        <li class="kodeks">Гражданский Кодекс Республики Казахстан(общая часть)</li>
                        <li class="kodeks">Гражданский Кодекс Республики Казахстан(особенная часть)</li>
                        <li class="kodeks">Гражданский Процессуальный Кодекс Казахстана</li>
                        <li class="kodeks">Земельный Кодекс Республики Казахстан</li>
                    </ul>
            </ul>

            <input type="text" id="search" placeholder="Поиск" autocomplete="off" title="Искать статью во всех кодексах Республики Казахстан">
        </header>

        <script src="public/js/main.js"></script>
    </body>
</html>