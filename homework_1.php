<html>
<head>
<link rel="stylesheet" type="text/css" href="p_style.css" />
</head>
<body>

<?php
$var=$_GET["number"];

function is_prime($x){
    
    for($i=2;$i<$x;$i=$i+1){
        if($x%$i==0){
            return false;
        }
        
    }
    return true;
}

function check_for_number(){
    global $var;
    
    if(!is_numeric($var)){
        
        echo "<p class=code1>Parameter is not a number</p>";
        exit(0);
        
    }
}


function check_the_range(){
    global $var;
    
    if(!($var>=0 && $var<=19999)){
        echo "<p class=code1>Parameter is not within the range [0,19999]<p>";
        exit(0);
    }
    
    
}


function check_for_prime(){
    global $var;
    if(is_prime($var)){
        echo "<p class=code2>The number $var is prime"."<br />";
    }else{
        echo "<p class=code3>The number $var is not prime</p>"."<br />";
    }
     
}


check_for_number();
check_the_range();
check_for_prime();

?>

</body>
</html>