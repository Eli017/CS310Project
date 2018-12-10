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
        <form method="post" action="userFeed.php">
            <label>First Name:</label><br/>
            <input type="text" title="First Name"/><br/>
            <label>Last Name:</label><br/>
            <input type = "text" title="Last Name"/><br/>
            <label>Email:</label><br/>
            <input type="email" title="Email"><br/>
            <label>Password:</label><br/>
            <input type="password" title="Password"/><br/>
            <label>Confirm Password:</label><br/>
            <input type="password" title="Confirm Password"/><br/>
            <label>Birthday:</label><br/>
            <input type="date" title="Birthday"/><br/>
            <input title="Sign Up" type="submit" value="Sign Up"/>
        </form>
    </fieldset>
    <script type="application/javascript">
        outputFooter();
    </script>
</body>
</html>';