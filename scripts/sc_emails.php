<?php

include_once "../connections/connection.php";

if (isset($_POST['email'])){

$email=$_POST['email'];

    $link = new_db_connection();

    $stmt1 = mysqli_stmt_init($link);


    $query1 = "INSERT INTO emails (id_emails, email, active) VALUES (NULL, ?, 1)";

    if (mysqli_stmt_prepare($stmt1, $query1)) {

        mysqli_stmt_bind_param($stmt1, "s", $email);

        if (!mysqli_stmt_execute($stmt1)){// Execute the prepared statement

            echo "erro";

        }


    }else{
        echo mysqli_error($link);
    }
    mysqli_stmt_close($stmt1); // Close statement

}

header("Location: ../");