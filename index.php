<?php

require ('lib/OCFram/SplClassLoader.php');

$OCFramLoader = new SplClassLoader('OCFram', '/lib');
$OCFramLoader->register();