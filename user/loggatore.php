<?php session_start(); ?>
<?php $_SESSION['username'] = $_POST['username'];
header('Location: ../index.php'); ?>