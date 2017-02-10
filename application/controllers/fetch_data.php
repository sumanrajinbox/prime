<?php 

class fetch_data extends CI_controller
{

function about_data()
{
	$this->load->model('fetch_model');
	$data = $this->load->fetch_model->about();
	$this->load->view('home_view',$data);
	
}

}

?>