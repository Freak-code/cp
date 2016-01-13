<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}

	function index(){
		$data['pengaturan'] = $this->m_admin->pengaturan();
		$data['kategori'] = $this->m_admin->kategori();
		$data['artikel'] = $this->m_admin->artikel();
		$this->load->view('header',$data);		
		$this->load->view('home_view',$data);		
		$this->load->view('footer',$data);		
	}
	function login(){
		$this->load->view('login_view');
	}

	function single($id){
		$data['pengaturan'] = $this->m_admin->pengaturan();
		$data['kategori'] = $this->m_admin->kategori();
		$data['artikel'] = $this->m_admin->artikel();
		$data['single'] = $this->m_admin->single($id);
		$this->load->view('header',$data);		
		$this->load->view('v_single',$data);		
		$this->load->view('footer',$data);		
	}

	function kategori($id){
		$data['pengaturan'] = $this->m_admin->pengaturan();
		$data['kategori'] = $this->m_admin->kategori();
		$data['artikel'] = $this->m_admin->artikel_kategori($id);
		$this->load->view('header',$data);		
		$this->load->view('home_view',$data);		
		$this->load->view('footer',$data);		
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */