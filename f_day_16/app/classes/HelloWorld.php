<?php
namespace App\classes;
use ArithmeticError;

class HelloWorld
{
    public $message;
    public $firstName;
    public $lastName;
    public $x;
    public $y;

    // public function __construct()
    // {
    //   $this->message = "Hello World";
    // }
    // public function index()
    // {
    //   echo $this->message;
    // }
    // public function __construct($data)
    // {
    //   $this->message = $data;
    // }
    public function __construct($data)
    {
      $this->message = $data;
      $this->x = 10;
      $this->y = 20;
    }
    public function index()
    {
      //echo $this->message;
        // $this->firstName = "Sojib";
        // $this->lastName = "Khan";
        // $this->lastName = true;
        // echo $this->firstName ." ". $this->lastName;
        // echo gettype($this->lastName);

        //          Operators in PHP
        // Arithmetic: +, -, x, /, %, (-)
        // Assignment: =, +=, -, -=, /=, %=, .=
        // Conditional: <, <=, >, >=, ==, !=, ===, !==
        // Logocal: $$, ||
   

        // echo $this->x + $this->y;
        // echo '<br/>';
        // echo $this->x - $this->y;
        // echo '<br/>';
        // echo $this->x * $this->y;
        // echo '<br/>';
        // echo $this->x / $this->y;
        // echo '<br/>';
        // echo $this->x % $this->y;
        // echo '<br/>';    \

        // echo $this->x--;
        // '<br/>'; 
        // echo $this->x--;
        // '<br/>'; 
        // echo -$this->x;
        // '<br/>'; 
        
        // echo $this->x += $this->y;  // Result 30. Here, $this->x(30) = $this->x(10) += $this->y(20);
        // "<br/>";
        // echo $this->x -= $this->y; //10
        // '<br/>';
        // echo $this->x *= $this->y; //200
        // '<br/>';
        // echo $this->x /= $this->y; //10
        // '<br/>';
        // echo $this->x %= $this->y; //10
        // '<br/>';
        // echo $this->x .= $this->y; //1020
        // '<br/>';

        // echo $this->x > $this->y;
        echo $this->x == $this->y; // Checks data
        echo $this->x === $this->y; // Checks data type too

    }

}




?>