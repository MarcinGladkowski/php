<?php
/**
 * Standard way to managing with files: file_get_contents()
 * - load all data to memory
 * - it's dangerous and can cause a OOM problem
 */
$data = file_get_contents('./data.csv');
$rows = explode('\n', $data);
foreach ($rows as $row) {
    print($row);
}
echo "\n";

/**
 * Manage file using streams
 * - its mean we read line by line file and only this data we put into memory
 * - we have to create a handler
 */
echo "\nWorking with streams\n";
$handle = fopen('./data.csv', 'r+');
while (($row = fgetcsv($handle)) !== false) {
    var_dump($row);
}
fclose($handle);

/**
 * Write data with streams
 */
$dataToWrite = [
    ['Tesia', 'Katowice']
];
$handle = fopen('./data.csv', 'r+');

foreach ($dataToWrite as $row) {
    fputcsv($handle, $row);
}
fclose($handle);

echo "\nWorking with php://temp stream\n";
/**
 * We can also working with some other types of stream/resources/I/O
 * ex: php://stdin, php://temp, php://memory
 */
$handleTmp = fopen('php://temp', 'r+');
fwrite($handleTmp, 'test');

rewind($handleTmp); // not working without rewind - we have to move pointer to begin on file

var_dump(fgets($handleTmp));

fclose($handleTmp);


exit(255);
/**
 * Streams and web requests
 * - we can read resources like html, json, xml
 */
$webHandler = fopen('https://somesite.test.test', 'r');
while ($data= fgets($webHandler)) {
    var_dump($webHandler);
}