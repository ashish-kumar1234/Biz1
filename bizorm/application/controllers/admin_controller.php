<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_controller extends CI_Controller {

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
	// public function sidebar()
	// {
	// 	$this->load->view('admin/sidebar');
    //     $this->load->view('admin/footer');

	// } 

	// public function footer()
	// {
	// 	$this->load->view('admin/footer');
	// }

    // public function topbar()
	// {
	// 	$this->load->view('admin/topbar');
	// }


//login code


public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('session');
    $this->load->model('Admin_model');
}

public function login() {
    $this->load->view('admin/login');
}

public function loginUser() {
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));
    $user = $this->Admin_model->login($email, $password);
    
    if ($user) {
        $session_data = array(
            'id' => $user->id,
            'email' => $user->email,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($session_data);
        $this->session->set_flashdata('success', 'Login successful');
        redirect('dashboard');   
    } else {
        $this->session->set_flashdata('error', 'Invalid username or password');
        redirect('login');
    }
}


public function logout() {
    $this->session->sess_destroy();
    redirect('login');
}

public function dashboard() {
    if ($this->session->userdata('logged_in')) {
        $this->load->view('admin/dashboard');
    } else {
        redirect('login');
    }
}



  public function home()
	{
		$this->load->view('home');
	}
	public function insert_banner() {
		$formArray = array();
	
		 
		if (!empty($_FILES['image']['name'])) {
			$upload_path = './uploads/banners/';
			$config = array(
				'upload_path' => $upload_path,
				'allowed_types' => "jpg|png|jpeg|gif|PNG",
				'overwrite' => FALSE,
				'upload_max_filesize' => '10M',
				 
			);
	
			$this->load->library('upload');
			$this->upload->initialize($config);
	
			if (!$this->upload->do_upload('image')) {
				 
				$error = $this->upload->display_errors();
				echo $error;  
				exit();  
			} else {
				$imageDetailArray = $this->upload->data();
				$image = $imageDetailArray['file_name'];
				$formArray['image'] = $image;
			}
		} else {
			 
			$formArray['image'] = '';
		}
	
		 
		$formArray['title'] = $this->input->post('title');
		$formArray['description'] = $this->input->post('description');
		$formArray['url'] = $this->input->post('url');
	
		$this->load->model('Admin_model');
		$data = $this->Admin_model->banner($formArray);
		// print_r($data);
		// die;
		redirect(base_url() . 'homeview');
	}
 
	public function homeview() {
		 
		$this->load->database();
		
		 
		$home = $this->db->get('banner')->result();
		
 
		
        $features = $this->db->get('features')->result();
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
		
		 
		$this->load->view('home/home_view', $data);
        //$this->load->view('front/frontend', $data);
	}
	
	
//  public function homeview() {
//     // Load Pagination Library
//     $this->load->library('pagination');

//     // Load Admin_model
//     $this->load->model('Admin_model');

//     // Pagination configuration
//     $config['base_url'] = base_url('homeview');
//     $config['total_rows'] = $this->Admin_model->count_view(); // Assuming this method retrieves the total number of rows
//     $config['per_page'] = 3; // Number of items you want to display per page
//     $config['uri_segment'] = 3; // The segment number in your URL which contains the page number

//     $this->pagination->initialize($config);

//     // Get the current page number
//     $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

//     // Retrieve data for the current page
//     $data['rows'] = $this->Admin_model->get_view($config['per_page'], $page);
// 	// print_r($data);
// 	// die;
//     // Load the view with pagination data
//     $this->load->view('home/home_view', $data);
// }
  


	public function edit ($id)
	 {
	$this->load->model('Admin_model');
	$data['edit']=$this->Admin_model->edit_banner($id); 
	// print_r($data);
	// die;
	$this->load->view('home/edit',$data);
	 }
	public function update($id) {
    $formArray = array();

    // Retrieve old image from database
    $this->load->model('Admin_model');
    $oldImage = $this->Admin_model->getBannerImage($id);

    // Handle image upload
    if (!empty($_FILES['image']['name'])) {
        $upload_path = './uploads/banners';
        $config = array(
            'upload_path' => $upload_path,
            'allowed_types' => "jpg|png|jpeg|gif",
            'overwrite' => FALSE,
            'upload_max_filesize' => '10M',
            'file_name' =>  'banner_' . time() . rand(1111, 9999)
        );
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('image')) {
            $imageDetailArray = $this->upload->data();
            $formArray['image'] = $imageDetailArray['file_name'];
            
            // Delete old image
            if ($oldImage && file_exists($upload_path.'/'.$oldImage)) {
                unlink($upload_path.'/'.$oldImage);
            }
        } else {
            $error = $this->upload->display_errors();
            echo $error;
            return;
        }
    }

    // Process other form data
    $formArray['title'] = $this->input->post('title');
    $formArray['description'] = $this->input->post('description');
    $formArray['url'] = $this->input->post('url');

    // Update database with new information
    $this->Admin_model->updateBanner($id, $formArray); // Assuming a method like updateBanner exists in your Admin_model to update the banner

    // Redirect after successful update
    redirect(base_url().'homeview');
}
	

public function about(){
    $this->load->view('about');
}

