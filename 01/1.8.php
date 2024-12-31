<!-- 1 -->
<?php
// @tutorial https://ru.wikipedia.org/wiki/Гипотенуза
function length_of_a_right_triangle(float $a, float $b): float
{
    $hypotenuse = sqrt($a ** 2 + $b ** 2);
    return $hypotenuse;
}
?>

<!-- 2 -->
<?php
function the_biggest_symbol(string $str): string
{
    return max(str_split($str));
}

function the_sum_of_each_character(string $str): int
{
    return array_reduce(
        str_split($str),
        function ($acc, $char) {
            return $acc + ord($char);
        },
        0
    );
}
?>

<!-- 3 -->
<?php
function count_function_calls()
{
    static $counter = 0;
    $counter += 1;
    return $counter;
}
?>
