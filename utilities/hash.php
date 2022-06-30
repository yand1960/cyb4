<?php

$pwd = "123456";
$hash = hash("sha256",$pwd);
echo $hash;