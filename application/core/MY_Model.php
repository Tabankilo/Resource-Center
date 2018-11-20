<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model 
{
	public function select($string ='*', $escape = true)
	{
		$this->db->select($string, $escape);
		return $this;
	}

	public function get($table, $where = [], $order_by = [])
	{
		if( count($where) )
		{
			$this->db->where($where);
		}
		
		if( count($order_by) )
		{
			foreach ($order_by as $key => $value) 
			{
				$this->db->order_by($key, $value);
			}
		}
		return $this->db->get( $table );
	}
}