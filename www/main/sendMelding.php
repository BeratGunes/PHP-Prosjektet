<html>
    <body>
<?php
session_start();
    if(isset($_POST['send'])) {

        require_once "../../includes/db.inc.php";

        $meldingen = $_POST['Melding_Beskrivelse'];
        $sendtil = $_POST['Medlem_ID'];


        $sql="INSERT INTO Meldinger (Melding_Beskrivelse, Medlem_ID)
        VALUES
        (:Melding_Beskrivelse, :Medlem_ID)";

       

        $spørring= $pdo->prepare($sql);

        $spørring->bindParam(':Melding_Beskrivelse', $meldingen, PDO::PARAM_STR);
        $spørring->bindParam(':Medlem_ID', $sendtil, PDO::PARAM_INT);



        try {
            $spørring->execute();
            echo $_SESSION['Fornavn']. " , Meldingen din er sendt. ";
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }
        
    }

?>

</body>                             
</html>
