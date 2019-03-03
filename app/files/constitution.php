<?php

    require_once '../core/DataBase.php';
    $pdo = new DataBase();
    
    $result = $pdo->x->query('SELECT * FROM constitution;');
    $result = $result->fetchAll(PDO::FETCH_ASSOC);

    $general = $result[1]['general'];
    $article = $result[0]['article'];
    $content = $result[0]['content'];
    $footnote = $result[0]['footnote'];

    echo '<h1>Конституция Республики Казахстан</h1>';
    echo '<p class="folk">
        Мы, Народ Казахстана,<br>
        объединенный общей исторической судьбой,<br>
        созидая государственность на исконной казахской земле,<br>
        созновая себя миролюбивым гражданским обществом,<br>
        приверженным идеалам свободы, равенства и согласия,<br>
        желая занять достойное место в мировом сообществе,<br>
        осозновая свою высокую ответстветственность<br>
        перед нынешними и будущими поколениями,<br>
        исходя из своего суверенного права,<br>
        принимаем настоящую Конституцию.<br>
        </p>';
    echo '<p class="section">Раздел ' . $general .'</p>';
    echo '<p class="general">Общие положения</p>';
    echo '<p class="article" id=' . $article . '>Статья ' . $article . '</p>';
    echo $content;
    echo '<hr><p class="footnote">' . $footnote . '</p><hr>';
?>

