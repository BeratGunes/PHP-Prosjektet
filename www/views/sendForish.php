<html>
    <head>
        <meta charset="utf-8">
    </head>
    <title>Send forespørsel</title>
    <body>
    <?php
        include "header.php";
        include "../main/sendForespørsel.php";
        ?>
        <form method="post" action="">
            <h1>SEND FORESPØRSEL</h1>
            <label for= "Hvilken annonse">Hvilken annonse?</label><br>
            <input type="number" id= "Hvilken annonse" name="Annonse_ID" placeholder="send melding"><br>
            <input type="submit"  name="send" value="Send">
        </form>
    </body>
</html>