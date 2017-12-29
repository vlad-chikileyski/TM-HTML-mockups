<?php
session_start();
include 'components/service.php';
 if(isset($_POST['commit']) && isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password= $_POST['password'];
    getAuthCredential($login, $password);
 }
if(isset($_SESSION['user'])){
        header("Location: /index.php");
}?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <h1>Please enter your login and password to access this page</h1>

        <form action="login.php" method="post">
            <label for="login-field">Login</label>
            <input type="text" name="login" id="login-field">
            <br><br>
            <label for="password-field">Password</label>
            <input type="password" name="password" id="password-field">
            <input data-disable-with="Signing in…" name="commit" type="submit" value="Sign in">
        </form>
    </body>
</html>