public function insert_about(){
    $formArray = array();

    // Function to handle image upload
    function handle_image_upload($image_name, $existing_image = '') {
        $upload_path = './uploads/banners/';
        $config = array(
            'upload_path' => $upload_path,
            'allowed_types' => "jpg|png|jpeg|gif|PNG",
            'overwrite' => FALSE,
            'upload_max_filesize' => '10M',
        );

        $CI =& get_instance();
        $CI->load->library('upload');
        $CI->upload->initialize($config);

        if (!$CI->upload->do_upload($image_name)) {
            // If no new image uploaded, return the existing image filename
            if ($existing_image) {
                return $existing_image;
            } else {
                $error = $CI->upload->display_errors();
                // Handle the error (you might want to do something here)
                echo $error;
                return ''; // Return an empty string if upload fails
            }
        } else {
            $imageDetailArray = $CI->upload->data();
            return $imageDetailArray['file_name'];
        }
    }

    // Get existing image filenames
    $existing_images = array(
        'image1', 'image2', 'image3', 
    );

    foreach ($existing_images as $image) {
        $formArray[$image] = $this->input->post($image . '_existing');
    }

    // Handle image uploads
    for ($i = 1; $i <= 3; $i++) {
        $image_name = 'image' . $i;
        $formArray[$image_name] = handle_image_upload($image_name, $formArray[$image_name]);
    }

    // Get other form data
    $formArray['icon1'] = $this->input->post('icon1');
    $formArray['icon2'] = $this->input->post('icon2');
    $formArray['icon3'] = $this->input->post('icon3');
    $formArray['icon4'] = $this->input->post('icon4');
    $formArray['icon5'] = $this->input->post('icon5');
    $formArray['icon6'] = $this->input->post('icon6');
    $formArray['icon7'] = $this->input->post('icon7');
    $formArray['icon8'] = $this->input->post('icon8');
    $formArray['icon9'] = $this->input->post('icon9');
    $formArray['icon10'] = $this->input->post('icon10');
    $formArray['title'] = $this->input->post('title');
    $formArray['description'] = $this->input->post('description');
    $formArray['sub_title1'] = $this->input->post('sub_title1');
    $formArray['sub_description1'] = $this->input->post('sub_description1');
    $formArray['sub_title2'] = $this->input->post('sub_title2');
    $formArray['sub_description2'] = $this->input->post('sub_description2');
    $formArray['sub_title3'] = $this->input->post('sub_title3');
    $formArray['sub_description3'] = $this->input->post('sub_description3');
    $formArray['sub_title4'] = $this->input->post('sub_title4');
    $formArray['sub_description4'] = $this->input->post('sub_description4');
    $formArray['sub_title5'] = $this->input->post('sub_title5');
    $formArray['sub_description5'] = $this->input->post('sub_description5');
    $formArray['sub_title6'] = $this->input->post('sub_title6');
    $formArray['sub_description6'] = $this->input->post('sub_description6');
    $formArray['title1'] = $this->input->post('title1');
    $formArray['description1'] = $this->input->post('description1');
    $formArray['url'] = $this->input->post('url');
    $formArray['sub_title7'] = $this->input->post('sub_title7');
    $formArray['sub_description7'] = $this->input->post('sub_description7');
    $formArray['sub_title8'] = $this->input->post('sub_title8');
    $formArray['sub_title9'] = $this->input->post('sub_title9');
    $formArray['sub_title10'] = $this->input->post('sub_title10');
    $formArray['sub_title11'] = $this->input->post('sub_title11');
    $formArray['sub_title12'] = $this->input->post('sub_title12');
    $formArray['sub_description8'] = $this->input->post('sub_description8');
    $formArray['url2'] = $this->input->post('url2');

    $this->load->model('Admin_model');
    $data = $this->Admin_model->abouts($formArray);

    redirect(base_url() . 'homeview');
}




	public function about_edit ($id)
	{
   $this->load->model('Admin_model');
   $data['edit']=$this->Admin_model->edit_about($id); 
//    print_r($data);
//    die;
   $this->load->view('about/about_edit',$data);
	}

    public function update_about($id) {
        $formArray = $this->process_form_dataa($id);

        // Update database with new information
        $this->Admin_model->updateAbout($id, $formArray); // Assuming a method like updateAbout exists in your Admin_model to update the about section

        // Redirect after successful update
        redirect(base_url().'homeview');
    }

    private function process_form_dataa($id) {
        $formArray = array();

        // Retrieve old images from database
        $oldImages = $this->Admin_model->getaboutImages($id); // Assuming getFeaturesImages retrieves multiple images associated with the given ID

        // Handle image uploads
        $upload_path = './uploads/banners';
        $config = array(
            'upload_path' => $upload_path,
            'allowed_types' => "jpg|png|jpeg|gif",
            'overwrite' => FALSE,
            'max_size' => 10240, // 10 MB in kilobytes
        );
        $this->load->library('upload', $config);

        for ($i = 1; $i <= 3; $i++) { // Assuming you have 3 image inputs named image1, image2, image3
            if (!empty($_FILES['image' . $i]['name'])) {
                if ($this->upload->do_upload('image' . $i)) {
                    $imageDetailArray = $this->upload->data();
                    $formArray['image' . $i] = $imageDetailArray['file_name'];

                    // Delete old image
                    if (!empty($oldImages[$i-1]) && file_exists($upload_path.'/'.$oldImages[$i-1])) {
                        unlink($upload_path.'/'.$oldImages[$i-1]);
                    }
                } else {
                    $error = $this->upload->display_errors();
                    echo $error;
                    return;
                }
            }
        }
    
        // Get other form data
        $formArray['icon1'] = $this->input->post('icon1');
        $formArray['icon2'] = $this->input->post('icon2');
        $formArray['icon3'] = $this->input->post('icon3');
        $formArray['icon4'] = $this->input->post('icon4');
        $formArray['icon5'] = $this->input->post('icon5');
        $formArray['icon6'] = $this->input->post('icon6');
        $formArray['icon7'] = $this->input->post('icon7');
        $formArray['icon8'] = $this->input->post('icon8');
        $formArray['icon9'] = $this->input->post('icon9');
        $formArray['icon10'] = $this->input->post('icon10');

        $formArray['title'] = $this->input->post('title');
        $formArray['description'] = $this->input->post('description');
        $formArray['sub_title1'] = $this->input->post('sub_title1');
        $formArray['sub_description1'] = $this->input->post('sub_description1');
        $formArray['sub_title2'] = $this->input->post('sub_title2');
        $formArray['sub_description2'] = $this->input->post('sub_description2');
        $formArray['sub_title3'] = $this->input->post('sub_title3');
        $formArray['sub_description3'] = $this->input->post('sub_description3');
        $formArray['sub_title4'] = $this->input->post('sub_title4');
        $formArray['sub_description4'] = $this->input->post('sub_description4');
        $formArray['sub_title5'] = $this->input->post('sub_title5');
        $formArray['sub_description5'] = $this->input->post('sub_description5');
        $formArray['sub_title6'] = $this->input->post('sub_title6');
        $formArray['sub_description6'] = $this->input->post('sub_description6');
        $formArray['title1'] = $this->input->post('title1');
        $formArray['description1'] = $this->input->post('description1');
        $formArray['url'] = $this->input->post('url');
        $formArray['sub_title7'] = $this->input->post('sub_title7');
        $formArray['sub_description7'] = $this->input->post('sub_description7');
        $formArray['sub_title8'] = $this->input->post('sub_title8');
        $formArray['sub_title9'] = $this->input->post('sub_title9');
        $formArray['sub_title10'] = $this->input->post('sub_title10');
        $formArray['sub_title11'] = $this->input->post('sub_title11');
        $formArray['sub_title12'] = $this->input->post('sub_title12');
        $formArray['sub_description8'] = $this->input->post('sub_description8');
        $formArray['url2'] = $this->input->post('url2');
    
        $this->load->model('Admin_model');
        $this->Admin_model->updateAbout($id, $formArray);
        
        // Redirect after successful update
        redirect(base_url().'homeview');
    }
    



















