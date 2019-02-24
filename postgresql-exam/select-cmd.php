<?php

$host = 'ec2-54-227-246-152.compute-1.amazonaws.com';
$database = 'd2kem2r4vb3nre';
$username = 'pwyrlnoahiovqp';
$password = 'fcc2d652fec73b737a042e8099ed83970b641742c2c8db2200b41268f5e2332b';

$connection = new PDO(sprintf('pgsql:host=%s;dbname=%s', $host, $database), $username, $password);

$query = "SELECT * FROM appointments";
$connection->execute($query);
