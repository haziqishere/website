<?php
    // Connect to database
    include("database.php");

    $username = "Squidward";
    $password = "clarinet2";

    $sql = "INSERT INTO user (username, password)
            VALUES ('$username', '$password')";

    try{
        // Insert new user into database
        mysqli_query($conn, $sql);
        echo"User is now registered";
    }
    catch(mysqli_sql_exception) {
        echo"Could not register user";
    }

    
    // Close connection
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello<br>
</body>
</html>