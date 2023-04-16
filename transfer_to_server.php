<html>
<head>
    <title>Вывод на экран входящих параметров</title>
</head>
<body>
<?php
echo $_POST['message'].", ".$_POST['name'];
$color = $_POST['color'];
echo "<body style='background-color:$color'>";
?>
</body>
</html>