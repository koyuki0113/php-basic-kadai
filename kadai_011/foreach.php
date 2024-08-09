<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎11章課題</title>
</head>
<body>
    <p>
    <?php
    $array = [
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道",
    ];

    foreach($array as $key => $value){
        echo "{$key} : {$value}<br>";
    }
    ?>
    </p>
</body>
</html>