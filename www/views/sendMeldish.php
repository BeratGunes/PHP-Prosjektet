<html>
    <title>SEND MELDING</title>
    <body>
        <?php
        include "header.php";
        include "../main/sendMelding.php";
        ?>
        <form method="post" action="">
            <h1>SEND MELDINGER</h1>
            <label for="medlem">Send til</label>
            <input type="number" id="medlem" name="Medlem_ID" placeholder="Send til"><br>
            <label for= "melding">Send melding</label><br>
            <input type="text" id= "melding" name="Melding_Beskrivelse" placeholder="send melding"><br>
            <input type="submit"  name="send" value="Send">
        </form>
    </body>
</html>