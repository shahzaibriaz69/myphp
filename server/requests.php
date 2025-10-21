<?php
include("../common/db.php");
if (isset($_POST['signup'])) {
    echo "username is: " . $_POST['username'] . "<br>";
    echo "email is: " . $_POST['email'] . "<br>";
    echo "password is: " . $_POST['password'] . "<br>";
    echo "address is: " . $_POST['address'] . "<br>";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $user = $conn->prepare("insert into `user`
    (`id`,`username`,`email`,`password`,`address`)
    value(Null,'$username','$email','$password', '$address')");

    $result = $user->execute();

    if ($result) {
        echo "New user is register";
    } else {
        echo "New user is not register";
    }
}

?>