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
include "../main/session.php";


// if($_SESSION['LoggetInn'] == true) {
//     header("location: index.php");
//     exit;
// }
// else{
//     header("location: hjemmeside.php");
// }
?>

<h1>Velkommen, <?php echo $_SESSION['Fornavn'];?>!</h1><br>

<div class="knappish">

<input type="button" class="btn" onclick="location.href='finnBolish.php';" value="FINN BOLIG"/>

<input type="button" class="btn" onclick="location.href='omBolish.php';" value= "MIN BOLIG"/><br><br>

<input type="button" class="btn" onclick="location.href='sendMeldish.php';" value= "SEND MELDING"/><br><br>

<input type="button" class="btn" onclick="location.href='opprettAnonish.php';" value= "OPPRETT ANNONSE"/>

<input type="button" class="btn" onclick="location.href='seAnnonish.php';" value= "SE ANNONSE"/><br><br>

<input type="button" class="btn" onclick="location.href='seForespørsel.php';" value= "SE FORESPØRSLER"/>

<input type="button" class="btn" onclick="location.href='sendForish.php';" value= "SEND FORESPØRSLER"/>

</div>

</html>
