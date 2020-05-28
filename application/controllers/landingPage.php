<?php
class landingPage extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('landingPage_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');

        $this->load->library('form_validation');
    }
  
    public function index()
    {
        // $data['notes'] = $this->Note_modell->notes_list();
        // $data['title'] = 'Notes List';
 
        // $routes = $this->router->routes;
        // print_r($routes);
        $this->load->helper("url");
        $this->load->view('LandingPageFolder/header');
        $this->load->view('LandingPageFolder/Home');
        $this->load->view('LandingPageFolder/footer');
    }

    
    public function Packages()
    {
        //  $routes = $this->router->routes;
        // print_r($routes);
        // $this->load->helper("url");
        // $this->load->view('LandingPageFolder/header');
        $this->load->view('LandingPageFolder/Packages');
        // $this->load->view('LandingPageFolder/footer');
    }
  
  
}