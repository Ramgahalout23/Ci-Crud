<?php


class Crud extends CI_Controller {

	public function index()
	{
		$this->load->database();  
         //load the model  
         $this->load->model('Crud_model');  
         //load the method of model  
         $data['products']=$this->Crud_model->getAllproducts();  
         //return the data in view  
// print_r($products);
// die();
		$this->load->view('Crud_view', $data);
	}
}
?>