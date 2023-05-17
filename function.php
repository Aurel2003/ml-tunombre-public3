<?php

$fileValue = "";
$fileVlaue1 = "Hola";

if($fileValue == ""){
    echo "Field is empty";
}
if($fileVlaue1 == ""){
    echo "Field is empty";
}
/*if(checkEmptyValue($fileValue)){
    echo "Field is empty";
    }*/
/*if(checkEmptyValue($fileVlaue1)){
    echo "Field is empty";
}*/

function checkEmptyValue(){
    $fileValue = "";
    if($fileValue == ""){
        return true;
    }else{
        return false;
    }
}

?>