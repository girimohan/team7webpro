<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateTopic.php");

$table = 'topics';

$errors = array();
$id = '';
$name = '';
$description = '';

$topics = selectAll($table);



