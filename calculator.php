<?php
function percent($first, $second)
{
	return ($first / 100 * $second);
}
function cot($first)
{
    return (cos(deg2rad($first)) / sin(deg2rad($first)));
}
function calc()
{
global $action, $result, $first, $second;
$action = $_POST['action'];
$first = $_POST['first'];
$second = $_POST['second'];
switch($action)
{
 case "sum":
	$result = $first+$second;
	break;
 case "min":
	$result = $first-$second;
	break;
 case "umn":
	$result = $first*$second;
	break;
 case "per":
	if ($first == 0)
        $result = 0;
    else
        $result = percent($first, $second);
	break;
 case "stepen":
	$result = pow($first, $second);
	break;
 case "sqrt":
	$result = sqrt($first);
	break;
 case "sin":
    $result = sin(deg2rad($first));
	break;
 case "cos":
    $result = cos(deg2rad($first));
	break;
 case "tan":
    $result = tan(deg2rad($first));
	break;
 case "cot":
    $result = cot($first);
	break;
 case "del":
 if (!$second)
 {
 exit("Второе число не введено или равно нулю
<br> <a href=calculator.php>Назад</a>");
 }
 $result=$first/$second;
 break;
}
}
calc();
?>
<form method="post" action="calculator.php">
<table border="1" cellspacing="2" cellpadding="2">
<tr>
<td>Первое число: </td><td><input size="14"
type="text" name="first"></td>
</tr>
<tr>
<td>Второе число: </td><td><input size="14"
type="text" name="second"></td>
</tr>
<tr><td>
<select size="1" name="action">
 <option value="sum">Сложить</option>
 <option value="min">Вычесть</option>
 <option value="umn">Умножить</option>
 <option value="del">Разделить</option>
 <option value="stepen">Возвести в
степень</option>
 <option value="per">Процент</option>
 <option value="sqrt">Корень</option>
 <option value="sin">Синус</option>
 <option value="cos">Косинус</option>
 <option value="tan">Тангенс</option>
 <option value="cot">Котангенс</option>
 </select></td>
 <td><input type="submit" value="Выполнить">
</td></tr>
<tr><td>Результат:
</td>
<td>
<div align="center">
<?php
echo "$result";
?>
</div>
</td></tr>
</table>
</form>