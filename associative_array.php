<?php

$students= array('fredy'=>'data science', 
'asha'=>'boss', 'kimweli'=>'data science','kimweli1'=>'data science','kimweli2'=>'data science',
'kimweli3'=>'data science');

echo $students['fredy']; //output is data scince
echo "<br>";

// echo $students['data science']; //output name of them


//to print all of the data we can use the foreach() to dispaly it

foreach($students as $x=>$jina){

    echo 'key=' .$x .',value=' .$jina;
    echo "<br>";
}



?>