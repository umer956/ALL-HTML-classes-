<?php
//simple function :
// function simple(){
// echo "This is a simple function<br>";
// }

// simple();

// function school(){
//     echo "<h1>Aptech School</h1> <br>";

// }
// function simple(){
  
// echo "Name: Umer <br>";
// echo "Age: 24 <br>";
// echo "Class: 14 <br>";
// echo "Contac: 0232345 <br>";
// }

// simple();

//Nested function
// function main(){
// echo "This is main function<br>";
//     function nested(){
//         echo "This is nested function<br>";
//     }
//      // Call the nested function
// }
// nested(); 
// main();
// This will call the nested function

// function endLoop() {
//    return "End of the loop reached.<br>";
// }
// echo endLoop();
//parameterized function
// function add($a,$b) {
//     return $a + $b;
//    }
//    echo add(8,9) . "<br>";
//    echo add(80,19) . "<br>";

function school(){
   echo "<h1>Aptech School</h1> <br>";
}

function userstudent ($id, $name, $age ,$class, $contact ) {
   school();
    return "Name: $name <br> Age: $age <br> Class: $class <br> Contact: $contact <br>";
}
echo userstudent(1, "Umer", 24, 14, "0232345");
echo userstudent(1, "farooq ", 22, 44, "0232345");