<?php

    session_start();

    $id = session_id(); 

    $_SESSION["count_p1"] = $_SESSION["count_p1"] + 1;

    echo "BENVENUTO nella PAGINA - 1 - del SITO <br><br>";
    echo "Ciao, questa pagina e' stata visita da te <b>" . $_SESSION["count_p1"] . "</b> volte. <br><br>";
    echo "Il tuo codice identificativo in questa sessione e': <b>".$id."</b> <br><br>";

?>