<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    </head>
    <title><?php session_start(); echo $_SESSION['Fornavn'];?>s hjemmeside </title>
</body>
<?php
include "header.php";
require_once "../../includes/db.inc.php";
// include "../main/session.php";


// if($_SESSION['LoggetInn'] == true) {
//     header("location: index.php");
//     exit;
// }
// else{
//     header("location: hjemmeside.php");
// }
?>

<h1>Velkommen, <?php echo $_SESSION['Fornavn'];?>!</h1><br>

<input type="button" class="button_active" onclick="location.href='../main/finnBolig.php';" value="FINN BOLIG"/><br><br>

<input type="button" class="button_active" onclick="location.href='omBolish.php';" value= "MIN BOLIG"/><br><br>

<input type="button" class="button_active" onclick="location.href='sendMeldish.php';" value= "SEND MELDING"/><br><br>

<input type="button" class="button_active" onclick="location.href='opprettAnonish.php';" value= "OPPRETT ANNONSE"/><br><br>






</html>
