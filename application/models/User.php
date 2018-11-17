<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Model
{
	public function login($username, $password) 
    {
        //query the table 'users' and get the result count
        $user = $this->db->where('username', $username)->get('users');
        if( $user->num_rows() )
        {
            // test for password
            if ( $user->get()->password !== $password )
            {
                // pass message back user password does not match
                return [ 'message' => 'username or password does not match'];
            }
            return true;
        }
        // user not found
        return [ 'message' => 'user not found in the database'];
    }

    public function create($data)
    {
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('clientinfo', $data);
    }
}