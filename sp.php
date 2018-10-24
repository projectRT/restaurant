<?php
    
    $conn = mysqli_connect("localhost","root","","restaurant")or die("error connect");

    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $un = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $sql = "INSERT INTO signupdata (firstname, lastname,username, email,password)
    VALUES ('$fn', '$ln', '$un', '$email', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>