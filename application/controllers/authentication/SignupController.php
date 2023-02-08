<?php

class SignupController extends CI_Controller
{
    public function index()
    {
        // Render the login view
        $this->load->view('signUp/signUp');
    }
}
