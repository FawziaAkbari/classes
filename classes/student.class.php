<?php
namespace Student;

class Student {
   
    private $name;
    private $age;
    private $gender;
    private $class;

    public function __construct($name, $age, $gender, $class) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->class = $class;
       
    }

    public function getStudentInfo(){
        $student = $this->name  . " is " . $this->age . " years old , gender is " . $this->gender." in " . $this->class. "th.";
        return $student;
    }

  
}