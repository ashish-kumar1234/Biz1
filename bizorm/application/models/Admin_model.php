<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

 
    public function login($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('login');
        if ($query->num_rows() == 1) {
           return $query->row(); // Return user data
        } else {
            return false; 
        }
    }
    

    
    
    
    public function banner($formArray)
    {
            return $this->db->insert('banner',$formArray);
    }
    public function count_view() {
        // Assuming 'bannertable' is the name of your table
        return $this->db->count_all('banner');
    }

    public function get_view($limit, $offset) {
        // Assuming 'bannertable' is the name of your table
        $this->db->limit($limit, $offset);
        $query = $this->db->get('banner');
        return $query->result_array();
    }
     public function edit_banner($id)
    {
        $query=$this->db->where('id',$id)->get('banner')->row();
        return $query;
    }
    
     
       public function getBannerImage($id) {
        // Assuming your banner table has a column named 'image'
        $this->db->select('image');
        $this->db->where('id', $id);
        $query = $this->db->get('banner');
        $result = $query->row_array();
        return ($result) ? $result['image'] : null;
    }

    public function updatebanner($id, $formArray) {
        $this->db->where('id', $id);
        $update = $this->db->update('banner', $formArray);
        return $update ? true : false;
    }
    public function features($formArray)
    {
            return $this->db->insert('features',$formArray);
    }

    public function count_features() {
        // Assuming 'bannertable' is the name of your table
        return $this->db->count_all('features');
    }

    public function get_features($limit, $offset) {
        // Assuming 'bannertable' is the name of your table
        $this->db->limit($limit, $offset);
        $query = $this->db->get('features');
        return $query->result_array();
    }

    public function edit_features($id)
    {
        $query=$this->db->where('id',$id)->get('features')->row();
        return $query;
    }
    public function getfeaturesImage($id) {
        // Assuming your banner table has a column named 'image'
        $this->db->select('image');
        $this->db->where('id', $id);
        $query = $this->db->get('features');
        $result = $query->row_array();
        return ($result) ? $result['image'] : null;
    }
    public function updatefeatures($id, $formArray) {
        $this->db->where('id', $id);
        $update = $this->db->update('features', $formArray);
        return $update ? true : false;
    }
    public function abouts($formArray)
    {
            return $this->db->insert('abouts',$formArray);
    }
    // public function count_about() {
    //     // Assuming 'bannertable' is the name of your table
    //     return $this->db->count_all('about');
    // }

    public function get_about($limit, $offset) {
        // Assuming 'bannertable' is the name of your table
        $this->db->limit($limit, $offset);
        $query = $this->db->get('abouts');
        return $query->result_array();
    }
    public function edit_about($id)
    {
        $query=$this->db->where('id',$id)->get('abouts')->row();
        return $query;
    }
    public function screenshort($formArray)
    {
            return $this->db->insert('screenshort',$formArray);
    }
    public function edit_screenshort($id)
    {
        $query=$this->db->where('id',$id)->get('screenshort')->row();
        return $query;
    }
 
     
    public function getscreenImage($id) {
        // Assuming your banner table has a column named 'image'
        $this->db->select('image');
        $this->db->where('id', $id);
        $query = $this->db->get('features');
        $result = $query->row_array();
        return ($result) ? $result['image'] : null;
    }
        public function updateScreenshort($id, $formArray) {
            $this->db->where('id', $id);
            $update = $this->db->update('screenshort', $formArray);
            return $update ? true : false;
        }
    
        public function getScreenshortById($id) {
            return $this->db->get_where('screenshort', array('id' => $id))->row_array();
        }
        public function blog($formArray)
    {
            return $this->db->insert('blogs',$formArray);
    }
    public function edit_blog($id)
    {
        $query=$this->db->where('id',$id)->get('blogs')->row();
        return $query;
    }


    public function pricing($formArray)
    {
            return $this->db->insert('pricing',$formArray);
    }

    public function edit_pricing($id)
    {
        $query=$this->db->where('id',$id)->get('pricing')->row();
        return $query;
    }
    public function getpricingImages($id) {
        // Assuming your banner table has a column named 'image'
        $this->db->select('image');
        $this->db->where('id', $id);
        $query = $this->db->get('features');
        $result = $query->row_array();
        return ($result) ? $result['image'] : null;
    }
    public function updatepricing($id, $formArray) {
        $this->db->where('id', $id);
        $update = $this->db->update('pricing', $formArray);
        return $update ? true : false;
    }
    public function getaboutImages($id) {
        // Assuming your banner table has a column named 'image'
        $this->db->select('image');
        $this->db->where('id', $id);
        $query = $this->db->get('features');
        $result = $query->row_array();
        return ($result) ? $result['image'] : null;
    }

    public function updateAbout($id, $formArray) {
        $this->db->where('id', $id);
        $update = $this->db->update('abouts', $formArray);
        return $update ? true : false;
    }

    public function header($formArray)
    {
            return $this->db->insert('header',$formArray);
    }
    public function edit_header($id)
    {
        $query=$this->db->where('id',$id)->get('header')->row();
        return $query;
    }
    public function getheaderImage($id) {
        // Assuming your banner table has a column named 'image'
        $this->db->select('image');
        $this->db->where('id', $id);
        $query = $this->db->get('features');
        $result = $query->row_array();
        return ($result) ? $result['image'] : null;
    }
    public function updateheader($id, $formArray) {
        $this->db->where('id', $id);
        $update = $this->db->update('header', $formArray);
        return $update ? true : false;
    }
    public function footer($formArray)
    {
            return $this->db->insert('footer',$formArray);
    }
    public function edit_footer($id)
    {
        $query=$this->db->where('id',$id)->get('footer')->row();
        return $query;
    }
    public function updatefooter($id, $formArray) {
        $this->db->where('id', $id);
        $update = $this->db->update('footer', $formArray);
        return $update ? true : false;
    }
    public function enquery_insert($formArray)
	{
		return $this->db->insert('enquery',$formArray);
	}
    public function view(){
        
    }
    }
    
    
 