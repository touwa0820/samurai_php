<?php

function hello($str){
    print($str);
}

hello("Hello PHP!!\n");


#引数に初期値を設定する
function hello1($a = 21){
    print($a);
}

hello1();
hello1("Hello\n");

#戻り値
function add($a,$b){
    return $a + $b;

}

$num = add(2,3);
print($num)
?>