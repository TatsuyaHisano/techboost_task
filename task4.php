
<?php
// 課題1
// 1〜$max までを足して結果を返す関数
function sum($max) {
    $result = 0;
    
    // $i は1から始まり、$max より大きくなるまでループする
    for($i = 1; $i <= $max; $i++ ){
        $result += $i *2;
    }
    
    return $result;
}

//関数を実行
echo sum(10) . PHP_EOL;


// 課題 2
function f($a, $b){
    //$a と $b を足した結果を返す
    echo $a + $b . PHP_EOL;
}

f(10,5);

// 課題3
$array = array(1, 3, 5, 7, 9);{
echo array_product($array) . PHP_EOL;
}


// 課題4
function max_array($arr){
// とりあえず配列の一番最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($a > $max_number) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(5,10,3,4,20)) . PHP_EOL;

//課題5
// ・strip_tags
$str = '<p>取り除く</p>';
echo strip_tags($str) . PHP_EOL;

// ・array_push
$number = ['1', '2', '10', '5'];
array_push($number, '99', '15');
print_r($number) . PHP_EOL;

// ・array-merge
$array1 = ['name' => 'hisano', 'age' => '34',];
$array2 = ['sex' => '男', 'favorite' => '読書'];
var_dump(array_merge($array1, $array2)) . PHP_EOL;

// ・time,mktime,date
echo date('y/m/d' , time()) . PHP_EOL;
$time = mktime(9, 10, 0, 3, 20, 2021);
echo date('y/m/d/ H:i:s' , $time) . PHP_EOL;

?>

