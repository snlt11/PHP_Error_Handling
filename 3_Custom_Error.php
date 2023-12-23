<?php
class myCustomErrorClass extends Exception{

}
function myErrorHandler($code, $message , $file, $line){
    echo "Error code: " . $code . "<br>";
    echo "Error message: " . $message. "<br>";
    echo "Error File: " . $file. "<br>";
    echo "Error Line: " . $line. "<br>" . "<hr>";
    throw new myCustomErrorClass($message . "<br>" . "Error Code : " . $code);
}
set_error_handler("myErrorHandler");

try {
    include("testing.php");
}catch(Exception $e){
    echo $e->getMessage();
}











