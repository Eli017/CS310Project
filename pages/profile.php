<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
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
            <td><img src="../assets/user-face.jpg" alt="profile photo" id= "profilePhoto"></td>
            <td><script>
            document.write("<h1>"+userdata[0]+"</h1><h2> User For: "+userdata[1]+"<br>"+userdata[2]+postlist.length+"</h2>")
            </script>
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
