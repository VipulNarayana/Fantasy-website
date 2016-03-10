<?php
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_FILENAME'];
echo $current_file;
?>