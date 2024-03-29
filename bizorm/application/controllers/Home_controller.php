<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

    public function homeview() {
		 
		$this->load->database();
		
		 
		$home = $this->db->get('banner')->result();
		
		 
		$this->db->from('features');
		$features = $this->db->get()->result();
		
		 
		$abouts = $this->db->get('abouts')->result();
		$screenshort = $this->db->get('screenshort')->result();
		$blogs = $this->db->get('blogs')->result();
        $pricing = $this->db->get('pricing')->result();
        $header = $this->db->get('header')->result();
        $footer = $this->db->get('footer')->result();
		// print_r($blogs);
		// die;
	 
		$data = array(
			'home' => $home,
			'features' => $features,
			'abouts' => $abouts,
			'screenshort' => $screenshort,
			'blogs' => $blogs,
            'pricing' => $pricing,
            'header' => $header,
            'footer' => $footer
		);
		// print_r($data);
        // die;
		 
		$this->load->view('front/frontend', $data);
        //$this->load->view('front/frontend', $data);
	}
    // public function view(){
        
    // }
}
?>