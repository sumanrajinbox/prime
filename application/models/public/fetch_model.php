<?php 
class fetch_model extends CI_model
{
	function about()
	{
		$this->db->select('*');
	$data = $this->db->get('about');
		return $data->result();
	}
		
}// end class


?>