<?php
if(!isset($_GET['erid'])){
    $erid = 0;
}

else{
    $erid = $_GET['erid'];
}

if ($erid == 1){
echo "You didn't enter a email";
}

elseif ($erid == 2){
echo "You didn't type a message or email";
}
elseif ($erid == 3){
echo "That's not a valid email";
}
