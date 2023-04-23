
<?php
function calend($month)
{
$year=date("Y");//год
$daysarray=array("","Пн","Вт","Ср","Чт","Пт","Сб","Вс");
$months =array("1"=>"Январь","2"=>"Февраль","3"=>"Март","4"=>"Апрель","5"=>"Май", "6"=>"Июнь","7"=>"Июль","8"=>"Август","9"=>"Сентябрь","10"=>"Октябрь","11"=>"Ноябрь","12"=>"Декабрь");
$numberfirstday =date("w",mktime(0,0,0, $month,1,date("Y")));//вычесление номера дня недели для первого дня месяца
$days_month = date('t', mktime(0, 0, 0, $month, 1, $year));//кол-во дней в месяце

$dayofmonth=date("j");//день месяца
$monthlz=date("n");//номер месяца без 0
//echo "<font color=red><b>".$months[$month]."(".$year.")</b></font>";
echo "<table width=\"200\" border=\"8\" bordercolor=\"white\" cellspacing=\"0\" cellpadding=\"5\" align=\"left\" >\n\t<tr>\n";//
echo "<caption>".$months[$month]."(".$year.")</caption>";
for ($i = 1; $i <= 7; $i++) {
if($i>5){
echo "\t\t<td><font color=\"#E4723A\">".$daysarray[$i]."</font></td>\n";
}else{
echo "\t\t<td>".$daysarray[$i]."</td>\n";
}
}
echo "\t</tr>\n\t<tr>\n";
$j = 1;
while ($j < $numberfirstday) {
echo "\t\t<td>&nbsp;</td>\n";
$j++;
}
for ($i = 1; $i <= $days_month; $i++) {
if($i==$dayofmonth && $month==$monthlz){
echo "\t\t<td bgcolor=\"#FF8040\"align=\"center\"><b>".$i."</b></td>\n";
}else{
echo "\t\t<td align=\"center\">".$i."</td>\n";
}
if (round($j/7)-$j/7==0){
echo "\t</tr>\n\t<tr>\n";
}
$j++;
}
echo "\t</tr>\n</table>\n";
}
?>
<html>
<head>
<title>Календарь</title>
</head>
<body>
<?php

for ($i = 1; $i <= 12; $i++) {
	calend($i);
}
	
?>

</body>
</html>
