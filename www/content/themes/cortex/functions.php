<?php

require 'vendor/autoload.php';

use Cortex\Cortex;

$app = Cortex::init(array(
    'bundles' => array(
        new App\Bundle\TestBundle()
    ),
    'hooks' => array(),
    'environment' => Cortex::ENV_DEVELOPMENT
));
