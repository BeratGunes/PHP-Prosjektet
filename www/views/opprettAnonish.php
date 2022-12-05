<html>
    <body>
        <?php
        include "header.php";
        include "../main/opprettAnnonse.php";
        ?>


        <form method="post" action="">

<h4><label for="Annonse navn">Annonse navn</label><br></h4>
<input type="text" id="Annonse navn" name="Annonse_Navn" placeholder="Skriv her"><br>

<h4><label for="Annonse beskrivelse">Annonse beskrivelse</label><br></h4>
<input type="text" id="Annonse beskrivelse" name="Annonse_Beskrivelse" placeholder="Skriv her"><br>

<h4><label for="Bolig Navnet">Bolig Navnet</label><br></h4>
<input type="text" id="Bolig Navnet" name="Bolig_Navn" placeholder="Skriv her"><br>

<h4><label for="Adressen">Adressen</label><br></h4>
<input type="text" id="Adressen" name="Bolig_Adresse" placeholder="Skriv her"><br>

<h4><label for="Byen">Byen</label><br></h4>
<input type="text" id="Byen" name="Byen" placeholder="Skriv her"><br>

<h4><label for="Bydel">Bydel</label><br></h4>
<input type="text" id="Bydel" name="Bydel" placeholder="Skriv her"><br>

<h4><label for="Pris">Pris i mnd</label><br></h4>
<input type="text" id="Pris" name="Pris" placeholder="Skriv her"><br>

<br><br> 
<input type="submit" name="Opprett" class="button_active" onclick="location.href='';" value="Opprett"/><br>

</form>
    </body>
</html>