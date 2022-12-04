<html>
    <head>
        <meta charset="utf-8">

    </head>
    <body>

    <h1>Opprett annonse</h1>

    <?php
    if(isset($_POST['Opprett'])) {

    require_once "../../includes/db.inc.php";

    $annonsenavn = $_POST ['Annonse_Navn'];
    $annonsebeskrivelse = $_POST ['Annonse_Beskrivelse'];

    $bolignavn = $_POST ['Bolig_Navn'];
    $adresse = $_POST ['Bolig_Adresse'];
    $byen = $_POST ['Byen'];
    $bydel = $_POST ['Bydel'];
    $pris = $_POST ['Pris'];

    $sql = "INSERT INTO Annonse (Annonse_Navn, Annonse_Beskrivelse)
    VALUES  (:Annonse_Navn, :Annonse_Beskrivelse)";

    $sql2 = "INSERT INTO Bolig (Bolig_Navn, Bolig_Adresse, Byen, Bydel, Pris) 
            VALUES (:Bolig_Navn, :Bolig_Adresse, :Byen, :Bydel, :Pris)";

    $q = $pdo->prepare($sql);
    $q2 = $pdo->prepare($sql2);


    $q->bindParam(':Annonse_Navn', $annonsenavn, PDO::PARAM_STR);
    $q->bindParam(':Annonse_Beskrivelse', $annonsebeskrivelse, PDO::PARAM_STR);
    $q2->bindParam(':Bolig_Navn', $bolignavn, PDO::PARAM_STR);
    $q2->bindParam(':Bolig_Adresse', $adresse, PDO::PARAM_STR);
    $q2->bindParam(':Byen', $byen, PDO::PARAM_STR);
    $q2->bindParam(':Bydel', $bydel, PDO::PARAM_STR);
    $q2->bindParam(':Pris', $pris, PDO::PARAM_INT);




    try {
        $q->execute();
        $q2->execute();
        header("location:../views/annonseLagtinn.php");

    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }

}
    ?>

    </body>

</html>