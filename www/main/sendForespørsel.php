<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        session_start();
        if(isset($_POST['send'])){
        require_once "../../includes/db.inc.php";
        
        $annonse= $_POST['Annonse_ID'];
        $sql = "INSERT INTO Foresporsel(Annonse_ID)
                VALUES(:Annonse_ID);";

        $insertinto = $pdo->prepare($sql);
        $insertinto->bindParam(':Annonse_ID',$annonse, PDO::PARAM_INT);

       
        try {
            $insertinto->execute();
            echo $_SESSION['Fornavn']. " , Forespørselen din er sendt.";
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }
        }
        ?>
    </body>
</html>