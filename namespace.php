<?php

include "namespace_alpha.php";
include "namespace_beta.php";

$alpha = new Alpha\MyApp();
$beta  = new Beta\MyApp();

$alpha->hello();
$beta->hello();
