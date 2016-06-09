<?php

require 'vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;


if(empty($argv[1])) {
  echo "Usage: $argv[0] <path-to-yaml-file>\n";
  exit;
}

echo json_encode(Yaml::parse(file_get_contents($argv[1])));

