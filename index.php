<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss Project</title>
    <?php include("./client/commonFiles.php"); ?>
</head>

<body>
    <?php
    include("./client/header.php");

    if (isset($_GET['signup'])) {
        include("./client/signup.php");
    } else if (isset($_GET['login'])) {
        include("./client/login.php");
    } else {
        //
    }
    ?>
</body>

</html>