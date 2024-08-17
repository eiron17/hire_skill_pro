<?php
include_once 'Database.php';
Class User extends Databases{

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
    public function jobpostingc1($jobTitle,$ccid,$skills,$jobnature,$jobterm,$paymentHourly,$hourlyRateAmount,$fixedPriceAmount,$jobDescription,$qualifications){
        $sql="insert into tblposting values(NULL,'$ccid','$jobTitle','$skills','$jobnature','$jobterm','$paymentHourly','$hourlyRateAmount','$fixedPriceAmount','$jobDescription','$qualifications',current_timestamp(),'open')";
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

        public function displayjob() {
            $sql = "SELECT * FROM tblposting where status='open'";
            $data = $this->conn->query($sql);
            return $data;
        }

        /* set up profile talent */
        public function setupprot($ttid,$tprofile_photo, $tfname, $tmname, $tlname, $tgender, $tcontact_number, $taddress,$temployment_history,$teducation,$tskills,$thourly_rate,$tavailability,$tlocation,$tlanguages){
        
            $sql="insert into tblinfo values(NULL,'$ttid','$tprofile_photo','$tfname','$tmname','$tlname','$tgender','$tcontact_number','$taddress','$temployment_history','$teducation','$tskills','$thourly_rate','$tavailability','$tlocation','$tlanguages','','','','',current_timestamp(),'pending');";
            $sql.= "update tbluser set role='Talent' where idnumber = '$ttid'";
            if($this->conn->multi_query($sql)==true){
                return'';
            }else{
                return $this->conn->error;
            }
        }
        /*ent set up profile talent *? */

        public function setupprotc($cidn,$rimg, $fname, $mname, $lname, $contactNumber, $address, $languages){
            $sql="insert into tblinfo values(NULL,'$cidn','$rimg','$fname','$mname','$lname','','$contactNumber','$address','','','','','','','$languages','','','','',current_timestamp(),'pending');";
            $sql.= "update tbluser set role='Client2' where idnumber = '$cidn'";
            if($this->conn->multi_query($sql)==true){
                return'';
            }else{
                return $this->conn->error;
            }
        }

        /*update talent role*/
        
        public function updatetr($tttid){
            $sql="update tbluser set role='Talent' where idnumber='$tttid'";
            if($this->conn->query($sql)){
                return'';
            }else{
                return $this->conn->error;
            }
        }

        /*update talent role end*/
       /*update client role*/
        
        public function updateerp($erp){
            $sql="update tbluser set role='Client2' where idnumber='$erp'";
            if($this->conn->query($sql)){
                return'';
            }else{
                return $this->conn->error;
            }
        }
        /*update talent role end*/

        public function myprofile($uid){
            $sql = "SELECT * FROM tblinfo WHERE idnumber='$uid'";
            $data = $this->conn->query($sql);
            return $data;
        }
        
        public function addapply($jobid, $clientid, $uidd){
            $sql="insert into tblapply values(NULL,'$uidd','$jobid','$clientid',current_timestamp())";
            if($this->conn->query($sql)==true){
                return'';
            }else{
                return $this->conn->error;
            }
        }

        public function getapllicant($client_id, $jobid) {
            $sql = "
                SELECT 
                    tblinfo.profile_photo AS pp, 
                    tblinfo.fname AS fn, 
                    tblinfo.lname AS ln, 
                    tblapply.job_id AS job, 
                    tblapply.talent_id AS tal 
                FROM tblapply 
                INNER JOIN tblinfo ON tblapply.talent_id = tblinfo.idnumber 
                WHERE tblinfo.status = 'pending' 
                AND tblapply.client_id = '$client_id' 
                AND tblapply.job_id = '$jobid'
            ";
            $data = $this->conn->query($sql);
            return $data;
        }
        

        public function displayapplicant($gtid){
            $sql = "SELECT * FROM tblinfo where idnumber='$gtid'";
            $data = $this->conn->query($sql);
            return $data;
        }
        public function displayapplytalent($ggtid){
            $sql = "SELECT * FROM tblinfo where idnumber='$ggtid'";
            $data = $this->conn->query($sql);
            return $data;
        }
        public function displayinfoapplicant($ggtid){
            $sql = "SELECT * FROM tblinfo where idnumber='$ggtid' and status='pending'";
            $data = $this->conn->query($sql);
            return $data;
        }
        public function displayadminuser(){
            $sql = "SELECT * FROM tbluser WHERE role <> 'Admin'";
            $data = $this->conn->query($sql);
            return $data;
        }
        public function displayadminpjobs(){
            $sql = "SELECT * FROM tblposting";
            $data = $this->conn->query($sql);
            return $data;
        }

        public function displayJobsForClient($cid) {
            // Updated SQL query to exclude jobs with status ''
            $sql = "
            SELECT p.*, COUNT(a.job_id) AS applicant_count 
            FROM tblposting p
            LEFT JOIN tblapply a ON p.id = a.job_id 
            WHERE p.client_idnumber = '$cid' 
            AND p.status != 'inprogress'
            GROUP BY p.id  
            ";
            
            $data = $this->conn->query($sql);
            if (!$data) {
                throw new Exception("SQL Error: " . $this->conn->error);
            }
            return $data;
        }
        
        
        public function apllicantnotiffc($job_id) {
            $sql = "
                SELECT COUNT(*) AS applicant_count 
                FROM tblapply 
                INNER JOIN tblinfo ON tblapply.talent_id = tblinfo.idnumber 
                WHERE tblapply.job_id = '$job_id' AND tblinfo.status = 'pending'
            ";
            $data2 = $this->conn->query($sql);
            
            if ($data2->num_rows > 0) {
                $row = $data2->fetch_assoc();
                return $row['applicant_count'];
            } else {
                return 0; // No applicants found
            }
        }
        
        public function updatetinfo($idn, $fname, $lname, $gender, $contact, $address, $education, $employmentHistory, $skills, $availability, $hourlyRate, $languages, $result) {
            $sql = "UPDATE tblinfo SET 
                        fname = '$fname', 
                        lname = '$lname', 
                        gender = '$gender', 
                        contact_no = '$contact', 
                        address = '$address', 
                        education = '$education', 
                        employment_history = '$employmentHistory', 
                        skills = '$skills', 
                        availability = '$availability', 
                        hourly_rate = '$hourlyRate', 
                        languages = '$languages', 
                        result = '$result' 
                    WHERE idnumber = '$idn'";
            
            if($this->conn->query($sql)) {
                return "<script>alert('Changes saved successfully!');</script>";
            } else {
                return "<script>alert('Error: " . $this->conn->error . "');</script>";
            }
        }
        public function updatestatushando($pggtid, $pjobid) {
            $sql1 = "
                UPDATE tblinfo 
                SET status = 'hired' 
                WHERE idnumber = '$pggtid';
            ";
            
            $sql2 = "
                UPDATE tblposting 
                SET status = 'inprogress' 
                WHERE id = '$pjobid';
            ";
            
            if ($this->conn->query($sql1)) {
                if ($this->conn->query($sql2)) {
                    return"<script>alert('Hired!');</script>"; 
                } else {
                    return$this->conn->error; 
                }
            } else {
                return$this->conn->error; 
            }
        }
        
        public function selectstatus($ggtid,$jobid){
            $sql = "
            SELECT 
                (SELECT status FROM tblinfo WHERE idnumber = '$ggtid') AS tblinfo_status,
                (SELECT status FROM tblposting WHERE id = '$jobid') AS tblposting_status;
        ";
            $data2 = $this->conn->query($sql);
            return $data2;
        }
        public function displayinprogressjob($cid){
            $sql ="
            SELECT p.*, COUNT(a.job_id) AS applicant_count 
            FROM tblposting p
            LEFT JOIN tblapply a ON p.id = a.job_id 
            WHERE p.client_idnumber = '$cid' 
            AND p.status = 'inprogress'
            GROUP BY p.id  
            ";
            $data = $this->conn->query($sql);
            return $data;
        }
        public function apllicantnotiffcc($job_id) {
            $sql = "
                SELECT COUNT(*) AS applicant_count 
                FROM tblapply 
                INNER JOIN tblinfo ON tblapply.talent_id = tblinfo.idnumber 
                WHERE tblapply.job_id = '$job_id' AND tblinfo.status = 'hired'
            ";
            $data2 = $this->conn->query($sql);
            
            if ($data2->num_rows > 0) {
                $row = $data2->fetch_assoc();
                return $row['applicant_count'];
            } else {
                return 0; // No applicants found
            }
        }
  
}