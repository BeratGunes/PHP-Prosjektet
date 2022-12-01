<html>
    <body>
        <?php
        include "header.php";
        include "../main/opprettAnnonse.php";
        ?>


        <form method="post" action="">

<label for="Annonse navn">Annonse navn</label><br>
<input type="text" id="Annonse navn" name="Annonse_Navn" placeholder="Skriv her"><br>

<label for="Annonse beskrivelse">Annonse beskrivelse:</label><br>
<input type="text" id="Annonse beskrivelse" name="Annonse_Beskrivelse" placeholder="Skriv her"><br>

<br><br> 
<input type="submit" name="Opprett" class="button_active" onclick="location.href='';" value="Opprett"/><br>

</form>
    </body>
</html>