<?php

class Post { 
    private $host = 'den1.mysql3.gear.host';
    private $dbname = 'aizenttdb';
    private $user = 'aizenttdb';
    private $pass = 'secret123#';
    
    // private $host = 'localhost';
    // private $dbname = 'aizenttdb';
    // private $user = 'root';
    // private $pass = '';
    // private $conn;

    public function __construct(){
        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOexception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function GetCompanyInfo() {
        $sql = "SELECT * FROM pages_informations WHERE page_id=3";
        $query = $this->conn->query($sql);
        while ($r = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $r;
        }
        return $data;
    }

    public function GetAbouts() {
        $sql = "SELECT * FROM pages_informations WHERE page_id=1";
        $query = $this->conn->query($sql);
        while ($r = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $r;
        }
        return $data;
    }

    public function GetServices() {
        $sql = "SELECT * FROM pages_informations WHERE page_id=2";
        $query = $this->conn->query($sql);
        while ($r = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $r;
        }
        return $data;
    }

    public function postInterest($input){
		$sql = "INSERT INTO feedback_users(fullname, email_address, subject, messages, created_at) VALUES(:fullname, :email_address, :subject, :messages, :created_at)";
		$q = $this->conn->prepare($sql);
		$q->execute([
			':fullname' => $input['fullname'],
			':email_address' => $input['email_address'],
			':subject' => $input['subject'],
			':messages' => $input['message'],
			':created_at' => date('Y-m-d')
		]);
	}
}
