<head>
    <title>Grafy</title>
</head>

<body>
    <form method="GET">
        <h1><span style="color: black;">Zadej hodnoty:</span><br></h1>
        <input type="text" name="data" size="40">
        <input type="submit" value="Odeslat"></p>
        <tvary class="scc"></tvary>
    </form>
    
    <?php
    $data = filter_input(INPUT_GET, "data");
    $pole = explode(",", $data);
    $pole2;
    $max = max($pole);
    $pocet = 100;

        foreach ($pole as $val){
            $pole2 = $pocet * ($val / $max);
            for ($k = 0; $k < $pole2; $k ++){
            echo "*";
            }
            echo "</p>\n";
           
        }
    ?>
    <h2>Zadané hodnoty: <?php echo $data ?> <br></h2>
</body>