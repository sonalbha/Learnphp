<?php 
    $result=62;

    // if($result>=80 && $result<=100){
    //     echo "your grade is A";
        
    // }elseif($result>=65 && $result<=79){
    //     echo "your grade is B";
    // }elseif($result>=45 && $result<=64){
    //     echo "your grade is C";
    // }elseif($result>=33 && $result<=44){
    //     echo "your grade is C";
    // }elseif($result<33){
    //     echo "you are fail";
    // }else{
    //     echo "please valid per(%)";
    // }
    
    if($result>=80 && $result<=100):
        echo "your grade is A";
        
    elseif($result>=65 && $result<=79):
        echo "your grade is B";
    elseif($result>=45 && $result<=64):
        echo "your grade is C";
    elseif($result>=33 && $result<=44):
        echo "your grade is C";
    elseif($result<33):
        echo "you are fail";
    else:
        echo "please valid per(%)";
    endif;
    

?>