<?php
// 変数
$language = "JavaScript"; //変数「language」は「JavaScript」を定義している
$language = "PHP"; //変数「language」は「PHP」を定義している
print $language . "<br>"; //変数「language」を出力する

// 定数
define("language","PHP"); //define()で、(定数名,値)を定義している
print language . "<br>";

const language = "PHP"; //const 定数名 = "値"で定義している
// const language = "JavaScript"; //定数の値は、書き換えが出来ないので、この文章を読めるようにしても、次の行は、前の定数の値が入る
print language . "<br>";
// print language . "<br>";

// 連結演算子
$name01 = "Yamashita" . "Kiyoshi";
$name02 = "Kozono";
$first_name = "Matsuyama";
$last_name = "Ryuhei";

print $name01 . "<br>";
print $name02 . "Kaito" . "<br>";
print $first_name . $last_name . "<br>";