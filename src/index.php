<?php
    session_cache_expire(15);
    session_start();

    include 'controllers/c_controller.php';
    $controller = new controller();

    if(ISSET($_SESSION['logged_user'])){

    }else{
        if(false){

        }else if(ISSET($_GET['register']) && $_GET['register'] == true){
            echo $controller->_content('v_register');
        }else{
            echo $controller->_content('v_login');
        }
    }
?>