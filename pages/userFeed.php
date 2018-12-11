<?php
$connString = "mysql:host=localhost;dbname=Agora";
$user = "cs310";
$pass = "cs310";

$pdo = new PDO($connString, $user, $pass);
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
<?php
    if (isset($_GET['username']) && isset($_GET['password'])) {
        $currentUser = $_GET['username'];
        echo "<script type=\"application/javascript\">
              outputHeader('" . $currentUser . "');
              </script>";
    } else {
        echo "<header>";
        echo "<a href=\"../pages/userFeed.php\"><img src=\"../assets/Logo1.png\" title=\"Agora Logo\" alt=\"Agora Logo\" id=\"logo\"/></a>";
        echo "<a href=\"../pages/userFeed.php\">Agora</a>";
        echo "<a href=\"../pages/login.html\" class=\"userLoginRegister\">Login</a>";
        echo "<a href=\"../php/register.php\" class=\"userLoginRegister\">Register</a>";
        echo "</header>";
    }
?>
<?php
$usernameSql = "SELECT Posts.userID, LoginInfo.Username, LoginInfo.photoURL, Posts.Text FROM Posts JOIN LoginInfo ON Posts.userID = LoginInfo.userID ORDER BY timecreated DESC";
$result = $pdo->query($usernameSql);
While ($row = $result->fetch()) {
    $username = $row['Username'];
    $userPhoto = $row['photoURL'];
    $userID = $row['userID'];
    $postText = $row['Text'];
    echo "<article class='post'>";
    echo "<img src='../assets/" . $userPhoto ."' alt='Profile Picture' title='Profile Picture' class='profilePicture'>";
    echo "<h4><a href='../pages/profile.php?id=$userID'>$username</a></h4>";
    echo "<hr/>";
    echo "<p>$postText</p>";
    echo "</article>";
}
?>
<script type="application/javascript">
    outputFooter();
</script>
</body>
</html>