public function features(){
	$this->load->view('features');
}
public function insert_features() {
    $formArray = array();

    // Function to handle image upload
    function handle_image_upload($image_name) {
        $upload_path = './uploads/banners/';
        $config = array(
            'upload_path' => $upload_path,
            'allowed_types' => "jpg|png|jpeg|gif|PNG",
            'overwrite' => FALSE,
            'upload_max_filesize' => '10M',
        );

        $CI =& get_instance();
        $CI->load->library('upload');
        $CI->upload->initialize($config);

        if (!$CI->upload->do_upload($image_name)) {
            $error = $CI->upload->display_errors();
            // Handle the error (you might want to do something here)
            echo $error;
            return ''; // Return an empty string if upload fails
        } else {
            $imageDetailArray = $CI->upload->data();
            return $imageDetailArray['file_name'];
        }
    }

    // Check if the first image file is selected
    if (!empty($_FILES['image']['name'])) {
        $formArray['image'] = handle_image_upload('image');
    } else {
        $formArray['image'] = '';
    }

     

    // Get other form data
    $formArray['icon1'] = $this->input->post('icon1');
    $formArray['icon2'] = $this->input->post('icon2');
    $formArray['icon3'] = $this->input->post('icon3');
    $formArray['icon4'] = $this->input->post('icon4');
    $formArray['icon5'] = $this->input->post('icon5');
    $formArray['icon6'] = $this->input->post('icon6');
    $formArray['title'] = $this->input->post('title');
    $formArray['description'] = $this->input->post('description');
    $formArray['sub_title1'] = $this->input->post('sub_title1');
    $formArray['sub_description1'] = $this->input->post('sub_description1');
    $formArray['sub_title2'] = $this->input->post('sub_title2');
    $formArray['sub_description2'] = $this->input->post('sub_description2');
    $formArray['sub_title3'] = $this->input->post('sub_title3');
    $formArray['sub_description3'] = $this->input->post('sub_description3');
    $formArray['sub_title4'] = $this->input->post('sub_title4');
    $formArray['sub_description4'] = $this->input->post('sub_description4');
    $formArray['sub_title5'] = $this->input->post('sub_title5');
    $formArray['sub_description5'] = $this->input->post('sub_description5');
    $formArray['sub_title6'] = $this->input->post('sub_title6');
    $formArray['sub_description6'] = $this->input->post('sub_description6');

    $this->load->model('Admin_model');
    $data = $this->Admin_model->features($formArray);

    redirect(base_url() . 'homeview');
}


