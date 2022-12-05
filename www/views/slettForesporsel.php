<html>
    <head>
        <meta charset="utf-8">
    </head>
    <title>Slett forespørsel</title>
    <body>

        <?php
        include "header.php";
        require_once "../../includes/db.inc.php";
        ?>

        <form method="post" action="">

        <h1><label for="Slett foresporsel">Slett forespørsel</label><br></h1><br>

        <h4>Velg nummer </h4><input type="number" id="Velg annonse" name="Foresporsel_ID" placeholder="Skriv her">
            <br><br><input type="submit" name="Slett" class="button_active" onclick="location.href='';" value="Slett"/><br>
        </form>

        <?php

        $sql2= "SELECT F.Foresporsel_ID, A.Annonse_Navn, M.Fornavn
        FROM ((Foresporsel F
        INNER JOIN  Annonse A on F.Annonse_ID = A.Annonse_ID)
        INNER JOIN Medlem M on F.Medlem_ID = M.Medlem_ID)
        WHERE Akseptert = 0
        ORDER BY Foresporsel_ID";


        $q2= $pdo->prepare($sql2);
        $q2->execute();

        $foresporsel= $q2->fetchAll(PDO::FETCH_ASSOC);

        echo "<h1>SE FORESPØRSLER</h1>";

         foreach ($foresporsel as $forespørler){
            echo "<table border='1'>";

            echo "<tr>";
            echo "<th>Foresporsel ID</th>";
            echo "<th>Hvilken annonse?</th>";
            echo "<th>Hvem har sendt?</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>".$forespørler['Foresporsel_ID']."</td>";
            echo "<td>".$forespørler['Annonse_Navn']."</td>";
            echo "<td>".$forespørler['Fornavn']."</td>";
            echo "</tr>";

            echo "</table>";

         }
         if(isset($_POST['Slett'])){

            $ID = $_POST['Foresporsel_ID'];
        
                $sql = "DELETE FROM Foresporsel WHERE Foresporsel_ID = :Foresporsel_ID";
        
        
                 $q = $pdo->prepare($sql); 
                 $q->bindParam(':Foresporsel_ID',$ID, PDO::PARAM_INT);

                 try {
                    $q->execute();
                    $q->execute();
                    echo "<h2>".$ID.". forespørselen  er slettet.</h2>";
                } catch (PDOException $e) {
                    echo $e->getMessage() . "<br>";}
         }
        ?>

    </body>
</html>