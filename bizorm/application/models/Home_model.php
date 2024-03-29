<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
    public function banners()
	{
        $query = $this->db->get('banner')->result();
        // print_r($query);
        // die;
        return $query;
	 }
     public function features()
     {
         $query = $this->db->get('features')->result();
         // print_r($query);
         // die;
         return $query;
      }
      public function abouts()
      {
          $query = $this->db->get('abouts')->result();
          // print_r($query);
          // die;
          return $query;
       }
       public function screenshorts()
       {
           $query = $this->db->get('screenshort')->result();
           // print_r($query);
           // die;
           return $query;
        }
        public function pricing()
        {
            $query = $this->db->get('pricing')->result();
            // print_r($query);
            // die;
            return $query;
         }
         public function footer()
         {
             $query = $this->db->get('footer')->result();
             // print_r($query);
             // die;
             return $query;
          }
          public function header()
         {
             $query = $this->db->get('header')->result();
             // print_r($query);
             // die;
             return $query;
          }
          public function blog()
          {
              $query = $this->db->get('blogs')->result();
              // print_r($query);
              // die;
              return $query;
           }
}
?>