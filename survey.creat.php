<?php
// var_dump($_POST);
// exit();


$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$been = $_POST["been"];
$day = $_POST["day"];
$reason = $_POST["reason"];
$play = $_POST["play"];
$con = $_POST["con"];
$will = $_POST["will"];



$ary = array(
    array($name, $email, $age, $been, $day,$reason, $play, $con, $will)
);
// ファイルを書き込み用に開きます。
$handle = fopen("data/survey.text.csv", "a");
flock($handle, LOCK_EX);
// 正常にファイルを開くことができていれば、書き込みます。
if ($handle) {
    // $ary から順番に配列を呼び出して書き込みます。
    foreach ($ary as $line) {
        // fputcsv関数でファイルに書き込みます。
        fputcsv($handle, $line);
    }
}
flock($handle, LOCK_UN);
fclose($handle);

// $write_data ="{$name}{$email}{$age}{$been}{$day}{$reason}{$play}{$con}{$will}\n";

// $handle = fopen("data/survey.text.csv", "a");
// flock($handle,LOCK_EX);
// fwrite($handle,$write_data);
// flock($handle,LOCK_UN);
// fclose($handle);



header("Location:survey.input.php");
