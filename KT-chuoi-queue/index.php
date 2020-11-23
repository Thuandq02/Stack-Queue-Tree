<?php
include_once "Element.php";
include_once "ReadingList.php";

$stack = new ReadingList(100);
$queue = new Queue();


$str = "able was I ere I saw elba";
$arr = [];
for ($i = 0; $i < strlen($str); $i++) {
    $arr[] = $str[$i];
}

foreach ($arr as $value) {
    $stack->push($value);
    $queue->enqueue($value);
}

$cp1 = $stack->getStack();

$cp2 = [];
while (!$queue->isEmpty()) {
    $cp2[] = $queue->dequeue();
}

if ($cp1 == $cp2) {
    echo "Chuoi doi xung";
}
else echo "Chuoi ko doi xung";



print("<pre>" . print_r($cp1, true) . "</pre>");
print("<pre>" . print_r($cp2, true) . "</pre>");die();
