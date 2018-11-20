<?php
include "../php/userData.php";
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php
            $id = $_GET['id'];
            $user = $users[$id];
            echo "<title>" . $user['name'] . "</title>";
        ?>
        <link rel="stylesheet" type="text/css" href="../css/userFeed.css"/>
        <script src="../javascript/margins.js"></script>
        <script src="../javascript/userPost.js"></script>
    </head>
    <body>
    <script type="application/javascript">
        outputHeader();
    </script>
        <br>
        <table>
            <tr>
                <td>
                    <?php
                        echo "<img src='../assets/" . $user['profilePhoto'] . "' alt='profile photo' id='profilePhoto'>";
                    ?>
                </td>
                <td>
                    <?php
                        echo "<h1>" . $user['name'] . "</h1>";
                        echo "<h2>User Since: " . $user['originDate'];
                        echo "<br/>";
                        echo "Agora Score: " . $user['score'] . "</h2>";
                    ?>
                </td>
            </tr>
            <script>
                generatepostlist(6,namelist,postlist);
            </script>
        </table>
        <script type="application/javascript">
            outputFooter();
        </script>
    </body>
