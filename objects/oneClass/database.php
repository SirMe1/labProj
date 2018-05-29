
<?php
/*namespaces have 2 primary uses;
  avoid name colissions
  to have a a way of aliasing and shortening refs
*/
namespace takwimu;
use \PDO as PDO;
/*
##########################################
user
id - integer,autoincrement
name - text
phone_number - varchar(20)
country_id - integer
##########################################
role
id - integer,autoincrement
name - text
#########################################
permission
id - integer,autoincrement
name - text
#########################################
role_permission
id - integer,autoincrement
role_id - integer (fk : role_table)
permission_id - integer (fk : permission table)
user_id : integer,autoincrement(fk : user table)
############################################
*/
public class Datah{
  //properties
  const DB_HOST = '10.20.113.55';
  const DB_NAME = '91383_oop';
  const DB_USER = '91383';
  const DB_PASS = '91383r';

  private $host;
  private $dbname;
  private $user;
  private $pass;
  private $pdo;
  private $isConn;

  public function __construct
  (
    $host = self::DB_HOST,
    $dbname = self::DB_NAME,
    $username = self::DB_USER,
    $password = self::DB_PASS
  )
  {
    //Init
    // assigning the host, database name, username and password
    //maybe a form for this?? To allow the user to input their own connection details
    $this->host = $host;
    $this->dbname = $dbname;
    $this->user = $username;
    $this->pass = $password;

    //acquire a connection
    try{
      $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}",$this->user,$this->pass);
    }
    catch(PDOException $e){
      echo $e->getMessage();
    }
  }
  /**
   * Get all records in a table
   * @param  string $table
   * @return array
   */
  //@TODO : Include conditions
  public function getAll(string $table){
//this uses execute notation
      //Get the connection object
      //write the query
      $sql = "SELECT * FROM {$table}";
      $statement = $this->pdo->prepare($sql);
      $statement->execute();
  }

  //@TODO : Delete based on an id:
  public function delete(string $item, string $table){
  $delsql = "DELETE $item FROM {$table}";
  $statement = $this->pdo->prepare($delsql);
  $statement->execute();
}
  //@TODO Insert a bunch of values to a table
  public function insert(string $name,int $phonenumber, int $country_id,string $table )// inserting name, number and country id
  {
    $inssql = "INSERT INTO {$table}(name, phone_number, country_id)
VALUES ( $name,$phonenumber, $country_id)";
$statement = $this->pdo->prepare($inssql);
$statement->execute();


  }
    //@TODO : updates the User Table    public updateUser($name,$pnumber,$countryID){//TBD
    //  $table = "User"
      $update = "UPDATE User
SET name = $name,
phone_number = $pnumber,
country_id =$countryID
WHERE name == $name; "

$statement = $this->pdo->prepare($update);
$statement->execute();




    }

}
//calling stuff to test them

?>
