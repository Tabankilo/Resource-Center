<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
    protected $data = [];
	public function __construct() 
    {
        parent::__construct();
       
        //load the Login Model
        $this->load->model('user');

        $this->data['show_sidebar'] = true;
	}
}