public function features_edit ($id)
	{
   $this->load->model('Admin_model');
   $data['edit']=$this->Admin_model->edit_features($id); 
   // print_r($data);
   // die;
   $this->load->view('features/features_edit',$data);
	}
	public function update_features($id) {
        $formArray = $this->process_form_data($id);
    
        // Update database with new information
        $this->Admin_model->updatefeatures($id, $formArray); // Assuming a method like updateBanner exists in your Admin_model to update the banner
    
        // Redirect after successful update
        redirect(base_url().'homeview');
    }
    
    private function process_form_data($id) {
        $formArray = array();
    
        // Retrieve old image from database
        $oldImage = $this->Admin_model->getfeaturesImage($id);
    
        // Handle image upload
        if (!empty($_FILES['image']['name'])) {
            $upload_path = './uploads/banners';
            $config = array(
                'upload_path' => $upload_path,
                'allowed_types' => "jpg|png|jpeg|gif",
                'overwrite' => FALSE,
                'max_size' => 10240, // 10 MB in kilobytes
                'file_name' =>  'banner_' . time() . rand(1111, 9999)
            );
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('image')) {
                $imageDetailArray = $this->upload->data();
                $formArray['image'] = $imageDetailArray['file_name'];
    
                // Delete old image
                if ($oldImage && file_exists($upload_path.'/'.$oldImage)) {
                    unlink($upload_path.'/'.$oldImage);
                }
            } else {
                $error = $this->upload->display_errors();
                echo $error;
                return;
            }
        }
    
        // Process other form data
        $formArray['icon1'] = $this->input->post('icon1');
        $formArray['icon2'] = $this->input->post('icon2');
        $formArray['icon3'] = $this->input->post('icon3');
        $formArray['icon4'] = $this->input->post('icon4');
        $formArray['icon5'] = $this->input->post('icon5');
        $formArray['icon6'] = $this->input->post('icon6');
        $formArray['title'] = $this->input->post('title');
        $formArray['description'] = $this->input->post('description');
        $formArray['sub_title1'] = $this->input->post('sub_title1');
        $formArray['sub_description1'] = $this->input->post('sub_description1');
        $formArray['sub_title2'] = $this->input->post('sub_title2');
        $formArray['sub_description2'] = $this->input->post('sub_description2');
        $formArray['sub_title3'] = $this->input->post('sub_title3');
        $formArray['sub_description3'] = $this->input->post('sub_description3');
        $formArray['sub_title4'] = $this->input->post('sub_title4');
        $formArray['sub_description4'] = $this->input->post('sub_description4');
        $formArray['sub_title5'] = $this->input->post('sub_title5');
        $formArray['sub_description5'] = $this->input->post('sub_description5');
        $formArray['sub_title6'] = $this->input->post('sub_title6');
        $formArray['sub_description6'] = $this->input->post('sub_description6');
    
        return $formArray;
    }
    
	











  
	

















// screenshort code   

public function screenshot()
{
	$this->load->view('screenshot');
}
// public function __construct() {
// 	parent::__construct();
// 	$this->load->model('Admin_model');
// 	$this->load->helper('url');
// }

public function index() {
	// Load the view here if needed
}

public function insert_screenshort() {
    $formArray = array(
        'title' => $this->input->post('title'),
        'description' => $this->input->post('description'),
        'title1' => $this->input->post('title1'),
        'title2' => $this->input->post('title2'),
        'title3' => $this->input->post('title3'),
        'video' => $this->input->post('video'),
        'description2' => $this->input->post('description2'),
        'sub_title' => $this->input->post('sub_title'),
        'sub_description' => $this->input->post('sub_description'),
        'sub_title1' => $this->input->post('sub_title1'),
        'sub_description1' => $this->input->post('sub_description1'),
        'sub_title2' => $this->input->post('sub_title2'),
        'sub_description2' => $this->input->post('sub_description2'),
        'sub_title3' => $this->input->post('sub_title3'),
        'sub_description3' => $this->input->post('sub_description3')
    );

    // Load upload library
    $this->load->library('upload');

    // Initialize config for the main image
    $config['upload_path'] = './uploads/banners/';
    $config['allowed_types'] = "jpg|png|jpeg|gif|PNG";
    $config['overwrite'] = FALSE;
    $config['max_size'] = '10240'; // 10 MB

    // Check if an image file is selected for the main image
    if (!empty($_FILES['image']['name'])) {
        $this->upload->initialize($config); // Initialize the upload library with new configuration

        if (!$this->upload->do_upload('image')) {
            // If upload fails, handle the error
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        } else {
            $imageDetailArray = $this->upload->data();
            $image = $imageDetailArray['file_name'];
            $formArray['image'] = $image;
        }
    }

    // Loop through images 1 to 8
    for ($i = 1; $i <= 16; $i++) {
        $field_name = 'image' . $i;
        if (!empty($_FILES[$field_name]['name'])) {
            $this->upload->initialize($config); // Initialize the upload library with new configuration
            if (!$this->upload->do_upload($field_name)) {
                // If upload fails, handle the error
                $error = $this->upload->display_errors();
                echo $error;
                exit();
            } else {
                $imageDetailArray = $this->upload->data();
                $formArray[$field_name] = $imageDetailArray['file_name'];
            }
        }
    }

    // Insert data into the database
    $this->Admin_model->screenshort($formArray);

    // Redirect to home view after insertion
    redirect(base_url() . 'homeview');
}




