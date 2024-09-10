<?php
$number = 90;
$range = range(1, 30);

echo "<br>";
foreach ($range as $num) {
    if ($number % $num == 0) {
        $result = $number / $num;
        echo "$number:$num=$result<br>";
    }
}
?>