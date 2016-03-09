<?php

$request = $_SERVER;

$exportedRequest = var_export($request, true);
$exportedRequest .= PHP_EOL . PHP_EOL  . 'POST:' . PHP_EOL;
$exportedRequest .= var_export($_POST, true);
$now = date('Y-m-d H:i:s');

$dumpFile = __DIR__ . "/{$now}.log";

file_put_contents($dumpFile, $exportedRequest);
