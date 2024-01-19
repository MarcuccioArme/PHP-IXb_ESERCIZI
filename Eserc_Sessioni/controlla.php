<?php

    $usernameCorretto = "utente";
    $passwordCorretta = "1234";

    $form_user = $_POST["username"];
    $form_password = $_POST["password"];

    if (isset($form_user) && $form_user == $usernameCorretto && isset($form_password) && $form_password == $passwordCorretta) {

        $_SESSION["username"] = $form_user;
        $_SESSION["password"] = $form_password;

        echo "<h3>Bravo ti sei loggato!</h3>";
        echo '<a href="menu.php"><button>Continua</button></a>';
        
        $_SESSION["count_p1"] = 0;
        $_SESSION["count_p2"] = 0;
        $_SESSION["count_p3"] = 0;

    } else {

        echo "<h3>Username o password non corretta.</h3>";
        echo '<a href="index.php"><button>Rifai il login</button></a>';
        
    }

?>