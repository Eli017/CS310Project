<?php
$connString = "mysql:host=localhost;dbname=Agora";
$user = "cs310";
$pass = "cs310";

$pdo = new PDO($connString,$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Back!</title>
    <link rel="stylesheet" href="../css/userFeed.css"/>
    <script src="../javascript/userFeedData.js"></script>
    <script src="../javascript/userFeedFunctions.js"></script>
    <script src="../javascript/margins.js"></script>
    <script src="../javascript/userPost.js"></script>
</head>
<body>
<script type="application/javascript">
    outputHeader();
</script>
<?php
$sql = "SELECT FirstName, LastName, EmployeeID from Employees ORDER BY LastName";
$result = $pdo->query($sql);
While ($row = $result->fetch()) {
    $firstName = $row['FirstName'];
}
?>
<script type="application/javascript">
    displayAllPosts();
</script>
<script type="application/javascript">
    outputFooter();
</script>
</body>
</html>