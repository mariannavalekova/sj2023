<?php
namespace ukf;

use PDO;
 class Navigation {
     private string $host;
     private int $port;
     private string $username;
     private string $password;
     private string $dbName;

     private $connection;

     public function __construct(
         string $host = "localhost",
         int $port = 3306,
         string $user = "root",
         string $password = "",
         string $dbName = "snapx"
     )
     {
         if(!empty($host)) {
             $this->host = $host;
         }

         if(!empty($port)) {
             $this->port = $port;
         }

         if(!empty($user)) {
             $this->username = $user;
         }

         if(isset($password)) {
             $this->password = $password;
         }

         if(!empty($dbName)) {
             $this->dbName = $dbName;
         }

         try {
             $this->connection = new PDO(
                 'mysql:charset=utf8;host='.$this->host.';dbname='.$this->dbName.";port=".$this->port,
                 $this->username,
                 $this->password
             );
         } catch (\Exception $exception) {
             echo $exception->getMessage();
             die();
         }
     }

     public function getNavData(): array{
         try {
             $sql = "SELECT * FROM nav";
             $query = $this->connection->query($sql);
             $navData = $query->fetchAll(PDO::FETCH_ASSOC);

             foreach ($navData as $navItem) {
                 $nav[$navItem['sys_n']] = [
                     'name' => $navItem['user_n'],
                     'path' => $navItem['path'],
                     'id' => $navItem['id']
                 ];
             }
         } catch (\Exception $exception) {
             echo $exception->getMessage();
         }

         return $nav;

     }

     public function printNav(array $nav)
     {
         foreach ($nav as $navName => $navData) {
             echo '<li><a href="' . $navData['path'] . '">' . $navData['name'] . '</a></li>';
         }

     }

 }