<html>
    <head>
        <meta charset="utf-8">

    </head>
    <body>

    <h1>Opprett annonse</h1>

    <?php
    session_start();
 if(isset($_POST['Opprett'])) {

    require_once "../../includes/db.inc.php";

    $annonsenavn = $_POST ['Annonse_Navn'];
    $annonsebeskrivelse = $_POST ['Annonse_Beskrivelse'];

    $sql = "INSERT INTO Annonse (Annonse_Navn, Annonse_Beskrivelse)
    VALUES  (:Annonse_Navn, :Annonse_Beskrivelse)";

    $q = $pdo->prepare($sql);

    $q->bindParam(':Annonse_Navn', $annonsenavn, PDO::PARAM_STR);
    $q->bindParam(':Annonse_Beskrivelse', $annonsebeskrivelse, PDO::PARAM_STR);


    try {
        $q->execute();
        header("location:../views/annonseLagtinn.php");
        $_SESSION['lagtinn'] == true;

    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }

}

    ?>





    </body>

</html>