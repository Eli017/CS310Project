<?php
echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login to Agora</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css"/>
</head>
<body>
    <header>
        <img src="../assets/Logo1.png" title="Agora Logo" alt="Agora Logo"/>
        <h3>Agora</h3>
    </header>
    <h1>Welcome to Agora!</h1>
    <form method="post" action="userFeed.php">
        
        <fieldset>
            <label>Email:</label><br>
            <input for="email" type="text" name="email" value=""/><br>
            <label>Password:</label><br>
            <input type="password" name="password"/><br>
            <p>
                New User? Register <a href="register.php">Here</a>
            </p>
            <input type="submit" name="submit"/>
        </fieldset>
    </form>
    <script type="application/javascript">
        outputFooter();
    </script>
</body>
</html>'
?>