<?php
session_start();

require "../app/core/init.php";

$app = new App;

$app->load_controller();
