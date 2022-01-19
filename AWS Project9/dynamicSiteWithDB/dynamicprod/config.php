<?php

/**
 * Configuration for database connection
 *
 */

$host       = "mccisb.coni7vrobjzv.us-east-1.rds.amazonaws.com";
$username   = "mccisbmk";
$password   = "nairadan";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );