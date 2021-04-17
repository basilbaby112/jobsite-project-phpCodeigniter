<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registration extends CI_Controller
{
    public function regFun($page = 'regDefault')
    {
        if(!file_exists(APPPATH.'views/registration/'.$page.'.php'))
        {
            show_404();
        }

        $this->load->view('templates/headerLogin');
        $this->load->view('registration/'.$page);
        $this->load->view('templates/footerLogin');
    }
    public function candidateAdd()
    {
        // $res=$_POST['firstName'];
        // print_r($res);
        // exit();
        $this->form_validation->set_rules('firstName','First Name','trim|required|min_length[4]');
        $this->form_validation->set_rules('lastName','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]');

        

    if($this->form_validation->run() == false)
        {
            // $this->form_validation->set_message('_check_valid_username', 'Error Message');
            $this->load->view('templates/headerLogin');
            $this->load->view('registration/regCandidate');
            $this->load->view('templates/footerLogin');
        }
    else
        {
            $this->load->model('registrationModel');
            
                $data = array(
                    'candidateLoginFName'    => $this->input->post('firstName'),
                    'candidateLoginLName'     => $this->input->post('lastName'),
                    'candidateLoginEmail'      => $this->input->post('email'),
                    'candidateLoginPassword'      => $this->input->post('password')
                    );
        
                $this->registrationModel->add($data);
            
                $this->load->view('templates/headerLogin');
                $this->load->view('login/loginCandidate');
                $this->load->view('templates/footerLogin');
        }
    }

}
?>