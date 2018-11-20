<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        if( $this->session->userdata('logged_in') == true )
        {
            redirect(site_url('pages/home'));
        }
    }

    public function index()
    {
        $this->load->view('login/login', $this->data);
    }

    public function auth() 
    { 
        // if the result is query result is 1 then valid user
        $result = $this->user->login($this->input->post('username'), $this->input->post('password'));
        if ( array($result) ) 
        {
            // error - redirect to login page with flashdata invalid msg
            $this->session->set_flashdata('error', $result['message']);
            redirect(site_url('login/login'), 'refresh');
            exit();
        } 
        else 
        {            
            redirect(base_url('login'));   
            // set the session 'loggin_in' as true
            $this->session->set_userdata([
                'logged_in' => true,
                'auth' => $result->row()
            ]);
            $this->session->set_flashdata('success', 'You are welcome '. $result->row()->names );

            // redirect home
            redirect(site_url('pages/home'),  'refresh');
            exit();
        }
    }

    public function logout() 
    {
        //unset the logged_in session and redirect to login page
        $this->session->unset_userdata('logged_in');
        redirect(site_url('login/home'));
    }
}