public function screenshort_edit ($id)
	{
   $this->load->model('Admin_model');
   $data['edit']=$this->Admin_model->edit_screenshort($id); 
//    print_r($data);
//    die;
   $this->load->view('screenshort/screenshort_edit',$data);
	}
 

 

    public function update_screenshort($id) {
        // Process other form data
        $formArray = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'title1' => $this->input->post('title1'),
            'title2' => $this->input->post('title2'),
            'title3' => $this->input->post('title3'),
            'description2' => $this->input->post('description2'),
            'sub_title' => $this->input->post('sub_title'),
            'sub_description' => $this->input->post('sub_description'),
            'sub_title1' => $this->input->post('sub_title1'),
            'sub_description1' => $this->input->post('sub_description1'),
            'sub_title2' => $this->input->post('sub_title2'),
            'sub_description2' => $this->input->post('sub_description2'),
            'sub_title3' => $this->input->post('sub_title3'),
            'sub_description3' => $this->input->post('sub_description3')
        );
    
        // Load upload library
        $this->load->library('upload');
    
        // Define upload configuration
        $config['upload_path'] = './uploads/banners/';
        $config['allowed_types'] = "jpg|png|jpeg|gif|PNG";
        $config['overwrite'] = FALSE;
        $config['max_size'] = '10240'; // 10 MB
    
        // Initialize upload library with configuration
        $this->upload->initialize($config);
    
        // Loop through images 1 to 8
        for ($i = 1; $i <= 16; $i++) {
            $field_name = ($i == 1) ? 'image' : 'image'.$i;
    
            if (!empty($_FILES[$field_name]['name'])) {
                if (!$this->upload->do_upload($field_name)) {
                    // If upload fails, handle the error
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } else {
                    $imageDetailArray = $this->upload->data();
                    $formArray[$field_name] = $imageDetailArray['file_name'];
                }
            }
        }
    
        // Update database with new information
        $this->Admin_model->updateScreenshort($id, $formArray);
    
        // Redirect after successful update
        redirect(base_url().'homeview');
    }
    

	
	
	
	







// Blogs
public function blog()
{
	$this->load->view('blog');
}
public function insert_blogs() {
    $formArray = array();

    // Function to handle image upload
    function handle_image_upload($image_name) {
        $upload_path = './uploads/banners/';
        $config = array(
            'upload_path' => $upload_path,
            'allowed_types' => "jpg|png|jpeg|gif|PNG",
            'overwrite' => FALSE,
            'upload_max_filesize' => '10M',
        );

        $CI =& get_instance();
        $CI->load->library('upload');
        $CI->upload->initialize($config);

        if (!$CI->upload->do_upload($image_name)) {
            $error = $CI->upload->display_errors();
            // Handle the error (you might want to do something here)
            echo $error;
            return ''; // Return an empty string if upload fails
        } else {
            $imageDetailArray = $CI->upload->data();
            return $imageDetailArray['file_name'];
        }
    }

    // Check if the first image file is selected
    if (!empty($_FILES['image']['name'])) {
        $formArray['image'] = handle_image_upload('image');
    } else {
        $formArray['image'] = '';
    }

    // Check if the second image file is selected
    if (!empty($_FILES['image1']['name'])) {
        $formArray['image1'] = handle_image_upload('image1');
    } else {
        $formArray['image1'] = '';
    }

    // Check if the third image file is selected
    if (!empty($_FILES['image2']['name'])) {
        $formArray['image2'] = handle_image_upload('image2');
    } else {
        $formArray['image2'] = '';
    }

    // Check if the fourth image file is selected
    if (!empty($_FILES['image3']['name'])) {
        $formArray['image3'] = handle_image_upload('image3');
    } else {
        $formArray['image3'] = '';
    }

    // Check if the fifth image file is selected
    if (!empty($_FILES['image4']['name'])) {
        $formArray['image4'] = handle_image_upload('image4');
    } else {
        $formArray['image4'] = '';
    }
	if (!empty($_FILES['image5']['name'])) {
        $formArray['image5'] = handle_image_upload('image5');
    } else {
        $formArray['image5'] = '';
    }
	if (!empty($_FILES['image6']['name'])) {
        $formArray['image6'] = handle_image_upload('image6');
    } else {
        $formArray['image6'] = '';
    }
	 

    // Get other form data
    $formArray['title'] = $this->input->post('title');
    $formArray['description'] = $this->input->post('description');
    $formArray['sub_title1'] = $this->input->post('sub_title1');
    $formArray['sub_description1'] = $this->input->post('sub_description1');
	$formArray['url1'] = $this->input->post('url1');
    $formArray['sub_title2'] = $this->input->post('sub_title2');
    $formArray['sub_description2'] = $this->input->post('sub_description2');
	$formArray['url2'] = $this->input->post('url2');
    $formArray['sub_title3'] = $this->input->post('sub_title3');
    $formArray['sub_description3'] = $this->input->post('sub_description3');
	$formArray['url3'] = $this->input->post('url3');
    $formArray['sub_title4'] = $this->input->post('sub_title4');
    $formArray['sub_description4'] = $this->input->post('sub_description4');
	$formArray['url4'] = $this->input->post('url4');
    $formArray['sub_title5'] = $this->input->post('sub_title5');
    $formArray['sub_description5'] = $this->input->post('sub_description5');
	$formArray['url5'] = $this->input->post('url5');
    $formArray['sub_title6'] = $this->input->post('sub_title6');
    $formArray['sub_description6'] = $this->input->post('sub_description6');
	$formArray['url6'] = $this->input->post('url6');
	$formArray['sub_title6'] = $this->input->post('sub_title7');
    $formArray['sub_description6'] = $this->input->post('sub_description7');
	$formArray['url7'] = $this->input->post('url7');
	$formArray['url8'] = $this->input->post('url8');
    $this->load->model('Admin_model');
    $data = $this->Admin_model->blog($formArray);

    redirect(base_url() . 'homeview');
}


public function blog_edit ($id)
	{
   $this->load->model('Admin_model');
   $data['edit']=$this->Admin_model->edit_blog($id); 
   // print_r($data);
   // die;
   $this->load->view('blogs/blog_edit',$data);
	}





// pricing 

public function pricing()
{
    $this->load->view('pricing');
}

