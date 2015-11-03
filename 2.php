<?php
$n = rand(1,5);
echo "好き嫌い占い：";
if ($n==1) {
	echo "好き";
}elseif($n==2){
	echo "少し好き";
}elseif($n==3){
	echo "どちらとも言えない";
}elseif($n==4){
	echo "少し嫌い";
}else {
	echo "嫌い";
}
echo "\n \n \n";

echo "午前午後判別：";
$hour = rand(0,24);
echo $hour."時は";
if ($hour<12) {
	echo "午前";
}elseif($hour==12) {
	echo "正午";
}elseif($hour>12) {
	echo "午後";
}
echo "\n \n \n";

echo "おみくじ：";
$omikuji = rand(1,10);
//$echo $omikuji;
if($omikuji==1){
	echo "大吉";
}elseif($omikuji==2) {
	echo "中吉";
}elseif ($omikuji<=4) {//3,4
	echo "小吉";
}elseif ($omikuji<=7) {//5,6,7
	echo "凶";
}else {//8,9,10
	echo "大凶";
}
echo "\n \n \n";


echo "西暦→平成：\n";
$year = rand(1989,2015);
echo "西暦".$year."年は";
$hesei = $year - 1988;
if($year==1989) {
	echo "平成元年です";
}else {
	echo "平成".$hesei."年です";
}
echo "\n \n \n";

?>