<?php
// Start the session

//om brukeren allerede er logga, send videre til hjemmesiden
if($_SESSION['LoggetInn'] !== true) {
    header("location: index.php");
    exit;
}
else{
   
}
?>

