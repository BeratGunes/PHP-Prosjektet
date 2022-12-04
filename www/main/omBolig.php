<html>
    <head>
        <meta charset="utf-8">

        

    </head>
            <title>Min bolig</title>

    <body>
        <?php
        session_start();
        require_once "../../includes/db.inc.php";
     
        $sql = " SELECT Bolig_Navn, Bolig_Adresse, Pris, Bydel ,Medlem_ID
        FROM Bolig
        INNER JOIN Annonse A on Bolig.Annonse_ID = A.Annonse_ID
        WHERE Medlem_ID = :Medlem_ID";


        $spørring = $pdo->prepare($sql);

        $spørring->bindParam(':Medlem_ID', $_SESSION['ID'], PDO::PARAM_INT);

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

