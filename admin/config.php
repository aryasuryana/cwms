<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "cwmsdb";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}


    $db = mysqli_connect('localhost', 'root', '', 'db-carwash');

    function querySql($query)
        {
        global $db;

        $cuci = mysqli_query($db, $query);
        $cuci = [];

        while ($row = mysqli_fetch_assoc($cuci)) {
            $cuci[] = $row;
            }

        return $cuci;
        }

 
?>