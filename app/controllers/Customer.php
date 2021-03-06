<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
					'customers_array' => $this->customer_model->getCustomers()
					);
		$this->load->view('customer/show', $data);
	}
	public function store () 
	{
		if($this->customer_model->postCustomer()) {
				// echo 'Registrou!! Agora precisamos redirecionar para a página inicial.';
			redirect(base_url(), 'refresh');
		} else {
			echo 'Não Registrou!! Vamos encontrar o problema.';
		}
	}

	public function __construct()
	    {
	        parent::__construct();

	        $this->load->model('customer_model');
	        $this->load->helper('url');
		}

	public function edit($id) {
		//echo 'ID: ' . $id;
		$data = array(
			'customer_data' => $this->customer_model->getCustomer($id)
			);

		$this->load->view('customer/edit', $data);	
	}

	public function update() {

		if($this->customer_model->updateCustomer()) {
			redirect(base_url(), 'refresh');
		} else {
			echo 'Não Atualizou!! Vamos encontrar o problema.';
		}
	}

	public function delete($id) {

		$data = array(
			'customer_data' => $this->customer_model->deleteCustomer($id)
			);

		if($this->customer_model->deleteCustomer()) {
			redirect(base_url(), 'refresh');
		} else {
			echo 'Não deletou!! Vamos encontrar o problema.';
		}
	}
}

