<!-- 1 -->
<?php
fscanf(STDIN, "%s", $string);
if (strpos($string, "abc") === 0) {
    echo "www" . substr($string, 3);
} else {
    echo $string . "zzz";
}
?>

<!-- 2 -->
<?php
fscanf(STDIN, "%s", $string);
if (strlen($string) > 10) {
    echo substr($string, 0, 6);
} else {
    echo $string . substr(str_repeat("o", 12), 0, 12 - strlen($string));
}
?>
