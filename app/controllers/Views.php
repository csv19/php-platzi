<?php
class Views extends Control
{

  public function inicio()
  {    
    $cursoModel = $this->load_model('Curso');
    $datos = $cursoModel->getCursos();
   
    $this->load_view('inicio',$datos);
  }
  
  public function update($id)
  {
    echo "Update view " . $id;
  }

}