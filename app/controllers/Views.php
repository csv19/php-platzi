<?php
session_start();
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
  public function cursos(){
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursos();
    $planes=$planModel->getPlanes();
    $data = [
        'datos' => $datos,
        'planes' => $planes
    ];
    $this->load_view('cursos',$data);
  }
  
  public function curso($url){
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $planes=$planModel->getPlanes();
    $datos = $cursoModel->getCursoById($url);
    $rutas=[];
    if(isset($_SESSION['usuario_id'])){
      $curso_id=$datos[0]['id'];
      $rutas = $cursoModel->getRutaCurso($_SESSION['usuario_id'],$curso_id);
    }
    $planes=$planModel->getPlanes();
    $data = [
        'curso' => $datos,
        'planes' => $planes,
        'rutas'=> $rutas
    ];
    $this->load_view('curso',$data);
  }
  public function suscripcion(){
    $cursoModel = $this->load_model('Curso');
    $planModel = $this->load_model('Plan');
    $datos = $cursoModel->getCursos();
    $planes=$planModel->getPlanes();
    $data = [
        'datos' => $datos,
        'planes' => $planes
    ];
    $this->load_view('suscripcion',$data);
  }
  public function rutas(){

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
  public function solicitud_beca(){
    $this->load_view('solicitudBeca');
  }
  public function contacto(){
    $this->load_view('contacto');
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
  public function reservar($id)
  {
    $planModel = $this->load_model('Plan');
    $plan=$planModel->getPlanById($id);
    $data = [
      'plan' => $plan
  ];
    $this->load_view('reserva',$data);
  }
  public function lista_beca(){
    $this->load_view('admin/lista_beca');
  }
  public function lista_beca_json(){
    $becaModel = $this->load_model('Beca');
    $draw = isset($_GET['draw']) ? intval($_GET['draw']) : 0;
    $start = isset($_GET['start']) ? intval($_GET['start']) : 0;
    $length = isset($_GET['length']) ? intval($_GET['length']) : 10;
    $becas = $becaModel->getBecasPaginated($start, $length);
    $total = $becaModel->getTotalBecas();
    $response = [
      "draw" => $draw,
        "recordsTotal" => $total,
        "recordsFiltered" => $total,
        'data' => $becas,
    ];

    // Devuelve los datos como JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
  }

  public function lista_usuario(){
    $this->load_view('admin/lista_usuario');
  }
  public function lista_usuario_json(){
    $usuarioModel = $this->load_model('Usuario');
    $draw = isset($_GET['draw']) ? intval($_GET['draw']) : 0;
    $start = isset($_GET['start']) ? intval($_GET['start']) : 0;
    $length = isset($_GET['length']) ? intval($_GET['length']) : 10;
    $usuarios = $usuarioModel->getUsuariosPaginated($start, $length);
    $total = $usuarioModel->getTotalUsuarios();
    $response = [
      "draw" => $draw,
        "recordsTotal" => $total,
        "recordsFiltered" => $total,
        'data' => $usuarios,
    ];

    // Devuelve los datos como JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
  }

  public function lista_plan(){
    $this->load_view('admin/lista_plan');
  }
  public function lista_plan_json(){
    $planModel = $this->load_model('Plan');
    $draw = isset($_GET['draw']) ? intval($_GET['draw']) : 0;
    $start = isset($_GET['start']) ? intval($_GET['start']) : 0;
    $length = isset($_GET['length']) ? intval($_GET['length']) : 10;
    $planes = $planModel->getPlanesPaginated($start, $length);
    $total = $planModel->getTotalplanes();
    $response = [
      "draw" => $draw,
        "recordsTotal" => $total,
        "recordsFiltered" => $total,
        'data' => $planes,
    ];

    // Devuelve los datos como JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
  }
  public function nuevo_curso(){
    $this->load_view('admin/nuevo_curso');
  }
  public function ver_ruta(){
    $cursoModel = $this->load_model('Curso');
    $datos=[];
    if(isset($_SESSION['usuario_id'])){
      $datos = $cursoModel->getRutaCursoAdmin($_SESSION['usuario_id']);
    }
    $data = [
        'curso' => $datos
    ];
    $this->load_view('admin/ruta',$data);
  }
  public function registrar_ruta(){
    $this->load_view('registraRuta');
  }
  public function registrar_curso(){
    $this->load_view('registraCurso');
  }
  public function nueva_seccion(){
    $cursoModel = $this->load_model('Curso');
    $datos = $cursoModel->getCursos();
    $data = [
        'datos' => $datos
    ];
    $this->load_view('admin/nueva_seccion',$data);
  }
}