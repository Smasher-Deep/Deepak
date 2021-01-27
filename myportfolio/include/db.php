<?php

$db = mysqli_connect('localhost','root','','myportfolio') or die("database not connected");

class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="myportfolio";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_form($data){
        $name=$data['name'];
        $email=$data['email'];
        $subject=$data['subject'];
        $message=$data['message'];
        $q="INSERT INTO 'contact_form'(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$subject')";
       $return= $this->mysqli->query($q);
    }
}

?>