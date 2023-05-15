<?php

namespace ukf\crud;

use PDO;

class Crud
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

    public function insertCon(string $title, string $award, string $object): bool
    {
        $sql = "INSERT INTO contest (id ,title, author_name, author_surname, winner_name, winner_surname, award, object, pictures, participants, win_img, icon ) 
                VALUE (null,'" . $title . "', 'Anthony', 'Soft', '', '', '" . $award . "', '" . $object . "', 0, 0, 0, null )";
        $statement = $this->connection->prepare($sql);
        try {
            $insert = $statement->execute();
            return $insert;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function deleteCon(int $id): bool
    {
        $sql = "DELETE FROM contest WHERE id = " . $id;
        $statement = $this->connection->prepare($sql);
        try {
            $delete = $statement->execute();
            return $delete;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function updateCon(string $title, string $winame, string $winsurname, string $winimg): bool
    {
        $sql = "UPDATE contest
                SET winner_name = '" . $winame . "', winner_surname = '" . $winsurname . "', win_img = '" . $winimg . "' 
                WHERE title = '" . $title . "'";
        $statement = $this->connection->prepare($sql);
        try {
            $update = $statement->execute();
            return $update;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function showContest(): array
    {
        try {
            $sql = "select id, title, winner_name, winner_surname, win_img from contest";
            $query = $this->connection->query($sql);
            $ConData = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($ConData as $con) {
                $contest[$con['id']] = [
                    'id' => $con['id'],
                    'title' => $con['title'],
                    'winner' => $con['winner_name'] . " " . $con['winner_surname'],
                    'img' => $con['win_img'],

                ];
            }

        } catch (\Exception $e) {
            echo "Error";
        }

        return $contest;

    }


    public function insertPic(string $adress, int $contestid, int $userid)
    {
        $sql = "INSERT INTO picture (id ,adress, views, likes, contest_id, user_id) 
                VALUE (null,'" . $adress . "', 0, 0, " . $contestid . ", " . $userid . ")";
        $statement = $this->connection->prepare($sql);
        try {
            $insert = $statement->execute();
            return $insert;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function deletePic(int $id)
    {
        $sql = "DELETE FROM picture WHERE id = " . $id;
        $statement = $this->connection->prepare($sql);
        try {
            $delete = $statement->execute();
            return $delete;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function showPics(int $c)
    {
        try {
            if ($c == 2) {
                $sql = "SELECT id as id ,adress as adress FROM picture ";
            } else {
                $sql = "SELECT id as id ,adress as adress FROM picture where user_id =" . $c;
            }

            $query = $this->connection->query($sql);
            $picadress = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($picadress as $pic) {
                echo '<img src="' . $pic["adress"] . '" alt="photo" style = "width:40%; height: auto; margin: 5px">';
//                echo '<br>';
                echo "<a href='delete.php?pid=" . $pic['id'] . "'>Delete</a><br>";

            }
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
    }

    public function insertCat(string $title, string $img,)
    {
        $sql = "INSERT INTO category (id ,title, contests, intro_img, icon) 
                VALUES (null,'" . $title . "', 0, '" . $img . "', '')";
        $statement = $this->connection->prepare($sql);
        try {
            $insert = $statement->execute();
            return $insert;
        } catch (\Exception $exception) {
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            return false;
        }
    }

    public function deleteCat(int $id)
    {
        $sql = "DELETE FROM category WHERE id = " . $id;
        $statement = $this->connection->prepare($sql);
        try {
            $delete = $statement->execute();
            return $delete;
        } catch (\Exception $exception) {

            return false;
        }

    }

    public function updateCat(string $title, string $img, string $icon)
    {
        $sql = "UPDATE category SET intro_img = '" . $img . "', icon = '" . $icon . "' WHERE title = '" . $title . "'";
        $statement = $this->connection->prepare($sql);
        try {
            $update = $statement->execute();
            return $update;
        } catch (\Exception $exception) {
            return false;
        }
    }


}