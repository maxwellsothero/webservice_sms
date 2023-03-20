<?php

require './vendor/autoload.php';

use Ratchet\Server\EchoServer;

$app = new Ratchet\App('167.114.153.47', 9980);
$app->route('/echo', new EchoServer, ['*']);
$app->run();
