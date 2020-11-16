<?php


namespace app\interfaces;


interface IModel
{
  function getAll();

  function getById(int $id);

  function getTableName(): string;
}
