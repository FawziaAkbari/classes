<?php

use Manager\Manager;
include 'classes/manager.class.php';

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
      
        
        $manager_info = [
            'email' => $email,
            'password' => $password,
            'account_type' => 'admin'
        ];
       
        
        $_SESSION['manager_info'] = $manager_info;
        $_SESSION['authenticated'] = true;

        $manager = new Manager($_SESSION['manager_info']['email'], $_SESSION['manager_info']['password']);
        $manager->login();
        

    }

    
   
?>

