<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../views/loggInnUtseende.css"  type="text/css">


    </head>
            <title>Logg inn</title>

    <body>
        
    <?php
        session_start();
    if(isset($_POST['logginn'])) {
        require_once "../../includes/db.inc.php";
   
    $sql = "SELECT * FROM Medlem WHERE Brukernavn = :Brukernavn";
    
    $spørring = $pdo->prepare($sql);
    
    $brukernavn = $_POST['Brukernavn'];
    $spørring->bindParam(':Brukernavn', $brukernavn, PDO::PARAM_STR);


    try {
		$spørring->execute();
	} catch (PDOException $e) {
		echo $e->getMessage() . "<br>";
	}

    $medlem = $spørring->fetch(PDO::FETCH_OBJ);

    $passordhash = password_hash($_POST['Passord'], PASSWORD_DEFAULT); 



    if (password_verify($_POST['Passord'], $medlem->Passord)) {
		/* Passordene matcher: videresender brukeren til innsiden av systemet */
        $_SESSION['ID'] = $medlem->Medlem_ID;
        $_SESSION['Fornavn'] = $medlem->Fornavn;
        $_SESSION['Etternavn'] = $medlem->Etternavn;
        $_SESSION['Brukernavn'] = $medlem->Brukernavn;
        $_SESSION['Mobilnummer'] = $medlem->Mobilnummer;
        $_SESSION['Epost'] = $medlem->Epost;
        $_SESSION['Passord'] = $medlem->Passord;
        $_SESSION['Adresse'] = $medlem->Adresse;
        $_SESSION['Postnummer'] = $medlem->Postnummer;
        $_SESSION['LoggetInn'] = true;
        header("Location: ../views/hjemmeside.php");
        exit();



	} else {
		echo "Brukernavn og/eller passord er ikke riktig";
	}
}
    ?>
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div id="center">
        <table>
            <tr>
                <h1>Logg inn</h1>
                    <td>Brukernavnet</td>
                    <td><input type="text" name="Brukernavn" placeholder = "Brukernavn"/></td>
                    <br>
                </tr>
            <tr>
                <td>Passord</td>
                    <td><input type="password" name="Passord" placeholder = "Passord" /></td>
                    <br>
                </tr>   
            <tr>
                <td><input type="submit" name="logginn" value ="Logg inn" /></td>
            </tr>
                </table>
            </div>
        </form>
        <p>Har du ikke konto? <a href="../views/registrish.php">Registrer deg her!</a></p>
    </body>
</html>