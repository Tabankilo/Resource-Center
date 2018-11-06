<?php 
/**
 * Class for handling user activities
 */
class Users extends CI_Model
{
	
	public function checkLogin($username, $password) {
        //query the table 'users' and get the result count
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        return $query->num_rows();
    }

    public function add_user($data){
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('users', $data);
    }
}