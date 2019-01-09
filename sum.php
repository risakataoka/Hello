<?php
//1/8課題分
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function sum(){
  $result = 0;
  for($i = 1; $i<=10; $i++){
    $result +=$i*2 ;
  }
  return $result;
}
echo sum();
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b){
  $sum = $a + $b;
  return $sum;
}
$result = f(100, 200);
echo $result;


//ここに課題3が入る↓↓




//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。
//途中の部分を完成させてください。
$arr = array(1,3,5,7,9);
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
if($max_number < $a){
  $max_number = $a;
}
 }
 return $max_number;
 }
echo max_array($arr);

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags→htmlやphpタグを取り除く
$strip_tags = "<h1>h1タグ</h1>";
echo strip_tags($strip_tags);
//array_push→配列に要素を追加する
$fruits = ["apple","orange"];
array_push($fruits,"banana","greap");
print_r($fruits);
//array_merge→配列を結合する
$team1 = ["person1","person2"];
$team3 = ["person3","person4"];
$team2 = ["person5","person6"];
$team4 = ["person7","person10"];
$team_merge = array_merge($team1,$team3,$team2,$team4);
print_r($team_merge);
//time, mktime
//現在のタイムスタンプ
echo "現在のタイムスタンプ　" .time();
//指定した日時のタイムスタンプ
//int mktime( [ int hour [, int minute [, int second [, int month [, int day [, int year [, int is_dst ]]]]]]] )
$mktime = mktime(23, 0, 0, 1, 8, 2019);
echo "今日の23時のタイムスタンプ　" .$mktime;
//date→日付や時刻を書式化する
$timestamp = time();
echo date("Y/m/d" ,$timestamp);
?>
