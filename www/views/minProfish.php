<?php
include "header.php";
include "../main/minProfil.php";
session_start();
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
            <td><?php echo $_SESSION['Fornavn'] ?></td>
            <td><?php echo $_SESSION['Etternavn'];?></td>
            <td><?php echo $_SESSION['Adresse'];?></td>
            <td><?php echo $_SESSION['Postnummer'];?></td>
        </tr>

            </table>

           
     
    </body>
</html>




