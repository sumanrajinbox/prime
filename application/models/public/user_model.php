<?php 
class user_model extends ci_model
{
	public function user_check($uname,$password)
	{
	$sql=$this->db->query("select * from users2 where uname='".$uname."' and password='".$password."' and status= 1 ");	
	if($sql->num_rows()>=1){
		 $userid =$sql->row_array();
		 return $userid['id'];
	}
	}
	public function insert_user($data)
	{
	$userdata= array(
	'fname'=>$data['fname'],
	'lname'=>$data['lname'],
	'email'=>$data['email'],
	'password'=>$data['password'],
	'status'=>1 ,
	'dated'=>time() ,
	);
	$this->db->insert('users2',$userdata);
	echo $this->db->insert_id();
	echo $this->db->affected_rows();
	echo $this->db->last_query();
	echo  'success' ;	
		}
	
	public function about()
	{
  $query = $this->db->get('about');
  return $query->result_array();	
	}
		
		
		
		
	}//class end 



?>