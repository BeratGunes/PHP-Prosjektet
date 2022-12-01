<html>
    <head>
    <link rel="stylesheet" href="registrerUtseende.css">
    </head>
    <body>
        <?php
        include "../main/registrer.php";
        ?>

<form method="post" action="">
  
  <label for="Fornavn">Fornavn</label><br>
  <input type="text" id="Fornavn" name="Fornavn" placeholder="skriv inn fornavnet ditt"><br>

  <label for="Etternavn">Etternavn:</label><br>
  <input type="text" id="Etternavn" name="Etternavn" placeholder="skriv inn etternavnet ditt"><br>

  <label for="Brukernavn">Brukernavn:</label><br>
  <input type="text" id="Brukernavn" name="Brukernavn" placeholder="skriv inn brukernavn"> <br>

  <label for="Mobilnummer">Mobilnummer:</label><br>
  <input type="text" id="Mobilnummer" name="Mobilnummer" placeholder="skriv inn telefonnummeret ditt"> <br>

  <label for="Epost">E-post:</label><br>
  <input type="text" id="Epost" name="Epost" placeholder="skriv inn e-posten din"> <br>

  <label for="Passord">Passord:</label><br>
  <input type="password" id="Passord" name="Passord" placeholder="skriv inn passordet"> <br>

  <label for="Adresse">Adresse:</label><br>
  <input type="text" id="Adresse" name="Adresse" placeholder="skriv inn addresse"> <br>

  <label for="Postnummer">Postnummer:</label><br>
  <input type="text" id="Postnummer" name="Postnummer" placeholder="skriv inn postnummer"> <br>
  
  <br><br> 
  <input type="submit" name="Registrer" class="button_active" onclick="location.href='';" value="Registrer"/><br>

</form>
 
    </body>
</html>