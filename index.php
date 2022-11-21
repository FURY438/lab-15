<?php
echo '<h3>Москалик Василь, СП-41 (17.11.2022)</h3>';
echo '<form action="" method="post">
    <input type="text" name="string" placeholder="Введіть текст:" ><br>
    <input type="submit" name="submit" value="Виконати">
</form>';

$regex='/(\d+(\s*|,{1})\d*)+\.\d+/';
$r="/\d/";
$str=$_POST["string"];
echo $str;
echo "<br>";
//(\d+(,|\s))*\d+\.\d+
echo "<br>";
preg_match_all('/\d+\.\d+/',$str,$key1);
print_r($key1);
echo "<br>";
preg_match_all('/(\d+\,)+\d\.\d+/',$str,$key1);
print_r($key1[0]);
echo "<br>";
preg_match_all('/\s(\d+\s)+\d\.\d+/',$str,$key1);
print_r($key1[0]);
?>