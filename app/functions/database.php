<?php
if(!defined('APP_VERSION')) die('access denied');

function db_connect(): mysqli
{
    return mysqli_connect(
        CONFIG_DB_HOST,
        CONFIG_DB_USER,
        CONFIG_DB_PASSWORD,
        CONFIG_DB_NAME,
    );
}

function db_get(string $table, int $id): array | null
{
    $mysqli = db_connect();
    $result = mysqli_query($mysqli, sprintf(
        'SELECT * FROM %s WHERE id=%d',
        $table,
        $id
    ));

    return mysqli_fetch_assoc($result);
}

function db_get_multiple(string $table, array $ids): array | null
{
    if(empty($ids)) return null;

    $ids_string = '';

    foreach ($ids as $key => $id) {
        if($key < count($ids) - 1) $ids_string .= $id.',';
        else $ids_string .= $id;
    }

    $mysqli = db_connect();
    $result = mysqli_query($mysqli, sprintf(
        "SELECT * FROM %s WHERE id IN (%s)",
        $table,
        $ids_string
    ));

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function db_get_all(string $table, string $order = 'id:asc'): array
{
    $order = preg_replace('~^([a-zA-Z_]+):([a-zA-Z]+)$~', 'ORDER BY $1 $2', $order);

    $mysqli = db_connect();
    $result = mysqli_query($mysqli, sprintf(
        'SELECT * FROM %s %s',
        $table,
        $order
    ));

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}