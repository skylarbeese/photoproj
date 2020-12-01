<?php
session_start();
session_unset();
if(isset($_POST['submit'])) {


session_destroy();

header("location: ../about.php");
} else {
    header("location: ../about.php?eroro");
}