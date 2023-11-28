<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // ソート対象の配列
    $numbers = array(15, 4, 18, 23, 10);

    // 昇順と降順の両方を表示する
    for ($i = 0; $i < 2; $i++) {
    // 昇順または降順の選択（$iが0なら昇順、1なら降順）
    $ascendingOrder = ($i == 0);

    // ソート
    if ($ascendingOrder) {
        $sortedNumbers = $numbers;
        sort($sortedNumbers); // 昇順
        $sortType = "昇順に";
    } else {
        $sortedNumbers = $numbers;
        rsort($sortedNumbers); // 降順
        $sortType = "降順に";
    }

    // ソート後の配列を表示
    echo $sortType . "ソートします。 <br>";
    foreach ($sortedNumbers as $number) {
        echo $number . '<br>';
    }

    echo "<br>";
}
?>
</p>

  
</body>

</html>





