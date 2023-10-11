<?php

function createUser(int $id): array
{
    $namesLibrary = [
        'Andrey',
        'Natalya',
        'Victor',
        'Svetlana',
        'Michail'
    ];

    return [
        'id' => $id++,
        'name' => $namesLibrary[rand(0, 4)],
        'age' => rand(18, 45)
    ];
}

function createArrUsers(int $countUsers): array
{
    $users = [];
    for ($i = 0; $i < $countUsers; $i++) {
        $users[] = createUser($i);
    }

    return $users;
}

function printCountOfUniqueNames(array $data): void
{
    echo "Выводим количество уникальных имен в массиве.<br>";
    foreach (
        array_count_values(
            array_column($data, 'name')
        ) as $key => $value
    ) {
        echo "{$key}: {$value}<br>";
    }
}

function getUsersAverageAge(array $data): int
{
    return array_sum(array_column($data, 'age')) / count($data);
}