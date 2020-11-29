<?php
session_start();
session_unset();
if(isset($_POST['submit'])) {


session_destroy();

header("location: ../index.php");
} else {
    header("location: ../index.php?eroro");
}