<?php

    session_start();

    $id = session_id(); 

    $_SESSION["count_p2"] += 1;

    echo "BENVENUTO nella PAGINA - 2 - del SITO <br><br>";
    echo "Ciao, questa pagina e' stata visita da te <b>" . $_SESSION["count_p2"] . "</b> volte. <br><br>";
    echo "Il tuo codice identificativo in questa sessione e': <b>".$id."</b> <br><br>";

?>