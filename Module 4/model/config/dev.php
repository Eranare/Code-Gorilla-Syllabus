<?php

/**
 * Configuration for local development database connection
 *
 */

$host       = "127.0.0.1";
$username   = "user";
$password   = "user";
$dbname     = "tracker";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);