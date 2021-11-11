<?php
session_start();

$userinfo = array(
    'dei' => '123'
);

if (isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if (isset($_POST['username'])) {
    if ($userinfo[$_POST['username']] == $_POST['password']) {
       $_SESSION['username'] = $_POST['username'];
       header("Location: board.php");
    } else {
        //Invalid Login
    }
}
?>