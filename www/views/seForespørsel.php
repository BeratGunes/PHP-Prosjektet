<html>
    <head>
        <meta charset="utf-8">
    </head>
    <title>SE FORESPØRSEL</title>
    <body>
        <?php
        include "header.php";
        require_once "../../includes/db.inc.php";
                    $sql= "SELECT F.Foresporsel_ID, A.Annonse_Navn, M.Fornavn
                    FROM ((Foresporsel F
                    INNER JOIN  Annonse A on F.Annonse_ID = A.Annonse_ID)
                    INNER JOIN Medlem M on F.Medlem_ID = M.Medlem_ID)
                    WHERE Akseptert = 0
                    ORDER BY Foresporsel_ID";
         

         $q = $pdo->prepare($sql);
         $q->execute();
     
         $foresporsel= $q->fetchAll(PDO::FETCH_ASSOC);
     
         try {
             $q->execute();
         } catch (PDOException $e) {
             echo $e->getMessage() . "<br>";
         }

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
             ?>
    </body>
</html>

