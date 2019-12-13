<?php

$json = new \stdClass();

$json->user = "test";
$json->first = "Bob";
$json->last = "Ross";

$file = "list.json";

$json = json_decode(file_get_contents($file));

echo $json->val;

// file_put_contents($file, json_encode($json));
?>