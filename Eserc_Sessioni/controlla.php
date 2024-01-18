<?php

    $usernameCorretto = "utente";
    $passwordCorretta = "1234";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == $usernameCorretto && $password == $passwordCorretta) {

            echo "<h3>Bravo ti sei loggato!</h3>";
            echo '<a href="menu.php"><button>Continua</button></a>';

        } else {
            echo "<h3>Username o password non corretta.</h3>";
        }

    }

?>