<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

    <h1>Registrer deg</h1>

    <?php
 if(isset($_POST['Registrer'])) {

    require_once "../../includes/db.inc.php";

    $fornavn      = $_POST ['Fornavn'];
    $etternavn    = $_POST ['Etternavn'];
    $brukernavn   = $_POST ['Brukernavn'];
    $mobilnummer  = $_POST ['Mobilnummer'];
    $epost        = $_POST ['Epost'];
    $passord      = $_POST ['Passord'];
    $adresse      = $_POST ['Adresse'];
    $postnummer   = $_POST ['Postnummer'];
  
    $sql = "INSERT INTO Medlem (Fornavn, Etternavn, Brukernavn, Mobilnummer, Epost, Passord, Adresse, Postnummer)
    VALUES  (:Fornavn, :Etternavn, :Brukernavn, :Mobilnummer, :Epost, :Passord, :Adresse, :Postnummer)";

    $q = $pdo->prepare($sql);

    $q->bindParam(':Fornavn', $fornavn, PDO::PARAM_STR);
    $q->bindParam(':Etternavn', $etternavn, PDO::PARAM_STR);
    $q->bindParam(':Brukernavn', $brukernavn, PDO::PARAM_STR);
    $q->bindParam(':Mobilnummer', $mobilnummer, PDO::PARAM_STR);
    $q->bindParam(':Epost', $epost, PDO::PARAM_INT);
    $q->bindParam(':Passord', $passord, PDO::PARAM_STR);
    $q->bindParam(':Adresse', $adresse, PDO::PARAM_STR);
    $q->bindParam(':Postnummer', $postnummer, PDO::PARAM_STR);
        
    try {
		$q->execute();
        header("Location: ../main/index.php");
	} catch (PDOException $e) {
		echo $e->getMessage() . "<br>";
	}

}   
    ?>
    </body>
    
</html>