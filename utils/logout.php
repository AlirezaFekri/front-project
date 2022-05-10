<?php
include "security.php";
Authentication::logout();
header("location:../controller/login.php");
