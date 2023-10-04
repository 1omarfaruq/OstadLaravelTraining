<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "My name is {$this->name} and I am {$this->age} years old.";
    }
}

// $person = new Person("John", 30);
// $person->introduce();


class Student extends Person {
    public $mark;

    public function __construct($name, $age, $mark) {
        parent::__construct($name, $age);
        $this->mark = $mark;
    }

    public function introduce() {
        echo "My name is {$this->name}, I am {$this->age} years old, and I scored {$this->mark} marks.";
    }

    public function calculate_grade_percentage() {
        $percentage = ($this->mark / 100) * 100;
        return "{$percentage}%";
    }
}

$student = new Student("Robert", 18, 85);
$student->introduce();
$gradePercentage = $student->calculate_grade_percentage();
echo "\nMy grade percentage is {$gradePercentage}\n";

