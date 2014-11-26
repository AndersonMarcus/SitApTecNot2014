<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Editor extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
	}
	
	public function index()
	{
		
		$data['titulo'] = 'Bem Vindo! ' .$this->session->userdata('perfil');
		$this->load->view('home2-header');
        $this->load->view('home2',$data);
        $this->load->view('home2-footer');
	}
}