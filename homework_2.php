<?php

/**
 * @author Deyan
 * @copyright 2012
 */


$arr=range(20,1000,37);

    print_r($arr);


function is_prime($var){
    
    for($i=2;$i<$var;$i=$i+1){
        if($var%$i==0){
            return false;
        }
    }
    return true;
    
}


function find_3_prime(){
    $counter=0;
    global $arr;
    foreach($arr as $value){
        if(is_prime($value)){
            
            $counter++;
        }
        
        if($counter==3){
            echo  "<br />"."Third prime number is ".$value."<br />";
            break;
        }
    }
        
        
        
    }
    
    find_3_prime();

    
        
    function check_exists(){
        global $arr;
        if(in_array(146,$arr)){
            echo "<br />" ."The number 146 exists in the array"."<br />";
        }
         if(in_array(284,$arr)){
            echo  "<br />" ."The number 284 exists in the array"."<br />";
        }
         if(in_array(871,$arr)){
            echo  "<br />" . "The number 871 exists in the array"."<br />";
        }
    }
    
   
    check_exists();
 



?>