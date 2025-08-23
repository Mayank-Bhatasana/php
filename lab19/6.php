<?php
$employee = [
    ["101", "Raj", "Male", "32649851"],
    ["102", "Mayank", "Male", "46821695"]
];

$file = fopen("./example.txt", "w");

foreach ($employee as $e) {
//    print_r($e);
    fwrite($file, implode(",", $e) . "\n");
}
fclose($file);

echo nl2br(file_get_contents("example.txt"));
