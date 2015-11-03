<?php
//コメントアウト
/*コメントアウト
複数行*/
$output1 = "hello";
$output2 = "world";
echo $output1 ." ". $output2 ."\n \n";


$rand_num = rand(1,6);
echo "さいころの値は".$rand_num."です。\n \n";

echo "値段計算→\n";
$apple = 350;
$apple_num = rand(1,10);
echo "りんごの値段：".$apple."円\n";
echo "リンゴを買う数：".$apple_num."個\n";
$total = $apple * $apple_num;
echo "合計".$total."円です。\n \n";

?>
