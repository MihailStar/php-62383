<!-- 1 -->
<?php
$numbers = array_map(function (string $digit): int {
    return +$digit;
}, explode(" ", fgets(STDIN)));
$sum = 0;

foreach ($numbers as $number) {
    if ($number === 0) {
        break;
    }

    $sum += $number;
}

echo $sum;
?>

<!-- 2 -->
<?php
$digits = explode(" ", fgets(STDIN));
$min_number = INF;
$min_number_index;
$max_number = -INF;
$max_number_index;

for (
    $left_index = 0, $right_index = count($digits) - 1;
    $left_index < count($digits);
    $left_index += 1, $right_index -= 1
) {
    $left_number = +$digits[$left_index];
    if ($left_number < $min_number) {
        $min_number = $left_number;
        $min_number_index = $left_index;
    }

    $right_number = +$digits[$right_index];
    if ($right_number > $max_number) {
        $max_number = $right_number;
        $max_number_index = $right_index;
    }
}

if ($min_number === $max_number) {
    echo "everyone is equal";
} else {
    $digits[$min_number_index] = "$max_number";
    $digits[$max_number_index] = "$min_number";

    echo implode(" ", $digits);
}
?>

<!-- 3 -->
<?php
$digits = explode(" ", fgets(STDIN));
$digit_to_number_of = [];
$repeating_digits = [];

foreach ($digits as $digit) {
    if (array_key_exists($digit, $digit_to_number_of)) {
        $digit_to_number_of[$digit] += 1;
        continue;
    }

    $digit_to_number_of[$digit] = 1;
}

foreach ($digits as $digit) {
    if (
        array_key_exists($digit, $repeating_digits) ||
        $digit_to_number_of[$digit] === 1
    ) {
        continue;
    }

    $repeating_digits[$digit] = $digit;
}

echo count($repeating_digits) === 0
    ? "not found"
    : implode(" ", $repeating_digits);
?>

<!-- 4 -->
<?php
$digits = explode(" ", fgets(STDIN));
$indexs = [];

foreach ($digits as $index => $digit) {
    if ($index ** 2 === +$digit) {
        $indexs[] = $index;
    }
}

echo count($indexs) === 0 ? "not found" : implode(" ", $indexs);
?>

<!-- 5 -->
<?php
$digits = explode(" ", fgets(STDIN));
$unique_digits = [];

foreach ($digits as $digit) {
    if (array_key_exists($digit, $unique_digits)) {
        continue;
    }

    $unique_digits[$digit] = $digit;
}

echo implode(" ", $unique_digits);
?>

<!-- 6 -->
<?php
$n = explode(" ", trim(fgets(STDIN)));
$m = explode(" ", trim(fgets(STDIN)));

$sorted_digits = array_merge($n, $m);
rsort($sorted_digits, SORT_NUMERIC);

echo implode(" ", $sorted_digits);
?>

<!-- 7 -->
<?php
$digits = explode(" ", fgets(STDIN));
$result = [];

foreach ($digits as $digit) {
    $result[] = $digit;

    if (+$digit < 0) {
        $result[] = "0";
    }
}

echo implode(" ", $result);
?>
