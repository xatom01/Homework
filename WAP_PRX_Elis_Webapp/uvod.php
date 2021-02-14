<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Úvod</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="splash">
    <header>
        <nav>
            <ul>
                <li><a class="uvod" href="uvod.php">Úvod</a></li>
                <li><a href="projekt.html">Projekt</a></li>
                <li><a href="galerie.html">Galerie</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
                <li><a href="novinky.html">Novinky</a></li>
                <li><a href="https://github.com/bubilem/elis">Git</a></li>
                <li><a href="">ELIS</a></li>
                <div class="animace"></div>
            </ul>

        </nav>
    </header>
    <main>
        <?php
        date_default_timezone_set('Europe/Prague');
        if ((date("H") >= 4) && (date("H") <= 8)) echo "<h3>Dobré ráno!</h3>";
        elseif ((date("H") >= 9) && (date("H") <= 11)) echo "<h3>Dobré dopoledne!</h3>";
        elseif ((date("H") >= 12) && (date("H") <= 17)) echo "<h3>Dobré odpoledne!</h3>";
        elseif ((date("H") >= 18) && (date("H") <= 23)) echo "<h3>Dobrý večer!</h3>";
        else echo "<h2>Dobrý den!</h2>";
        ?>
        <h1>Vítejte na stránce projektu ERASMUS+</h1>
        <h2>European Logistic Information System <br> (ELIS)</h2>
    </main>
</body>
<footer>
    <nav class="menu2">
        <ul>
            <li>©ELIS 2021</li>
            <li><a href="https://www.naerasmusplus.cz/"><img src="erasmus+.png" alt="Erasmus+"></a></li>
            <li><a href="http://www.skolavdf.cz/"><img src="logo_krouzky.png" alt="VOŠ,SPŠaSOŠVarnsdorf"></a></li>
            <li><a href=""><img src="fb.png" alt="Facebook"></a></li>
            <li><a href=""><img src="instagram.png" alt="Instagram"></a></li>
        </ul>
    </nav>

</footer>

</html>