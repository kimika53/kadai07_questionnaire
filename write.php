<?php
//入力画面から取得・登録・処理
$date = $_POST["date"];
$occasion = $_POST["occasion"];
$staffScore = $_POST["staffScore"];
$foodScore = $_POST["foodScore"];
$storeScore = $_POST["storeScore"];
$suggestion = $_POST["suggestion"];
$c = ",";
$str = $date. $c. $occasion. $c. $staffScore. $c. $foodScore. $c. $storeScore. $c. $suggestion;

$file = fopen("data.csv","a"); //どのファイルで何をする
fwrite($file, $str."\n"); //どこで何を書く -> 

fclose($file); //fopen・fwrite・fcloseセットで書く

header("Location: index.php"); //処理が終ったらindex.phpに戻す
exit;

?>