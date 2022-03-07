<?php

include(ROOT_PATH . "/app/database/db.php");

$table = 'topics';

$errors = array();
$id = '';
$name = '';
$description = '';

$topics = selectAll($table);



