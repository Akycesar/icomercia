<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		    
	}
	public function index()
	{
		$this->load->view('web/header');
		$this->load->view('web/app/inicio');
		$this->load->view('web/footer');
	}
	public function registro()
	{
		$this->load->view('web/header');
		$this->load->view('web/app/registro');
		$this->load->view('web/footer');
	}
	public function nosotros()
	{
		$this->load->view('web/header');
		$this->load->view('web/app/nosotros');
		$this->load->view('web/footer');
	}
	public function proyectos()
	{
		$this->load->view('web/header');
		$this->load->view('web/app/proyectos');
		$this->load->view('web/footer');
	}
	public function contacto()
	{
		$this->load->view('web/header');
		$this->load->view('web/app/contacto');
		$this->load->view('web/footer');
	}
	public function producto()
	{
		$this->load->view('web/header');
		$this->load->view('web/app/producto');
		$this->load->view('web/footer');
	}
	public function comprar()
	{
		$this->load->view('web/header');
		$this->load->view('web/app/comprar');
		$this->load->view('web/footer');
	}
	public function desarrollo()
	{
		$this->load->view('web/header');
		$this->load->view('web/app/desarrollo');
		$this->load->view('web/footer');
	}
	public function construccion()
	{
		$this->load->view('web/header');
		$this->load->view('web/app/construccion');
		$this->load->view('web/footer');
	}
}
