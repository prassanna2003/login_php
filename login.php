<?php

include 'connection.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo $password;

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        header("location: welcome.php");
    }
    else{
        echo `<script>
        window.location.href = "index.php";
        alert("Invalid username or password!!!");
        </script>`;
    }


}

?>

