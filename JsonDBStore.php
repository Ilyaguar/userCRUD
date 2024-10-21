<?php
function addUser($name, $login, $password){
    $array = array(
        'User_id' => 0,
        'Name' => $name,
        'Login' => $login,
        'Password' => $password,
        'Active' => 0
    );
    $user_json = json_encode($array, JSON_UNESCAPED_UNICODE);
    $filename = __DIR__ . '/userDB.json';
 
    file_put_contents($filename, $user_json);
    return 0;
}

function getDB() {
    $filename = __DIR__ . '/userDB.json';
    $db_json = file_get_contents($filename);
    $array = json_encode($db_json);
    return $array;
}
?>