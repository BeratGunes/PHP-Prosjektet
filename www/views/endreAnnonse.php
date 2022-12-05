<html>
        <head>
        <meta charset="utf-8">
        </head>

            <title>Endre Annonse</title>
        <body>

        <?php
        include "header.php";
        session_start();
        require_once "../../includes/db.inc.php";
?>

<h1>Endre annonse</h1>

        <form method="post" action="">

        <h4><label for="Annonse nummeret">Annonse nummeret</label><br></h4>
        <input type="number" id="Annonse nummeret" name="Annonse_ID" placeholder="Skriv her" required><br>

        <h4><label for="Annonse Navn">Annonse navn</label><br></h4>
        <input type="text" id="Annonse Navn" name="Annonse_Navn" placeholder="Skriv her" required><br>

        <h4><label for="Annonse Beskrivelse">Annonse beskrivelse</label><br></h4>
        <input type="text" id="Annonse Beskrivelse" name="Annonse_Beskrivelse" placeholder="Skriv her" required><br>
        <br><br> 
        <input type="submit" name="Endre" class="button_active" onclick="location.href='';" value="Endre"/><br>
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

        if(isset($_POST['Endre'])){

        $ID = $_POST['Annonse_ID'];
        $Annonse_Navn = $_POST['Annonse_Navn'];
        $Annonse_Beskrivelse = $_POST['Annonse_Beskrivelse'];



        $sql = "UPDATE Annonse
        SET Annonse_Navn = :Annonse_Navn, 
        Annonse_Beskrivelse = :Annonse_Beskrivelse
        WHERE Annonse_ID = :Annonse_ID";



        $q = $pdo->prepare($sql);


        $q->bindParam(':Annonse_ID' , $ID , PDO::PARAM_INT);
        $q->bindParam(':Annonse_Navn' , $Annonse_Navn , PDO::PARAM_STR);
        $q->bindParam(':Annonse_Beskrivelse' , $Annonse_Beskrivelse , PDO::PARAM_STR);


        try {
            $q->execute();
            echo "<h1>".$ID.". annonsenummeret er endret. ";
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";}
                }
        ?>
        
            </body>
        </html>