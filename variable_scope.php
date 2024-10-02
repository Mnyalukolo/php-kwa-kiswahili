<?php
echo 'This is another variable as static, local and global variable <br><br>';
print_r('now start with global variables');

$a= 67;

function add(){
    $b= 56;
    echo 'the nummber local variables as printed is '.$b;

}

add();
echo '<br>';
echo 'the scope is '.$a;

echo '<br>';

echo $b;



?>