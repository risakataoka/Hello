<?php echo "hello world!" ;
//1/7課題分
//$a　という変数に3を、$b　という変数に７を代入して、echoを使って$a+$bの結果を表示してみましょう。
$a = 3;
$b = 7;
echo $a + $b;
//$array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];
//$hello　という変数に　”Hello, “を $name という変数にあなたの名前を、　
//$world という変数に　”‘s World!” を代入して、各変数を連結させて “Hello, あなたの名前’s World!” と表示してみましょう。
$hello = "HELLO, ";
$name =  "risakataoka";
$world =  "'s World!";
echo $hello . $name . $world;
//$tech_boostに “tech “という文字列が代入されています。複合演算を使って、echo $tech_boostと実行すると「tech boost」と表示されるように実装してみましょう。
$teck_boost = "tech ";
$teck_boost .= "boost";
echo $teck_boost;
//【応用】次のプログラムにはバグがあります。どこにバグが有るか調べて修正してみましょう。(バグは一つとは限りません。)
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
// 12月を表示する
echo $calendar_2018[December];

//1/8課題分
/*$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください。*/
$name = "risakataoka";
if ($name == "risakataoka") {
  echo "私は risakataoka です";
} else {
  echo "あなたの名前ではありません";
}
//for文を使って、1から10000までの合計の値を表示してください。
$total = 0;
for($i = 0; $i <= 10000; $i++){
  $total +=$i;
}
echo $total;
//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("apple","banana","orange","mango","greap");
foreach ($fruits as $fruit) {
  echo "好きなフルーツは" . $fruit;
  echo "\n";
}
//【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
//for文の始めの値を定義する /
$start = 0;
// for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}







?>
