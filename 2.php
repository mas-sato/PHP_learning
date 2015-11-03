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


?>