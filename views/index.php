<?php
include "./header.php"
?>
    <h1>index</h1>
    <p>
        아래는 겨울 왕국에 대한 결과입니다
    </p>
    <p>
        <?php
        echo json_encode(search_movie("겨울왕국"), JSON_PRETTY_PRINT);
        ?>
    </p>
<?php
include "./footer.php"
?>