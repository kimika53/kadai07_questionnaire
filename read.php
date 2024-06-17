<?php
// $data = file_get_contents('data.csv');
// echo nl2br($data);

// $fp = fopen('data.csv', 'r');
// $txt = fgets($fp);
// echo ($txt); 
// fclose($fp);

$lines = file('data.csv');
foreach ($lines as $line) {
    //表示方法1
    // echo $line."<br>";
    //表示方法2
    $array = explode(",",$line);
    echo(var_dump($array). "<br>");
    //表示方法3
    // $array = explode(",",$line);
    // print_r($array);
}
?>