<html>
    <head>
        <meta charset="utf-8">

        

    </head>
            <title>Annonser</title>

    <body>
        <?php
        require_once "../../includes/db.inc.php";
     
        $sql = "SELECT Bolig_Navn, Bolig_Adresse, Annonse_Navn, Annonse_Beskrivelse FROM Bolig INNER JOIN Annonse A on Bolig.Annonse_ID = A.Annonse_ID WHERE Medlem_ID = 1";
        $spørring = $pdo->prepare($sql);

        $spørring->execute();
        $annonse= $spørring->fetchAll(PDO::FETCH_ASSOC);

        try {
            $spørring->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }
        foreach ($annonse as $annonse)
        {   
           
        ?>

        <?php
        }
        ?>
    </body>
</html>

