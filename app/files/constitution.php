<?php

    require_once '../core/DataBase.php';
    $pdo = new DataBase();
    
    $result = $pdo->x->query('SELECT * FROM constitution;');
    $result = $result->fetchAll(PDO::FETCH_ASSOC);


    echo '<h1>Конституция Республики Казахстан</h1>
        <p class="folk">
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
        </p>
            <p class="section">Раздел ' . $result[0]['general'] .'</p>
            <p class="general">Общие положения</p>';
                foreach($result as $k => $v) {
                    echo '<p class="article" id=' . $v['id'] . '>Статья ' . $v['id'] . '</p>
                    <p class="core">' . $v['content'] . '</p>';
                    echo '<hr><p class="footnote">' . $v['footnote'] . '</p><hr>';

                    if($v['id'] == 8) {
                        echo '<p class="section">Раздел ' . $result[9]['general'] .'</p>
                        <p class="general">Человек и гражданин</p>';
                    }
                }
?>

