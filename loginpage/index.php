<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST["username"]) && isset($_POST["password"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "easycode" && $password == "123456") {
            echo "Login successful.";
            exit();
        } else {
            echo "invalid username or password.";
            exit();
        }
    } else {
        echo "Please enter valid username or password";
        exit();
    }
} else {
    echo "Invalid request type.";
    exit();
}
