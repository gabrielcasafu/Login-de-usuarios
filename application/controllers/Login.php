<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){	

		$this->load->library('form_validation');
		$this->form_validation->set_rules('txtUsuario', 'Email', 'required');
		$this->form_validation->set_rules('txtPassword', 'Password', 'required');
		if ($this->form_validation->run()){
			$this->load->model('Login_model');
			if ($this->Login_model->login($_POST['txtUsuario'], md5($_POST['txtPassword']))){
				$session_data = array('email' => '$txtUsuario');
				$this->session->set_userdata($session_data);
				redirect('login/enter');
			}else{
				$this->session->set_flashdata('error','Invalid Username or Password.');
				//redirect('login');
			}
		}else{
			//false
			//Si activamos la redireccion tendremos que eliminar todas las sessiones, de lo 
			//contrario no podriamos acceder. Es decir crear el logout.php o eliminar las cookies manualmente.
			//redirect('login');
		}

		$this->load->view('login');
		//print_r($this->db); para chequear la conexion 
	}

	public function enter(){
		$this->load->view('dashboard');
	}
	

}
