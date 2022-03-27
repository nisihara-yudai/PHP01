<?php
// 算術演算子
$a = 15;
$b = 5;
$c = 10;

$answer01 = $a + $b;
$answer02 = $a - $b;
$answer03 = $a * $b;
$answer04 = $a / $b;
$answer05 = $a % $c;

print $answer01 . "<br>";
print $answer02 . "<br>";
print $answer03 . "<br>";
print $answer04 . "<br>";
print $answer05 . "<br>";

// 代入演算子と複合演算子
$a = 30;
$b = 7;
$c = 10;
$d = 14;

$a = $b;
$c += $d;

print $a . "<br>";
print $c . "<br>";

// 練習問題
$a = 37;
$b = 10;

// Q1.$aが$bよりも大きい事が正しい事を証明して下さい
$c = $a > $b;
echo $c . "<br>";

// Q2.$aが10以上かつ40以下という事が正しいかを証明して下さい
$d = $a >= 10 && $a <= 40;
echo $d . "<br>";

// Q3.$aまたは$bが10という値と一致する事が正しいかどうかを証明して下さい
$e = $a === 10 || $b === 10;
echo $e . "<br>";
