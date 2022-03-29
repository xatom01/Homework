<!DOCTYPE html>
<html lang="cs-cz">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>Transpoziční mřížka</title>
</head>

<body>
    <h1>Transpoziční šifrování</h1>

    <form method="post">
        Zadej slovo (větu) k šifrování:<br>
        <input type="text" name="veta" maxlength="20" />(Maximálně 20 znaků.)<br>
        <input type="submit" value="Odeslat" />
    </form>
    <?php
    $text = $_POST["veta"]; // Načtení řetězce z html.
    $text = iconv('UTF-8', 'ASCII//TRANSLIT', $text); // Konverze řetězce do podoby bez háčků a čárek. Některé znaky se nahradí znakem ", ', ^.
    $text = str_replace('"', " ",  $text); // Znak " nahradíme mezerou.
    $text = str_replace("'", " ",  $text); // Znak ' nahradíme mezerou.
    $text = str_replace("^", " ",  $text); // Znak ^ nahradíme mezerou.
    $text = str_replace(" ", "",  $text); // Mezery v celém řetězci odstraníme.
    $text = strtoupper(trim($text)); // Všechna písmena v řetězci změníme na velká.
    $pocet_pismen = strlen($text); // Vypočítáme počet písmen, které se nám nachází v řetězci.
    $vypocet = 36 - $pocet_pismen; // V jedné tabulce můžeme mít maximálně 20 písmen. Vypočítáme, kolik písmen nám chybí a kolik jich potřebujeme doplnit.
    echo ($text); // Vypíšeme celý upravený text.
    $pole = array(); //Vytvoříme si pole číslo 1.
    $pole2 = array(); // Vytvoříme si pole číslo 2.
    //Pole naplníme náhodnými znaky.

    for ($x = 0; $x < 36; $x++) {
        $cislo = rand(65, 90); //Vybereme náhodné číslo v ASCII kódu.
        $pismeno = chr($cislo); //ASCII kód převedeme na písmeno.
        $pole[$x] = $pismeno; // Písmena uložíme do pole.
    } 
    //Do pole uložíme písmena z hesla, které chceme zašifrovat.

    for ($y = 0; $y < $pocet_pismen; $y++) {
        $nahodne_cislo = rand(0, 36); // Vygenerujeme náhodné číslo od 0 do 36.
        $pole[$nahodne_cislo] = substr($text, $y, 1); // Do pole vložíme na náhodně vygenerovanou pozici písmeno, které jsme zadali na vstupu.
        $pole2[$y] = $nahodne_cislo; // Do pole číslo 2 si vložíme náhodné číslo, které se pomocí funkce random vygenerovalo.
        var_dump($nahodne_cislo); // Náhodná čísla si zobrazíme. Podle nich nalezeneme písmenka v mřížce.
    }
    //Vypíšeme si tabulku se znaky.
    echo ('<table border="1">');
    echo ('<tr>');
    echo ('<td>' . htmlspecialchars($pole[0]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[1]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[2]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[3]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[4]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[5]) . '</td>');
    echo ('</tr>');
    echo ('<tr>');
    echo ('<td>' . htmlspecialchars($pole[6]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[7]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[8]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[9]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[10]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[11]) . '</td>');
    echo ('</tr>');
    echo ('<tr>');
    echo ('<td>' . htmlspecialchars($pole[12]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[13]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[14]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[15]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[16]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[17]) . '</td>');
    echo ('</tr>');
    echo ('<tr>');
    echo ('<td>' . htmlspecialchars($pole[18]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[19]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[20]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[21]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[22]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[23]) . '</td>');
    echo ('</tr>');
    echo ('<tr>');
    echo ('<td>' . htmlspecialchars($pole[24]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[25]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[26]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[27]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[28]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[29]) . '</td>');
    echo ('</tr>');
    echo ('<tr>');
    echo ('<td>' . htmlspecialchars($pole[30]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[31]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[32]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[33]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[34]) . '</td>');
    echo ('<td>' . htmlspecialchars($pole[35]) . '</td>');
    echo ('</tr>');
    echo ('</table>');
    ?>
</body>