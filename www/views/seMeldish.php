<html>
    <body>
        <?php
        include "header.php";
        include "../main/seMeldinger.php";
        foreach ($Meldinger as $melding ) {

        

        ?>
    <table border= '1'>

<tr>
<th>Brukernavn</th>
<th>Meldingen</th>
</tr>

<tr>
<td><?php echo $melding["Brukernavn"]?>;</td>
<td><?php echo $melding["Melding_Beskrivelse"]?>;</td>
</tr>

</table>
<?php
        }
?>
    </body>
</html>