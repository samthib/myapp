<?php

namespace Database;

use PDO;

class DBConnection {

  /* Connexion à une base MySQL avec l'invocation de pilote */
  private $dbname;
  private $host;
  private $username;
  private $password;
  private $pdo;

  public function __construct(string $dbname, string $host, string $username, string $password) {
    $this->dbname = $dbname;
    $this->username = $username;
    $this->host = $host;
    $this->password = $password;
  }

  public function getPDO(): PDO {
    return $this->pdo ?? $this->pdo = new PDO("mysql:dbname=".$this->dbname.";host=".$this->host,
    $this->username, $this->password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET UTF8',
      )
    );
  }

}
