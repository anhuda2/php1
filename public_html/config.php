<?php 
 
$server = "localhost";
$user = "id19835872_localhost";
$pass = "421F124w4n@Zelda";
$database = "id19835872_idbc";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>