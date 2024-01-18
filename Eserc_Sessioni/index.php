<?php

    session_start();

    if (isset($_SESSION["username"]) && isset($_SESSION["password"])){
        header("Location: menu.php");
    }

?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <form action="controlla.php" method="post">

        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="login" value="LOGIN">
        <input type="reset" name="reset" value="RESET">

    </form>
    
</body>
</html>