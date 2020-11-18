<?php


namespace app\engine;


class Db
{
  public $config = [
      'driver'   => 'mysql',
      'host'     => 'localhost',
      'port'     => '3306',
      'login'    => 'root',
      'password' => 'root',
      'database' => 'storedb',
      'charset'  => 'utf8'
  ];

  public $connection = null;

  public function getConnection()
  {
    if (is_null($this->connection)) {
      try {
        $this->connection = new \PDO(
            $this->buildDsnString(),
            $this->config['login'],
            $this->config['password']
      );
      } catch (PDOException $e) {
        echo 'Подключение не удалось: ' . $e->getMessage();
      }
    }

    return $this->connection;
  }

  public function buildDsnString(): string
  {
    return sprintf('%s:dbname=%s;host=%s;port=%s;charset=%s',
      $this->config['driver'],
      $this->config['database'],
      $this->config['host'],
      $this->config['port'],
      $this->config['charset']
    );
  }

  public function queryOne($sql)
  {
    return [];
  }

  public function queryAll($sql)
  {
    return [];
  }

  public function execute($sql)
  {
    return [];
  }
}
