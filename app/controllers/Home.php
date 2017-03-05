<?php
/*
* Class to fetch the home page data (via a model) from the database and load it into the home page view.
*/
class Home extends Main_controller{

    public function index(){
        $home = $this->model('Home_model'); // Create new instance of the model
        $data = $home->get_data(); // Call the function to fetch the data
        
        /* Call methods to load required views*/
        $this->view('templates/header',$data);
       $this->view('home',$data); 
        $this->view('templates/footer',$data);
    }  
}