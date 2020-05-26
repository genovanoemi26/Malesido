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
  
    // public function create()
    // {
    //     //etooooooooooo
    //     $data['title'] = 'Create Note';
    //     // echo "Hellooo Create Note!";

    //     // Tip kapag nagpapasa ka ng data sa view, check mo muna
    //     // ayunn



    //     $this->load->view('notes/create', $data); //comment out mo muna yung view, para huminto lang siya muna dito sa Controller


    // }
      
    // public function edit($id)
    // {
    //     $id = $this->uri->segment(3);
    //     $data = array();
 
    //     if (empty($id))
    //     { 
    //      show_404();
    //     }else{
    //       $data['note'] = $this->Note_model->get_notes_by_id($id);
    //       $this->load->view('notes/edit', $data);
    //     }
    // }
    // public function store()
    // {
 
    //     $this->form_validation->set_rules('title', 'Title', 'required');
    //     $this->form_validation->set_rules('description', 'Description', 'required');
 
    //     $id = $this->input->post('id');
 
    //     if ($this->form_validation->run() === FALSE)
    //     {  
    //         if(empty($id)){
    //           redirect( base_url('note/create') ); 
    //         }else{
    //          redirect( base_url('note/edit/'.$id) ); 
    //         }
    //     }
    //     else
    //     {
    //         $data['note'] = $this->Note_model->createOrUpdate();
    //         redirect( base_url('note') ); 
    //     }
         
    // }
     
     
    // public function delete()
    // {
    //     $id = $this->uri->segment(3);
         
    //     if (empty($id))
    //     {
    //         show_404();
    //     }
                 
    //     $notes = $this->Note_model->delete($id);
         
    //     redirect( base_url('note') );        
    // }
}