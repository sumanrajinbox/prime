<?php


class admin extends My_controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		
	$this->load->view('admin/login_view.php');	
	}
		
	
	
	public function login() {
		$this->form_validation->set_rules( 'uname', 'User Name ', 'required|trim' );
		$this->form_validation->set_rules( 'password', 'Password', 'required|trim' );
		if($this->form_validation->run()==true)
		{
		$data = array (
		'uname' => $this->input->post('uname'),	
		'password' => $this->input->post('password'));
		$this->load->model('admin/admin_model');
		$result = $this->admin_model->login($data);
			if($result == true)
			{
			 return redirect('admin/home');
				
			}
		}
		else
		{
		$this->load->view('admin/login_view');		
		}
	}
	public function signup()
	{
		$this->load->view('admin/signup_view.php');
		
	}
	public function home()
	{
		$this->load->view('admin/home_view.php');
		
	}
	
	
	






}//end class

?>