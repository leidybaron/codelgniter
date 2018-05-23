<?php

class Procesador extends CI_Controller
{
     function __construct() {
        parent::__construct();
        $this->load->model('estacion');
        //Funciones de redirección
        $this->load->helper('url');
    }
   
    
    public function index(){
        $data = array();
        
        $data['estacion'] = $this->estacion-> obtenerListado();
        $data['titulo'] = 'Mis Rutas';
        
        $this->load->view('Formulario', $data);
        
    }
    
       public function agregar(){
           
        $data = array();
        $datosFormulario = array();
        
        if($this->input->post('postSubmit')){
            
      
        
        $datosFormulario = array(
                'estacion' => $this->input->post('estacion'),
                'descripcion' => $this->input->post('descripcion'),
                'latitud' => $this->input->post('latitud'),
                'longitud' => $this->input->post('longitud')
            );
        
        $insertar = $this->estacion->insertarRuta($datosFormulario);
       
            
           
        $data['post'] = $datosFormulario;
        $data['title'] = 'Crear Ruta';
        $data['action'] = 'agregar';
        
        $this->load->view('FormularioRuta', $data);
        
    }
    
   
    
    

    
    
}

