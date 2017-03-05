<?php
/*
* Class to connect to a database and fetch the data for the home page
*/
class Home_model extends Main_model {
     public function get_data(){
        $conn = new Database(); // Create new Database object
        $conn =  $this->connect(); // Create connection to database
        $sql = 'SELECT * FROM home'; // Write sql query
        $stmt = $conn -> prepare( $sql ); // Prepare statement
        $stmt-> execute(); // Execute statement
        $data =$stmt->fetch(); // Assign the fetched data to a variable
       return $data; // Return data
    }
}