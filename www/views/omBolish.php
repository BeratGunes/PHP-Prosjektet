<?php
include "header.php";
include "../main/omBolig.php";
?>
<html>
    <head>  
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Min bolig</h1>
            <table border='1'>
        <tr>
            <th>Bolig Navn</th>
            <th>Bolig Adresse</th>
            <th>Pris i mnd</th>
            <th>Bydel</th>
        </tr>

        <tr>
            <td><?php echo $annonse['Bolig_Navn']; ?></td>
            <td><?php echo $annonse['Bolig_Adresse'];?></td>
            <td><?php echo $annonse['Pris'];?></td>
            <td><?php echo $annonse ['Bydel'];?></td>
          
        </tr>

            </table>
    </body>
</html>




