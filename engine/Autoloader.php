<?php


namespace app\engine;


class Autoloader
{
  public function loadClass($className)
  {
    var_dump(ROOT_DIR . ' ' . DS . ' ' . $className);
    $fileName = str_replace(['app', '\\'], [ROOT_DIR, DS], $className) . '.php';

    if (file_exists($fileName)) {
      include $fileName;
    }
  }
}
