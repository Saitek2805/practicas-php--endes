<?php
$num=$_POST['num'];
$total=0;
for ($i=1;$i<=$num;$i++){
    $total=$total+$i;
}
echo "El total es $total";
?>