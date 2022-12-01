<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../views/minProfilUtseende.css">

    </head>
            <title>Min profil</title>
     <body>

        <h1>MIN PROFIL</h1>
        <table>
         <tr>
            <th>Fornavn</th>
            <th>Etternavn</th>
            <th>Adresse</th>
            <th>Postnummer</th>
        </tr>

        <?php
        require_once "../../includes/db.inc.php";

        $sql = "SELECT Fornavn, Etternavn, Adresse, Postnummer FROM Medlem WHERE Medlem_ID = 1";

        $spørring = $pdo->prepare($sql);
        // $spørring->bindParam('1', $medlemid, PDO::PARAM_INT);
        $spørring->execute();
        $medlem = $spørring->fetchAll(PDO::FETCH_ASSOC);

        

        try {
            $spørring->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }
        foreach ($medlem as $medlem)
        {   
            echo "<tr>";       
            echo "<td>".$medlem['Fornavn']."</td>";
            echo "<td>".$medlem['Etternavn']."</td>";
            echo "<td>".$medlem['Adresse']."</td>";
            echo "<td>".$medlem['Postnummer']."</td>";   
            echo "</tr>";
        }
        ?>

        </table>
    </body>
</html>