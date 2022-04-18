<?php
//Připojení do databáze.
$connection = mysqli_connect("localhost", "root", "", "autor");
mysqli_set_charset($connection, "utf8mb4");
$query = "SELECT * FROM autor"; //Vybereme všechna data z tabulky autor.
$result = mysqli_query($connection, $query); //Výsledek dotazu uložíme do proměnné result.
if (!$result) {
  die("Dotaz do databáze selhal;-(");
}
?>
<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8" />
  <title>Autoři</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="CSS/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php
  //Výpis z databáze.
  echo ('<h2>Autoři</h2><table border="2">');
  foreach ($result as $u) {
    echo ('</td><td>' . htmlspecialchars($u['jmeno']));
    echo ('</td><td>' . htmlspecialchars($u['prijmeni']));
    echo ('</td></tr>');
  }
  echo ('</table>');
  ?>
  <br><input type=button onclick="history.back()" value="Úvodní strana">
</body>