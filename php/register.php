<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register to Agora</title>
    <link rel="stylesheet" type="text/css" href="../css/register.css"/>
</head>
<body>
    <header>
        <img src="../assets/Logo1.png" title="Agora Logo" alt="Agora Logo"/>
        <h3>Agora</h3>
    </header>
    <h1>Create an account</h1>
    <h4>It\'s free!</h4>
    <fieldset>
        <form method="post" action="createUser.php">
            <label>First Name:</label><br/>
            <input type="text" name="fname"/><br/>
            <label>Last Name:</label><br/>
            <input type = "text" name="lname"/><br/>
            <label>Username:</label><br/>
            <input type="text" name="uname"/><br/>
            <label>Password:</label><br/>
            <input type="password" title="Password" name="password"/><br/>
            <input type="submit"/>
        </form>
    </fieldset>
    <script type="application/javascript">
        outputFooter();
    </script>
</body>
</html>';