public function insert_pricing() {
    $formArray = array();

    // Function to handle image upload
    function handle_image_upload($image_name) {
        $upload_path = './uploads/banners/';
        $config = array(
            'upload_path' => $upload_path,
            'allowed_types' => "jpg|png|jpeg|gif|PNG",
            'overwrite' => FALSE,
            'upload_max_filesize' => '10M',
        );

        $CI =& get_instance();
        $CI->load->library('upload');
        $CI->upload->initialize($config);

        if (!$CI->upload->do_upload($image_name)) {
            $error = $CI->upload->display_errors();
            // Handle the error (you might want to do something here)
            echo $error;
            return ''; // Return an empty string if upload fails
        } else {
            $imageDetailArray = $CI->upload->data();
            return $imageDetailArray['file_name'];
        }
    }

    // Check if the first image file is selected
    if (!empty($_FILES['image1']['name'])) {
        $formArray['image1'] = handle_image_upload('imag1e');
    } else {
        $formArray['image1'] = '';
    }
 

    // Check if the third image file is selected
    if (!empty($_FILES['image2']['name'])) {
        $formArray['image2'] = handle_image_upload('image2');
    } else {
        $formArray['image2'] = '';
    }

    // Check if the fourth image file is selected
    if (!empty($_FILES['image3']['name'])) {
        $formArray['image3'] = handle_image_upload('image3');
    } else {
        $formArray['image3'] = '';
    }

    // Check if the fifth image file is selected
    if (!empty($_FILES['image4']['name'])) {
        $formArray['image4'] = handle_image_upload('image4');
    } else {
        $formArray['image4'] = '';
    }

    // Check if the sixth image file is selected
    if (!empty($_FILES['image5']['name'])) {
        $formArray['image5'] = handle_image_upload('image5');
    } else {
        $formArray['image5'] = '';
    }
    if (!empty($_FILES['image6']['name'])) {
        $formArray['image6'] = handle_image_upload('image6');
    } else {
        $formArray['image6'] = '';
    }
    if (!empty($_FILES['image7']['name'])) {
        $formArray['image7'] = handle_image_upload('image7');
    } else {
        $formArray['image7'] = '';
    }
    if (!empty($_FILES['image8']['name'])) {
        $formArray['image8'] = handle_image_upload('image8');
    } else {
        $formArray['image8'] = '';
    }
	 
	 

    // Get other form data
    $formArray['title'] = $this->input->post('title');
    $formArray['description'] = $this->input->post('description');

 
	$formArray['url1'] = $this->input->post('url1');
 
	$formArray['url2'] = $this->input->post('url2');

 
	$formArray['url3'] = $this->input->post('url3');

    $formArray['title4'] = $this->input->post('title4');
    $formArray['description4'] = $this->input->post('description4');
    
   
    $formArray['icon1'] = $this->input->post('icon1');
    $formArray['get_now1'] = $this->input->post('get_now1');
	$formArray['app_store'] = $this->input->post('app_store');

    $formArray['icon2'] = $this->input->post('icon2');
    $formArray['get_now2'] = $this->input->post('get_now2');
	$formArray['play_store'] = $this->input->post('play_store');

    $formArray['icon3'] = $this->input->post('icon3');
    $formArray['get_now3'] = $this->input->post('get_now3');
	$formArray['microsoft_store1'] = $this->input->post('microsoft_store1');

    $formArray['icon4'] = $this->input->post('icon4');
    $formArray['percent1'] = $this->input->post('percent1');
	$formArray['product1'] = $this->input->post('product1');

    $formArray['icon5'] = $this->input->post('icon5');
    $formArray['percent2'] = $this->input->post('percent2');
	$formArray['product2'] = $this->input->post('product2');

    $formArray['icon6'] = $this->input->post('icon6');
    $formArray['percent3'] = $this->input->post('percent3');
	$formArray['product3'] = $this->input->post('product3');

    $formArray['icon7'] = $this->input->post('icon7');
    $formArray['percent4'] = $this->input->post('percent4');
	$formArray['product4'] = $this->input->post('product4');

    $formArray['title5'] = $this->input->post('title5');
    $formArray['description5'] = $this->input->post('description5');

    $formArray['testimonialdescription1'] = $this->input->post('testimonialdescription1');
    $formArray['name1'] = $this->input->post('name1');
	$formArray['profession1'] = $this->input->post('profession1');
    $formArray['company1'] = $this->input->post('company1');

    $formArray['testimonialdescription2'] = $this->input->post('testimonialdescription2');
    $formArray['name2'] = $this->input->post('name2');
	$formArray['profession2'] = $this->input->post('profession2');
    $formArray['company2'] = $this->input->post('company2');

    $formArray['testimonialdescription3'] = $this->input->post('testimonialdescription3');
    $formArray['name3'] = $this->input->post('name3');
	$formArray['profession3'] = $this->input->post('profession3');
    $formArray['company3'] = $this->input->post('company3');


    $this->load->model('Admin_model');
    $data = $this->Admin_model->pricing($formArray);

    redirect(base_url() . 'homeview');
}

public function pricing_edit ($id)
	{
   $this->load->model('Admin_model');
   $data['edit']=$this->Admin_model->edit_pricing($id); 
   // print_r($data);
   // die;
   $this->load->view('pricing/pricing_edit',$data);
	}

    public function update_pricing($id) {
        $formArray = $this->process_form_daata($id);

    // Update database with new information
    $this->Admin_model->updateAbout($id, $formArray); // Assuming a method like updateAbout exists in your Admin_model to update the about section

    // Redirect after successful update
    redirect(base_url().'homeview');
}

