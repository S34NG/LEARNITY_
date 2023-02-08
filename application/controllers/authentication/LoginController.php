<?php

class LoginController extends CI_Controller
{
    public function index()
    {
        // Render the login view
        $this->load->view('signin');
    }

    public function authenticate()
    {
        // Code to authenticate user
    }
}
