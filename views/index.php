<?php
include "./header.php"
?>
    <h1>index</h1>
    <p>
        아래는 겨울 왕국에 대한 결과입니다
    </p>
    <ol>
        <?php
        foreach (json_decode(search_movie("겨울왕국"))->items as $item){
            echo "<li>".$item -> title."</li>";
        };
        ?>
    </ol>
<?php
include "./footer.php"
?>