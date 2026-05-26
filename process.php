<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$token = $_POST['token'];

if ($username === 'Afif' && $password === '106201456') {
    $_SESSION['user'] = $username;
    $_SESSION['token'] = $token;

    header('Location: welcome.php');
    exit();
} else {
    header('Location: login.php?error=1');
    exit();
}
?>