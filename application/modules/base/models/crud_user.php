<?php  
   class crud_user extends CI_Model  
   {  
	private $Users= 'Users';
	function __construct()  
	{  
	 	// Call the Model constructor  
		parent::__construct();  
	}  
	
	// get user by id
    function get_by_id($id){
        $this->db->where('UserId', $id);
        return $this->db->get($this->Users);
    }
	
	//user select function  
	public function select()  
	{   
		$dataselect = $this->db->query('SELECT * From Users'); 
		return $dataselect->result_array();  
	}  
	// delete user by id
	public function delete($id){
		$this->db->where('UserId', $id);
		$this->db->delete($this->Users);
	}
	// update user by id
	function update($id, $UserName){
		$this->db->where('UserId', $id);
		$this->db->update($this->Users, $UserName);
	}
	
   }  
?>  