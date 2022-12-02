<?php
include "header.php";
include "../main/omBolig.php";
?>
<html>
    <head>  
        <meta charset="utf-8">
    </head>
    <body>
        <h1>OM BOLIG</h1>
            <table border='1'>
        <tr>
            <th>Bolig Navn</th>
            <th>Bolig Adresse</th>
            <th>Annonse Navn</th>
            <th>Annonse Beskrivelse</th>
        </tr>

        <tr>
            <td><?php echo $annonse['Bolig_Navn']; ?></td>
            <td><?php echo $annonse['Bolig_Adresse'];?></td>
            <td><?php echo $annonse['Annonse_Navn'];?></td>
            <td><?php echo $annonse['Annonse_Beskrivelse'];?></td>
        </tr>

            </table>
    </body>
</html>




