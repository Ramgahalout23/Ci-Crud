<?php 

class Crud_model extends CI_Model
{
  public function getAllProducts(){
      
    
$query=$this->db->get('products');

if($query){

    return $query->result();
}


  }
}


?>