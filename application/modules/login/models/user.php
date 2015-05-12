<?php
Class User extends CI_Model
{
function login($username, $password)
{
   $this -> db -> select('UserId, Name, Email, Password, Level, LevelName, Status, Picture');
   $this -> db -> from('UserLogin');
   $this -> db -> where('Email', $username);
   $this -> db -> where('Password', MD5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
}
}
?>