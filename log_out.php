<?php
session_start();
session_destroy();
header("location:Reg_Login.php");