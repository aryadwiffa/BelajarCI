<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

  public function __construct()
	{
    parent::__construct();
    $this->load->model("Customer_model");
	}

	public function index()
	{
    $data["customer"] = $this->Customer_model->getAll();

		var_dump ($data["customer"]);


	}

}
