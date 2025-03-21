<?php

namespace Controllers;

abstract class BaseController{
    // Depois faço
    // Metódo para passar data sem ter que criar toda hora
    
    public function view($view, $data = []){

        if(!is_array($data)){
            die('Data is not an array' . var_dump($data));
        }


        // Extrai as chaves do array em variaveis
        
        extract($data);

        if(file_exists("../app/views/$view")){
            require_once("../app/views/$view");
        } else {
            die("this view doesn't exists" . $view);
        }
        
    }

    public function views_with_navbar($name_view, $data = [])
    {
            $this->view('layouts/html_header.php', $data);
            $this->view('navbar.php', $data);
            $this->view($name_view . '.php', $data);
            $this->view('footer.php');
            $this->view('layouts/html_footer.php');
    }

    public function views_without_navbar($name_view, $data = [])
    {
            $this->view('layouts/html_header.php', $data);
            $this->view($name_view . '.php', $data);
            $this->view('footer.php');
    }
}