<?php
class Views extends Control
{

  public function inicio()
  {    
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursos();
    $planes=$planModel->getPlanes();
    $data = [
        'datos' => $datos,
        'planes' => $planes
    ];
    $this->load_view('inicio',$data);
  }
  public function programacion()
  {    
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursoById(2);
    $planes=$planModel->getPlanes();
    $data = [
        'curso' => $datos,
        'planes' => $planes
    ];
    $this->load_view('curso',$data);
  }
  public function base_datos()
  {    
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursoById(3);
    $planes=$planModel->getPlanes();
    $data = [
        'curso' => $datos,
        'planes' => $planes
    ];
    $this->load_view('curso',$data);
  }
  public function inteligencia_artificial()
  {    
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursoById(1);
    $planes=$planModel->getPlanes();
    $data = [
        'curso' => $datos,
        'planes' => $planes
    ];
    $this->load_view('curso',$data);
  }
  public function ciberseguridad()
  {    
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursoById(4);
    $planes=$planModel->getPlanes();
    $data = [
        'curso' => $datos,
        'planes' => $planes
    ];
    $this->load_view('curso',$data);
  }
  public function cloud()
  {    
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursoById(7);
    $planes=$planModel->getPlanes();
    $data = [
        'curso' => $datos,
        'planes' => $planes
    ];
    $this->load_view('curso',$data);
  }
  public function ingles()
  {    
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursoById(5);
    $planes=$planModel->getPlanes();
    $data = [
        'curso' => $datos,
        'planes' => $planes
    ];
    $this->load_view('curso',$data);
  }
  public function marketing()
  {    
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursoById(6);
    $planes=$planModel->getPlanes();
    $data = [
        'curso' => $datos,
        'planes' => $planes
    ];
    $this->load_view('curso',$data);
  }
  public function javascript()
  {    
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursoById(8);
    $planes=$planModel->getPlanes();
    $data = [
        'curso' => $datos,
        'planes' => $planes
    ];
    $this->load_view('curso',$data);
  }

  /*Admin */
  public function login(){
    $this->load_view('validateUser');
  }
  public function register(){
    $this->load_view('registerUser');
  }
  public function logout(){
    $this->load_view('admin/logout');
  }
  public function dashboard(){
    $this->load_view('admin/dashboard');
  }
  public function beca(){
    $this->load_view('admin/beca');
  }
  public function planes(){
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursoById(8);
    $planes=$planModel->getPlanes();
    $data = [
        'curso' => $datos,
        'planes' => $planes
    ];
    $this->load_view('planes',$data);
  }
  public function update($id)
  {
    echo "Update view " . $id;
  }

}