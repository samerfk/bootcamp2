<html lang="en">

<head>
<!-- test -->
<!-- another comment -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $localhost = "localhost"; //both the app and the database are on the same machine
    $username = "root";
    $password = "";
    $database = "website";


    $conn = mysqli_connect($localhost, $username, $password, $database);

    if (!$conn) {
        echo "<p>Connection failed " . mysqli_connect_error() . "</p>";
    } else {
        //echo "<p>Connection successful </p>";
    }

    ?>
</body>

</html>