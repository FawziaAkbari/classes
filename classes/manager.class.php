<?php
namespace Manager;

class Manager {
   
    private $email;
    private $password;

    public function __construct($email=null, $password=null) {
        $this->email = $email;
        $this->password = $password;
       
    }

    public function login(){

        if($_SESSION['manager_info'] && $_SESSION['authenticated']) {
           return header("location: student.php?wel=welcome");
            }
        }

	public function logout(){
        return header("location: session_destroy.php");
	}

	public function is_logged_in(){
        return header("location: student.php?try=again");
	}

}