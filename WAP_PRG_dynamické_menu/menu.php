<?php
$data = 0;
if (filter_input(INPUT_GET, 'p', FILTER_VALIDATE_INT)){
     $data = filter_input(INPUT_GET, 'p', FILTER_VALIDATE_INT);
}
if ($data == 1){
   file_put_contents('data.csv', $data.",", FILE_APPEND);
} 
if ($data == 2){
     file_put_contents('data2.csv', $data.",", FILE_APPEND);
}
if($data == 3){
    file_put_contents('data3.csv', $data.",", FILE_APPEND);   
}
if($data == 4){
    file_put_contents('data4.csv', $data.",", FILE_APPEND);
}
if($data == 5){
        file_put_contents('data5.csv', $data.",", FILE_APPEND);
}
if($data == 6){
    $soubor=fopen("data.csv", "w");
    $soubor=fopen("data2.csv", "w");
    $soubor=fopen("data3.csv", "w");
    $soubor=fopen("data4.csv", "w");
    $soubor=fopen("data5.csv", "w");
}
$data1 = file_get_contents('data.csv');
$data11 = explode(",", $data1);
$pocet1 = count($data11) - 1;

$data2 = file_get_contents('data2.csv');
$data22 = explode(",", $data2);
$pocet2 = count($data22) - 1;

$data3 = file_get_contents('data3.csv');
$data33 = explode(",", $data3);
$pocet3 = count($data33) - 1;

$data4 = file_get_contents('data4.csv');
$data44 = explode(",", $data4);
$pocet4 = count($data44) - 1;

$data5 = file_get_contents('data5.csv');
$data55 = explode(",", $data5);
$pocet5 = count($data55) - 1;
?>
<body style="background-color: black;">
<nav>
    <ul>
    <li style="list-style-type: none">
    <a style="padding: .5em; background: #D62960; border: 1px solid #B41F71; color: #fff; cursor: default; text-decoration: none; border-radius: 5px"href="menu.php?p=1"><?php echo "Jedna, stisknuto ".$pocet1?></a></li><br>
    <li style="list-style-type: none">
    <a style="padding: .5em; background: #D62960; border: 1px solid #B41F71; color: #fff; cursor: default; text-decoration: none; border-radius: 5px"href="menu.php?p=2"><?php echo "Dva, stisknuto ".$pocet2?></a></li><br>
    <li style="list-style-type: none">
    <a style="padding: .5em; background: #D62960; border: 1px solid #B41F71; color: #fff; cursor: default; text-decoration: none; border-radius: 5px"href="menu.php?p=3"><?php echo "Tři, stisknuto ".$pocet3?></a></li> <br>
    <li style="list-style-type: none">
    <a style="padding: .5em; background: #D62960; border: 1px solid #B41F71; color: #fff; cursor: default; text-decoration: none; border-radius: 5px"href="menu.php?p=4"><?php echo "Čtyři, stisknuto ".$pocet4?></a></li> <br>
    <li style="list-style-type: none">
    <a style="padding: .5em; background: #D62960; border: 1px solid #B41F71; color: #fff; cursor: default; text-decoration: none; border-radius: 5px"href="menu.php?p=5"><?php echo "Pět, stisknuto ".$pocet5?></a></li> <br> <br>
    <li style="list-style-type: none">
    <a style="padding: .5em; background: blue; border: 1px solid blue; color: #fff; cursor: default; text-decoration: none; font-size: 100%; border-radius: 5px"href="menu.php?p=6">Reset</a></li>
    </ul>
</nav>
</body>





