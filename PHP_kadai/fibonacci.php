<?php
// フィボナッチ数列の配列を返す関数
function fibonacci($n) {
    $fib = array(0, 1);//配列の初期化
   //前の二つの値を合計して$fibに格納するループ
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }
    return $fib;
}

// foreach()とechoで$valueを出力し、ifで10000を超える数を検出したらループを抜ける
$fibonacci = fibonacci(30);
foreach ($fibonacci as $value) {
    echo $value . "\n";
    if ($value > 10000) {
        break;
    }
}