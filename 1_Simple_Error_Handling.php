<?php

function myFileRead($file){
    if(file_exists($file)){
        $handler = fopen($file,'r');
        $size = filesize($file);
        $data = fread($handler,$size);
        echo $data;
    }else{
        throw new Exception("File $file does not exist");
    }
}
try {
    myFileRead("test.txt");
}catch(Exception $e){
    echo $e->getMessage() . "<br>";
    echo $e->getTraceAsString() . "<br>";
    echo $e->getFile();
    echo $e->getLine();
}

