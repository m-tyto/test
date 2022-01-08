<?php
//線形探索
function search(){
    //配列を決める
    $array = [2,3,1,5,4,6,7,9,8,0];
    $array_count = count($array);
    //自分が探す数字を決める
    $search_number = 10;

    //配列をループし
    for ($i = 0; $i < $array_count; $i++){
        //配列に該当の数字があれば、出力
        if($array[$i] == $search_number){
            echo $search_number."は配列の".$i."番目にあります";
            return;
        }
    }
    echo "該当の数字はありませんでした";
}

//ユークリッドの互除法
function gcd($x, $y){
    if($x < $y){
        $tmp = $x;
        $x = $y;
        $y = $tmp;
    }
    while($y != 0 ){
        $tmp = $y;
        $y = $x % $y;
        $x = $tmp;
    }
    
    echo "最大公約数は".$x."です";
}

//バブルソート
function bubble_sort(){
    $array = [3,7,9,6,8,4,1,2,5];
    $array_count = count($array);
    // 要素数回繰り返し
    for($i = 0; $i < count($array); $i++){
        // 要素数-1回繰り返し
        for($n = 1; $n < count($array); $n++){
            // 隣接要素を比較し大小が逆なら入替える
            if($array[$n-1] > $array[$n]){
                $temp = $array[$n];
                $array[$n] = $array[$n-1];
                $array[$n-1] = $temp;
                //var_dump($array);
            }
        }
    }
    var_dump($array);
}

//線形探索呼び出し
search();
echo PHP_EOL;
//ユークリッドの数字はここで変えてください
gcd(40, 4);
echo PHP_EOL;
//バブルソート呼び出し
bubble_sort();

?>