<?php

require('src/functions.php');

$fileName = 'users.json';

file_put_contents(
    $fileName,
    json_encode(
        createArrUsers(50)
    )
);

$data = json_decode(
    file_get_contents($fileName)
);

printCountOfUniqueNames($data);
echo 'Средний возраст пользователей: ' . getUsersAverageAge($data);

