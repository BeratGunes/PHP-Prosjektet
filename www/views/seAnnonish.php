<html>
    <title>SE ANNONSE</title>
    <body>
         <?php
        include "header.php";
        include "../main/seAnnonser.php";
        ?>

    <table border='1'>
        <tr>
            <th>Annonse Navn</th>
            <th>Beskrivelse</th>
        </tr>
        <h1>SE ANNONSER</h1>       

<?php
foreach ($annonser as $annonsish){
    echo "<tr>";
    echo "<td>". $annonsish['Annonse_Navn']."</td>";
    echo "<td>". $annonsish['Annonse_Beskrivelse']."</td>";

    echo "</tr>";
}
?>
       
    </table>
    </body>
</html>