<!-- 1 -->
<?php
fscanf(STDIN, "%d", $n);
if ($n > 10) {
    echo $n + 100;
} else {
    echo $n - 30;
}
?>

<!-- 2 -->
<?php
fscanf(STDIN, "%d", $n);
if ($n % 2 === 0) {
    echo $n * 0.5;
} else {
    echo $n * 3;
}
?>

<!-- 3 -->
<?php
fscanf(STDIN, "%d", $n);
if ($n > 10 && $n < 30) {
    echo 0;
} elseif ($n < 50) {
    echo $n * $n;
} else {
    echo "Ошибка";
}
?>

<!-- 4 -->
<?php
fscanf(STDIN, "%d %d", $n, $k);
echo max($n, $k);
?>

<!-- 5 -->
<?php
fscanf(STDIN, "%d %d", $n, $k);
echo abs($n - $k) === 100 ? "Да" : "Нет";
?>

<!-- 6 -->
<?php
fscanf(STDIN, "%d %d", $n, $k);
echo abs($n - $k) <= 20 ? "Да" : "Нет";
?>

<!-- 7 -->
<?php
fscanf(STDIN, "%d", $month_num);
switch ($month_num) {
    case 12:
    case 1:
    case 2:
        echo "Зима";
        break;
    case 3:
    case 4:
    case 5:
        echo "Весна";
        break;
    case 6:
    case 7:
    case 8:
        echo "Лето";
        break;
    case 9:
    case 10:
    case 11:
        echo "Осень";
        break;
    default:
        echo "Ошибка";
        break;
}
?>

<!-- 8 -->
<?php
$digits = str_split(fgets(STDIN));
echo max(
    "{$digits[0]}{$digits[1]}{$digits[2]}",
    "{$digits[0]}{$digits[2]}{$digits[1]}",

    "{$digits[1]}{$digits[0]}{$digits[2]}",
    "{$digits[1]}{$digits[2]}{$digits[0]}",

    "{$digits[2]}{$digits[0]}{$digits[1]}",
    "{$digits[2]}{$digits[1]}{$digits[0]}"
);
?>

<!-- 9 -->
<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
// @tutorial https://ru.wikipedia.org/wiki/Квадратное_уравнение
$discriminant = $b ** 2 - 4 * $a * $c;
if ($discriminant > 0) {
    $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
    echo $x1, " ", $x2;
} elseif ($discriminant < 0) {
    echo "Нет ответа";
} else {
    $x = - ($b / (2 * $a));
    echo $x;
}
?>
