<?php session_start(); ?>
<?php $_SESSION['user'] = $_POST['username'];
header('Location: /index.php'); ?>