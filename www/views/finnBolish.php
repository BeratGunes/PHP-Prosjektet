<html>
<title>Finn bolig</title>
<body>
<?php
include "header.php";
include "../main/finnBolig.php";
?>
<table border='1'>
<tr>
    <th>Bolig Navn</th>
    <th>Bydel</th>
</tr>

<h1> Finn Bolig </h1><br>
<form action="#" method="post">
 <h3>Søk etter bolig:</h3><left><input type="text" name="search"><br>
     <input type="submit" name="submit" value="Søk">

</form>

<?php
$rows = '';
if (isset($_POST["submit"])) {

  $search = $_POST['search'];

  $spørring = $pdo->prepare("SELECT * FROM Bolig WHERE Bolig_Navn LIKE '%$search%' OR Bydel LIKE '%$search%'");

  $spørring->execute();

  $boliger= $spørring->fetchAll(PDO::FETCH_ASSOC);

  $rows = $spørring->rowCount();

try {
  $spørring->execute();
} catch (PDOException $e) {
  echo $e->getMessage() . "<br>";
}
if($rows !=0) 
{
foreach($boliger as $r){
    echo "<tr>";
    echo "<td>".$r['Bolig_Navn']."</td>";
    echo "<td>".$r['Bydel']."</td>";
    echo "</tr>";
    }
  }
}
?>
</table>
</body>
</html>