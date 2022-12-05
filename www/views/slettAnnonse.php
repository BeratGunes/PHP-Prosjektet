<html>
    <head>
        <meta charset="utf-8">
    </head>
    <title>Slett annonse</title>
    <body>
            <?php
            session_start();
            require_once "../../includes/db.inc.php";
            include "header.php"; 
            ?>

            <form method="post" action="">

                <h1><label for="Velg annonse">Velg annonse</label><br></h1><br>
                
                   <h4>Velg nummer </h4><input type="number" id="Velg annonse" name="Annonse_ID" placeholder="Skriv her">
                    <br><br><input type="submit" name="Slett" class="button_active" onclick="location.href='';" value="Slett"/><br>
            </form>
<?php

 $sql2 = "SELECT * FROM Annonse"; 

 $q2 = $pdo->prepare($sql2);

 $q2->execute();
 
 $annonser = $q2->fetchAll(PDO::FETCH_ASSOC);

    foreach ($annonser as $annonser){
        echo "<table border'1'>";
              
            echo "<tr>";
            echo "<th>Annonse nummeret</th>";
            echo "<th>Annonse navn</th>";
            echo "<th>Annonse beskrivelse</th>";
            echo "</tr>";
              
        echo "<tr>";
            echo "<td>".$annonser['Annonse_ID']."</td>";
            echo "<td>".$annonser['Annonse_Navn']."</td>";
            echo "<td>".$annonser['Annonse_Beskrivelse']."</td>";
              
        echo "</tr>";
              
        echo "</table>";

}

if(isset($_POST['Slett'])){

    $ID = $_POST['Annonse_ID'];

        $sql = "DELETE FROM Annonse WHERE Annonse_ID = :Annonse_ID";


         $q = $pdo->prepare($sql); 
         $q->bindParam(':Annonse_ID',$ID, PDO::PARAM_INT);
         try {
            $q->execute();
            $q2->execute();
            echo "<h2>".$ID.". annonsenummeret er slettet.</h2>";
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";}
 }
        ?>
              
    
              </body>
</html>