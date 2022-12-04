<html>
    <head>
        <meta charset="utf-8">
    </head>
            <title>Min profil</title>
     <body>

     

        <?php
        require_once "../../includes/db.inc.php";

        $sql = "SELECT Fornavn, Etternavn, Adresse, Postnummer FROM Medlem WHERE Medlem_ID = :Medlem_ID";


        $spørring = $pdo->prepare($sql);


        $spørring->bindParam(':Medlem_ID', $_SESSION['ID'], PDO::PARAM_INT);


    

        
        $spørring->execute();




        $medlem = $spørring->fetchAll(PDO::FETCH_ASSOC);


        

        try {
            $spørring->execute();

        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }
        foreach ($medlem as $medlem)
        {   
          
        ?>
         <?php
        }
        ?>

        
        </table>
    </body>
</html>