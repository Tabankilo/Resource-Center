<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        //check if the user is already logged in 
        if ($this->session->userdata('logged_in') != true) 
        {
            redirect(site_url('login'), 'refresh');
        }
    }

    public function index()
    {
        return $this->home();
    }

    //registration form page
    public function home() 
    {
        $this->data = [
            'main_content' => 'pages/home'
        ];
        $this->load->view('template', $this->data);
    }

    //register validation and logic
    public function register() 
    {
        //set the form validation here
        $this->form_validation->set_rules('date', 'Date', 'required|trim');
        $this->form_validation->set_rules('agency_name', 'agencyName', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('address', 'Address', 'trim|min_length[3]');
        $this->form_validation->set_rules('telephone', 'Telephone', 'trim|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('client_name', 'clientName', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
        $this->form_validation->set_rules('timein', 'TimeIn', 'trim|required');
        $this->form_validation->set_rules('timein', 'TimeOut', 'trim|required');

        //with vaildation_errors()
        if ($this->form_validation->run() == FALSE) 
        {
            //set the validation errors in flashdata (one time session)
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'pages/home');
        } 
        else 
        {
            $data = $this->input->post(NULL, TRUE);
            //pass the input values to the register model
            //if data inserted then set the success message and redirect to login page
            if ( $this->user->create($data) ) 
            {
                $this->session->set_flashdata('success', 'Client added!');
                redirect(site_url('pages/home'));
                exit();
            }
            else
            {
                $this->session->set_flashdata('error', 'Data Insert Failed !');
                redirect(site_url('pages/home'));
                exit();
            }
        }
    }

    public function loadData()
    {
        $this->load->view('template', $this->data);
    }
}
