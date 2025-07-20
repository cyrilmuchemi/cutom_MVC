<?php

function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

function split_url()
{
    $URL = $_GET['url'] ?? 'home';
    $URL = explode("/", $URL);

    return $URL;

}

function load_controller()
{
    $URL = split_url();
    $file_name = "../app/controllers/".ucfirst($URL[0]).".php";
    if(file_exists($file_name))
    {
        require $file_name;
    }else{
        $file_name = "../app/controllers/_404.php";
        require $file_name;
    }
}

load_controller();

