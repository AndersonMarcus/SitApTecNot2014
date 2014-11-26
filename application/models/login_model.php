<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function login_user($nome,$senha)
	{
		$this->db->where('nome',$nome);
		$this->db->where('senha',$senha);
		$query = $this->db->get('usuario');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			$this->session->set_flashdata('Usuário ou senha incorretos');
			redirect(base_url().'login','refresh');
		}
	}
}