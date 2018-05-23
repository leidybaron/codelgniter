<?php



class Estacion extends CI_Model{
    
    
    //Read de modelo CRUD(leer)
    
function obtenerListado($id = "")
{
   $query = $this->db->get('estacion');
   return $query->result_array();
   
}

    //Creade de modelo CRUD(crear)
    public function insertarRuta($data = array()) {
        
        $data['id']='NULL';
        $insertar = $this->db->insert('estacion', $data);
        
        if($insertar){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }


}