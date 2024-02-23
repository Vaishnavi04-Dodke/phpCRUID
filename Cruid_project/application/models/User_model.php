<?php
class User_model extends CI_Model {
    function create($formArray) {
        $this->db->insert('users', $formArray); //insert into users (name,email) value(?,?)
    }
    function all() {
        return $this->db->get('users')->result_array();  //select *from
    }
    function getuser($userId){
        $this->db->where('user_id',$userId);
        return $user=$this->db->get('users')->row_array(); //select *from user where user_id=?  
    }
   function updateuser($userId,$formArray){
    $this->db->where('user_id',$userId);
    $this->db->update('users',$formArray);          //update users SET name=? ,email=? where user_id=?
   } 
   function deleteuser($userId){
$this->db->where('user_id',$userId);
$this->db->delete('users');               //delete users from where user_id=?
   }
}
?>
