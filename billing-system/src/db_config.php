<?php
/**
 * Created by PhpStorm.
 * User: ahqmrf
 * Date: 11/16/2016
 * Time: 6:10 PM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "billing_system";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
