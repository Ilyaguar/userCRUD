<?php
include 'JsonDBStore.php';

function reg_user(){
    $name = '';
    $login = '';
    $password = '';

    if (isset($_POST)){
        $name = $_POST['name'];
        $login = $_POST['login'];
        $password = $_POST['password'];

        $form_validation_state = validation($name, $login, $password);
        if ($form_validation_state != 0){
            return $form_validation_state;
        }
        else {
            return addUser($name, $login, $password);
        }
    }
}

function validation($name, $login, $password){
    if(strlen($name) > 16){
        return 1;
    }
    elseif (strlen($name) > 32){
        return 2;
    }
    elseif(strlen($password) < 8 || strlen($password) > 32){
        return 3;
    }
    return 0;
}
?>
