<?php
// if文の条件分岐
$a = 4;

if($a < 4){
  print '$aは4より小さいです . <br>';
}else if($a === 4){
  print '$aは4です . <br>';
}else{
  print '$aは4以上です . <br>';
}

// switch文の条件分岐
$language = "PHP";

switch($language){
  case 'JavaScript';
    print '選んだ言語は、JavaScriptです . <br>';
    break;
  
  case 'HTML/CSS';
    print '選んだ言語は、HTML/CSSです . <br>';
    break;

  case 'PHP';
    print '選んだ言語は、PHPです . <br>';
    break;
}

// 三項演算子の条件分岐
$number === 10;

// $answer = ($number >= 5) ? "$numberは5以上です" . "<br>":"$numberは5以下です" . "<br>"; //画面に現れなかった

$answer = ($number > 5)?"TRUE.<br>":"FALSE.<br>"; //間違った答えが表示された $numberは10なので、5以上なのに、5以下の表示がされた

echo $answer;