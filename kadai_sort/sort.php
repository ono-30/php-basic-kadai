<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {

            if ($order) {
                echo '昇順にソートします。<br>';
                sort($array);
            }

            else {
                echo '降順にソートします。<br>';
                rsort($array);
            }

            foreach ($array as $num) {
                echo "" . $num . "\n<br>";
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順を出力
        sort_2way($nums, TRUE);

        // 降順を出力
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>