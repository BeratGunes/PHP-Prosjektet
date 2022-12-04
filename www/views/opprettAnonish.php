<html>
    <body>
        <?php
        include "header.php";
        include "../main/opprettAnnonse.php";
        ?>


        <form method="post" action="">

<label for="Annonse navn">Annonse navn</label><br>
<input type="text" id="Annonse navn" name="Annonse_Navn" placeholder="Skriv her"><br>

<label for="Annonse beskrivelse">Annonse beskrivelse</label><br>
<input type="text" id="Annonse beskrivelse" name="Annonse_Beskrivelse" placeholder="Skriv her"><br>

<label for="Bolig Navnet">Bolig Navnet</label><br>
<input type="text" id="Bolig Navnet" name="Bolig_Navn" placeholder="Skriv her"><br>

<label for="Adressen">Adressen</label><br>
<input type="text" id="Adressen" name="Bolig_Adresse" placeholder="Skriv her"><br>

<label for="Byen">Byen</label><br>
<input type="text" id="Byen" name="Byen" placeholder="Skriv her"><br>

<label for="Bydel">Bydel</label><br>
<input type="text" id="Bydel" name="Bydel" placeholder="Skriv her"><br>

<label for="Pris">Pris i mnd</label><br>
<input type="text" id="Pris" name="Pris" placeholder="Skriv her"><br>

<br><br> 
<input type="submit" name="Opprett" class="button_active" onclick="location.href='';" value="Opprett"/><br>

</form>
    </body>
</html>