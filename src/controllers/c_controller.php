<?php

date_default_timezone_set('America/Mexico_City');
include 'model/m_model.php';

class controller {

    function _content($view){
        $page = file_get_contents(__DIR__ . '/../views/'.$view.'.php');
        $page = $this->_replace($page, $view);
        return $page;
    }

    function _replace($page, $name){
        $model = new m_model();
        extract($_POST);
        $date = date('Y-m-d H:i:s');

        return $page;
    }

}

?>