private function process_form_daata($id) {
    $formArray = array();

    // Retrieve old images from database
    $oldImages = $this->Admin_model->getpricingImages($id); // Assuming getFeaturesImages retrieves multiple images associated with the given ID

    // Handle image uploads
    $upload_path = './uploads/banners';
    $config = array(
        'upload_path' => $upload_path,
        'allowed_types' => "jpg|png|jpeg|gif",
        'overwrite' => FALSE,
        'max_size' => 10240, // 10 MB in kilobytes
    );
    $this->load->library('upload', $config);

    for ($i = 1; $i <= 8; $i++) { // Assuming you have 3 image inputs named image1, image2, image3
        if (!empty($_FILES['image' . $i]['name'])) {
            if ($this->upload->do_upload('image' . $i)) {
                $imageDetailArray = $this->upload->data();
                $formArray['image' . $i] = $imageDetailArray['file_name'];

                // Delete old image
                if (!empty($oldImages[$i-1]) && file_exists($upload_path.'/'.$oldImages[$i-1])) {
                    unlink($upload_path.'/'.$oldImages[$i-1]);
                }
            } else {
                $error = $this->upload->display_errors();
                echo $error;
                return;
            }
        }
    }
	 
	 

    // Get other form data
    $formArray['title'] = $this->input->post('title');
    $formArray['description'] = $this->input->post('description');
 
	$formArray['url1'] = $this->input->post('url1');

 
	$formArray['url2'] = $this->input->post('url2');
 
	$formArray['url3'] = $this->input->post('url3');

    $formArray['title4'] = $this->input->post('title4');
    $formArray['description4'] = $this->input->post('description4');
    
   
    $formArray['icon1'] = $this->input->post('icon1');
    $formArray['get_now1'] = $this->input->post('get_now1');
	$formArray['app_store'] = $this->input->post('app_store');

    $formArray['icon2'] = $this->input->post('icon2');
    $formArray['get_now2'] = $this->input->post('get_now2');
	$formArray['play_store'] = $this->input->post('play_store');

    $formArray['icon3'] = $this->input->post('icon3');
    $formArray['get_now3'] = $this->input->post('get_now3');
	$formArray['microsoft_store1'] = $this->input->post('microsoft_store1');

    $formArray['icon4'] = $this->input->post('icon4');
    $formArray['percent1'] = $this->input->post('percent1');
	$formArray['product1'] = $this->input->post('product1');

    $formArray['icon5'] = $this->input->post('icon5');
    $formArray['percent2'] = $this->input->post('percent2');
	$formArray['product2'] = $this->input->post('product2');

    $formArray['icon6'] = $this->input->post('icon6');
    $formArray['percent3'] = $this->input->post('percent3');
	$formArray['product3'] = $this->input->post('product3');

    $formArray['icon7'] = $this->input->post('icon7');
    $formArray['percent4'] = $this->input->post('percent4');
	$formArray['product4'] = $this->input->post('product4');

    $formArray['title5'] = $this->input->post('title5');
    $formArray['description5'] = $this->input->post('description5');

    $formArray['testimonialdescription1'] = $this->input->post('testimonialdescription1');
    $formArray['name1'] = $this->input->post('name1');
	$formArray['profession1'] = $this->input->post('profession1');
    $formArray['company1'] = $this->input->post('company1');

    $formArray['testimonialdescription2'] = $this->input->post('testimonialdescription2');
    $formArray['name2'] = $this->input->post('name2');
	$formArray['profession2'] = $this->input->post('profession2');
    $formArray['company2'] = $this->input->post('company2');

    $formArray['testimonialdescription3'] = $this->input->post('testimonialdescription3');
    $formArray['name3'] = $this->input->post('name3');
	$formArray['profession3'] = $this->input->post('profession3');
    $formArray['company3'] = $this->input->post('company3');


    $this->load->model('Admin_model');
    $data = $this->Admin_model->updatepricing($id, $formArray);

    redirect(base_url() . 'homeview');
	}
	


























	public function contact()
	{
		$this->load->view('contact');
	}
	public function subscribe()
	{
		$this->load->view('subscribe');
	}
	public function error()
	{
		$this->load->view('error');
	}
	public function blank_page()
	{
		$this->load->view('blank_page');
	}
	public function charts()
	{
		$this->load->view('charts');
	}
	public function table()
	{
		$this->load->view('table');
	}




 public function header(){
    $this->load->view('Common/header');
 }
 public function insert_header() {
		$formArray = array();
	
		 
		if (!empty($_FILES['image']['name'])) {
			$upload_path = './uploads/banners/';
			$config = array(
				'upload_path' => $upload_path,
				'allowed_types' => "jpg|png|jpeg|gif|PNG",
				'overwrite' => FALSE,
				'upload_max_filesize' => '10M',
				 
			);
	
			$this->load->library('upload');
			$this->upload->initialize($config);
	
			if (!$this->upload->do_upload('image')) {
				 
				$error = $this->upload->display_errors();
				echo $error;  
				exit();  
			} else {
				$imageDetailArray = $this->upload->data();
				$image = $imageDetailArray['file_name'];
				$formArray['image'] = $image;
			}
		} else {
			 
			$formArray['image'] = '';
		}
	
		 
	 // Get other form data
     $formArray['url1'] = $this->input->post('url1');
     $formArray['url2'] = $this->input->post('url2');
     $formArray['url3'] = $this->input->post('url3');
     $formArray['url4'] = $this->input->post('url4');
     $formArray['url5'] = $this->input->post('url5');
     $formArray['url6'] = $this->input->post('url6');
     $formArray['url7'] = $this->input->post('url7');
     $formArray['url8'] = $this->input->post('url8');
 
    
     $this->load->model('Admin_model');
     $data = $this->Admin_model->header($formArray);
 
     redirect(base_url() . 'homeview');
    }
