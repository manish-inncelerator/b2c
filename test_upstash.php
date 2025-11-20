<?php

require 'vendor/autoload.php';
require 'MG/autoload.php';

$redis = new MG\Upstash();

$redis->set("foo", "bar", 60);

echo $redis->get("foo");
