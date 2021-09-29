<?php
require_once 'login.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:../index.php?login=1');
}
if ($_GET['login'] == "0") {
    header('Location:../index.php?login=0');
}
if ($_GET['login'] == "nosession") {
    header('Location:../index.php?login=nosession');
} else if ($_GET['login'] == "1") {
    $usuario = $_POST['user'];
    $senha = $_POST['senha'];
    $loger = new Login();
    $loger->doLogin($usuario, $senha);
}