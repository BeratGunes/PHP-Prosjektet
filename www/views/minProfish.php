<?php
include "header.php";
include "../main/minProfil.php";
?>
<html>
    <head>  
        <meta charset="utf-8">
    </head>
    <body>
        <h1>MIN PROFIL</h1>
            <table border='1'>
        <tr>
            <th>Fornavn</th>
            <th>Etternavn</th>
            <th>Adresse</th>
            <th>Postnummer</th>
        </tr>

        <tr>
            <td><?php echo $medlem['Fornavn']; ?></td>
            <td><?php echo $medlem['Etternavn'];?></td>
            <td><?php echo $medlem['Adresse'];?></td>
            <td><?php echo $medlem['Postnummer'];?></td>
        </tr>

            </table>
    </body>
</html>




