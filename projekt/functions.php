<?php
namespace ukf;

use PDO;
 class Functions {
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
     /****** Nav metody ***** */
     public function getNavData(): array{
         try {
             $sql = "SELECT * FROM nav where id!=5";
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

     /*********** */

     /****** metody pre carousely ***** */
     public function getOwlCar(): array{
         $owlCarousel = array();
         try {
             $sql = "SELECT title, winner_name,winner_surname, author_name, author_surname, award, object, adress FROM contest inner join picture on picture.id = contest.win_img";
             $query = $this->connection->query($sql);
             $owlcData = $query->fetchAll(PDO::FETCH_ASSOC);

             foreach ($owlcData as $owlcItem) {
                 $owlCarousel[$owlcItem['title']] = [
                     'winner' => $owlcItem['winner_name']." ".$owlcItem['winner_surname'],
                     'author' => $owlcItem['author_name']." ".$owlcItem['author_surname'],
                     'award' => $owlcItem['award']."€ + ".$owlcItem['object'],
                     'img' => $owlcItem['adress'],

                 ];
             }

         } catch (\Exception $exception) {
             echo $exception->getMessage();
         }

         return $owlCarousel;

     }
     public function printOwlC()
     {
         $owlCarousel = $this->getOwlCar();
         foreach ($owlCarousel as $ocName => $ocData) {
             echo '<div class="item">
                        <div class="thumb">
                            <img src="'.$ocData['img'].'" alt="">
                            <div class="hover-effect">
                                <div class="content">
                                    <h4>'.$ocName.'<i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i> <span>(4.5)</span></h4>
                                    <ul>
                                        <li><span>Contest Winner:</span> '.$ocData['winner'].'</li>
                                        <li><span>Contest Author:</span> '.$ocData['author'].'</li>
                                        <li><span>Awards:</span> '.$ocData['award'].'</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>;';
         }

     }

     /****** category metody ***** */
     public function getCategory(): array{
         try {
             $sql = "SELECT * FROM category";
             $query = $this->connection->query($sql);
             $catData = $query->fetchAll(PDO::FETCH_ASSOC);

             foreach ($catData as $catItem) {
                 $category[$catItem['title']] = [
                     'contests' => $catItem['contests'],
                     'icon' => $catItem['icon'],
                     'intro_img' => $catItem['intro_img'],
                     'id' => $catItem['id']
                 ];
             }
         } catch (\Exception $exception) {
             echo $exception->getMessage();
         }

         return $category;

     }
     public function printCategory()
     {
         $category = $this->getCategory();
         foreach ($category as $cName => $cData) {
             echo '<div class="col-lg-3 col-sm-6">
                        <div class="popular-item">
                            <div class="top-content">
                                <div class="icon">
                                    <img src="'.$cData['icon'].'" alt="">
                                </div>
                                <div class="right">
                                    <h4>'.$cName.'</h4>
                                    <span><em>'.$cData['contests'].'</em> Available Contests</span>
                                </div>
                            </div>
                            <div class="thumb">
                                <img src="'.$cData['intro_img'].'" alt="">
                                <span class="category">Top Contest</span>
                                <span class="likes"><i class="fa fa-heart"></i> ---</span>
                            </div>
                            <div class="border-button">
                                <a href="contest-details.php">Browse Portrait Pic Contests</a>
                            </div>
                        </div>
                   </div>';
         }

     }

     public function printContests()
     {
         try {
             $sql = "SELECT title, award, pictures, participants FROM contest ";
             $query = $this->connection->query($sql);
             $c = $query->fetchAll(PDO::FETCH_ASSOC);

             foreach ($c as $cData) {
                 $contest[$cData['title']] = [
                     'pictures' => $cData['pictures'],
                     'participants' => $cData['participants'],
                     'award' => $cData['award']."€"
                 ];
             }

         } catch (\Exception $exception) {
             echo $exception->getMessage();
         }
         foreach ($contest as $cName => $conData) {
             echo '<div class="col-lg-3">
            <br>
          <div class="contest-item">
            <div class="top-content">
              <span class="award">Award Price</span>
              <span class="price">' . $conData['award'] . '</span>
            </div>
            <img src="assets/images/photo-video-01.jpg" alt="">
            <h4>' . $cName . '</h4>
            <div class="info">
              <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>' . $conData['participants'] . ' Participants</span>
              <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>' . $conData['pictures'] . ' Submissions</span>
            </div>
            <div class="border-button">
              <a href="contest-details.php">Browse '. $cName .'</a>
            </div>
            
          </div>
        </div>';
         }
     }

    /*crud operacie*/





 }