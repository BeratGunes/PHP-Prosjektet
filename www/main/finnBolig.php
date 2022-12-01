<html>
  <head>
    <meta charset="utf-8">
  </head>
<title>FINN BOLIG</title>
<body>

<form action="#" method="post">
  SØK <input type="text" name="search"><br>
      <input type="submit" name="submit" value="Søk">
</form>

<?php
include ("../views/header.php");
require_once "../../includes/db.inc.php";


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
    echo "<table border ='1'>";
    echo "<tr>";
    echo "<th>Bolig Navn</th>";
    echo "<th>Bydel</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$r['Bolig_Navn']."</td>";
    echo "<td>".$r['Bydel']."</td>";
    echo "</tr>";
    echo "</table>";
    }
  }
}
?>


</body>
</html>