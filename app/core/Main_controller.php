<?php
/*
* Class to load model and view for use by child classes
*/
class Main_controller {
         public function model($model){
               require_once 'app/models/' .$model. '.php'; // Include model class
               return new $model(); // Return an instance of the model class
           }

        public function view($view,$data){
            require_once'app/views/' .$view . '.php'; // Include the view with data
        }
}