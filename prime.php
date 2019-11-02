<?php 
function Primzahl( $nummer ) 
{ 

for( 
$zahlen = 2; 
$zahlen*$zahlen <= $nummer; 
$zahlen++ ) 
       
if( !($nummer % $zahlen) ) 
return FALSE; 
return TRUE; 
} 

$anfang = 3; 
$ende = 1000; 

for
(
$zahlen = $anfang; 
$zahlen<$ende; 
$zahlen++
) 
{ 
if
(Primzahl($zahlen) == TRUE) 
{ 
echo "$zahlen\n"; 
} 
} 
?>