<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Confirm sign up</h3>
    <?php
    //include the database file

    include('db.php');

    //variable name to hold the name, email, and password
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //print the name and email

    echo "<p>Welcome " . $name  . " . You entered " . $email . " as your email address. </p>";

    //processing on the user input -- email they provide

    $sql = "SELECT * FROM `users` WHERE email = '$email'";

    //run the query

    $result = mysqli_query($conn, $sql);

    //check if result array is empty or not

    if (mysqli_num_rows($result) > 0) {
        //email already exists
        echo "<p>Email already in use</p>";
    } else {
        //email not in use
        $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email', '$password')";

        //run the sql
        if (mysqli_query($conn, $sql)) {
            echo "<p> " . $name . " was entered into the database!</p>";
        } else {
            echo "<p>Soem error happened ... " . mysqli_error($conn) . "</p>";
        }
    }

    ?>

    <a href="index.php">Home Page</a>
</body>

</html>