<!-- 1 -->
<?php
fscanf(STDIN, "%s", $string);
for ($i = 1; $i <= 10; $i += 1) {
    echo $string . "\n";
}
?>

<!-- 2 -->
<?php
fscanf(STDIN, "%i", $n);
for ($i = 0; $i < $n; $i += 1) {
    echo "Silence is golden" . "\n";
}
?>

<!-- 3 -->
<?php
fscanf(STDIN, "%i %i", $a, $b);
if ($a > $b) {
    echo "Сумма не существует";
    exit();
}
for ($n = $a; $n < $b; $n += 1) {
    echo $n . " ";
}
?>

<!-- 4 -->
<?php
fscanf(STDIN, "%i %i", $n, $m);
for ($i = 0; $i < 1000; $i += 1) {
    if (strpos("$i", "$n") !== false && $i % $m === 0) {
        echo "$i ";
    }
}
?>

<!-- 5 -->
<?php
fscanf(STDIN, "%i", $n);
$sum = 0;
for ($i = 1; $i < $n; $i += 1) {
    $sum += $i * $i;
}
echo $sum;
?>

<!-- 6 -->
<?php
fscanf(STDIN, "%i %i", $x, $n);
$res = 0;
for ($i = 1; $i <= $n; $i += 1) {
    $res += ($x - $x / 2) ** $i;
}
echo $res;
?>
