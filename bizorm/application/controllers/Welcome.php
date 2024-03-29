<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Home_model');
		$this->load->view('front/frontend');
	}
	// public function dashboard()
	// {
	// 	$this->load->view('admin/dashboard');
	// }
	

	// public function home()
	// {
	// 	$this->load->view('home');
	// }
	// public function features()
	// {
	// 	$this->load->view('features');
	// }
	// public function about()
	// {
	// 	$this->load->view('about');
	// }
	// public function screenshot()
	// {
	// 	$this->load->view('screenshot');
	// }
	// public function pricing()
	// {
	// 	$this->load->view('pricing');
	// }
	// public function blog()
	// {
	// 	$this->load->view('blog');
	// }
	// public function contact()
	// {
	// 	$this->load->view('contact');
	// }
	// public function subscribe()
	// {
	// 	$this->load->view('subscribe');
	// }
	// public function error()
	// {
	// 	$this->load->view('error');
	// }
	// public function blank_page()
	// {
	// 	$this->load->view('blank_page');
	// }
	// public function charts()
	// {
	// 	$this->load->view('charts');
	// }
	// public function table()
	// {
	// 	$this->load->view('table');
	// }
	
	// public function login()
	// {
	// 	$this->load->view('login');
	// }
	// public function register()
	// {
	// 	$this->load->view('register');
	// }
	// public function forgot()
	// {
	// 	$this->load->view('forgot');
	// }

}
