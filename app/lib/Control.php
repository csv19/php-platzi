<?php
class Control
{
  
  public function load_model($model)
  {
    $file = '../app/models/' . $model . '.php';

    if (!file_exists($file)) {
        die("El archivo del modelo no existe: " . $file);
    }

    require_once $file;

    if (!class_exists($model)) {
        die("La clase $model no está definida en el archivo $file");
    }

    return new $model();
}


  public function load_view($view, $datos = [])
  {
    if(file_exists('../app/views/pages/' . $view . '.php'))
    {
      extract($datos); // Extrae los datos como variables individuales
      require_once '../app/views/pages/' . $view . '.php';
    }
    else
    {
      die("404 NOT FOUND");
    }
  }
}