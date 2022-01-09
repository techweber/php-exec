<?php

$externalCode = exec("zip -r compress.zip .");

echo "<pre>";print_r($externalCode);

$externalCode = exec("ls -alh");

echo "<pre>";print_r($externalCode);
