<?php

require_once ('../vendor/autoload.php');

use Builder\{MySQLQueryBuilder, PostgresQueryBuilder};

$mysqlQuery = new MySQLQueryBuilder();
echo $mysqlQuery
    ->select("users", ["name", "email", "password"])
    ->where("age", 18, ">")
    ->where("age", 30, "<")
    ->limit(10, 20)
    ->getSQL();

echo '<br>';

$postgresQuery = new PostgresQueryBuilder();
echo $postgresQuery
    ->select("users", ["name", "email", "password"])
    ->where("age", 18, ">")
    ->where("age", 30, "<")
    ->limit(10, 20)
    ->getSQL();

