<?php

$name = $_POST["name"];
$kana = $_POST["kana"];
$mail = $_POST["mail"];
$birthday = $_POST["birthday"];
$type = $_POST["types"];
$techo = $_POST["techo"];
$info = $_POST["info"];
$zipcode = $_POST["zipcode"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$address3 = $_POST["address3"];

$data = $name . "," . $kana . "," . $mail .  "," . $birthday . "," . $type. "," .  $techo. "," .  $info. "," . $zipcode. "," . $address1. "," . $address2. "," . $address3 . "\n";

$file_path = "data/data.csv";
file_put_contents($file_path, $data, FILE_APPEND);

?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.csv を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
