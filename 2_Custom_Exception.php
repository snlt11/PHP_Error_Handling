<?php

class myCustomException extends Exception{
    public function __construct(string $message = "", int $code = 0)
    {
        parent::__construct($message, $code);
        $handler = fopen("log.txt", "a");
        $data = "Error Message : " . $message . "\n" . "Error Code : " . $code . "\n" . date("Y-m-d H:i:s",time()) . "\n";
        fwrite($handler, $data);
        fclose($handler);
    }

}
function readingFile($file){
    if(!file_exists($file))
        throw new myCustomException("File does not exist",8888);
}
try{
    readingFile("test.txt");
}catch(Exception $e){
    echo $e->getMessage();
}
