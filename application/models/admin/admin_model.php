<?php
class admin_model extends CI_model
{
public function login($data)
{
	$sql=$this->db->query("select * from admin where uname='".$data['uname']."' and password='".$data['password']."' and status= 1 ");	
	if($sql->num_rows()>=1){
		 $userid =$sql->row_array();
	 return $userid['uid'];
	}
	
	
	
	
}


}//end class

?>