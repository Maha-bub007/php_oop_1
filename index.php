<?php
// class collage{
//     public $name,$roll,$class,$email,$phone;
//     public function __construct($name,$roll,$class,$email,$phone) {
//         $this->name = $name;
//         $this->roll = $roll;
//         $this->class = $class;
//         $this->email = $email;
//         $this->phone = $phone;
//     }
//     function show(){
//         echo "Your name is ".$this->name."& roll was ".$this->roll." class is ".$this->class."and email".$this->email ."& phone:".$this->phone; 
//     }   
// }
// $class1 = new collage("mahabub alom",404,"xil","mdmahabub124t@gmail.com",0177238946);
// $class1->show();


// -----------------------------------------------------

class collage{
    public $name, $roll, $class, $email, $phone;

    public function __construct($name="tui sala abul", $roll=0, $class="narsari", $email="chudirbhai", $phone=12345678) {
        $this->name = $name;
        $this->roll = $roll;
        $this->class = $class;
        $this->email = $email;
        $this->phone = $phone;
    }

    function show(){
        echo "Your name is ".$this->name."& roll was ".$this->roll." class is ".$this->class." and email ".$this->email ." & phone: ".$this->phone;
    }
}

// $class1 = new collage("mahabub alom", 404, "xil", "mdmahabub124t@gmail.com", "0177238946");
$class1=new collage();
$class1->show();


?>