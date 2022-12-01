<?php
// Start the session
session_start();

//om brukeren allerede er logga, send videre til hjemmesiden
if($_SESSION['LoggetInn'] == true) {
    header("location: hjemmeside.php");
    exit;
}
else{
    header("location: index.php");
}
?>

