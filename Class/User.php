<?php
include_once 'Database.php';
Class User extends Database{

    /* login */
    public function login($un, $pw){
        $sql = "SELECT * FROM tbluser WHERE email='$un' and password='$pw'";
        $data = $this->conn->query($sql);
        return $data;
    }
    
    /*sign up */
    
    public function clientsn($cfname,$clname,$csemail,$cpass){
        $cid=uniqid();
        $sql="insert into tbluser values(NULL,'$cid','$cfname','$clname','$csemail','$cpass','Client','1',current_timestamp())";
        if($this->conn->query($sql)==true){
            return'';
        }else{
            return $this->conn->error;
        }
    }
    public function freelancersn($sfname,$slname,$fsemail,$spass){
        $fid=uniqid();
        $sql="insert into tbluser values(NULL,'$fid','$sfname','$slname','$fsemail','$spass','Freelancer','1',current_timestamp())";
        if($this->conn->query($sql)==true){
            return'';
        }else{
            return $this->conn->error;
        }
    }
    
    /*sign up end */

    /*contact us*/
    public function savecontactus($contactname,$contactemail,$contactmessage){
        $conusid=uniqid();
        $sql="insert into tblcontact values(NULL,'$conusid','$contactname','$contactemail','$contactmessage',current_timestamp())";
        if($this->conn->query($sql)==true){
            return'';
        }else{
            return $this->conn->error;
        }
    }
    /* contact us end*/

    /* web feedback*/

    public function webfeedback($feedbackbox){
        $wfeedid=uniqid();
        $sql="insert into tblhspfeedback values(NULL,'$wfeedid','$feedbackbox',current_timestamp())";
        if($this->conn->query($sql)==true){
            return'';
        }else{
            return $this->conn->error;
        }
    }
    /* web feedback end*/

    /* job posting */
    public function jobpostingc($jobTitle,$jobnature,$jobDescription,$qualifications,$payment,$jobterm){
        $sql="insert into tblpostjob values(NULL,'$jobTitle','$jobnature','$jobDescription','$qualifications','$payment','$jobterm',current_timestamp())";
        if($this->conn->query($sql)==true){
            return'';
        }else{
            return $this->conn->error;
        }
    }
    /* job posting end */

    /* talent profile */
    public function tprofile($tname,$temail,$skills,$exprience,$phone,$address,$city,$country){
        $tid=uniqid();
        $sql="insert into tbltinfo values(NULL,'$tid','$tname','$temail','$skills','$exprience','$phone','$address','$city','$country','Freelancer','Active',current_timestamp())";
        if($this->conn->query($sql)==true){
            return'';
        }else{
            return $this->conn->error;
        }
    }
    /* talent profile end */

        /* client profile */
        public function clientpro($cname,$cemail,$cskills,$cexprience,$cphone,$caddress,$ccity,$ccountry){
            $cpid=uniqid();
            $sql="insert into tbltinfo values(NULL,'$cpid','$cname','$cemail','$cskills','$cexprience','$cphone','$caddress','$ccity','$ccountry','Client','Active',current_timestamp())";
            if($this->conn->query($sql)==true){
                return'';
            }else{
                return $this->conn->error;
            }
        }
        /* client profile end */

        public function displayall(){
            $sql="SELECT COUNT(*) AS total_users FROM tbluser;";
            $data=$this->conn->query($sql);
            return $data;
        }
}