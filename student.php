<?php

use Manager\Manager;
use Student\Student;
session_start();
include 'classes/student.class.php';
include 'login.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- the html form for add student by manager -->
    <div class="container">
            <!-- the php comment for check the login permission -->
        <?php
            if(isset($_GET['wel'])){
                echo "<h1 class='title'>Welcome dear Manager</h1>";
            }
            if(isset($_SESSION['manager']) && $_SESSION['authenticated'] ){
                $manager->is_logged_in();
            }
        
            if(isset($_POST['submit'])) {
                $manager->logout();
            }     
        ?>
        
       <form action="" method="POST" enctype="multipart/form-data">

            <div class="input-el">
                <label class="lable"  class="lable"for="name">Name</label>
                <input class="input-feild form-element" type="text" name="name" id="name" placeholder="Your Name" required>
            </div>

            <div class="input-el">
                <label class="lable" for="age">Age</label>
                <input class="input-feild form-element" type="text" name="age" id="age" placeholder="Age" required>
            </div>

            <div class="input-el">
                <label class="lable" for="class">Class</label>
                <input class="input-feild form-element" type="class" name="class" id="class" placeholder="Class" required>
            </div>

            <div class="input-el">
                <div>
                    <input type="radio" class="input-radio" id="female" value="Female" name="gender" required>
                    <label class="lable" for="female">Female</label>
                </div>
                <div>
                    <input type="radio" class="input-radio" id="male" value="Male" name="gender" required>
                    <label class="lable" for="male">Male</label>
                </div>
            </div>
            
            <div class="btn-info input-el">
                <div>
                    <button class="info button btn-submit form-element" name="send">Submit</button>
                    <button class="info button btn-submit form-element">Reset</button>
                </div>
            </div>

        </form>
            <!-- the button for logout the manager -->
        <form method="POST">
            <input type="submit" class="btn-logout" value="Log me out" name="submit">
        </form>
            <!-- php class object -->
        <?php

            if(isset($_POST['send'])) {
            $name = $_POST['name'];
                $age = $_POST['age'];
                    $gender = $_POST['gender'];
                        $class = $_POST['class'];
                
            $student_info = [
            'name' => $name,
            'age' => $age,
            'gender' => $gender,
            'class' => $class
            ];

            $student = new Student($student_info['name'], $student_info['age'], $student_info['gender'], $student_info['class']);
            echo "<p>".$student->getStudentInfo()."</p>";
            }
        ?>



    </div>
    <!-- end form -->
   
</body>
</html>
