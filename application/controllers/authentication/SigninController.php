<?php

class SignininController extends CI_Controller
{
    public function index()
    {
        // Render the login view
        $this->load->view('signIn/signIn');
    }

    public function authenticate()
    {
        // Code to authenticate user
    }
}
