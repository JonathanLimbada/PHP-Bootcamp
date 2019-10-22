<?php
    session_start();
    if (isset($_GET['login']) && isset($_GET['passwd']))
    {
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd'] = $_GET['passwd'];
    }
?>

<html>
    <form action="GET">
        <p>login</p>
        <input name=login value="<?= $_SESSION['login'] ?>" required>
        <p>password</p>
        <input name=passwd value="<?= $_SESSION['passwd'] ?>" required>
        <input type=submit>
    </form>
</html>
