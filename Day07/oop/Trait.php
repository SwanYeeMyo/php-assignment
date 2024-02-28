<?php
// trait Message
// {
//     public function msg1()
//     {
//         echo "OOP is fun";
//     }
// }
// class Welcome
// {
//     use Message;
// }

// $welcome = new Welcome();
// $welcome->msg1();
// ===================
//can extent many child classes
trait Message
{
    public function msg1()
    {
        echo "OOP is fun";
    }
}
trait Message1{
    public function msg2()
    {
        echo "OOP reduces code duplication";
    }
}
class Welcome
{
    use Message;
}
class Welcome2 {
    use Message, Message1;
}
$obj = new Welcome();
$obj->msg1();
// ===========
$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();