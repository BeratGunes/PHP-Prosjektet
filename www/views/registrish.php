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
  <input type="text" id="Fornavn" name="Fornavn" placeholder="skriv inn fornavnet ditt" pattern="^[a-zA-Z\s]+$" required><br>

  <label for="Etternavn">Etternavn:</label><br>
  <input type="text" id="Etternavn" name="Etternavn" placeholder="skriv inn etternavnet ditt" pattern="^[a-zA-Z\s]+$" required><br>

  <label for="Brukernavn">Brukernavn:</label><br>
  <input type="text" id="Brukernavn" name="Brukernavn" placeholder="skriv inn brukernavn" pattern="^[a-zA-Z\s]+$" required> <br>

  <label for="Mobilnummer">Mobilnummer:</label><br>
  <input type="text" id="Mobilnummer" name="Mobilnummer" placeholder="skriv inn telefonnummeret ditt" pattern= "[0-9]{8}" required> <br>

  <label for="Epost">E-post:</label><br>
  <input type="text" id="Epost" name="Epost" placeholder="skriv inn e-posten din" pattern="[^@\s]+@[^@\s]+.[^@\s]+" required> <br>

  <label for="Passord">Passord:</label><br>
  <input type="password" id="Passord" name="Passord" placeholder="skriv inn passordet" required> <br>

  <label for="Adresse">Adresse:</label><br>
  <input type="text" id="Adresse" name="Adresse" placeholder="skriv inn addresse"> <br>

  <label for="Postnummer">Postnummer:</label><br>
  <input type="text" id="Postnummer" name="Postnummer" placeholder="skriv inn postnummer" pattern= "[0-9]{4}"> <br>
  
  <br><br> 
  <input type="submit" name="Registrer" class="button_active" onclick="location.href='';" value="Registrer"/><br>

</form>
 
    </body>
</html>