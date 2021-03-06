<?php
session_start();
session_destroy();
header('location:homepage.php?bye=We hope see you again ');
?>