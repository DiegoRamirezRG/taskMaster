<?php
    session_cache_expire(15);
    session_start();

    include 'controllers/c_controller.php';
    $controller = new controller();

    if(ISSET($_SESSION['logged_user'])){

    }else{
        if(false){

        }else{
            echo $controller->_content('v_login');
        }
    }
?>