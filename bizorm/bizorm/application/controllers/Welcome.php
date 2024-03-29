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
		$this->load->view('welcome_message');
	}


	public function home()
	{
		$this->load->view('home');
	}
	public function features()
	{
		$this->load->view('features');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function screenshot()
	{
		$this->load->view('screenshot');
	}
	public function pricing()
	{
		$this->load->view('pricing');
	}
	public function blog()
	{
		$this->load->view('blog');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	
	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function forgot()
	{
		$this->load->view('forgot');
	}

}
