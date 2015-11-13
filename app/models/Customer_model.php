<?php

class Customer_model extends CI_Model {

	public $firstName;
	public $lastName;
	public $email;
	public $cpf;
	public $birthday;
	public $Is_active;

	public function __construct() {

		// Call the CI_Model constructor
		parent::__construct();
	}

	public function postCustomer() {

        $this->firstName = $_POST['firstName'];
        $this->lastName  = $_POST['lastName'];
        $this->email  	 = $_POST['email'];
        $this->cpf  	 = $_POST['cpf'];
        $this->birthday  = $_POST['birthday'];
        $this->Is_active  = $_POST['Is_active'];

      	return $this->db->insert('usuarios', $this);

	}

	public function getCustomers (){
		return $this->db->get('usuarios')->result();
	}

	public function getCustomer($id) {
		return $this->db->where('id =', $id)->get('usuarios')->row();
	}

	public function updateCustomer() {

        $this->firstName = $_POST['firstName'];
        $this->lastName  = $_POST['lastName'];
        $this->email  	 = $_POST['email'];
        $this->cpf  	 = $_POST['cpf'];
        $this->birthday  = $_POST['birthday'];
        $this->Is_active = (isset($_POST['Is_active'])) ? '1' : '0';
        $id 			 = $_POST['id'];

        return $this->db->where('id', $id)->update('usuarios', $this);
	}

	public function deleteCustomer($id) {

        return $this->db->where('id', $id)->delete('usuarios', $this);
	}
}

