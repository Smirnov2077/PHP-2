<?php


namespace app\models;


class Cart extends Model
{
  public int   $totalPrice;
  public array $addedProducts;


  function getTableName(): string
  {
    // TODO: Implement getTableName() method.
  }
}
