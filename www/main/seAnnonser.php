<html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
    
    <?php
    require_once "../../includes/db.inc.php";

    $sql = "SELECT * FROM Annonse";

    $q = $pdo->prepare($sql);
    $q->execute();

    $annonser= $q->fetchAll(PDO::FETCH_ASSOC);

    try {
        $q->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }

   ?>
    </body>
</html>