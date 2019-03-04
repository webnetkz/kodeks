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
                <li class="menuItem" onclick="getConstitution();" title="Отобразить Конституцию Республики Казахстан">Конституция</li>
                <li class="menuItem" onclick="getKodeks();" title="Отобразить кодексы Республики Казахстан">Кодексы</li>
                <li class="menuItem" onclick="newsPortal();" title="Отобразить поправки Конституции и кодексов Республики Казахстан">Поправки</li>
                    <ul id="kodeks">
                        <li class="kodeks">Бюджетный кодекс Республики Казахстан</li>
                        <li class="kodeks">Водный кодекс Республики Казахстан</li>
                        <li class="kodeks">Гражданский кодекс Республики Казахстан(общая часть)</li>
                        <li class="kodeks">Гражданский кодекс Республики Казахстан(особенная часть)</li>
                        <li class="kodeks">Гражданский Процессуальный кодекс Казахстана</li>
                        <li class="kodeks">Земельный кодекс Республики Казахстан</li>
                        <li class="kodeks">Кодекс Республики Казахстан об Административных правонарушениях</li>
                        <li class="kodeks">Кодекс Республики Казахстан о здаровье народа и системе здравоохранения</li>
                        <li class="kodeks">Лесной кодекс Республики Казахстан</li>
                        <li class="kodeks">Налоговый кодекс Республики Казахстан. О налогах и других обязательных платежах в бюджет</li>
                        <li class="kodeks">Таможенный кодекс Республики Казахстан</li>
                        <li class="kodeks">Трудовой кодекс Республики Казахстан</li>
                        <li class="kodeks">Уголовно-исполнительный кодекс Республики Казахстан</li>
                        <li class="kodeks">Уголовно-процессуальный кодекс Республики Казахстан</li>
                        <li class="kodeks">Уголовный кодекс Республики Казахстан</li>
                        <li class="kodeks">Экологический кодекс Республики Казахстан</li>
                    </ul>
            </ul>

            <input type="text" id="search" placeholder="Поиск" autocomplete="off" title="Искать статью во всех кодексах Республики Казахстан">
        </header>

        <div id="content">
        
        </div>


        <script src="public/js/main.js"></script>
    </body>
</html>