<?php
function tovar($value)
{
$con_str= mysqli_connect('localhost', 'root', '', 'market');
$result_q= mysqli_query($con_str, "SELECT opis_tovar FROM `tovari` WHERE name_tovar='$value'");
while ($res= mysqli_fetch_array($result_q)) {
        echo $res['opis_tovar'];
}
 }
?>