<?php

    session_unset();
    session_destroy();

    echo "<h3>Arrivederci dal nostro sito</h3>";

    header("Location index.php")

?>