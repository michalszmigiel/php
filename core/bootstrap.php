<?php

$app = [];

$app['config'] = require 'config.php';

// $pdo = Connection::make();
$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));