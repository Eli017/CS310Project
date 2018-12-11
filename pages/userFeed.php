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
<script type="application/javascript">
    outputHeader();
</script>
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