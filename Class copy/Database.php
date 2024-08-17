<?php
Class Database{
    public $conn;
    public function __construct(){
        $this->conn=new mysqli('localhost','u320585682_hireskillpro','Mydatabase17','u320585682_hireskillpro');
    }  
}
?>