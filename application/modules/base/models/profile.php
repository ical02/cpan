<?php  
   class profile extends CI_Model  
   {  
	private $Users= 'Users';
	function __construct()  
	{  
	 	// Call the Model constructor  
		parent::__construct();  
	}  
	
	// get user by id
    function select($id){
		
		if($id != FALSE) {
			$query = $this->db->get_where('Users', array('UserId' => $id));
			return $query->row_array();
		  }
		  else {
			return FALSE;
		  }
    }
	
	function profile_update($id,$data){
		$this->db->where('Userid', $id);
		$this->db->update('Users', $data);
	}

	//user select function  
	//public function select($id)  
	//{   
	//	$dataselect = $this->db->query('SELECT * From Users'); 
	//	return $dataselect->result_array();  
	//}  
	// delete user by id
	//public function delete($id){
	//	$this->db->where('UserId', $id);
	//	$this->db->delete($this->Users);
	//}
	// update user by id
	function update($id, $UserName){
		$this->db->where('UserId', $id);
		$this->db->update($this->Users, $UserName);
	}
	
   }  
?>  