<!-- 1 -->
<?php
fscanf(STDIN, "%d %d", $a, $b);
echo $a + $b . " " . $a * $b;
?>

<!-- 2 -->
<?php
fscanf(STDIN, "%d %d", $a, $b);
echo $a ** 2 + $b ** 2;
?>

<!-- 3 -->
<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
echo ($a + $b + $c) / 3;
?>

<!-- 4 -->
<?php
fscanf(STDIN, "%s", $digit);
echo strrev($digit);
?>

<!-- 5 -->
<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
echo ($a + $b) / $c, " ", ($a + $c) / $b, " ", ($b + $c) / $a;
?>

<!-- 6 -->
<?php
fscanf(STDIN, "%d", $number);
echo $number % 3, " ", $number % 5;
?>

<!-- 7 -->
<?php
fscanf(STDIN, "%d", $number);
echo $number * 1.3, " ", $number * 2.2;
?>

<!-- 8 -->
<?php
fscanf(STDIN, "%d %d", $a, $b);
echo $a * 0.4 + $b * 0.84;
?>

<!-- 9 -->
<?php
fscanf(STDIN, "%d", $number);
echo (($number / 1) % 10) + (($number / 10) % 10) + (($number / 100) % 10);
?>

<!-- 10 -->
<?php
fscanf(STDIN, "%s", $digit);
echo $digit[0] . "0" . $digit[2];
?>

<!-- 11 -->
<?php
fscanf(STDIN, "%d", $number);
echo ($number / 1) % 10 . ($number / 10) % 10 . ($number / 100) % 10;
?>
