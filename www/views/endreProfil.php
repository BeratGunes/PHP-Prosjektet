<html>
        <head>
        <meta charset="utf-8">
        </head>
            <title>Endre profil</title>
        <body>

        <?php
        session_start();
        require_once "../../includes/db.inc.php";
        include "header.php";


        if(isset($_POST['Endre'])){
            
        $ID = $_SESSION['ID'];
        $Fornavn = $_POST['Fornavn'];
        $Etternavn = $_POST['Etternavn'];
        $Brukernavn = $_POST['Brukernavn'];
        $Mobilnummer = $_POST['Mobilnummer'];
        $Epost = $_POST['Epost'];
        $Passord = $_POST['Passord'];
        $Adresse = $_POST['Adresse'];
        $Postnummer = $_POST['Postnummer'];


        $sql = "UPDATE Medlem
        SET Fornavn = :Fornavn, 
        Etternavn = :Etternavn, 
        Brukernavn = :Brukernavn,
        Mobilnummer = :Mobilnummer,
        Epost = :Epost,
        Passord = :Passord,
        Adresse = :Adresse, 
        Postnummer = :Postnummer
        WHERE Medlem_ID = $ID";



        $q = $pdo->prepare($sql);



        $q->bindParam(':Fornavn' , $Fornavn , PDO::PARAM_STR);
        $q->bindParam(':Etternavn' , $Etternavn , PDO::PARAM_STR);
        $q->bindParam(':Brukernavn' , $Brukernavn , PDO::PARAM_STR);
        $q->bindParam(':Mobilnummer' , $Mobilnummer , PDO::PARAM_INT);
        $q->bindParam(':Epost' , $Epost , PDO::PARAM_STR);
        $q->bindParam(':Passord' , $Passord , PDO::PARAM_STR);
        $q->bindParam(':Adresse' , $Adresse , PDO::PARAM_STR);
        $q->bindParam(':Postnummer' , $Postnummer , PDO::PARAM_INT);

        try {
            $q->execute();
            echo "Profilen er endret!";
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";}
                }
        ?>

        <h1>Endre profil</h1>

        <form method="post" action="">

        <h4><label for="Fornavn">Fornavn</label><br></h4>
        <input type="text" id="Fornavn" name="Fornavn" placeholder="Skriv her"><br>

        <h4><label for="Etternavn">Etternavn</label><br></h4>
        <input type="text" id="Etternavn" name="Etternavn" placeholder="Skriv her"><br>

        <h4><label for="Brukernavn">Brukernavn</label><br></h4>
        <input type="text" id="Brukernavn" name="Brukernavn" placeholder="Skriv her"><br>

        <h4><label for="Mobilnummer">Mobilnummer</label><br></h4>
        <input type="text" id="Mobilnummer" name="Mobilnummer" placeholder="Skriv her"><br>

        <h4><label for="Epost">E-post</label><br></h4>
        <input type="text" id="Epost" name="Epost" placeholder="Skriv her"><br>

        <h4><label for="Passord">Passord</label><br></h4>
        <input type="password" id="Passord" name="Passord" placeholder="Skriv her"><br>

        <h4><label for="Adresse">Adresse</label><br></h4>
        <input type="text" id="Adresse" name="Adresse" placeholder="Skriv her"><br>

        <h4><label for="Postnummer">Postnummer</label><br></h4>
        <input type="text" id="Postnummer" name="Postnummer" placeholder="Skriv her"><br>

        <br><br> 
        <input type="submit" name="Endre" class="button_active" onclick="location.href='';" value="Endre"/><br>

        </form>

                </table>
            </body>
        </html>