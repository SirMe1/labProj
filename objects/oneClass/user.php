<?php
/*namespaces have 2 primary uses;
  avoid name colissions
  to have a a way of aliasing and shortening refs

*/
namespace watu;
use \PDO as PDO;
//using inheritance to allow borrowing of predefined methods in Datah
class Usar extends Datah {
  //allow users to manipulate data
  const HOST = '10.20.113.55';
  const NAME = '91383_oop';
  const USER = '91383';
  const PASS = '91383';
  //variables
  private $host;
  private $dbname;
  private $user;
  private $pass;
  private $pdo;//storing the pdo argument for the connection
  private $isConn;

  //constructor with the argument list
public function __construct(
  $host = self::HOST,
  $dbname = self::NAME,
  $username = self::USER,
  $password = self::PASS
  )
{
  $this->host = $host;
  $this->dbname = $dbname;
  $this->user = $username;
  $this->pass = $password;

      //connecting to the database
      try{
        $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}",$this->user,$this->pass);
      }
      catch(PDOException $e){
        echo $e->getMessage();
      }
    }
//all needed method are inheritedd from the Database class
//check if all methods needed exist in parent class
parent::getAll(string $table);
parent::delete(string $item, string $table);
parent::insert(string $name,int $number, int $country_id,string $table );
parent::updateUser($name,$pnumber,$countryID);
}
//calling stuff to test


}
?>
