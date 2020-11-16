<?php


namespace app\model;


class User extends Model
{
  public $name;
  public $email;

  public function getByLogin($login)
  {}

  public function getTableName(): string
  {
    return "users";
  }

  function getAll()
  {
    // TODO: Implement getAll() method.
  }

  function getById(int $id)
  {
    // TODO: Implement getById() method.
  }
}
