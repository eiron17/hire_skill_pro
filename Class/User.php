<?php
include_once 'Database.php';
Class User extends Database{

    /*sign up */
    public function clientsn($cfname,$clname,$csemail,$cpass){
        $sql="insert into tbluser values(NULL,'','$cfname','$clname','$csemail','$cpass','Client','1',current_timestamp())";
        if($this->conn->query($sql)==true){
            return'';
        }else{
            return $this->conn->error;
        }
    } 
    /*sign up end */
}