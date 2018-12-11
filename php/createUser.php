<html>
<body>

<?php
try {
    $connString = "mysql:host=localhost;dbname=Agora";
    $user = "cs310";
    $pass = "cs310";

    $pdo = new PDO($connString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO LoginInfo (FirstName, LastName, Username, Password)
        VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[uname]', '$_POST[password]')";
    $pdo->exec($sql);
    header("Location: ../pages/login.php");
} catch (PDOException $e) {
    echo $sql . "<br/>" . $e->getMessage();
}
?>
</body>
</html>