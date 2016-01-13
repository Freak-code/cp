<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_admin');
			if($this->session->userdata('status') != "login"){
					redirect('home');
				}
			}
function index(){
			$this->load->view('admin/header');
			$this->load->view('admin/v_home');
			$this->load->view('admin/footer');
			}
}