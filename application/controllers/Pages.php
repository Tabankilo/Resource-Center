<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller 
{
    protected $data = [];
	public function __construct() 
    {
        parent::__construct();
    }

    public function index()
    {
        return $this->home();
    }

    //registration form page
    public function home() 
    {
        //check if the user is already logged in 
        //if yes redirect to the welcome page
        if ($this->session->userdata('logged_in')) 
        {
            redirect('login');
        }

        $this->data = [
            'main_content' => 'pages/home'
        ];

        //load the register page views
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
        $this->form_validation->set_rules('clientname', 'clientName', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('email_address', 'Email', 'trim|valid_email');
        $this->form_validation->set_rules('timein', 'TimeIn', 'trim|required');
        $this->form_validation->set_rules('timein', 'TimeOut', 'trim|required');

        //if the above validation fails, redirect to register page
        //with vaildation_errors();
        if ($this->form_validation->run() == FALSE) 
        {
            //set the validation errors in flashdata (one time session)
            $this->session->set_flashdata('errors', validation_errors());
            redirect('home');
        } 
        else 
        {
            $data = $this->input->post(NULL, TRUE);

            // //if not get the input values
            // $date = $this->input->post('date');
            // $agency_name = $this->input->post('agency_name');
            // $address = $this->input->post('address');
            // $telephone = $this->input->post('telephone');
            // $mandate = $this->input->post('mandate');
            // $client_name = $this->input->post('client_name');
            // $email_address = $this->input->post('email_address');
            // $phone = $this->input->post('phone');
            // $reason = $this->input->post('reason');
            // $timein = $this->input->post('timein');
            // $timeout = $this->input->post('timeout');
            // $remarks = $this->input->post('remarks');

            // $data = [
            //     'date' => $date,
            //     'agency_name' => $agency_name, 
            //     'physical_address' => $address,
            //     'telephone' => $telephone,
            //     'mandate' => $mandate,
            //     'client_name' => $client_name,
            //     'email' => $email_address,
            //     'phone' => $phone,
            //     'reason' => $reason,
            //     'timein' => $timein,
            //     'timeout' => $timeout,
            //     'total_hours' => $password,
            //     'remarks' => $remarks

            // ];

            //pass the input values to the register model
            $insert_data = $this->user->create($data);

            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Client added!');
                redirect(base_url() . 'home');
            }
        }
    }
}
