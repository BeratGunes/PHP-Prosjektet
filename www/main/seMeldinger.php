<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
 
    <h1>Meldinger</h1>

    <?php

     require_once "../../includes/db.inc.php";


$sql = "SELECT Melding_Beskrivelse, Brukernavn FROM Meldinger INNER JOIN Medlem M on Meldinger.Medlem_ID = M.Medlem_ID";

 
$spørring = $pdo->prepare($sql); 


$spørring->execute();

$Meldinger = $spørring->fetchall(PDO::FETCH_ASSOC);

foreach ($Meldinger as $melding ) 
{
   

}








    ?>






    </body>

</html>