<html>
    <title>Send melding</title>
    <body>
        <?php
        include "header.php";
        include "../main/sendMelding.php";
        ?>
        <form method="post" action="">
            <h1>SEND MELDING</h1>
            <label for="medlem">Send til</label>
            <input type="number" id="medlem" name="Medlem_ID" placeholder="Send til"><br><br><br>
            <label for= "melding">Send melding</label><br>
            <textarea name="Melding_Beskrivelse" rows="5" cols="40"></textarea>
            <br><br>
            <input type="submit"  name="send" value="Send">
        </form>

        <H2>SE ALLE MEDLEM ID</H2>
<?php
require_once "../../includes/db.inc.php";

$sql2 ="SELECT Medlem_ID, Brukernavn, Fornavn, Etternavn FROM Medlem";
$spørring2= $pdo->prepare($sql2);
$spørring2->execute();

$medlemid = $spørring2->fetchAll(PDO::FETCH_ASSOC);

try {
   $spørring2->execute();
} catch (PDOException $e) {
   echo $e->getMessage() . "<br>";
}
foreach ($medlemid as $medlemid){
       
       echo "<table border'1'>";

       echo "<tr>";
       echo "<th>Medlem ID</th>";
       echo "<th>Brukernavn</th>";
       echo "<th>Fornavn</th>";
       echo "<th>Etternavn</th>";
       echo "</tr>";

       echo "<tr>";
       echo "<td>".$medlemid['Medlem_ID']."</td>";
       echo "<td>".$medlemid['Brukernavn']."</td>";
       echo "<td>".$medlemid['Fornavn']."</td>";
       echo "<td>".$medlemid['Etternavn']."</td>";

       echo "</tr>";

       echo "</table>";
}
?>