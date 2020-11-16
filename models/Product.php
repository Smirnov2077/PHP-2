<?php


namespace app\models;


class Product extends Model
{
  public int    $id;
  public string $name;
  public string $description;
  public float  $price;
  public int    $categoryId;

  public function getByCategoryId(int $categoryId)
  {}

  public function getTableName(): string
  {
    return "products";
  }
}
