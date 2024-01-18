<?php

    $usernameCorretto = "utente";
    $passwordCorretta = "1234";

    if (isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == $usernameCorretto && $password == $passwordCorretta) {

            session_start();

            $_SESSION["count_p1"] = 0;
            $_SESSION["count_p2"] = 0;  
            $_SESSION["count_p3"] = 0;

            echo "<h3>Bravo ti sei loggato!</h3>";
            echo '<a href="menu.php"><button>Continua</button></a>';

        } else {
            echo "<h3>Username o password non corretta.</h3>";
        }

    }

?>