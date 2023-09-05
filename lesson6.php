<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表が縦横に伸びてもある程度対応できるように柔軟な作りを目指してください。
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */

$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
}
th, td {
    border:1px solid #000;
}
</style>
</head>
<body>
<table>
        <tr>
            <th></th>
            <th>c1</th>
            <th>c2</th>
            <th>c3</th>
            <th>横合計</th>
        </tr>
        <?php
        $z = 0; //横合計の縦合計
        for ($i = 1; $i <= count($arr); $i++) {
            $l = 0; //横合計
            echo "<tr>";
            echo "<td>r{$i}</td>";
            for ($j = 1; $j <= 3; $j++) {
                $k = $arr['r'.$i]['c'.$j];
                echo "<td>{$k}</td>";
                $l += $k;
            }
            $z += $l;
            echo "<td>{$l}</td>";
            echo "</tr>";
        }
        echo "<th>縦合計</th>";
        for ($i = 1; $i <= 3; $i++) {
            $m = 0; //縦合計
            for ($p = 1; $p <=3; $p++) {
                    $g = $arr['r'.$p]['c'.$i];
                    $m += $g;
            }
            echo "<th>{$m}</th>";
        }
        echo "<th>{$z}</th>";
        ?>
</table>
</body>
</html>