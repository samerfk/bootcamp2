<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>All users</h3>
    <?php
    include('db.php');

    $sql = "select * from users";

    //run the query
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
        if ($row['user_type'] == 1) {
            echo "<a href=\"users.php\">Users</a>";
        }
        echo "<p><b>" . $row['name'] . "</b>&nbsp;&nbsp;&nbsp;" . $row['email'] . "</p>";
    }
    //sessions 

    ?>

    <a href="index.php">Home page</a>
</body>

</html>