<?php

require_once "../app/core/init.php";

class App{
    private function split_url()
    {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", $URL);

        return $URL;

    }

    public function load_controller()
    {
        $URL = $this->split_url();
        $file_name = "../app/controllers/".ucfirst($URL[0]).".php";
        if(file_exists($file_name))
        {
            require $file_name;
        }else{
            $file_name = "../app/controllers/_404.php";
            require $file_name;
        }
    }
}

