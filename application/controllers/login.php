<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller
{
    public function loginFun($page = 'loginDefault')
    {
        if(!file_exists(APPPATH.'views/login/'.$page.'.php'))
        {
            show_404();
        }

        $this->load->view('templates/headerLogin');
        $this->load->view('login/'.$page);
        $this->load->view('templates/footerLogin');
    }
    

}
?>