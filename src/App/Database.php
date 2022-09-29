<?php
namespace IIKWorks\Portfolio\App;

use \mysqli;

class Database
{
    private mysqli $instance;

    public function __construct(string $host, string $username, string $password, string $name)
    {
        $instance = new mysqli($host, $username, $password, $name);
        $instance->set_charset('utf8mb4');

        $this->instance = $instance;
    }

    public function get(string $table, int $id): array | null
    {
        $result = $this->instance->query(sprintf(
            'SELECT * FROM %s WHERE id=%d',
            $table,
            $id
        ));

        return $result->fetch_assoc();
    }

    public function getMultiple(string $table, array $ids): array | null
    {
        if(empty($ids)) return null;

        $ids_string = '';

        foreach ($ids as $key => $id) {
            if($key < count($ids) - 1) $ids_string .= $id.',';
            else $ids_string .= $id;
        }

        $result = $this->instance->query(sprintf(
            "SELECT * FROM %s WHERE id IN (%s)",
            $table,
            $ids_string
        ));

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAll(string $table, string $order = 'id:asc'): array
    {
        $order = preg_replace('~^([a-zA-Z_]+):([a-zA-Z]+)$~', 'ORDER BY $1 $2', $order);

        $result = $this->instance->query(sprintf(
            'SELECT * FROM %s %s',
            $table,
            $order
        ));

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}