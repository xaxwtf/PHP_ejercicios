<?php

$nums;
for ($i=1,$k=0; $k < 10 ;$i++)
{
    if($i%2!=0){
        $nums[$k]=$i;
        $k++;
    }
    
}
echo "con FOREACH <br/>";
foreach($nums as $num){ 
    echo "$num<br/>";
}
echo "con WHILE <br/>";
$v=0;
while($v<10){
    
    echo $nums[$v]."<br/>";
    $v++;
}
?>  