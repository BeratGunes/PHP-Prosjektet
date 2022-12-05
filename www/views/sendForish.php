<html>
    <head>
        <meta charset="utf-8">
    </head>
    <title>Send forespørsel</title>
    <body>
    <?php
        include "header.php";
        include "../main/sendForespørsel.php";
        ?>
        <form method="post" action="">
            <h1>SEND FORESPØRSEL</h1>
            <label for= "Hvilken annonse">Hvilken annonse?</label><br>
            <input type="number" id= "Hvilken annonse" name="Annonse_ID" placeholder="send melding"><br>
            <input type="submit"  name="send" value="Send">
        </form>

        <table border='1'>
        <tr>
            <th>Annonse nummeret</th>
            <th>Annonse navn</th>
            <th>Annonse beskrivelse</th>
        </tr>
        <h1>SE ANNONSER</h1>

        <?php

            require_once "../../includes/db.inc.php";

            $sql = "SELECT * FROM Annonse";

            $q = $pdo->prepare($sql);
            $q->execute();

            $annonser= $q->fetchAll(PDO::FETCH_ASSOC);

            try {
                $q->execute();
            } catch (PDOException $e) {
                echo $e->getMessage() . "<br>";
            }
        
        foreach ($annonser as $annonsish){

            echo "<tr>";
            echo "<td>". $annonsish['Annonse_ID']."</td>";
            echo "<td>". $annonsish['Annonse_Navn']."</td>";
            echo "<td>". $annonsish['Annonse_Beskrivelse']."</td>";
        
            echo "</tr>";
        }

        ?>
            </table>

    </body>
</html>