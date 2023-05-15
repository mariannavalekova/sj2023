<?php

namespace ukf\classes;

use PDO;

class Auth
{
    private string $host;
    private int $port;
    private string $username;
    private string $password;
    private string $dbName;

    private $connection;

    public function __construct(
        string $host = "localhost",
        int    $port = 3306,
        string $user = "root",
        string $password = "",
        string $dbName = "snapx"
    )
    {
        if (!empty($host)) {
            $this->host = $host;
        }

        if (!empty($port)) {
            $this->port = $port;
        }

        if (!empty($user)) {
            $this->username = $user;
        }

        if (isset($password)) {
            $this->password = $password;
        }

        if (!empty($dbName)) {
            $this->dbName = $dbName;
        }

        try {
            $this->connection = new PDO(
                'mysql:charset=utf8;host=' . $this->host . ';dbname=' . $this->dbName . ";port=" . $this->port,
                $this->username,
                $this->password
            );
        } catch (\Exception $exception) {
            echo $exception->getMessage();
            die();
        }
    }

    public function login(string $name, string $password): int
    {
        try {
            $password = md5($password);
            $sql = "SELECT id as id_user  FROM login WHERE login = '" . $name . "' AND passwd = '" . $password . "'";
            $query = $this->connection->query($sql);
            $login = $query->fetch(PDO::FETCH_ASSOC);
            print_r($login);
            if (!is_null($login['id_user'])) {
                return $login['id_user'];
            } else {
                return -1;

            }
        } catch (\Exception $exception) {
            return -1;
            echo $exception;
        }
    }

}