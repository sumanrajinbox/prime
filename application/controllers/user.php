<?php
defined( 'BASEPATH' )OR exit( 'Not Allowed' );

class User extends MY_controller {

	function __Construct() {
		parent::__Construct();

	}
	public function index() {

		$this->load->model( 'public/user_model' );
		$data[ 'data2' ] = $this->user_model->about(); // calling Post model method getPosts()
		//print_r ($data2);exit();
		$this->load->view( 'public/home_view', $data );


		//$this->load->view('home_view',$this->$data);

	}
	public function signup() {


		$this->form_validation->set_rules( 'fname', 'First name', 'required|alpha' );
		$this->form_validation->set_rules( 'lname', 'Last name', 'required|alpha' );
		$this->form_validation->set_rules( 'email', 'Email', 'required|valid_email' );
		$this->form_validation->set_rules( 'password', 'Password', 'required|alpha_numeric_spaces|min_length[8]|is_unique[users2.password]' );
		$this->form_validation->set_rules( 'cpassword', 'Confirm password', 'required|matches[password]' );
		$this->form_validation->set_error_delimiters( '<p class="text-danger">', '</p>' );

		if ( $this->form_validation->run() == true ) {
			$fname = $this->input->post( 'fname' );
			$lname = $this->input->post( 'lname' );
			$password = $this->input->post( 'password' );
			$email = $this->input->post( 'email' );
			$this->load->model( 'public/user_model' );
			$user_data = array(
				'fname' => $fname,
				'lname' => $lname,
				'email' => $email,
				'password' => $password
			);
			if ( $signup_data = $this->user_model->insert_user( $user_data ) == true ) {
				echo $signup_data;
				echo "user data inserted successfully ";
			}
		} else {
			$this->load->view( 'public/signup_view' );
		}
	}
	public function login() {
		
		$this->form_validation->set_rules( 'uname', 'User Name ', 'required' );
		$this->form_validation->set_rules( 'password', 'Password', 'required' );
		$this->form_validation->set_rules('captcha','captcha','required');
		if($this->input->post())
		{	
			if($this->input->post('captcha')!==$this->session->userdata('captcha'))
		{
			
			$this->session->set_flashdata('errorcaptcha','CAPTCHA not matched');
				//return redirect ('user/login');
			
		}
		if ( $this->form_validation->run() == true ) 
		{
		
			$uname = $this->input->post( 'uname' );
			$password = $this->input->post( 'password' );
			$this->load->model( 'public/user_model' );
			if ( $userid = $this->user_model->user_check( $uname, $password ) > 0 ) 
			{
				$this->session->set_userdata( 'userid', $userid );
				return redirect( 'public/user/afterlogin' );
			} 
			else 
			{ 
				$this->session->set_flashdata('unsuccess','Invalid username or Password');
			return redirect ('user/login');
			 }				
		}
		
	}
		else
		{
			
			
			 $random_number = substr(number_format(time() * rand(),0,'',''),0,6);
  $vals = array(
            // 'word' => 'dev123',
             'img_path' => './captcha/',
             'img_url' => base_url().'captcha/',
	  		 'font_path'=> base_url().'system/fonts/my.ttf',
             'img_width' => 150,
             'img_height' => 35,
             'expiration' => 7200,
	  		 'pool'=>'SUMANRAJ',
	  		 'word_length'=>'3',
	  		 'font_size'=> 16,
	  		 'colors'=> array(
             'background' => array(255, 255, 255),
             'border' => array(223,20,20),
             'text' => array(0, 0, 0),
             'grid' => array(151,154,166)
        )
            );
	 $data['captcha'] = create_captcha($vals);
	 $this->session->set_userdata('captcha',$data['captcha']['word']);
     $this->load->view('public/login_view', $data);	
			
		
			
		
		}
		
	}

	
	//==================================================================================================

	public	function afterlogin() {
		$this->load->view( 'public/welcome_message.php' );
	}
		public	function dynamic() {
		$this->load->view( 'public/dynamic_view.php' );
	}
	public	function loginpage() {
	
		//$this->load->view( 'public/login_view',captcha());
	}
	public	function signuppage() {
		$this->load->view( 'public/signup_view' );
	}
	//====================================================================================================



} //end class

?>