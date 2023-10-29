<?php
session_start();
unset($_SESSION['AKUN']);
header('location:index.php');