public function header_edit ($id)
	{
   $this->load->model('Admin_model');
   $data['edit']=$this->Admin_model->edit_header($id); 
   // print_r($data);
   // die;
   $this->load->view('Common/header_edit',$data);
	}

    public function update_header($id) {
        $formArray = array();
    
        // Retrieve old image from database
        $oldImage = $this->Admin_model->getheaderImage($id); // Assuming getheaderImage retrieves a single image associated with the given ID
    
        // Handle image upload
        if (!empty($_FILES['image']['name'])) {
            $upload_path = './uploads/banners';
            $config = array(
                'upload_path' => $upload_path,
                'allowed_types' => "jpg|png|jpeg|gif",
                'overwrite' => FALSE,
                'max_size' => 10240, // 10 MB in kilobytes
            );
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('image')) {
                $imageDetailArray = $this->upload->data();
                $formArray['image'] = $imageDetailArray['file_name'];
    
                // Delete old image
                if (!empty($oldImage) && file_exists($upload_path.'/'.$oldImage)) {
                    unlink($upload_path.'/'.$oldImage);
                }
            } else {
                $error = $this->upload->display_errors();
                echo $error;
                return;
            }
        }
        // Get other form data
        $formArray['url1'] = $this->input->post('url1');
        $formArray['url2'] = $this->input->post('url2');
        $formArray['url3'] = $this->input->post('url3');
        $formArray['url4'] = $this->input->post('url4');
        $formArray['url5'] = $this->input->post('url5');
        $formArray['url6'] = $this->input->post('url6');
        $formArray['url7'] = $this->input->post('url7');
        $formArray['url8'] = $this->input->post('url8');
          
        $this->load->model('Admin_model');
        $data = $this->Admin_model->updateheader($id, $formArray);
        redirect(base_url() . 'homeview');
    }
    
    





 public function footer(){
    $this->load->view('Common/footer');
 }
 public function insert_footer() {
    $formArray = array();

 


    // Get other form data
    $formArray['title'] = $this->input->post('title');
    $formArray['description'] = $this->input->post('description');
    $formArray['icon1'] = $this->input->post('icon1');
    $formArray['icon2'] = $this->input->post('icon2');
    $formArray['icon3'] = $this->input->post('icon3');
    $formArray['url1'] = $this->input->post('url1');
    $formArray['url2'] = $this->input->post('url2');
    $formArray['url3'] = $this->input->post('url3');
     

   
    $this->load->model('Admin_model');
    $data = $this->Admin_model->footer($formArray);

    redirect(base_url() . 'homeview');
}
public function footer_edit ($id)
	{
   $this->load->model('Admin_model');
   $data['edit']=$this->Admin_model->edit_footer($id); 
   // print_r($data);
   // die;
   $this->load->view('Common/footer_edit',$data);
	}

    public function update_footer($id) {
        $formArray = array();

 
 
    $formArray['title'] = $this->input->post('title');
    $formArray['description'] = $this->input->post('description');
    $formArray['icon1'] = $this->input->post('icon1');
    $formArray['icon2'] = $this->input->post('icon2');
    $formArray['icon3'] = $this->input->post('icon3');
    $formArray['url1'] = $this->input->post('url1');
    $formArray['url2'] = $this->input->post('url2');
    $formArray['url3'] = $this->input->post('url3');
    $this->load->model('Admin_model');
    $data = $this->Admin_model->updatefooter($id, $formArray);

    redirect(base_url() . 'homeview');
	}
    public function ind()
	{
		$this->load->view('front/frontend');
	}
    




  // inquery form 

public function insert_inquery() {
    $this->load->library('upload');
    $formArray['name']=$this->input->post('name');
    $formArray['email']=$this->input->post('email');
    $formArray['subject']=$this->input->post('subject');
    $formArray['message']=$this->input->post('message');
  
    $this->load->library('email');
                $mailArray['email'] = $this->input->post('email');
                $mailArray['password'] = $this->input->post('password');
                 
                // print_r($mailArray);
                // die;
                 
                $to_email = $this->input->post('email');
                $message = $this->load->view("enquery_form", $formArray, true);
                // print_r($message);
                // die();
               
                $subject = "welcome to Bizoram";
                 
                $config['protocol']    = 'smtp';
                $config['smtp_host']    = 'ssl://smtp.gmail.com';
                $config['smtp_port']    = '465';
                $config['smtp_timeout'] = '7';
                $config['smtp_user']    = 'ashishnkteck123@gmail.com';
                $config['smtp_pass']    = 'kdlb mneg cuac ufsx';
                $config['charset']    = 'utf-8';
                $config['newline']    = "\r\n";
                $config['mailtype'] = 'html';  
                $config['validation'] = TRUE;     

                $this->email->initialize($config);
                $this->email->from('ravindernktech@gmail.com', 'Bizoram');
                $this->email->set_newline("\r\n");
                $this->email->to($to_email);
                $this->email->subject($subject);
                $this->email->message($message);
 
   
                if ($this->email->send()) { 
                //     echo "hello";
                //   die();
                $this->load->model('admin_model');
                $data=$this->admin_model->enquery_insert($formArray);
               // $success = true;
                //redirect($urls."?success=true");
                  $this->session->set_flashdata('msg',"data submitted successfully");
                  $this->session->set_flashdata('msg_class','alert-success');
               redirect(base_url() .' ');
                  }else{ 
                        echo "failed";
                      }
                }
}


























