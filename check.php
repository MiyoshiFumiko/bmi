<?php

$height = $_POST['height'];

$weight = $_POST['weight'];

$height2 = $height * $height;
$bmi = $weight / $height2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>あなたのBMIは、 <?php echo $bmi; ?></p>
    <p>あなたは、<?php 
    if ($bmi < 18.5) {
        echo '低体重';
    } elseif (18.5 <= $bmi && $bmi < 25) {
        echo '普通';
    } else {
        echo '肥満';
    }
    
    ?>です</p>
    

    <form action="">
        <button type="button" onclick="history.back()">戻る</button>
    </form>
</body>
</html>