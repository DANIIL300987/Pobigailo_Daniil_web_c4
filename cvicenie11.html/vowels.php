<?php
$text = $_POST['text'] ?? '';

$vowels = ['a','e','i','o','u','y','A','E','I','O','U','Y'];
$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    if (in_array($text[$i], $vowels)) {
        $count++;
    }
}

echo "<h2>Результат:</h2>";
echo "В строке <b>\"$text\"</b> найдено гласных: <b>$count</b>";
?>
