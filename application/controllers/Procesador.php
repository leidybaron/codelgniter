<?php

class Procesador extends CI_Controller
{
     function __construct() {
        parent::__construct();
        $this->load->model('ruta');
        //Funciones de redirección
        $this->load->helper('url');
    }
   
    
    public function index(){
        $data = array();
        
        $data['rutas'] = $this->ruta-> obtenerListado();
        $data['titulo'] = 'Mis Rutas';
        
        $this->load->view('Formulario', $data);
        
    }
    
   
    
    

    
    
}

