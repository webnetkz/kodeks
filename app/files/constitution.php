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
            <p class="section">Раздел ' . $result[1]['general'] .'</p>
            <p class="general">Общие положения</p>';
                foreach($result as $k => $v) {
                    echo '<p class="article" id=' . $v['id'] . '>Статья ' . $v['id'] . '</p>
                    <p class="core">' . $v['content'] . '</p>';

                        if(!empty($v['footnote'])) {
                            echo '<p class="footnote">' . $v['footnote'] . '</p>';
                        }
                        echo '<hr>';

                        if($v['id'] == 9) {
                            echo '<p class="section">Раздел ' . $result[9]['general'] .'</p>
                            <p class="general">Человек и гражданин</p>';
                        }
                }

    // NAVIGATION PANEL

    echo '<nav id="navigation">
        <h4>Раздел I</h4>';
    
            foreach($result as $k => $v) {
                if($v['id'] <= 9) {
                    echo '<a href="#' . $v['id'] . '">статья ' . $v['id'] . '</a><br>';
                }
            }
    
    echo '</nav>';

?>

