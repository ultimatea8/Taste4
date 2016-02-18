<?php
include 'configure.php';
//include 'dbFunc.php';
function dbPull($dBase){
    $con = $GLOBALS['con'];
    mysqli_select_db($con, "$dBase") or die("Cannot find DataBase");
}
?>