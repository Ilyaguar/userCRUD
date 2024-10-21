<?php
function addUser($name, $login, $password){
    $users_json = json_decode(file_get_contents('userDB.json'), true);
    $users_json['users'][] = [
        'User_id' => 0,
        'Name' => $name,
        'Login' => $login,
        'Password' => $password,
        'Active' => 0
    ];
    file_put_contents('userDB.json', json_encode($users_json));
    echo "пользователь успешно добавлен: $name, $login, $password\n\n";
    return 0;
}

function getDB() {
    $filename = __DIR__ . '/userDB.json';
    $db_json = file_get_contents($filename);
    $array = json_encode($db_json);
    return $array;
}
?>